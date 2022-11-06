@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Materi pembelajaran Online">
<meta name="description" content="Materi pembelajaran gratis dan lengkap">
<meta name="keywords" content="Kelas Privat, Materi pembelajaran gratis, Materi pembelajaran,">
<meta property="og:title" content="Kelas Privat - Materi pembelajaran Online">
<meta property="og:description" content="Materi pembelajaran gratis dan lengkap">
<meta property="og:site_name" content="Kelas Privat: Materi pembelajaran Online">

<meta property="og:image" content="https://kelas-privat.com/assets/img/logo.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current(); }}">
@endpush



@section('content')
    

<div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">

  
  <form method="GET"  id="list-search"  action="{{ route('materi') }}">
    @csrf
    @if (!empty(Auth::user()->role))
        
    @php
    $user_id=Auth::user()->id;
    @endphp
    <input type="hidden" name="user_id" value="{{ $user_id }}">
    @endif
    <div class="w-100 mb-3">
      <div class="row justify-content-between w-100 m-0">
          <div class="col px-0">
            <input type="text" name="search" placeholder="Cari materi" style="height: 30px" class="form-controll w-100 rounded">
          </div>
          <div class="col-auto sumbit-button-container pe-0 align-self-end">
            <button
            type="submit"  
            class="btn btn-primary rounded bayangan w-100 submit-button py-0" style="height: 30px" >submit</button>
          </div>
      </div>
    </div>
      
  </form>
  <div class="my-md-5 my-3 pt-1" style="border-style: dotted;"></div>
  
  @foreach ($materi as $item)
  <a href="{{ route('show_materi', $item->slug) }}" style="color:black">
    
    <div class="col my-3 s20-500 bl-light rounded shadow">
      <div class="row">
        <div class="col-auto px-3 py-2">
          <img src="{{ URL::To($item->thumbnail.'g') }}" class="img-fluid"  style="border-radius: 8px; height:100px;" alt="">
          
        </div>
          <div class="col s18-500">
            
            {{ $item->title }}
            <div class="s12-400">
              {{ $item->grade }} ⋅ {{ $item->mapel }}
            </div>
            <div class="s12-400 mt-3">
              {{ $item->resume }}
            </div>
        </div>
      </div>
    </div>
  </a>
  @endforeach
  <div class="my-5 py-3"></div>
</div>
@endsection

@push('script')  
<script>
$(document).ready(function() {
    $('.select2').select2();
});

</script>
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