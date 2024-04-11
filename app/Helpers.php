<?php

use Illuminate\Support\Facades\Log;

function getMiddleValue($firstVal, $lastVal, $string)
{

	$data = explode($firstVal, $string);
	$data = end($data);
	$data = explode($lastVal, $data);
	return $data[0];
}
// function getEligibleVenue($user_id, $venue_id, $roles)
// {
// 	//	/venue_eligible/{user_id}/{venue_id}
// 	$url = env('URL_VENUE_MICRO') . 'venue_eligible/' . $user_id . '/' . $venue_id;
// 	$dataArray = array();
// 	$dataArray['user_id'] = $user_id;
// 	$dataArray['venue_id'] = $venue_id;
// 	$resp = curl_micro_service($url, $dataArray, "GET");;
// 	$resp = json_decode($resp, true);

// 	if ($resp['data'] == null) {

// 		return false;
// 	} else {

// 		if (in_array($resp['data']['role_id'], $roles)) {

// 			return true;
// 		} else {

// 			return false;
// 		}
// 	}
// }


function dayIndonesia($x)
{
	$day = array(
		"Monday" => "Senin",
		"Tuesday" => "Selasa",
		"Wednesday" => "Rabu",
		"Thursday" => "Kamis",
		"Friday" => "Jumat",
		"Saturday" => "Sabtu",
		"Sunday" => "Minggu",
	);

	return $day[$x];
}
function convertTo24($wording)
{
	if ($wording == "00:00:00") {
		return "24:00:00";
	} else if ($wording == "00:00") {
		return "24:00:00";
	} else {
		return $wording;
	}
}

function convertFrom24($wording)
{
	if ($wording == "24:00:00") {
		return "00:00:00";
	} else if ($wording == "24:00") {
		return "00:00:00";
	} else {
		return $wording;
	}
}

// function addUser($user)
// {
// 	$logo = Ayo\Mobile\UserMeta::where('user_id', $user->id)
// 		->where('meta_key', 'avatar')->first();
// 	if (!$logo) {
// 		$logo = \URL::To('assets/img/user-default.png');
// 	} else if ($logo->meta_value_text != "" && $logo->meta_value_text != null) {
// 		$logo = \URL::To($logo->meta_value_text);
// 	} else {
// 		$logo = \URL::To('assets/img/user-default.png');
// 	}
// 	$url = "https://api.qiscus.com/api/v2.1/rest/login_or_register";
// 	$user_key = $user->id . "_" . $user->created_at;
// 	$user_name = $user->first_name . " " . $user->last_name;

// 	$url = "https://api.qiscus.com/api/v2.1/rest/login_or_register";
// 	try {
// 		$user_key = $user->id . "_" . $user->created_at;
// 		$user_name = $user->first_name . " " . $user->last_name;
// 		$response = get_http_post_qiscus($url, '{
// 					"user_id": "' . env('APP_ENV', 'local') . '_' . $user->id . '",
// 					"password": "' . $user_key . '",
// 					"username": "' . $user_name . '",
// 					"avatar_url": "' . $logo . '"
// 				}');
// 		$response = json_decode($response, true);


// 		$user_id = $response['results']['user']['user_id'];
// 	} catch (\Exception $e) {
// 		addFailedQiscus($url, 'ADDUSER', '{
// 				"user_id": "' . env('APP_ENV', 'local') . '_' . $user->id . '",
// 				"password": "' . $user_key . '",
// 				"username": "' . $user_name . '",
// 				"avatar_url": "' . $logo . '"
// 			}');
// 	}
// }

// function addUserId($user_id)
// {
// 	$user = Ayo\Mobile\User::where("id", $user_id)->first();
// 	$logo = Ayo\Mobile\UserMeta::where('user_id', $user_id)
// 		->where('meta_key', 'avatar')->first();
// 	if (!$logo) {
// 		$logo = \URL::To('assets/img/user-default.png');
// 	} else if ($logo->meta_value_text != "" && $logo->meta_value_text != null) {
// 		$logo = \URL::To($logo->meta_value_text);
// 	} else {
// 		$logo = \URL::To('assets/img/user-default.png');
// 	}
// 	$url = "https://api.qiscus.com/api/v2.1/rest/login_or_register";

// 	try {
// 		$user_key = $user->id . "_" . $user->created_at;
// 		$user_name = $user->first_name . " " . $user->last_name;
// 		$response = get_http_post_qiscus($url, '{
// 					"user_id": "' . env('APP_ENV', 'local') . '_' . $user->id . '",
// 					"password": "' . $user_key . '",
// 					"username": "' . $user_name . '",
// 					"avatar_url": "' . $logo . '"
// 				}');
// 		$response = json_decode($response, true);

