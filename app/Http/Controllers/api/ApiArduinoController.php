<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\ApiArduino;
use App\Models\ToolsAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class ApiArduinoControllers extends Controller
{
    //
    public function dhtPulse($token_id, Request $req)
    {
        // $data = ApiArduino::where('token_id', $token_id)->skip($req->skip)->take($req->take)->get();
        $data = new ApiArduino;
        $data->token_id = $token_id;
        $data->humidity = $req->humidity;
        $data->temperature = $req->temperature;
        $data->pulse = $req->pulse;
        $data->save();
    }
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

    public function regisDevice($token_id, Request $req)
    {
        try {
            //code...
            $random = Helpers::generateRandomString(10);
            $cekUser = ToolsAddress::where('token', $random)->first();
            if ($cekUser) {
                # code...
                for ($i = 0; $i < 9999999; $i++) {
                    # code...

                    $random = Helpers::generateRandomString(10);
                    $cekLoop = ToolsAddress::where('token', $random)->first();
                    if (!$cekLoop) {
                        # code...
                        break;
                    }
                }
            }
            $user = User::where('remember_token', $token_id)->first();
            $data = new ToolsAddress();
            $data->user_id = $req->user_id;
            $data->token = $random;
            $data->name = $req->name;
            $data->user_name = $req->user_name;
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
            $data = ToolsAddress::where('token', $token_id)->first();
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