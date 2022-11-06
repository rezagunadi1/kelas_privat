<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreMateriRequest;
use App\Http\Requests\UpdateMateriRequest;
use Illuminate\Support\Str;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //
        $materi = Materi::where('is_deleted', 0);
        $role = 'null';
        if (empty(Auth::user())) {
            # code...
            $materi = $materi->where('user_id', 1);
        } else {
            # code...
            $role = Auth::user()->role;
            if (Auth::user()->role == 'ADMIN') {
                # code...
                
            } else if (Auth::user()->role == 'SISWA') {
                # code...
                $materi = $materi->where('is_public', 1);
            } else {
                $materi = $materi->where(function ($query) {
                    $query->where('user_id', Auth::user()->role)->orWhere('user_id', 1);
                    # code...
                });
            }
        }
        if (isset($req->search)) {
            # code...
            $materi = $materi->where(function ($query) use ($req) {
                $query->orWhere('title', 'like',"%".$req->search."%")->orWhere('content', 'like',"%".$req->search."%")->orWhere('mapel', 'like',"%".$req->search."%")->orWhere('grade', 'like',"%".$req->search."%");
                # code...
            });
        }
        $materi = $materi->orderBy('id','desc')->get();
        return view('materi.index',[
            'title' => 'Materi SiLas',
            'tags' => 'Materi pembelajaran, materi pelajaran, materi sd, materi smp, materi msa, materi matematika, materi fisika,',
            'materi' => $materi,
            'role' => $role,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materi.create',[
            'title' => 'Create Materi',
            'tags' => 'Materi pembelajaran, materi pelajaran, materi sd, materi smp, materi msa, materi matematika, materi fisika,',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMateriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);\
        // check for existing slugs
        
        
        $autor_id = Auth::user()->id;

        $materi = new Materi();
        $materi->grade = $request->grade;
        $materi->mapel = $request->mapel;
        $materi->title = $request->title;
        $materi->content = $request->input('summary-ckeditor');
        $materi->user_id = $autor_id;
        $materi->resume = $request->resume;
        $materi->is_deleted = 0;
        $materi->tags = $request->tags;
        $materi->slug = preg_replace('/\s+/', '-', $request->title);
        
        preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $request->input('summary-ckeditor'), $data);
        if (!empty($data)) {
            
            $thumbnail=  trim($data[0], '<img src="');
            $materi->thumbnail = $thumbnail;
        } else {
            $materi->thumbnail = '<img src="https://ayo.co.id/backend/assets/images/avatar-default.jpg"';
        }

        $materi->save();
        return redirect()->route('create_materi')->with('info','Materi berhasil di tambahkan');
    }

    public function uploadImage(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('img/materi'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('img/materi/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction(1, '$url', '$msg')</script>";
               
           // @header('Content-type: text/html; charset=utf-8'); 
           // echo $response;
            //{
   
            return response()->json(['uploaded' => '1', 'fileName' => $fileName,"url"=>$url]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show($slug,Request $request)
    {
        $materi = Materi::where('slug', $slug)->where('is_deleted', 0)
        // ->orderBy('id','desc')
        ->first();
        return view('materi.show',[
            'title' => 'Latihan Soal SiLas',
            'materi' => $materi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriRequest  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMateriRequest $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
