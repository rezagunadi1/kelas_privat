@extends('layouts.app')
@section('content')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">
  <h1 class="h2 mb-md-3 mb-0">Member Class Post</h1>
  {{-- <div class="btn-toolbar mb-2 mb-md-0"> --}}
    {{-- <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div> --}}
        
        
  {{-- </div> --}}
</div>
{{-- <h2>Thread List</h2> --}}

{{-- <div class="col-11 mx-auto">
  <div class="col-2">
    <img src="{{ URL::To('') }}" alt="">
  </div>
  <div class="col">
    
    <div class="d-block d-md-none text-center">

    </div>
  </div>
</div> --}}

{{-- <div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Author</th>
        <th scope="col">Expand</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $item->chat_id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->chat }}</td>
        <td>{{ $item->name }}</td>
        <td>Show</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}

<div class="col mx-auto">
  
  <a  
  @if (!empty(Auth::user()->role)) 
      @if (empty(Auth::user()->hp))
          
        href="#" id="button-not-nomer"
      @else
          
        @if (Auth::user()->role == 'siswa' || Auth::user()->role =='admin' || Auth::user()->role =='ADMIN')
            
        href="{{ URL::route("addChat") }}"
        @else
            
        href="#" id="button-not-siswa"
        @endif
      @endif
    @else
      href="#" id="button-block"
    @endif
    >
    
    {{-- <button type="button" class="btn btn-sm btn-outline-success "> --}}
    <button type="button" class="btn btn-sm btn-success mb-md-3 mb-2 bayangan" style="border-radius: 8px">
      {{-- <span data-feather="calendar"></span> --}}
      Create a post
    </button>
  </a>
  @foreach ($data as $item)
    <a href="{{ route('komen', $item->chat_id) }}">

      <div class="row mx-0 mb-4 bg-light bg-gradient px-md-4 py-md-4 px-2 py-2 bayangan"  style="border-radius: 12px">
        <div class="col-md-auto col-3 ps-0 pe-md-2 pe-1">
          <img class="img-fluid foto" style="border-radius: 12px; max-height : 150px; max-width:150px; min-height : 10px; min-width:10px;" src="{{ URL::To("$item->image") }}" alt="">
        </div>
        <div class="col pe-0 ps-md-2 ps-1">
          <div class="s12-500">
            
           <span style="color : rgba(12,12,12,0.5)">Author : </span> {{ $item->name }}
          </div>
          <div class="s24-500 mb-md-2 mb-1">
            
            {{ ucwords($item->title) }}
          </div>
          <div class="s12-400 mb-md-2 mb-1">
            
            {{ $item->chat }}
          </div>
          <div class="cover-img" style="  height: 200px; 
          justify-content: center;
          align-items: center;
          overflow: hidden; border-radius: 12px; ">
            <img src='{{ URL::To("$item->picture") }}' class="img-fluid" style="border-radius: 12px; width: 100%; object-fit: cover;" alt="">
            
            {{-- {{ $item->image }} --}}
          </div>
        </div>
      </div>
    </a>
  @endforeach
</div>
@endsection
