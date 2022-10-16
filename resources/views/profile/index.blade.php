@extends('layouts.app')
@section('content')
    <div class="col-11 mx-auto bg-light rounded bayangan p-md-4 p-2 my-md-3 my-1">
        <form method="POST" enctype="multipart/form-data" id="list-search" action="{{ route('profile_edit', Auth::user()->id) }}">
            @csrf
            <div class="row justify-content-center mt-3">

                <div class="col-auto mx-auto ">
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    @php
                $img=Auth::user()->image;
                @endphp
                @if (!empty($img))
                
                <img src='{{ URL::To("$img") }}' alt="" style="height: 220px; width : 220px;" class="rounded-pill">
                @else
                <img src='{{ URL::To("/assets/img/avatar-default.jpg") }}' alt="" style="height: 220px; width : 220px;" class="rounded-pill">
                
                @endif
            </div>
        </div>
        <div class="col-12 w-100 mb-5" style="margin-top: -50px">

            <div class="text-center">
                <input type="file" name="image">
                
            </div>
        </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                    nama  
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">
                    <input class="w-100" type="text" name="name" placeholder="{{ Auth::user()->name }}">
                </div>
            </div>
            {{-- <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                    jabatan  
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">
                    <input class="w-100" type="text" name="role" placeholder="{{ Auth::user()->role }}">
                </div>
            </div> --}}
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                    Sekolah  
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">
                    <input class="w-100" type="text" name="sekolah" placeholder="{{ Auth::user()->sekolah }}">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                    alamat  
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">
                    <input class="w-100" type="text" name="alamat" placeholder="{{ Auth::user()->alamat }}">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                    kelas 
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">

                    <input class="w-100" type="text" name="kelas" placeholder="{{ Auth::user()->kelas }}">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                    hp
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">

                    <input class="w-100" type="text" name="hp" placeholder="{{ Auth::user()->hp }}">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                point 
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">
                    {{ Auth::user()->point }}
                    {{-- <input class="w-100" type="text" name="point" placeholder="{{ Auth::user()->point }}"> --}}
                </div>
            </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                rating 
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">
                    {{ Auth::user()->rating }}
                    {{-- <input class="w-100" type="text" name="rating" placeholder="{{ Auth::user()->rating }}"> --}}
                </div>
            </div>
            <div class="row mb-1">
                <div class="col pe-0" style="text-transform: capitalize;">
                Motto hidup 
                </div>
                <div class="col-auto pe-md-3 pe-0">:</div>
                <div class="col-md-10 col-8">

                    <input class="w-100" type="text" name="status" placeholder="{{ Auth::user()->status }}">
                </div>
            </div>
            
            <button type="submit" class="w-100 bayangan rounded btn btn-primary mt-3">submit</button>
        </div>
    </form>
    
    </div>
@endsection
@push('css')
<style>
  input[type=file]::file-selector-button {
  border: 2px solid #5347f4;
  /* border-radius: 12px; */
  padding: .2em .4em;
  border-radius: .4em;
  background-color: #2000ae;
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
    $(document).ready(function(){
        $('img').error(function(){
            $(this).attr('src', '{{ URL::To("/assets/img/avatar-default.png") }}');
        });
    });
</script>
@endpush