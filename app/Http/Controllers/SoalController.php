<?php

namespace App\Http\Controllers;

use App\Models\soal;
use App\Models\jawaban;
use App\Models\PaketSoal;
use App\Models\ScoreJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class SoalController extends Controller
{
    //
    
    public function index()
    {

        $paket = PaketSoal::where('is_deleted', 0);
        $role = 'null';
        if (empty(Auth::user())) {
            # code...
            $paket = $paket->where('user_id', 1);
        } else {
            # code...
            $role = Auth::user()->role;
            if (Auth::user()->role == 'ADMIN') {
                # code...
                
            } else if (Auth::user()->role == 'SISWA') {
                # code...
                $paket = $paket->where('is_public', 1);
            } else {
                $paket = $paket->where(function ($query) {
                    $query->where('user_id', Auth::user()->role)->orWhere('user_id', 1);
                    # code...
                });
            }
        }
        $paket = $paket->get();
        return view('soal.index',[
            'title' => 'Latihan Soal SiLas',
            'paket' => $paket,
            'role' => $role,
        ]);
    }

    public function delete($soal_id)
    {
        # code...
        $soal = soal::where('id', $soal_id)->where('owner_id', Auth::user()->id)->where('is_deleted', 0)->first();
        if (!$soal) {
            # code...
            return redirect()->back()->with('error', 'Soal Tidak tersedia, harap menghubungi admin');
        }
        $soal->is_deleted = 1;
        $soal->save();
        return redirect()->back()->with('success', 'Soal berhasil dihapus');

    }
    public function show(Request $req)
    {
        // $req = $req->toArray();
        // dd($req);
        $soal = soal::where('grade', $req->tingkat)->where('kelas', 3)->where('paket_id', $req->paket)->where('mapel', $req->mapel)->where('is_deleted', 0)->get();
        return view('soal.show',[
            'title' => 'Latihan Soal SiLas',
            'soal' => $soal,
            'mapel' => $req->mapel,
            'paket' => $req->paket,
        ]);
    }
    public function list()
    {
        // $req = $req->toArray();
        // dd($req);
        $paket = PaketSoal::where('user_id', Auth::user()->id)->where('is_deleted', 0)->get();
        return view('paket.list',[
            'title' => 'List Soal',
            'paket' => $paket,
        ]);
    }
    public function create(Request $req, $paket_id)
    {
        return view('soal.create',[
            'title' => 'Buat Soal',
            'paket' => $paket_id
        ]);
    }
    public function store(Request $req)
    {
        // $req = $req->toArray();
        // dd($req);
        $soal = new soal();
        $soal->soal = $req->soal;	
        $soal->jawaban_a = $req->jawaban_a;	
        $soal->jawaban_b = $req->jawaban_b;	
        $soal->jawaban_c = $req->jawaban_c;	
        $soal->jawaban_d = $req->jawaban_d;	
        $soal->jawaban_e = $req->jawaban_e;	
        $soal->kunci = $req->kunci;	
        $soal->grade = $req->tingkat;	
        $soal->kelas = 3;	
        $soal->mapel = $req->mapel;	
        $soal->paket_id = $req->paket_id;	
        $soal->owner_id = Auth::user()->id;	
        if (!empty($req->image_soal)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image_soal')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image_soal')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image_soal')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image_soal');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $soal->image_soal = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        if (!empty($req->image_a)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image_a')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image_a')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image_a')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image_a');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $soal->image_a = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        if (!empty($req->image_b)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image_b')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image_b')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image_b')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image_b');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $soal->image_b = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        if (!empty($req->image_c)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image_c')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image_c')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image_c')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image_c');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $soal->image_c = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        if (!empty($req->image_d)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image_d')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image_d')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image_d')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image_d');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $soal->image_d = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        if (!empty($req->image_e)) {
            # code...
            
            // menyimpan data file yang diupload ke variabel $file
            $originName = $req->file('image_e')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('image_e')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $req->file('image_e')->move(public_path('upload/image'), $fileName);
   
            $file = $req->file('image_e');
        

            // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            $soal->image_e = '/upload/image/'.$fileName;
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
        $soal->save();
        
        return redirect()->back()->with('success', 'Soal berhasil dibuat');
        // return view('soal.create',[
        //     'title' => 'Buat Soal'
        // ]);
    }
    public function showHasil(Request $req)
    {
        // $req = $req->toArray();
        // dd($req);
        $count = count($req->all());
        // dd($count);
        $count =$count-2;
        $count =$count/3;
        $count =$count;
        $a=0;
        $kunci = '';
        $answer = '';
        for ($i=1; $i < $count; $i++) { 
            $jawaban = 'jawaban_'.$i;
            $soal = 'kunci_'.$i;
            $soal_id = 'soal_'.$i;
            $kunci = $kunci .'No.'.$i. ' '.$req->$soal  .','; 
            $answer = $answer .'No.'.$i. ' '.$req->$jawaban .','; 
            $final_jawaban = $req->$jawaban;
            // dd($final_jawaban);
            $jawaban = new jawaban;
            $jawaban->user_id = Auth::user()->id; 
            $jawaban->id_soal = $req->$soal_id; 
            $jawaban->id_paket = $req->paket; 
            $jawaban->kunci = $req->$soal; 
            $jawaban->jawaban = $final_jawaban; 
            
            if ($req->$soal == $final_jawaban) {
                $jawaban->is_true = 1; 
                $a=$a+1;
            } else {
                $jawaban->is_true = 0; 
                
            }
            $jawaban->save(); 
        }
        // dd($count);
        $hasil = $a*100/$count;
        $hasil = number_format($hasil, 2, '.', '');
        $cek_score=  ScoreJawaban::where('user_id', Auth::user()->id)->where('paket_id', $req->paket)->latest('id')->first();
        $repeat = 0;
        if (!empty($cek_score)) {
            $repeat = $cek_score->repeat+1;
        } 
        
        $score= new ScoreJawaban;
        $score->paket_id = $req->paket;
        $score->user_id = Auth::user()->id;
        $score->repeat = $repeat;
        $score->score = $hasil;
        $score->save();

        return redirect()->route('practice')->with('info', "Score anda adalah $hasil");
    }
}
