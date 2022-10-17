@extends('layouts.app')
@section('content')
    

<div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">

 
<a href="{{ URL::route('practice') }}">Back</a>  
  <div class="h-100 py-3 mb-2 s28-500" style="">
        <center>

            Soal {{ $mapel }}
        </center>
  </div>
  @php
      $a=0;
  @endphp
  <form action="{{ route('jawaban') }}"  id="list-search"   method="POST">
    @csrf
    <input type="hidden" name="paket" value="{{ $paket }}">
    @foreach ($soal as $item)
      @php
        $a=$a+1;
          
      @endphp
          <input type="hidden" name="kunci_{{ $a }}" value="{{ $item->kunci }}">
          <input type="hidden" name="soal_{{ $a }}" value="{{ $item->id }}">
      <div class="col-12 s14-400 mt-3 mb-1">
        
        {{ $a }}. {{ $item->soal }} 
        <div class="col-auto mb-2">

            <img style="max-height: 90px;" class="" src="{{ URL::To("$item->image_soal") }}" alt="">    
          </div>
      </div>
      <div class="row mx-0 ">
        <div class="col-auto">
          <input type="radio" name="jawaban_{{ $a }}" value="A">
          {{ $item->jawaban_a }}
            <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_a") }}" alt="">
        </div>
        <div class="col-auto">
          <input type="radio" name="jawaban_{{ $a }}" value="B">
          {{ $item->jawaban_b }}
            <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_b") }}" alt="">
        </div>
        <div class="col-auto">
          <input type="radio" name="jawaban_{{ $a }}" value="C">
          {{ $item->jawaban_c }}
            <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_c") }}" alt="">
        </div>
        <div class="col-auto">
          <input type="radio" name="jawaban_{{ $a }}" value="D">
          {{ $item->jawaban_d }}
            <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_d") }}" alt="">
        </div>
        <div class="col-auto">
          <input type="radio" name="jawaban_{{ $a }}" value="E">
          {{ $item->jawaban_e }}
            <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_e") }}" alt="">
        </div>
      </div>
      @endforeach
      {{-- @if ()
          
      @else
          
      @endif --}}
      <button type="submit"
      
        @if (!empty(Auth::user()->role)) 
          @if (empty(Auth::user()->hp) || empty(Auth::user()->email))
              
            href="#" id="button-not-nomer"
          @else
            
          @endif
        @else
          href="#" id="button-block"
        @endif
      class="btn btn-outline-primary mt-3">Selesai</button>
    </form>
    </div>
@endsection

@push('script')
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