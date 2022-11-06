@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Materi Pembelajran Online">
<meta name="description" content="Materi Pembelajran gratis dan lengkap">
<meta name="keywords" content="{{ $materi->tags }}">
<meta property="og:title" content="Kelas Privat - Materi Pembelajran Online">
<meta property="og:description" content="Materi Pembelajran gratis dan lengkap">
<meta property="og:site_name" content="Kelas Privat: Materi Pembelajran Online">

<meta property="og:image" content="https://kelas-privat.com/assets/img/logo.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current(); }}">
@endpush



@section('content')
    

  <div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">

 
    <a href="{{ URL::route('materi') }}">Back</a>  
    <div class="h-100 py-3 mb-2 s28-500" style="">
          <center>

              {{ $materi->title }}
          </center>
    </div>
    <div class="isi">
     {!! $materi->content !!}
    </div>
    <div class="col">
      <div class="row w-100 mx-0">
        <div class="col-auto s12-500 ps-0 pe-1">

          Tags :  
        </div>
        <div class="col s12-400 px-0">
          {{ $materi->tags }}

        </div>
      </div>
    </div>

  
  
  </div>
@endsection

@push('script')
  <script>
    $(document).ready(function(){

      // $('img').error(function(){
      //   $(this).attr('src', '{{ URL::To("/assets/icon/image-broken.png") }}');
      // });

      $('img').addClass('img-fluid');
      $('img').addClass('rounded');
      $('img').css('object-fit', 'contain');
      $('img').css('height', 'auto');
      $('img').addClass('border12px');

    });
  </script>
  
@endpush