@extends('layouts.app')
@section('content')
    
    <div class="col-12 mx-auto bayangan p-2 p-md-3 mt-md-5 mt-3" style="background-color: white; border-radius:12px;">
        <form method="POST" enctype="multipart/form-data" id="list-search" action="{{ route($type.'_store') }}">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

        @if ($type == 'chat')
            <div class="row mt-3">
                {{-- <div class="col-md-2">
                    Title :    
                </div> --}}
                <div class="col">
                    
                    <input type="text" placeholder="Title" class="w-100" class="rounded" name="title">
                </div>    
            </div>
        @endif
        <div class="row mt-3">
            {{-- <div class="col-md-2">
                Chat :    
            </div> --}}
            <div class="col">
                
                <textarea type="text-are"  rows="14" placeholder="Content" class="w-100" class="rounded" name="chat"></textarea>
            </div>    
        </div>
        <div class="row mt-3">
            {{-- <div class="col-md-2">
                Add a Picture :    
            </div> --}}
            <div class="col">
                
                <input type="file" placeholder="File" class="w-100" class="rounded" name="picture">
            </div>    
        </div>
        <button type="submit" class="mt-2 rounded btn btn-primary">Submit</button>
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