// 		$user_id = $response['results']['user']['user_id'];
// 	} catch (\Exception $e) {
// 		addFailedQiscus($url, 'ADDUSER', '{
// 			"user_id": "' . env('APP_ENV', 'local') . '_' . $user->id . '",
// 			"password": "' . $user_key . '",
// 			"username": "' . $user_name . '",
// 			"avatar_url": "' . $logo . '"
// 		}');
// 	}
// }

// function createChatRoomPersonal($user_id_1, $user_id_2, $expired_date)
// {

// 	$chat =  Ayo\Chat\Chat::where("user_id", $user_id_1)->where("ref_id", $user_id_2)->first();
// 	if (!$chat) {
// 		$chat = new Ayo\Chat\Chat;
// 	}

// 	$chat2 =  Ayo\Chat\Chat::where("user_id", $user_id_2)->where("ref_id", $user_id_1)->first();
// 	if (!$chat2) {
// 		$chat2 = new Ayo\Chat\Chat;
// 	}

// 	try {
// 		$chat->user_id = $user_id_1;
// 		$chat->ref_id = $user_id_2;
// 		$chat->type = "personal";
// 		$chat->status = "active";
// 		$chat->chat_token = randomString(50);
// 		$chat->expired_at = $expired_date;
// 		$chat->save();

// 		addUserId($user_id_2);

// 		$chat2 = new Ayo\Chat\Chat;
// 		$chat2->user_id = $user_id_2;
// 		$chat2->ref_id = $user_id_1;
// 		$chat2->type = "personal";
// 		$chat2->status = "active";
// 		$chat2->chat_token = randomString(50);
// 		$chat2->expired_at = $expired_date;
// 		$chat2->save();

// 		\DB::beginTransaction();
// 		$url = "https://api.qiscus.com/api/v2.1/rest/get_or_create_room_with_target";
// 		$response = get_http_post_qiscus($url, '{
// 				"user_ids":  ["' . env('APP_ENV', 'local') . '_' . $chat->user_id . '", "' . env('APP_ENV', 'local') . '_' . $chat2->user_id . '"],
// 				"room_options": "{\"expired_date\":\"' . $expired_date . '\"}"
// 			  }');

// 		if ($response == false) {
// 			\DB::rollback();
// 			return 0;
// 		}
// 		$response = json_decode($response, true);

// 		$room_id = $response['results']['room']['room_id'];
// 		$chat->room_id = $room_id;
// 		$chat2->room_id = $room_id;
// 		$chat->save();
// 		$chat2->save();
// 		\DB::commit();
// 		return $room_id;
// 	} catch (\Exception $e) {
// 		\DB::rollback();
// 		//  addFailedQiscus("https://api.qiscus.com/api/v2.1/rest/get_or_create_room_with_target",'ROOMPERSONAL','{"user_ids":  ["'.env('APP_ENV','local').'_'.$chat2->user_id.'", "'.env('APP_ENV','local').'_'.$chat->user_id.'"],"room_options": "{\"expired_date\":\"'.$expired_date.'\"}"}');
// 		return 0;
// 		//return $e->getMessage().$e->getLine();
// 	}
// }

// function createChatRoomGroup($participants, $table, $ref_id, $expired_date, $logo, $creator, $room_name, $type)
// {
// 	try {
// 		$chat = new Ayo\Chat\Chat;
// 		$chat->user_id = 0;
// 		$chat->ref_id = $table . "_" . $ref_id;
// 		$chat->type = "group";
// 		$chat->status = "active";
// 		$chat->chat_token = randomString(50);
// 		$chat->expired_at = $expired_date;
// 		$chat->save();
// 		\DB::beginTransaction();

// 		$url = "https://api.qiscus.com/api/v2.1/rest/create_room";
// 		$part = '';
// 		foreach ($participants as $row) {
// 			$part = $part . '"' . env('APP_ENV', 'local') . '_' . $row . '",';
// 		}
// 		$part = substr($part, 0, -1);

// 		$response = get_http_post_qiscus($url, '{
  
// 				"participants":  [' . $part . '],
// 				"room_name": "' . $room_name . '",
// 				"creator": "' . env('APP_ENV', 'local') . '_' . $creator . '",
// 				"room_avatar_url": "' . \URL::To($logo) . '",
// 				"room_options": "{\"expired_date\":\"' . $expired_date . '\"}"
// 			  }');

// 		if ($response == false) throw new \Exception("ERROR");

// 		$response = json_decode($response, true);

// 		$room_id = $response['results']['room']['room_id'];
// 		$chat->room_id = $room_id;
// 		$chat->save();

