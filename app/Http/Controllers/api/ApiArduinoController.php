<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\ApiArduino;
use App\Models\HelpRequest;
use App\Models\ToolsAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class ApiArduinoController extends Controller
{
    //
    public function dhtPulse($token_id, Request $req)
    {
        // $data = ApiArduino::where('token_id', $token_id)->skip($req->skip)->take($req->take)->get();
        $data = new ApiArduino;
        $data->token_id = $token_id;
        $data->port0 = $req->port0;
        $data->port1 = $req->port1;
        $data->port2 = $req->port2;
        $data->port3 = $req->port3;
        $data->port4 = $req->port4;
        $data->port5 = $req->port5;
        $data->port6 = $req->port6;
        $data->save();
    }
    public function dhtPulseGetDetail($token_id, Request $req)
    {
        $limit=$req->has('take')?$req->take:10;
        $skip=$req->has('skip')?$req->skip:0;

        $data = ApiArduino::where('token_id', $token_id)->orderBy('id', 'desc')->skip($skip)->take($limit)->get();
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
    public function dhtPulseGetDetailAndRemove($token_id, Request $req)
    {
        $limit=$req->has('take')?$req->take:10;
        $skip=$req->has('skip')?$req->skip:0;

        $data = ApiArduino::where('token_id', $token_id)->orderBy('id', 'desc')->first();
        $sendData =
        array("word" => $data->port0, "location" => $data->port0);
        $data->delete();
        // $data = new ApiArduino;
        // $data->token_id = $token_id;
        // $data->humidity = $req->humidity;
        // $data->temperature = $req->temperature;
        // $data->pulse = $req->pulse;
        // $data->save();

        return response()->json(array(
            'word' => $data->port0,
            'location' => $data->port0,
            'status' => 200,
          
        ));
    }

    public function dhtPulseGet($token_id, Request $req)
    {
        $user = User::where('remember_token', $token_id)->first();
        if (!$user) {
            return response()->json(array(
                'error' => true,
                'message' => "User tidak di temukan",
                'data' => null,
                'status_code' => 200,
                'signature' => null
            ));
        }
        $data = ToolsAddress::where('user_id', $user->id)->where('is_deleted', 0)->get();

        return response()->json(array(
            'error' => false,
            'message' => "Berhasil Mengambil Data",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }
    public function helpRequest(Request $req)
    {
        $user = User::where('remember_token', $req->token)->first();
        $user_id = 0;
        if (!$user) {

            $user_id = 0;
        } else {

            $user_id = $user->id;
        }
        // if (!$user) {
        //     return response()->json(array(
        //         'error' => true,
        //         'message' => "User tidak di temukan",
        //         'data' => null,
        //         'status_code' => 200,
        //         'signature' => null
        //     ));
        // }
        $data = new HelpRequest();
        $data->user_id = $user_id;
        $data->name = $req->name;
        $data->phone = $req->phone;
        $data->email = $req->email;
        $data->message = $req->message;
        $data->save();

        return response()->json(array(
            'error' => false,
            'message' => "Berhasil menyimpan Data",
            'data' => $data,
            'status_code' => 200,
            'signature' => null
        ));
    }

    public function regisDevice($token_id, Request $req)
    {
        try {
            //code...
            // $random = Helpers::generateRandomString(10);
            // $cekUser = ToolsAddress::where('token', $random)->first();
            // if ($cekUser) {
            //     # code...
            //     for ($i = 0; $i < 9999999; $i++) {
            //         # code...

            //         $random = Helpers::generateRandomString(10);
            //         $cekLoop = ToolsAddress::where('token', $random)->first();
            //         if (!$cekLoop) {
            //             # code...
            //             break;
            //         }
            //     }
            // }
            $user = User::where('remember_token', $token_id)->first();
            $data = new ToolsAddress();
            $data->user_id = $user->id;
            $data->token = $req->address;
            $data->name = $req->name;
            $data->user_name = $user->name;
            $data->save();
            // $data = ToolsAddress::where('user_id',$user_id)->get();
            // $data = new ApiArduino;
            // $data->token_id = $token_id;
            // $data->humidity = $req->humidity;
            // $data->temperature = $req->temperature;
            // $data->pulse = $req->pulse;
            // $data->save();

            return response()->json(array(
                'error' => false,
                'message' => "Berhasil Menyimpan Data",
                'data' => $data,
                'status_code' => 200,
                'signature' => null
            ));
        } catch (\Throwable $th) {
            return response()->json(array(
                'error' => true,
                'message' => "Gagal Menyimpan Data",
                'data' => $th,
                'status_code' => 201,
                'signature' => null
            ));
            //throw $th;
        }
    }

    public function deleteDevice($token_id, Request $req)
    {
        try {
            //code...
            $user = User::where('remember_token', $token_id)->first();
            $data = ToolsAddress::where('user_id', $user->id)->where('token', $req->token)->first();
            $data->is_deleted = 1;
            $data->save();
            // $data = ToolsAddress::where('user_id',$user_id)->get();
            // $data = new ApiArduino;
            // $data->token_id = $token_id;
            // $data->humidity = $req->humidity;
            // $data->temperature = $req->temperature;
            // $data->pulse = $req->pulse;
            // $data->save();

            return response()->json(array(
                'error' => false,
                'message' => "Berhasil Menghapus Data",
                'data' => $data,
                'status_code' => 200,
                'signature' => null
            ));
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(array(
                'error' => true,
                'message' => "Gagal Menghapus Data",
                'data' => $th,
                'status_code' => 201,
                'signature' => null
            ));
        }
    }

    protected function apiRegist(Request $req)
    {
        $regis = new User;
        $regis->name = $req['name'];
        $regis->email = $req['email'];
        $regis->password = Hash::make($req['password']);
        $regis->passwords = $req['password'];
        $regis->save();

        return response()->json(array(
            'error' => false,
            'message' => "Registrasi Berhasil",
            'req' => $regis,
            'status_code' => 200,
            'signature' => null
        ));
    }

    protected function apiLogin(Request $req)
    {
        $regis = User::where('email', $req->email)->where('passwords', $req->password)->first();
        if ($regis) {
            return response()->json(array(
                'error' => false,
                'message' => "Login Berhasil",
                'data' => $regis,
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
            'message' => "Registrasi Berhasil",
            'data' => $regis,
            'status_code' => 200,
            'signature' => null
        ));
    }
}
// /api/arduino/dht-pulse/{token}?humidity=12&temperature=12&pulse=12