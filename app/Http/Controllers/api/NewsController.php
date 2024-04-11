<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\ToolsAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\news;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    //
    public function news(Request $req)
    {
        $user = User::where('remember_token', $req->mobile_token)->first();
        if (!$user) {
            return response()->json(array(
                'error' => true,
                'message' => "Invalid Credential",
                'data' => null,
                'status_code' => 201,
                'signature' => null
            ));
        }
        $take = 10;
        $skip = 0;
        $is_home = 0;
        if ($req->has('take')) {
            $take = $req->take;
        }
        if ($req->has('skip')) {
            $skip = $req->skip;
        }
        if ($req->has('is_home')) {
            $is_home = $req->is_home;
        }
        $data = news::orderBy('id', 'desc')->take($take)->skip($skip)->where('is_home', $is_home)->get();
        $newsId = $data->pluck('id')->toArray();
        $images = Image::whereIn('news_id', $newsId)->get();
        foreach ($data as $value) {
            $imageArray = [];
            foreach ($images as  $image) {
                # code...
                if ($image->news_id == $value->id) {
                    # code...
                    array_push($imageArray, $image);
                }
            }
            $value->images = $imageArray;
            # code...
        }
        return response()->json(array(
            'error' => false,
            'message' => "Berhasil Mengambil Data",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }


    public function createNews(Request $req)
    {

        $user = User::where('remember_token', $req->mobile_token)->first();
        if (!$user) {
            return response()->json(array(
                'error' => true,
                'message' => "Invalid Credential",
                'data' => null,
                'status_code' => 201,
                'signature' => null
            ));
        }
        $image = '';

        Log::info("answer, masuk bos");
        Log::info($req);
        if (isset($req->image)) {
            $imgPath = uploadFile($req->image, 'images/soal');
            if ($imgPath) {
                $image = $imgPath;
            }
        }

        $news = new news();
        // $news = new news();
        $news->user_id = $user->id;
        $news->title = $req->title;
        $news->description = $req->content;
        $news->category = $req->tag;
        $news->created_by = $user->name;
        $news->save();

        $imageDB = new Image();
        $imageDB->news_id = $news->id;
        $imageDB->url = $image;
        $imageDB->save();

        return response()->json(array(
            'error' => false,
            'message' => "Berhasil menyimpan Data",
            'data' => $news,
            'status_code' => 200,
            'signature' => null
        ));
    }
}
// /api/arduino/dht-pulse/{token}?humidity=12&temperature=12&pulse=12