// 		foreach ($participants as $row) {
// 			$parChat =  Ayo\Chat\Chat::where("user_id", $row)->where("ref_id", "user_table_" . $table . "_" . $ref_id)->first();
// 			if (!$parChat) {
// 				$parChat = new Ayo\Chat\Chat;
// 			}

// 			$parChat->user_id = $row;
// 			$parChat->ref_id = "user_table_" . $table . "_" . $ref_id;
// 			$parChat->type = "group";
// 			$parChat->status = "active";
// 			$parChat->chat_token = randomString(50);
// 			$parChat->expired_at = $expired_date;
// 			$parChat->room_id = $room_id;
// 			$parChat->save();
// 		}
// 		\DB::commit();
// 		return $chat;
// 	} catch (\Exception $e) {
// 		\DB::rollback();
// 		addFailedQiscus($url, $type . "_" . $ref_id, '{
// 			"participants":  [' . $part . '],
// 			"room_name": "' . $room_name . '",
// 			"creator": "' . env('APP_ENV', 'local') . '_' . $creator . '",
// 			"room_avatar_url": "' . \URL::To($logo) . '",
			
// 			"room_options": "{\"expired_date\":\"' . $expired_date . '\"}"
// 		}');
// 		return null;
// 	}
// }

// function addChatRoomGroupParticipant($room_id, $participants)
// {
// 	$url = "https://api.qiscus.com/api/v2.1/rest/add_room_participants";
// 	DB::beginTransaction();

// 	try {
// 		$part = '';
// 		foreach ($participants as $row) {
// 			$part = $part . '"' . env('APP_ENV', 'local') . '_' . $row . '",';
// 		}
// 		$part = substr($part, 0, -1);
// 		Log::info($part);
// 		Log::info('{
// 			"user_ids":  [' . $part . '],
// 			"room_id": "' . $room_id . '"
// 		}');
// 		$response = get_http_post_qiscus($url, '{
// 			"user_ids":  [' . $part . '],
// 			"room_id": "' . $room_id . '"
// 		}');
// 		if ($response == false) throw new \Exception("ERROR");
// 		$response = json_decode($response, true);
// 		$chat =  Ayo\Chat\Chat::where("user_id", "0")->where("room_id", $room_id)->first();

// 		if (isset($response['results'])) {
// 			foreach ($participants as $row) {
// 				$parChat =  Ayo\Chat\Chat::where("user_id", $row)->where("ref_id", "user_table_" . $chat->ref_id)->first();
// 				if (!$parChat) {
// 					$parChat = new Ayo\Chat\Chat;
// 				}

// 				$parChat->user_id = $row;
// 				$parChat->ref_id = "user_table_" . $chat->ref_id;
// 				$parChat->type = "group";
// 				$parChat->status = "active";
// 				$parChat->chat_token = randomString(50);
// 				$parChat->expired_at = $chat->expired_at;
// 				$parChat->room_id = $room_id;
// 				$parChat->save();
// 			}

// 			DB::commit();
// 			return 1;
// 		} else {
// 			\DB::rollback();
// 			return null;
// 		}
// 	} catch (\Exception $e) {
// 		\DB::rollback();
// 		addFailedQiscus($url, 'ADDROOMGROUPPARTICIPANT', '{
// 			"user_ids":  [' . $part . '],
// 			"room_id": "' . $room_id . '"
// 		}');
// 		Log::error("ADA ERROR" . $e->getMessage() . $e->getLine());
// 		return null;
// 	}
// }

// function removeChatRoomGroupParticipant($room_id, $participants)
// {
// 	$url = "https://api.qiscus.com/api/v2.1/rest/remove_room_participants";
// 	try {
// 	} catch (\Exception $e) {
// 		\DB::rollback();
// 		return null;
// 	}

// 	$part = '';
// 	foreach ($participants as $row) {
// 		if ($row != "") $part = $part . '"' . env('APP_ENV', 'local') . '_' . $row . '",';
// 	}
// 	$part = substr($part, 0, -1);

// 	$response = get_http_post_qiscus($url, '{
// 		"user_ids":  [' . $part . '],
// 		"room_id": "' . $room_id . '"
// 	}');

// 	if ($response == false) throw new \Exception("ERROR");
// 	$response = json_decode($response, true);

// 	if (isset($response['results'])) {
// 		foreach ($participants as $row) {
// 			$parChat =  Ayo\Chat\Chat::where("user_id", $row)->where("room_id", $room_id)->first();

// 			if ($parChat) {
// 				$parChat->delete();
// 			}
// 		}
// 		return 1;
// 	} else {
// 		addFailedQiscus($url, 'REMOVEROOMGROUPPARTICIPANT', '{
// 			"user_ids":  [' . $part . '],
// 			"room_id": "' . $room_id . '"
// 		}');
// 		return null;
// 	}
// }


