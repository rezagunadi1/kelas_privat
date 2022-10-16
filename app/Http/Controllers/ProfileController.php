<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile.index',[
            'title' => 'Profile SiLas'
        ]);
    }
    public function store(Request $req, $id)
    {
        // $req = $req->toArray();
        // dd($req);
        $data = User::where('id', $req->id)->first();
        if (!empty($req->name)) {
            $data->name=$req->name;
        }
        if (!empty($req->role)) {
            $data->role=$req->role;
        }
        if (!empty($req->sekolah)) {
            $data->sekolah=$req->sekolah;
        }
        if (!empty($req->alamat)) {
            $data->alamat=$req->alamat;
        }
        if (!empty($req->kelas)) {
            $data->kelas=$req->kelas;
        }
        if (!empty($req->hp)) {
            $data->hp=$req->hp;
        }
        if (!empty($req->point)) {
            $data->point=$req->point;
        }
        if (!empty($req->rating)) {
            $data->rating=$req->rating;
        }
        if (!empty($req->status)) {
            $data->status=$req->status;
        }
        if (!empty($req->image)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $data->image = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        $data->save();
        return redirect()->route('profile');
    }

}
