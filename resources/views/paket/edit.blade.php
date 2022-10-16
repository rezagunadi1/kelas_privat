@extends('layouts.app')
@section('content')
    
    <div class="col-11 mx-auto">
        <div class="row justify-content-between">
            <div class="col-auto h2">{{ $paket->name }} </div>
            <div class="col"> 
                <div class="rounded-pill">
                    @if ( $paket->is_public == 1 )
                        <a href="{{ URL::route("change_public_paket",$paket->id) }}">
                            <button class="btn rounded-pill btn-primary">
                                PUBLIC
                            </button>
                        </a>
                    @else
                        <a href="{{ URL::route("change_public_paket",$paket->id) }}">
                            <button class="btn rounded-pill btn-primary">
                                PRIVAT
                            </button>
                        </a>
                        
                    @endif
                </div>
            </div>
            <div class="col-auto">
                <a href="{{ URL::route("create_soal",$paket->id) }}">

                    <button type="button" class="btn btn-sm btn-success mb-md-3 mb-2 bayangan" style="border-radius: 8px">
                        <i class="bi bi-plus-circle"></i> Tambah Soal
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">
        @if (!empty($soal))
            
            @php
                $a=0;
            @endphp
            
            @foreach ($soal as $item)
                @php
                    $a=$a+1;
                @endphp

                <div class="row">
                    <div class="col s14-400 mt-3 mb-1">
                    
                        {{ $a }}. {{ $item->soal }} 

                        @if ($item->image_soal != null || $item->image_soal !='')
                            
                            <div class="col-auto mb-2">
                                <img style="max-height: 90px;" class="" src="{{ URL::To("$item->image_soal") }}" alt="">    
                            </div>

                        @endif

                    </div>
                    <div class="col-auto">
                        
                        <a href="{{ URL::route("delete_soal", $item->id) }}">

                            <i class="bi bi-trash3"></i>
                        </a>
                    </div>
                </div>
                <div class="row mx-0 ">
                    <div class="col-auto">
                        A. {{ $item->jawaban_a }}
                        <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_a") }}" alt="">
                    </div>
                    <div class="col-auto">
                        B. {{ $item->jawaban_b }}
                        <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_b") }}" alt="">
                    </div>
                    <div class="col-auto">
                        C. {{ $item->jawaban_c }}
                        <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_c") }}" alt="">
                    </div>
                    <div class="col-auto">
                        D. {{ $item->jawaban_d }}
                        <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_d") }}" alt="">
                    </div>
                    <div class="col-auto">
                        E. {{ $item->jawaban_e }}
                        <img style="max-height: 90px;" class="mb-2" src="{{ URL::To("$item->image_e") }}" alt="">
                    </div>
                </div>
            @endforeach
        @endif
            
    </div>
@endsection

@push('script')
    <script>
    //   $('#button-block').click(function() {
    //     alert( "Silahkan Login untuk Melanjutkan" );
    //   });
    //   $(window).bind('DOMContentLoaded load resize', function() {
    //       //   var pembagi =6500/$(window).innerWidth();
    //       // var margin = $(window).innerWidth()/pembagi;
    //       // // var pengurang =$(window).innerWidth()/1.3;
    //       // // var margin = $(window).innerWidth()-pengurang;
    //       // $('.nav-button').css('margin-left', margin+'px');
    //       if ($(window).innerWidth() <= 777) {
    
    //         $('.tahun-container').addClass('pe-0');
    //         $('.mapel-container').addClass('px-0');
    //         $('.mapel-container').addClass('mt-3');
    //         $('.mapel-container').addClass('w-100');
    //         $('.sumbit-button-container').addClass('w-100');
    //         $('.sumbit-button-container').addClass('ps-0');
    //         $('.submit-button').addClass('w-100');
    //         $('.submit-button').addClass('mt-3');
    //       } else {
    //         $('.tahun-container').removeClass('pe-0');
    //         $('.mapel-container').removeClass('mt-3');
    //         $('.mapel-container').removeClass('px-0');
    //         $('.mapel-container').removeClass('w-100');
    //         $('.sumbit-button-container').removeClass('w-100');
    //         $('.sumbit-button-container').removeClass('ps-0');
    //         $('.submit-button').removeClass('w-100');
    //         $('.submit-button').removeClass('mt-3');
    
    //       }
    
    //     });
    </script>
@endpush