// function updateChatRoom($room_id, $logo, $room_name)
// {
// 	$url = "https://api.qiscus.com/api/v2.1/rest/update_room";

// 	$response = get_http_post_qiscus($url, '{
// 		"room_id": "' . $room_id . '",
// 		"room_name": "' . $room_name . '",
// 		"room_avatar_url": "' . \URL::To($logo) . '"
// 	}');

// 	$response = json_decode($response, true);
// }

// function get_http_post_qiscus($path, $data)
// {
// 	//return false;

// 	//$data = array("id" => "$id", "symbol" => "$symbol", "companyName" => "$companyName");
// 	$json = json_encode($data);
// 	//egage
// 	$ch = curl_init();
// 	curl_setopt($ch, CURLOPT_URL, $path);
// 	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_TIMEOUT, 20);

// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// 	curl_setopt($ch, CURLOPT_POST, 1);
// 	curl_setopt(
// 		$ch,
// 		CURLOPT_POSTFIELDS,
// 		$data
// 	);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 		"Content-Type: application/json",
// 		"QISCUS_SDK_SECRET: e8f4cc1f23902561463f4d68a167ae2b",
// 		"QISCUS-SDK-APP-ID: ayoindone-t2zbyvpv7hp"
// 	));

// 	//    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	curl_close($ch);
// 	if ($err) {
// 		Log::error('curl error: ' . $err);
// 		return false;
// 	} else {

// 		return $retValue;
// 	}
// }

// function get_http_post_firebase_venue_owner($path, $data)
// {
// 	$json = json_encode($data);

// 	$ch = curl_init();
// 	curl_setopt($ch, CURLOPT_URL, $path);
// 	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_TIMEOUT, 500);

// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// 	curl_setopt($ch, CURLOPT_POST, 1);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 		"Content-Type: application/json",
// 		"Authorization: key=AAAAyqCSZmU:APA91bFAI1zBClv25GAVsGzL9WEykWTR9Ni9Ker3oI4NUDahcxe5hoyXtJ8FAmZNhLBHIQ_eUTfDutFB28FVftgtRGwIvSF591lgMiIXYQW5cr9s5xuIOW49tIm_7r2pPehjATviNZzY"
// 	));

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	curl_close($ch);
// 	if ($err) {
// 		Log::error('curl error: ' . $err);
// 		return $err;
// 	} else {

// 		return $retValue;
// 	}
// }



// function get_http_post_firebase($path, $data)
// {
// 	$json = json_encode($data);

// 	$ch = curl_init();
// 	curl_setopt($ch, CURLOPT_URL, $path);
// 	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_TIMEOUT, 500);

// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// 	curl_setopt($ch, CURLOPT_POST, 1);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 		"Content-Type: application/json",
// 		"Authorization: key=AAAA4XoB7no:APA91bGEVw6d6od9Jorh6ShTOfR8wMgYvl5GPdL3FlDqHT83H2W8OZr3JAqTIDOjBNCV04KOqyBeSTaGbZiqdZ3eO-Zpb1zOloU9wC8nruEl5FZER-BKaqcVJkFJOPfrAXsGyoteywWn"
// 	));

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	curl_close($ch);
// 	if ($err) {
// 		Log::error('curl error: ' . $err);
// 		return $err;
// 	} else {

// 		return $retValue;
// 	}
// }

function check_signature($data, $mobile_token, $signature)
{
	$ayo_signature = hash("sha512", (json_encode(ksort($data)) . $mobile_token));
	if ($signature == $ayo_signature) {
		return 1;
	} else {
		// return 0;
		return 1;
	}
}

// // // function uploadFile($file, $path)
// // // {
// // // 	// try{
// // // 	// 	Log::info('masuk upload file');
// // // 	// 		$destinationPath = $path; // upload path
// // // 	// 		$xxx = time().rand(11111,99999);
// // // 	// 		//$extension = $file->getClientOriginalExtension(); 
// // // 	// 		$extension = $file->getClientOriginalName(); 
// // // 	// 		$fileName = $xxx.'.'.$extension; 
// // // 	// 		$file->move($destinationPath, $fileName);
// // // 	// 		$file2 = $file;
// // // 	// 		try{

// // // 	// 		}catch(\Exception $e2){
// // // 	// 			$array = explode('.', $extension);
// // // 	// 			$data_ext = end($array);
// // // 	// 			if(strtoupper($data_ext) == "JPG" || strtoupper($data_ext) == "JPEG" || strtoupper($data_ext) == "PNG" ){
// // // 	// 				$extension2 = implode(".",($array));
// // // 	// 				// $extension2 = implode(".",array_pop($array));
// // // 	// 				$fileName2 = $xxx.'.'.$extension2.'_default.'.$data_ext; 
// // // 	// 				$file2->move($destinationPath, $fileName2);
// // // 	// 			}
// // // 	// 		}
			
