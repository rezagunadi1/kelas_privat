@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Materi Pembelajran Online">
<meta name="description" content="Materi Pembelajran gratis dan lengkap">
<meta name="keywords" content="Kelas Privat, Materi pembelajaran gratis, Materi pembelajaran,">
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

  
  <form method="POST"  id="list-search"  enctype="multipart/form-data" action="{{ route('store_materi') }}">
    @csrf
    <div class="mb-3 col-12">
      <div class="col" style="font-weight: 500">
        Title
      </div> 
      <input class="w-100 mb-2" style="height: 30px" type="text" name="title">
      {{-- <input type="text" name="mapel"> --}}
      <select style="height: 30px"  name="mapel" id="">
        <option value="Matematika">Matematika</option>
        <option value="Fisika">Fisika</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
        {{-- <option value="KULIAH">KULIAH</option> --}}
      </select>
      <select style="height: 30px"  name="grade" id="">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        {{-- <option value="KULIAH">KULIAH</option> --}}
      </select>
    </div>
    
    
    
    <div class="form-group">
      <label for="blog_post" style="font-weight: 500">Content</label>
      {{-- <textarea name="post" id="blog_post" class="form-control"></textarea> --}}
      <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor" required></textarea>
      
    </div>
    <div class="form-group mt-2">
      <label for="blog_post" style="font-weight: 500">Resume</label>
      {{-- <textarea name="post" id="blog_post" class="form-control"></textarea> --}}
      <textarea name="resume" id="" cols="" class="w-100 rounded" rows="10" required></textarea>
      
    </div>
    <div style="font-weight: 500">
      Tags
      <input class="w-100 mb-2" style="height: 30px" type="text" name="tags">
    </div>
    {{-- <input type="file" name="image_soal"> --}}
    {{-- <input type="hidden" name="paket_id" value="{{ $paket }}"> --}}
    <div class="w-100 mb-3">
        
      <div class="col-auto sumbit-button-container pe-0 mt-3 align-self-end">
        <button type="submit"  class="btn btn-primary rounded bayangan w-100 submit-button">SUBMIT</button>
      </div>
    </div>
  </form>
  
  
</div>
@endsection

@push('script')

<script>
  $(document).ready(function(){

      CKEDITOR.replace( 'summary-ckeditor', {
      filebrowserUploadUrl: "{{route('upload_image_materi', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
  });
    //  CKEDITOR.tools.callFunction(1, 'https://kelas-privat.com/assets/img/logo.png', 'Image uploaded successfully');
  });
</script>
    <script>
        

        $(window).bind('DOMContentLoaded load resize', function() {
          
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