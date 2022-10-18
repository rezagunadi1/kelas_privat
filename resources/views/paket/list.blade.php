@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Latihan Soal Online">
<meta name="description" content="Latihan soal gratis dilengkapi auto koreksi">
<meta name="keywords" content="Kelas Privat, latihan soal gratis, auto koreksi soal, soal dan jawaban, latihan soal dan jawaban,">
<meta property="og:title" content="Kelas Privat - Latihan Soal Online">
<meta property="og:description" content="Latihan soal gratis dilengkapi auto koreksi">
<meta property="og:site_name" content="Kelas Privat: Latihan Soal Online">

<meta property="og:image" content="https://kelas-privat.com/assets/img/logo.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current(); }}">
@endpush



@section('content')
    
    <div class="col-11 mx-auto mt-3">
        <div class="row justify-content-between">
            <div class="col h2">List Paket Soal</div>
            <div class="col-auto">
                <a href="{{ URL::route("create_paket") }}">

                    <button type="button" class="btn btn-sm btn-success mb-md-3 mb-2 bayangan" style="border-radius: 8px">
                        {{-- <span data-feather="calendar"></span> --}}
                        <i class="bi bi-cloud-plus me-1"></i>
                        Buat Paket 
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-11 mx-auto  bg-light my-md-3 my-1 rounded p-md-4 p-2">
        <div class="row pb-2">
            <div class="col" style="border-right: 2px black solid; font-weight:500">
                Nama
            </div>
            <div class="col-3" style="border-right: 2px black solid; font-weight:500">
                Status
                
            </div>
            <div class="col-2" style=" font-weight:500">
                Action
            </div>
            
        </div>
        @if (!empty($paket))
            
            @foreach ($paket as $item)
                <div class="row">
                
                    <div class="col" style="border-right: 1px black solid;">
                        {{ $item->name }}
                    </div>
                    <div class="col-3" style="border-right: 1px black solid;">
                        @if ( $item->is_public == 1)
                            Public
                        @else
                            Privat
                        @endif
                        
                    </div>
                    <div class="col-2">
                        <a href="{{ URL::route("edit_paket", $item->id) }}">

                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="{{ URL::route("delete_paket", $item->id) }}">

                            <i class="bi bi-trash3"></i>
                        </a>
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