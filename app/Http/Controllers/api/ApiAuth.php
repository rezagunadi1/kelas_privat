<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\ApiArduino;
use App\Models\ToolsAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\VersionModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ApiAuth extends Controller
{
    //
    public function dhtPulseGetDetail($token_id, Request $req)
    {

        $data = ApiArduino::where('token_id', $token_id)->orderBy('id', 'desc')->skip($req->skip)->take($req->take)->get();
        // $data = new ApiArduino;
        // $data->token_id = $token_id;
        // $data->humidity = $req->humidity;
        // $data->temperature = $req->temperature;
        // $data->pulse = $req->pulse;
        // $data->save();

        return response()->json(array(
            'error' => false,
            'message' => "Berhasil Mengambil Data",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    public function dhtPulseGet($user_id, Request $req)
    {

        $data = ToolsAddress::where('user_id', $user_id)->get();
        // $data = new ApiArduino;
        // $data->token_id = $token_id;
        // $data->humidity = $req->humidity;
        // $data->temperature = $req->temperature;
        // $data->pulse = $req->pulse;
        // $data->save();

        return response()->json(array(
            'error' => false,
            'message' => "Berhasil Mengambil Data",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    public function regisToken($user_id, Request $req)
    {

        $data = ToolsAddress::where('user_id', $user_id)->get();
        // $data = new ApiArduino;
        // $data->token_id = $token_id;
        // $data->humidity = $req->humidity;
        // $data->temperature = $req->temperature;
        // $data->pulse = $req->pulse;
        // $data->save();

        return response()->json(array(
            'error' => false,
            'message' => "Berhasil Mengambil Data",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    protected function apiUpdate(Request $req)
    {
        $data = User::where('remember_token', $req->remember_token)->first();

        $data->name = $req['name'];
        $data->email = $req['email'];
        $data->hp = $req['phone'];
        $data->save();

        return response()->json(array(
            'error' => false,
            'message' => "Ubah data akun Berhasil",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    protected function apiChangePassword(Request $req)
    {
        $data = User::where('remember_token', $req->mobile_token)->first();
        if ($data->passwords == $req->password) {

            $data->password = Hash::make($req->new_password);
            $data->passwords = $req->new_password;
            $data->save();
            return response()->json(array(
                'error' => false,
                'message' => "Ubah kata sandi Berhasil",
                'data' => $data,
                'status_code' => 200,
                'signature' => null
            ));
        } else {
            return response()->json(array(
                'error' => true,
                'message' => "Kata sandi lama anda salah",
                'data' => $data,
                'status_code' => 201,
                'signature' => null
            ));
        }
    }
    protected function apiRegist(Request $req)
    {
        $data = User::where('email','LIKE', $req->email)->first();
        if ($data) {
            return response()->json(array(
                'error' => true,
                'message' => "Email sudah di gunakan",
                'data' => $data,
                'status_code' => 201,
                'signature' => null
            ));
        }
        $random = Helpers::generateRandomString(10);
        $cekUser = User::where('remember_token', $random)->first();
        if ($cekUser) {
            # code...
            for ($i = 0; $i < 9999999; $i++) {
                # code...

                $random = Helpers::generateRandomString(10);
                $cekLoop = User::where('remember_token', $random)->first();
                if (!$cekLoop) {
                    # code...
                    break;
                }
            }
        }
        $data = new User;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->hp = $req->phone;
        $data->password = Hash::make($req->password);
        $data->passwords = $req->password;
        $data->remember_token = $random;
        $data->save();

        return response()->json(array(
            'error' => false,
            'message' => "Registrasi Berhasil",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    protected function apiLogin(Request $req)
    {
        $data = User::where('email', 'LIKE',$req->email)->where('passwords', $req->password)->first();
        if ($data) {
            if ($data->remember_token==null) {
                # code...
                $random = Helpers::generateRandomString(10);
                $cekUser = User::where('remember_token', $random)->first();
                if ($cekUser) {
                    # code...
                    for ($i = 0; $i < 9999999; $i++) {
                        # code...
        
                        $random = Helpers::generateRandomString(10);
                        $cekLoop = User::where('remember_token', $random)->first();
                        if (!$cekLoop) {
                            # code...
                            break;
                        }
                    }
                }
        
                $data->remember_token = $random;
                $data->save();
            }
            return response()->json(array(
                'error' => false,
                'message' => "Login Berhasil! Selamat datang di KELAS PRIVAT",
                'data' => $data,
                'status_code' => 200,
                'signature' => null
            ));
        } else {
            return response()->json(array(
                'error' => true,
                'message' => "Email atau password salah",
                'data' => null,
                'status_code' => 200,
                'signature' => null
            ));
        }

        return response()->json(array(
            'error' => false,
            'message' => "Login Berhasil",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    protected function mobileVersion(Request $req)
    {
        $data = VersionModel::orderBy('id', 'desc')->first();
        if ($data) {
            return response()->json(array(
                'error' => false,
                'message' => "Version",
                'data' => $data,
                'status_code' => 200,
                'signature' => null
            ));
        } else {
            return response()->json(array(
                'error' => true,
                'message' => "Email atau password salah",
                'data' => null,
                'status_code' => 200,
                'signature' => null
            ));
        }
    }
    protected function profile(Request $req)
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
        return response()->json(array(
            'error' => false,
            'message' => "Version",
            'data' => $user,
            'status_code' => 200,
            'signature' => null
        ));
    }


    public function changeProfileImage(Request $req)
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
        //         id
        // question
        // answer_a
        // answer_b
        // answer_c
        // answer_d
        // answer_e
        // the_key
        // question_image
        // a_image
        // b_image
        // c_image
        // d_image
        // e_image

        Log::info("answer, masuk bos");
        Log::info($req);
        if (isset($req->image)) {
            $imgPath = uploadFile($req->image, 'images/profile');
            if ($imgPath) {
                $image = $imgPath;
                $user->image=$image;
            }
        }

        $user->save();


        return response()->json(array(
            'error' => false,
            'message' => "Berhasil menyimpan Data",
            'data' => $user,
            'status_code' => 200,
            'signature' => null
        ));
    }
}
// /api/arduino/dht-pulse/{token}?humidity=12&temperature=12&pulse=12