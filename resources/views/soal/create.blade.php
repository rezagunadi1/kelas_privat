@extends('layouts.app')
@section('content')
    

<div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">

  
  <form method="POST"  id="list-search"  enctype="multipart/form-data" action="{{ route('store_soal') }}">
    @csrf
   
    <textarea name="soal" id="" cols="" class="w-100 rounded" rows="10" required></textarea>
    <input type="file" name="image_soal">
      <input type="hidden" name="paket_id" value="{{ $paket }}">
    <div class="w-100 mb-3">
        
        <div class="row justify-content-between w-100 m-0">
            <div class="col-md-4 col-12 my-1 px-0 px-md-3">
                Jawaban A
            <input class="rounded w-100" type="text" name="jawaban_a">
                <input class="mt-1" type="file" name="image_a">

            </div>
            <div class="col-md-4 col-12 my-1 px-0 px-md-3">
                Jawaban B
            <input class="rounded w-100" type="text" name="jawaban_b">
                <input class="mt-1" type="file" name="image_b">

            </div>
            <div class="col-md-4 col-12 my-1 px-0 px-md-3">
                Jawaban C
            <input class="rounded w-100" type="text" name="jawaban_c">
                <input class="mt-1" type="file" name="image_c">

            </div>
            <div class="col-md-4 col-12 my-1 px-0 px-md-3">
                Jawaban D
            <input class="rounded w-100" type="text" name="jawaban_d">
                <input class="mt-1" type="file" name="image_d">

            </div>
            <div class="col-md-4 col-12 my-1 px-0 px-md-3">
                Jawaban E
            <input class="rounded w-100" type="text" name="jawaban_e">
                <input class="mt-1" type="file" name="image_e">

            </div>
            <div class="col-md-4 col-12 my-1 px-0 px-md-3">
                Jawaban Benar
                <select class="form-select" id="position-option" name="kunci" required>
                    <option value="" selected disabled>Pilih jawaban benar</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </div>
        </div>
        <div class="row justify-content-between w-100 mx-0 mt-2">
            <div class="col-md col-6 ps-0">
                
              <div>Tingkatan</div>
              <select class="form-select" id="position-option" name="tingkat" required>
                  <option value="" selected disabled>Pilih tingkatan</option>
                  <option value="S1">Sarjana</option>
                  <option value="D">Diploma</option>
                  <option value="SMA">SMA</option>
                  <option value="SMP">SMP</option>
                  <option value="SD">SD</option>
              </select>
            </div>
            {{-- <div class="col-md col-6 tahun-container">
                
              <div>Tahun</div>
              <select class="form-select" id="position-option" name="tahun">
                  <option value="" selected disabled>Pilih tahun</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
              </select>
            </div> --}}
            <div class="col mapel-container">
                
              <div>Mata pelajaran</div>
              <select class="form-select" id="position-option" name="mapel" required>
                  <option value="" selected disabled>Pilih mata pelajaran</option>
                  <option value="Matematika">Matematika</option>
                  <option value="Fisika">Fisika</option>
              </select>
            </div>
            <div class="col-auto sumbit-button-container pe-0 align-self-end">
              <button type="submit"  class="btn btn-primary rounded bayangan w-100 submit-button">submit</button>
            </div>
        </div>
      </div>
  </form>
  
  
</div>
@endsection

@push('script')
    <script>
        

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