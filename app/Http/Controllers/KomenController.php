<?php

namespace App\Http\Controllers;

use App\Models\komen;
use App\Http\Requests\StorekomenRequest;
use App\Http\Requests\UpdatekomenRequest;
use App\Models\chat;

class KomenController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $data = \Illuminate\Support\Facades\DB::table('komens as k')
        ->where('k.chat_id', $id)
        ->join('users as u', 'u.id', '=', 'k.user_id')
        ->select('k.*', 'k.id as komen_id', 'u.*')
        // ->orderBy('id','desc')
        ->get();
        $pinned = \Illuminate\Support\Facades\DB::table('komens as k')
        ->where('k.chat_id', $id)
        ->where('k.is_pin', 1)
        ->join('users as u', 'u.id', '=', 'k.user_id')
        ->select('k.*', 'k.id as komen_id', 'u.*')
        ->first();
// dd($pinned);
        $post =  \Illuminate\Support\Facades\DB::table('chats as c')
        ->where('c.id', $id)
        ->join('users as u', 'u.id', '=', 'c.author_id')
        ->select('c.*', 'c.id as chat_id', 'u.*')
        ->first();

        return view('komen.index',[
            'post' => $post,
            'chat_id' => $id,
            'data' => $data,
            'pinned' => $pinned,
            'title' => 'Kelas Privat',
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekomenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekomenRequest $request)
    {
        //
        $data = new komen();
        $data->chat_id = $request->chat_id;
        $data->user_id = $request->user_id;
        $data->komen = $request->komen;
        if (!empty($request->foto)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $request->file('foto')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('foto')->move(public_path('upload/image'), $fileName);
   
            $file = $request->file('foto');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $data->foto = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        $data->save();
        return redirect()->route("komen", $request->chat_id);
    }
    public function pinned($chat_id, $id, $user_id)
    {
        //
        $acc =0;
        $un_pin = komen::where('chat_id', $chat_id)->where('is_pin', 1)->first();
        $store = komen::where('id', $id)->first();
        if ($store->is_pin != 1) {
            # code...
            $acc =1;
        }
        if (!empty($un_pin->id)) {
            # code...
            $un_pin->is_pin = 0;
            $un_pin->save();
        }
        if ($acc ==1) {
            # code...
            $store->is_pin = 1;
            $store->save();
        }
        $point = \App\Models\User::where('id', $user_id)->first();
        $point->point = $point->point+1;
        $point->save();
        return redirect()->route("komen", $chat_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function show(komen $komen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function edit(komen $komen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekomenRequest  $request
     * @param  \App\Models\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekomenRequest $request, komen $komen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function destroy(komen $komen)
    {
        //
    }
}
