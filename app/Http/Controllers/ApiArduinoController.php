<?php

namespace App\Http\Controllers;

use App\Models\ApiArduino;
use Illuminate\Http\Request;

class ApiArduinoControllers extends Controller
{
    //
    public function dhtPulse($token_id, Request $req){
        // $data = ApiArduino::where('token_id', $token_id)->skip($req->skip)->take($req->take)->get();
        $data = new ApiArduino;
        $data->token_id = $token_id;
        $data->humidity = $req->humidity;
        $data->temperature = $req->temperature;
        $data->pulse = $req->pulse;
        $data->save();
    }
}
// /api/arduino/dht-pulse/{token}?humidity=12&temperature=12&pulse=12