@extends('layouts.app')
@section('content')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">
  <h1 class="h2 mb-md-3 mb-0">Kelas Privat News</h1>
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

@if (!empty(Auth::user()->role)) 
@if (Auth::user()->role =='admin' || Auth::user()->role =='ADMIN')
    
<a href="{{ URL::route("create_news") }}">

{{-- <button type="button" class="btn btn-sm btn-outline-success "> --}}
<button type="button" class="btn btn-sm btn-success mb-md-3 mb-2 bayangan" style="border-radius: 8px">
  {{-- <span data-feather="calendar"></span> --}}
  <i class="bi bi-file-earmark-plus"></i> Create a News
</button>
</a>
@endif
@endif 
<div class="col-11 mx-auto">
  @php
      $i=0;
  @endphp
  @foreach ($data as $item)
    {{-- <a href="{{ route('komen', $item->chat_id) }}"> --}}

      <div class="row mx-0 mb-4 bg-light bg-gradient px-md-4 py-md-4 px-2 py-2 bayangan"  style="border-radius: 12px">
        <div class="s18-500 mb-1">{{ $item->title }}</div>
        <div class="col-auto rounded shadow s8-400 mb-3 bg-primary" style="color: aliceblue!important; margin-left:12px!important;">{{ $item->category }}</div>
        <div class="s12-400"  style="color: rgb(4, 45, 56)">{!! nl2br($item->description) !!}</div>
        @php
            $total_image =0;
        @endphp
        @foreach ($item->images as $cek)
          @php
              if (!empty($cek->url)) {
                # code...
                $check = $cek->url;
              } else {
                $check = '';
                # code...
              }
              $total_image =$total_image+1;
          @endphp    
        @endforeach
        @if ($total_image>0)
        <div id="carouselControls{{ $i }}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            @php
                $a=0;
            @endphp
                @foreach ($item->images as $image)
                    @php
                        if ($a==0) {
                          # code...
                          $active = 'active';
                        } else {
                          # code...
                          $active = '';
                        }
                        
                    @endphp
                  <div  class="carousel-item {{ $active }}">
                    @php
                        $a++;
                    @endphp
                    <img src='{{ URL::to("$image->url") }}' class="w-100" alt="">
                  </div>
                @endforeach
                    
            </div>
            @if ($total_image>1)
                
              <button class="my-auto carousel-control-prev" type="button" data-bs-target="#carouselControls{{ $i }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="my-auto carousel-control-next" type="button" data-bs-target="#carouselControls{{ $i }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            @endif
          </div>
          @endif
      </div>
      @php
          $i =$i+1;
      @endphp
    {{-- </a> --}}
  @endforeach
</div>
@endsection

@push('css')
<style>
    .carousel-indicators [data-bs-target]{
        width: 6px;
        height: 6px;
        border-radius: 100%;
        margin-right: 2px;
        margin-left: 2px;
    }
    .carousel-control-prev{
        background-color: rgba(37, 40, 43, 0.6);
        opacity: 1;
        margin-left: 16px;
        border-radius: 7px;
        width: 28px;
        height: 28px;
        
    }
    .carousel-control-next{
        background-color: rgba(37, 40, 43, 0.6);
        opacity: 1;
        margin-right: 16px;
        border-radius: 7px;
        width: 28px;
        height: 28px;
        
    }
    .carousel-control-next-icon, .carousel-control-prev-icon{
        height: 15px;
        width: 10px;
    }
</style>
@endpush
