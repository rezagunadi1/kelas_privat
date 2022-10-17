@extends('layouts.app')
@section('content')
    

<div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">

  
  <form method="POST"  id="list-search"  action="{{ route('goto_soal') }}">
    @csrf
    @if (!empty(Auth::user()->role))
        
    @php
    $user_id=Auth::user()->id;
    @endphp
    <input type="hidden" name="user_id" value="{{ $user_id }}">
    @endif
    <div class="w-100 mb-3">
      <div class="row justify-content-between w-100 m-0">
          {{-- <div class="col-md col-6 ps-0">
              
            <div>Tingkatan</div>
            <select class="form-select" id="position-option" name="tingkat">
                <option value="" selected disabled>Pilih tingkatan</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
            </select>
          </div> --}}
          <div class="col-md col-6 tahun-container">
              
            <div>Paket</div>
            <select class="form-select" id="position-option" name="paket">
                <option value="" selected disabled>Pilih paket</option>
                @foreach ($paket as $item)
                    
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
          </div>
          {{-- <div class="col mapel-container">
              
            <div>Mata pelajaran</div>
            <select class="form-select" id="position-option" name="mapel">
                <option value="" selected disabled>Pilih mata pelajaran</option>
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
            </select>
          </div> --}}
          <div class="col-auto sumbit-button-container pe-0 align-self-end">
            <button
            @if (!empty(Auth::user()->role))
            @if (Auth::user()->role =='siswa' || Auth::user()->role =='admin' || Auth::user()->role =='ADMIN')
                
            type="submit"  
            @else
                
            type="button" id="button-not-siswa" 
            @endif
            @else
            type="button" id="button-block" 

            @endif class="btn btn-primary rounded bayangan w-100 submit-button">submit</button>
          </div>
      </div>
    </div>
      
  </form>
  <div class="my-md-5 my-3 pt-1" style="border-style: dotted;"></div>
  
  <div class="my-5 py-3"></div>
  <div class="h-100 py-5 my-5 s28-500" style="color: darkgrey!important">
        <center>

            Silahkan Pilih Jenis Soal lalu submit di form atas
        </center>
        <center>
            @php
                if ($role == 'null' || $role == null) {
                  # code...
                  $pesan = 'LOGIN UNTUK MENAMPILKAN SOAL LEBIH BANYAK!!';
                } elseif ($role != 'SISWA' && $role != 'siswa' && $role != 'null' && $role != null) {
                  # code...
                  
                  $pesan = 'GABUNG BERSAMA KELAS PRIVAT UNTUK MENAMPILKAN PAKET SOAL LEBIH BANYAK';
                } else {
                  $pesan = '';
                  # code...
                }
                
            @endphp
            {{ $pesan }}
        </center>
  </div>
  
  <div class="my-5 py-3"></div>
</div>
@endsection

@push('script')
    <script>
      $('#button-block').click(function() {
        alert( "Silahkan Login untuk Melanjutkan" );
      });
      $(window).bind('DOMContentLoaded load resize', function() {
          //   var pembagi =6500/$(window).innerWidth();
          // var margin = $(window).innerWidth()/pembagi;
          // // var pengurang =$(window).innerWidth()/1.3;
          // // var margin = $(window).innerWidth()-pengurang;
          // $('.nav-button').css('margin-left', margin+'px');
          if ($(window).innerWidth() <= 777) {
    
            $('.tahun-container').addClass('pe-0');
            $('.mapel-container').addClass('px-0');
            $('.mapel-container').addClass('mt-3');
            $('.mapel-container').addClass('w-100');
            $('.sumbit-button-container').addClass('w-100');
            $('.sumbit-button-container').addClass('ps-0');
            $('.submit-button').addClass('w-100');
            $('.submit-button').addClass('mt-3');
          } else {
            $('.tahun-container').removeClass('pe-0');
            $('.mapel-container').removeClass('mt-3');
            $('.mapel-container').removeClass('px-0');
            $('.mapel-container').removeClass('w-100');
            $('.sumbit-button-container').removeClass('w-100');
            $('.sumbit-button-container').removeClass('ps-0');
            $('.submit-button').removeClass('w-100');
            $('.submit-button').removeClass('mt-3');
    
          }
    
        });
    </script>
@endpush