// // // 	// 		return $destinationPath.'/'.$fileName;
// // // 	// 	}catch(\Exception $e){
// // // 	// 		echo "ERROR UPLOAD DATA! ".$e->getMessage();
// // // 	// 		Log::info($e->getMessage()." ".$e->getLine(). "in helpers");
			
// // // 	// 		die();
// // // 	// 	}



// // // 	try {
// // // 		$file2 = clone $file;
// // // 		$destinationPath = $path; // upload path
// // // 		$xxx = time() . rand(11111, 99999);

// // // 		//$extension = $file->getClientOriginalExtension(); 
// // // 		$extension = $file->getClientOriginalName();
// // // 		$fileName = $xxx . '.' . $extension;
// // // 		$file->move($destinationPath, $fileName);
// // // 		//$file2 = $file;

// // // 		//$extension = $file2->getClientOriginalName(); 
// // // 		//$fileName2 = $xxx.'.'.$extension2."default"; 
// // // 		//$file2->move($destinationPath, $fileName2);
// // // 		//                $file2 = clone $file;  
// // // 		//		try{
// // // 		$array = explode('.', $extension);
// // // 		$data_ext = end($array);
// // // 		array_pop($array);

// // // 		if (strtoupper($data_ext) == "JPG" || strtoupper($data_ext) == "JPEG" || strtoupper($data_ext) == "PNG") {
// // // 			$extension2 = implode(".", $array);
// // // 			$fileName2 = $xxx . '.' . $extension2 . '_default.' . $data_ext;
// // // 			//	copy($destinationPath."/".$fileName,$destinationPath."/".$fileName2);        

// // // 			$img = \Image::make($destinationPath . "/" . $fileName)->resize(128, 128);
// // // 			$img->save($destinationPath . "/" . $fileName2, 100);
// // // 		}

// // // 		return $destinationPath . '/' . $fileName;
// // // 	} catch (\Exception $e) {
// // // 		echo "" . $e->getMessage();
// // // 		Log::error($e->getMessage() . " " . $e->getLine() . "in helpers");

// // // 		die();
// // // 	}
// // // }

function uploadFile($file, $path)
{
	try {
		$destinationPath = $path; // upload path

		//$extension = $file->getClientOriginalExtension(); 
		$extension = $file->getClientOriginalName();
		$fileName = time() . rand(11111, 99999) . '.' . $extension;
		$file->move($destinationPath, $fileName);
		return $destinationPath . '/' . $fileName;
	} catch (\Exception $e) {
		echo "ERROR UPLOAD DATA! " . $e->getMessage();
		die();
	}
}

function getThumbnailImage($text)
{
	if (trim($text) == "") {
		return "";
	}

	try {
		$text_explode = explode(".", $text);
		$ext = end($text_explode);
		array_pop($text_explode);
		$text_explode[count($text_explode) - 1] = end($text_explode) . "_default";

		array_push($text_explode, $ext);

		return implode(".", $text_explode);
	} catch (\Exception $e) {
		Log::error($e->getMessage() . " on line " . $e->getLine());
		return "";
	}
}

function bulan_indo($bulan)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	return $bulan;
}

function bulan_indonesia($x)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);

	return $bulan[$x];
}
function angka_pembulatan($angka)
{
	// $digit = 2;
	// $minimal = 100;
	// if($angka%$minimal ==0)return $angka;
	// $digitvalue=substr($angka,-($digit));  $bulat=0;
	// $nolnol="";
	// for($i=1;$i<=$digit;$i++)
	// {
	// $nolnol.="0";
	// }
	// if($digitvalue<$minimal && $digit!=$nolnol)
	// {  $x1=$minimal-$digitvalue;
	// $bulat=$angka+$x1;
	// }else{
	// $bulat=$angka;
	// }
	// return $bulat; 
	return $angka;
}


function rounding($angka)
{
}

function stringToSlug($string)
{
	return strtolower(str_replace(' ', '_', $string));
}

function slugToString($string)
{
	return ucwords(str_replace('_', ' ', $string));
}

function moneyFormat($angka)
{
	return "Rp " . number_format($angka, 0, ',', '.');
}

