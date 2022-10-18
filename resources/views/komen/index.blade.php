@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Tanya Jawab">
<meta name="description" content="Tanya Jawab soal dan pr bersama teman, guru, dosen, admin dan mitra Kelas Privat">
<meta name="keywords" content="Kelas Privat, tanya jawab soal, tanya jawab pr, tanya guru, tanya teman, tanya admin, tanya kelas privat">
<meta property="og:title" content="Kelas Privat - Tanya Jawab">
<meta property="og:description" content="Tanya Jawab soal dan pr bersama teman, guru, dosen, admin dan mitra Kelas Privat">
<meta property="og:site_name" content="Kelas Privat: Tanya Jawab">

<meta property="og:image" content="https://kelas-privat.com/assets/img/logo.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current(); }}">
@endpush



@section('content')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Thread Detail</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    {{-- <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div> --}}
    </div>
</div>
{{-- <h2>Thread List</h2> --}}


<div class="col-11 mx-auto" >
  
    <a href="{{ route('komen', $post->chat_id) }}">

      <div class="row mb-4 mx-0 bg-light bg-gradient px-md-4 py-md-4 px-2 py-2 bayangan" style="border-radius: 12px">
        <div class="col-md-auto col-3 ps-0 pe-md-2 pe-1">
          <img style="border-radius: 12px"  class="img-fluid foto" src="{{ URL::To("$post->image") }}" alt="">
        </div>
        <div class="col pe-0 ps-md-2 ps-1">
          <div class="s12-500 mb-0 mb-md-1">
            
            <span style="color : rgba(12,12,12,0.5)">Author : </span>  {{ $post->name }}
          </div>
          <div class="s24-500 mb-2 mb-md-3">
            
            {{ ucwords($post->title) }}
          </div>
          <div class="s16-400 mb-2 mb-md-3">
            
            {{ $post->chat }}
          </div>
          <div>
            <img src='{{ URL::To("$post->picture") }}' class="img-fluid" style="border-radius: 12px" alt="">
            
          </div>
        </div>
      </div>
    </a>
  </div>
  @if (!empty($pinned->id))
      
  <div class="col-11 mx-auto" style="border-radius: 12px">
        
        
        <div class="row mb-4 mx-0 bg-light bg-gradient  px-md-4 py-md-4 px-2 py-2 bayangan " style="border-radius: 12px">
            <div class="col-md-auto col-3 ps-0 pe-md-2 pe-1">
                <img style="border-radius: 12px"  class="img-fluid foto" src="{{ URL::To("$pinned->image") }}" alt="">
            </div>
            <div class="col pe-0 ps-md-2 ps-1">
              <div class="row">

                <div class="col s36-500">
                  
                  {{ $pinned->name }}
                </div>
                <div class="col-auto">
                  
                  @if (!empty( Auth::user()->id))
                      
                    @if (($post->author_id == Auth::user()->id) || (Auth::user()->role == 'admin' || Auth::user()->role == 'ADMIN'))
                    <a href="{{ URL::route('pinned', [$pinned->chat_id, $pinned->komen_id, $pinned->user_id] ) }}">
                      <button class="rounded btn btn-secondary allow-able" style="border: #8f8f8f solid 1px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jawaban Paling Keren!!"><i class="bi bi-star-fill" style="color: rgb(217, 185, 1)"></i></button>
                    </a>
                    @else
                    <button class="rounded btn btn-secondary not-allow-able" style="border: #8f8f8f solid 1px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jawaban Paling Keren!!"><i class="bi bi-star-fill" style="color: rgb(217, 185, 1)"></i></button>
                    @endif
                  @else
                  <button class="rounded btn btn-secondary not-allow-able" style="border: #8f8f8f solid 1px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jawaban Paling Keren!!"><i class="bi bi-star-fill" style="color: rgb(217, 185, 1)"></i></button>
                  @endif
                </div>
              </div>
                <div class="s12-500  mb-md-3 mb-2">
                  @php $rating = $pinned->rating; @endphp  
           
                  <span style="color : rgba(12,12,12,0.5)">Rating : </span>   
                  @foreach(range(1,5) as $i)
      
                    @if($rating >0)
                        @if($rating >0.5)
                        <i class="bi bi-star-fill" style="color: gold;"></i>
                        @else
                        <i class="bi bi-star-half" style="color: gold;"></i>
                        @endif
                    @endif
                    @php $rating--; @endphp
                  @endforeach 
                  <span style="color : rgba(12,12,12,0.5)" class=" mx-md-2 mx-1"> &sdot;</span> 
                  <span style="color : rgba(12,12,12,0.5)"> Point : </span>  {{ $pinned->point }} 
                </div>
                <div class="s16-400 mb-md-3 mb-2">
                    
                    {{ $pinned->komen }}
                </div>
                <div>
                    <img src='{{ URL::To("$pinned->foto") }}' class="img-fluid" style="border-radius: 12px" alt="">
                    
                </div>
            </div>
        </div>
  </div>
  
  @endif
