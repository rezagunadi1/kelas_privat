@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Latihan Soal Online">
<meta name="description" content="Latihan soal gratis dilengkapi auto koreksi">
<meta name="keywords" content="Kelas Privat, latihan soal gratis, auto koreksi soal, soal dan jawaban, latihan soal dan jawaban,">
<meta property="og:title" content="Kelas Privat - Latihan Soal Online">
<meta property="og:description" content="Latihan soal gratis dilengkapi auto koreksi">
<meta property="og:site_name" content="Kelas Privat: Latihan Soal Online">

<meta property="og:image" content="https://kelas-privat.com/assets/img/logo.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current(); }}">
@endpush



@section('content')
    

<div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">

  
  <form method="POST"  id="list-search" action="{{ route('store_paket') }}">
    @csrf
    <div class="col-12">

        <input type="text" name="name" class="mb-2 w-100" required>
    </div>
    <div class="col-auto">

        <select name="is_public" id="">
    </div>

    <option value="1">Public</option>
    <option value="0">Privat</option>
   </select>
   <div class="col-auto">

       <button type="submit" class="mt-3">submit</button>
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