function randomString($length)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function capitalNumbericRandomString($length)
{
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function sendSMS($number, $message)
{
	//https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkeyanda&passkey=$passkeyanda&nohp=$nohptujuan&pesan=isi pesan
	/* $response = Curl::to('https://reguler.zenziva.net/apps/smsapi.php')
        ->withData( array( 'userkey'=>env('SMS_USERKEY'),'passkey'=> env('SMS_PASSKEY'),'nohp' => $number ,'pesan' => $message ) )
        ->get();
		
		return $response;*/
}

// function sendEmail($page,$var,$user,$message){
// 	\Mail::send($page, compact('user'),
// 	 function($message) use ($user) {
// 		$message->to($user['email']);
// 		$message->from(env('SYSTEM_EMAIL'), env('SYSTEM_EMAIL_NAME'));
// 		$message->subject($message);
// 	});
// }


// function getMaxColumnPage()
// {
// 	$route = \Route::getCurrentRoute()->getName();
// 	$permission = \App\Unicom\Accounts\Permission::where('name', $route)->first();

// 	if (!$permission) return 15;
// 	else return $permission->max_column;
// }

// function rupiah_rounding($data)
// {
// 	$data = round($data);
// 	$rounding = round($data) % 100;
// 	if ($rounding > 50) {
// 		$rounding = 100 - $rounding;
// 	} else {
// 		$rounding =  $rounding * -1;
// 	}

// 	return array($data + $rounding, $data, $rounding);
// }

// function addFailedQiscus($url, $type, $data)
// {
// 	DB::beginTransaction();
// 	$adq = new \Ayo\Mobile\QiscusFailed;

// 	$adq->data = $data;
// 	$adq->url = $url;
// 	$adq->type = $type;
// 	$adq->status = "PENDING";
// 	$adq->save();
// 	DB::commit();
// }

// function generateFailedQiscus()
// {

// 	$data = \Ayo\Mobile\QiscusFailed::where("status", 'PENDING')->where("failed", '<', 3)->get();

// 	foreach ($data as $row) {
// 		$response = get_http_post_qiscus($row->url, $row->data);
// 		$response = json_decode($response, true);

// 		if (isset($response['results'])) {
// 			$row->status = "DONE";
// 			$row->save();

// 			if ($row->type == "ADDUSER") {
// 			} else if ($row->type == "ROOMPERSONAL") {
// 			} else if (explode("_", $row->type)[0] == "ROOMGROUPTEAM") {
// 				if (isset($response['results']['room'])) {
// 					if (isset($response['results']['room']['room_id'])) {
// 						$team = \Ayo\Mobile\Team::where("id", explode("_", $row->type)[1])->first();
// 						if ($team) {
// 							$team->room_id = $response['results']['room']['room_id'];
// 							$chat = Chat::where("room_id", $response['results']['room']['room_id'])->first();
// 							if ($chat) {
// 								$team->chat_id = $chat->id;
// 							}
// 							$team->save();
// 						}
// 					}
// 				}
// 			} else if (explode("_", $row->type)[0] == "ROOMGROUPOPENPLAY") {
// 				if (isset($response['results']['room'])) {
// 					if (isset($response['results']['room']['room_id'])) {
// 						$createMatchOpenPlay = \Ayo\Mobile\MatchOpenPlay::where("id", explode("_", $row->type)[1])->first();
// 						if ($createMatchOpenPlay) {
// 							$createMatchOpenPlay->room_id = $response['results']['room']['room_id'];
// 							$chat = Chat::where("room_id", $response['results']['room']['room_id'])->first();

// 							if ($chat) {
// 								$createMatchOpenPlay->chat_id = $chat->id;
// 							}

// 							$createMatchOpenPlay->save();
// 						}
// 					}
// 				}
// 			} else if ($row->type == "ADDROOMGROUPPARTICIPANT") {
// 			} else if ($row->type == "REMOVEROOMGROUPPARTICIPANT") {
// 			}
// 		} else {
// 			$row->failed++;
// 			$row->save();
// 		}
// 	}
// }


// function dateStringIndo($date)
// {
// 	$tanggal =  date("d", strtotime($date));
// 	$year = date("Y", strtotime($date));
// 	$month =  bulan_indonesia(date("n", strtotime($date)));
// 	return $tanggal . " " . $month . " " . $year;
// }

// function dateStringIndoMinusxDay($date,$x){
// 	$tanggal =  date("d", strtotime('-'.$x.' hours',strtotime($date)));
// 	$year = date("Y", strtotime('-'.$x.' hours',strtotime($date)));
// 	$month =  bulan_indonesia(date("n", strtotime('-'.$x.' hours',strtotime($date))));
// 	return $tanggal . " " . $month . " " . $year;
// }

// function cutString($string, $length)
// {
// 	if (strlen($string) > $length) {
// 		return substr($string, 0, $length) . "...";
// 	} else {
// 		return $string;
// 	}
// }

// function sendFirebaseSimple($data)
// {
// 	return get_http_post_firebase("https://fcm.googleapis.com/fcm/send", $data);
// }

// function sendFirebaseSimpleVenueOwner($data)
// {
// 	return get_http_post_firebase_venue_owner("https://fcm.googleapis.com/fcm/send", $data);
// }

// function sendFirebase($user, $title, $message, $content)
// {
// 	$userMobileToken = \Ayo\Mobile\UserFirebaseToken::where("user_id", $user->id)->orderBy("created_at", 'desc')->get();

// 	foreach ($userMobileToken as $row) {
// 		$token = $row->token;
// 		$data = array();
// 		$data['notification'] = array("title" => $title, "body" => $message, "click_action" => "FLUTTER_NOTIFICATION_CLICK");


// 		$isi_content = array();

// 		foreach ($content as $key => $val) {
// 			$isi_content[$key] = $val;
// 		}
// 		$data['data'] = $isi_content;

// 		$data['to'] = $token;



// 		get_http_post_firebase("https://fcm.googleapis.com/fcm/send", $data);
// 	}
// }


// function getKelipatanBiayaLayananBank($amount)
// {
// 	$val = 1;

// 	if ($amount <= 250000) {
// 		$val = 1;
// 	} else {
// 		$floor = floor($amount / 250000);
// 		$val = $amount % 250000 == 0 ? $floor : $floor + 1;
// 	}

// 	return $val;
// }

// function curl_micro_service($url, $dataArray, $method = "GET")
// {
// 	$data = http_build_query($dataArray);
// 	$getUrl = $url . "?" . $data;


// 	//Log::info('curl_' . $method . '_micro_service: url  ' . $getUrl);


// 	$ch = curl_init();
// 	curl_setopt($ch, CURLOPT_URL, ($method == "POST" ? $url : $getUrl));
// 	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_TIMEOUT, 20);

// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  $method);
// 	if ($method == "POST") {
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 	} else {
// 		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
// 		curl_setopt($ch, CURLOPT_HTTPGET, 1);
// 	}
// 	curl_setopt(
// 		$ch,
// 		CURLOPT_POSTFIELDS,
// 		json_encode($dataArray)
// 	);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 		"Content-Type:application/json",
// 	));

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	curl_close($ch);

// 	if ($err) {
// 		Log::error('curl_' . $method . '_micro_service: error ' . $err);
// 		return response()->json(array(
// 			'error' => true,
// 			'message' => 'terjadi kesalahan dalam sistem',
// 			'status_code' => 403,
// 			'data' => null,
// 		));
// 	} else {
// 		return $retValue;
// 	}
// }

// function curl_get_micro_service($url, $dataArray, $type = "GET")
// {
// 	$data = http_build_query($dataArray);
// 	$getUrl = $url . "?" . $data;
// 	$ch = curl_init();


// 	//Log::info('curl_get_micro_service: url  ' . $getUrl);


// 	curl_setopt($ch, CURLOPT_URL, $getUrl);
// 	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_TIMEOUT, 20);

// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
// 	curl_setopt($ch, CURLOPT_HTTPGET, 1);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 		"Content-Type: application/json",
// 	));

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	// dd($info);
// 	curl_close($ch);
// 	if ($err) {
// 		Log::error('curl_get_micro_service: error ' . $err);
// 		return response()->json(array(
// 			'error' => true,
// 			'message' => 'terjadi kesalahan dalam sistem',
// 			'status_code' => 403,
// 			'data' => null,
// 		));
// 	} else {
// 		return $retValue;
// 	}
// }


// function curl_get_micro_service_download($url, $dataArray)
// {
// 	$data = http_build_query($dataArray);
// 	$getUrl = $url . "?" . $data;
// 	$ch = curl_init();


// 	//Log::info('curl_get_micro_service: url  ' . $getUrl);


// 	curl_setopt($ch, CURLOPT_URL, $getUrl);
// 	curl_setopt($ch, CURLOPT_VERBOSE, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
// 	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
// 	curl_setopt($ch, CURLOPT_HEADER, 0);

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	curl_close($ch);
// 	if ($err) {
// 		Log::error('curl_get_micro_service: error ' . $err);
// 		return response()->json(array(
// 			'error' => true,
// 			'message' => 'terjadi kesalahan dalam sistem',
// 			'status_code' => 403,
// 			'data' => null,
// 		));
// 	} else {
// 		header('Content-Type: application/vnd.ms-excel');
// 		header('Content-Disposition: attachment;filename="file.xlsx"');
// 		header('Cache-Control: max-age=0');

// 		$fp = fopen("php://output", 'w');
// 		fwrite($fp, $retValue);
// 		fclose($fp);
// 		// return $retValue;
// 	}
// }


// function apiHttpRequest($url, $request_type, $data)
// {
// 	$curl = curl_init();

// 	curl_setopt_array($curl, array(
// 		CURLOPT_FRESH_CONNECT     => true,
// 		CURLOPT_URL               => $url,
// 		CURLOPT_RETURNTRANSFER    => true,
// 		CURLOPT_HEADER            => false,
// 		CURLOPT_HTTPHEADER        => array(
// 			"Accept:application/json",
// 			"Content-Type:application/json",
// 		),
// 		CURLOPT_FAILONERROR       => false,
// 	));

// 	if ($request_type == 'POST') {
// 		curl_setopt($curl, CURLOPT_POST, 1);
// 		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// 	} else {
// 		curl_setopt($curl, CURLOPT_POST, false);
// 	}

// 	$response = curl_exec($curl);
// 	$err = curl_error($curl);

// 	curl_close($curl);

// 	if ($err) {
// 		Log::error('apiHttpRequest error: ' . $err);
// 		return false;
// 	} else {

// 		$response = json_decode($response, true);
// 		return $response;
// 	}
// }

// /**
//  * newCropImage
//  *
//  * @param  mixed $path Lokasi image
//  * @param  mixed $tinggi Tinggi yang mau di kurangi contoh 0.5 
//  * @param  mixed $lebar Lebar yg mau di kurangi contoh 0.5
//  * @return String Base64 Encode
//  */
// function newCropImage($path, $tinggi = 1, $lebar = 1): String
// {
// 	$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));


// 	switch ($ext) {
// 		case 'jpg':
// 			$image = imagecreatefromjpeg($path);
// 			break;
// 		case 'jpeg':
// 			$image = imagecreatefromjpeg($path);
// 			break;
// 		case 'png':
// 			$image = imagecreatefrompng($path);
// 			break;
// 		default:
// 			throw new Exception("Image tidak di dukung");
// 	}

// 	$exif = exif_read_data($path);
//     if(!empty($exif['Orientation'])) {
// 		switch($exif['Orientation']) {
// 			case 8:
// 				$image = imagerotate($image,90,0);
// 				break;
// 			case 3:
// 				$image = imagerotate($image,180,0);
// 				break;
// 			case 6:
// 				$image = imagerotate($image,-90,0);
// 				break;
// 		}
// 	}


// 	$width = imagesx($image);
// 	$height = imagesy($image);


// 	$potongTinggi = $height * $tinggi;
// 	$potongLebar = $width * $lebar;

// 	$new_height = $potongTinggi;
// 	$new_width = $potongLebar;

// 	$thumb = imagecreatetruecolor($new_width, $new_height);


// 	// Resize and crop
// 	imagecopyresampled(
// 		$thumb,
// 		$image,
// 		0, // Center the image horizontally
// 		0, // Center the image vertically
// 		0,
// 		0,
// 		$new_width,
// 		$new_height,
// 		$new_width,
// 		$new_height
// 	);

// 	ob_start();
// 	imagejpeg($thumb);
// 	$img = ob_get_clean();
// 	return base64_encode($img);
// }

// function curl_micro_service_download($url, $dataArray, $method)
// {
// 	$data = http_build_query($dataArray);
// 	$getUrl = $url . "?" . $data;
// 	$ch = curl_init();


// 	//Log::info('curl_get_micro_service: url  ' . $getUrl);


// 	curl_setopt($ch, CURLOPT_URL, ($method == "POST" ? $url : $getUrl));
// 	curl_setopt($ch, CURLOPT_VERBOSE, 1);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
// 	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  $method);
// 	if ($method == "POST") {
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 	}
// 	curl_setopt(
// 		$ch,
// 		CURLOPT_POSTFIELDS,
// 		json_encode($dataArray)
// 	);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 		"Content-Type:application/json",
// 	));

// 	$retValue = curl_exec($ch);
// 	$err = curl_error($ch);
// 	$info = curl_getinfo($ch);
// 	curl_close($ch);
// 	if ($err) {
// 		Log::error('curl_get_micro_service: error ' . $err);
// 		return response()->json(array(
// 			'error' => true,
// 			'message' => 'terjadi kesalahan dalam sistem',
// 			'status_code' => 403,
// 			'data' => null,
// 		));
// 	} else {
// 		header('Content-Type: application/vnd.ms-excel');
// 		header('Content-Disposition: attachment;filename="file.xlsx"');
// 		header('Cache-Control: max-age=0');

// 		$fp = fopen("php://output", 'w');
// 		fwrite($fp, $retValue);
// 		fclose($fp);
// 		// return $retValue;
// 	}
// }

function checkTo24($time) {
	if($time == "00:00") {
		return "24:00";
	} else if($time == "00:00:00") {
		return "24:00:00";
	} else if($time == "00:30") {
		return "24:30";
	} else if($time == "00:30:00") {
		return "24:30:00";
	} else {
		return $time;
	}
}