<div class="col-11 mx-auto" style="border-radius: 12px">
  
    @foreach ($data as $item)
        
        
        <div class="row mb-4 mx-0 bg-light bg-gradient  px-md-4 py-md-4 px-2 py-2 bayangan " style="border-radius: 12px">
            <div class="col-md-auto col-3 ps-0 pe-md-2 pe-1">
                <img style="border-radius: 12px"  class="img-fluid foto" src="{{ URL::To("$item->image") }}" alt="">
            </div>
            <div class="col pe-0 ps-md-2 ps-1">
              <div class="row">

                <div class="col s36-500">
                  
                  {{ $item->name }}
                </div>
                <div class="col-auto">
                  
                  @if (!empty( Auth::user()->id))
                      
                    @if (($post->author_id == Auth::user()->id) || (Auth::user()->role == 'admin' || Auth::user()->role == 'ADMIN'))
                    <a href="{{ URL::route('pinned', [$item->chat_id, $item->komen_id, $item->user_id] ) }}">
                      <button class="rounded btn btn-outline-secondary allow-able" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jawaban Paling Keren!!"><i class="bi bi-star"></i></button>
                    </a>
                    @else
                    <button class="rounded btn btn-outline-secondary not-allow-able" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jawaban Paling Keren!!"><i class="bi bi-star"></i></button>
                    @endif
                  @else
                  <button class="rounded btn btn-outline-secondary not-allow-able" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jawaban Paling Keren!!"><i class="bi bi-star"></i></button>
                  @endif
                </div>
              </div>
                <div class="s12-500  mb-md-3 mb-2">
                  @php $rating = $item->rating; @endphp  
           
                  <span style="color : rgba(12,12,12,0.5)">Rating : </span>   
                  @foreach(range(1,5) as $i)
      
                    @if($rating >0)
                        @if($rating >0.5)
                        <i class="bi bi-star-fill" style="color: gold;"></i>
                        @else
                        <i class="bi bi-star-half" style="color: gold;"></i>
                        @endif
                    @endif
                    @php $rating--; @endphp
                  @endforeach 
                  <span style="color : rgba(12,12,12,0.5)" class=" mx-md-2 mx-1"> &sdot;</span> 
                  <span style="color : rgba(12,12,12,0.5)"> Point : </span>  {{ $item->point }} 
                </div>
                <div class="s16-400 mb-md-3 mb-2">
                    
                    {!! nl2br($item->komen) !!}
                </div>
                <div>
                    <img src='{{ URL::To("$item->foto") }}' class="img-fluid" style="border-radius: 12px" alt="">
                    
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="col-11 mx-auto">

  
  <form method="POST" enctype="multipart/form-data" id="list-search"  action="{{ route('komen_store') }}">
    @csrf
    @if (!empty(Auth::user()->role))
        
    @php
        $user_id=Auth::user()->id;
        @endphp
    <input type="hidden" name="chat_id" value="{{ $post->chat_id }}">
    <input type="hidden" name="user_id" value="{{ $user_id }}">
    @endif
    <div class="w-100 mb-3">
      
      <textarea class="w-100 bayangan rounded" name="komen" id="" cols="30" rows="10">{!! nl2br(old('body')) !!}</textarea>
    </div>
    <div class="mb-2">
      {{-- <label for="fileUpload">Upload file</label> --}}
      <input type="file" name="foto" title = "Upload Gambar">
      {{-- <div class="my-0 py-0" style="line-height: 12px">
        
        <small class="s2-300" style="color: red">Usahakan dalam posisi landscape</small>
      </div> --}}
    </div>
    <div>
      
      <button
      @if (!empty(Auth::user()->role))
       type="submit"  
       @else
       type="button" id="button-block" 

      @endif class="mb-5 btn btn-primary rounded bayangan">submit</button>
    </div>
  </form>
</div>
@endsection

@push('css')
<style>
  input[type=file]::file-selector-button {
  border: 2px solid #929292;
  /* border-radius: 12px; */
  padding: .2em .4em;
  border-radius: .4em;
  background-color: #8f8f8f;
  color :white;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; 
  transition: 1s;
}

input[type=file]::file-selector-button:hover {
  background-color: #81ecec;
  border-radius: 12px;
  border: 2px solid #00cec9;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
  color : black;
}
</style>
@endpush
@push('script')
    <script>
      $('#button-block').click(function() {
        alert( "Silahkan Login untuk Melanjutkan" );
      });
      $('.not-allow-able').click(function() {
        alert( "Anda bukan pemilik postingan!!" );
      });
    </script>
@endpush