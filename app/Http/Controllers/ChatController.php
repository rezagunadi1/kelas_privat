<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Http\Requests\StorechatRequest;
use App\Http\Requests\UpdatechatRequest;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\DB;

class ChatController extends Controller
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
        public function index()
        {
            $data = DB::table('chats as c')
            ->join('users as u', 'u.id', '=', 'c.author_id')
            ->select('c.*', 'c.id as chat_id', 'u.*')
            // ->orderBy('c.id','desc')
            ->get();
            // dd($data);
            return view('chat.index',[
                'title' => 'Tanya Kelas',
                'data' => $data
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
        return view('chat.create',[
            'title' => 'Post',
            'type' => 'chat'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorechatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorechatRequest $request)
    {
        //
        // dd($request);
        $post = new chat();
        $post->author_id = Auth::id();
        $post->title = $request->title;
        $post->chat = $request->chat;
        if (!empty($request->picture)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $request->file('picture')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('picture')->move(public_path('upload/image'), $fileName);
   
            $file = $request->file('picture');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $post->picture = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        $post->save();
        return redirect()->route('chat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatechatRequest  $request
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatechatRequest $request, chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(chat $chat)
    {
        //
    }
}
