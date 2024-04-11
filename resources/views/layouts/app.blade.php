<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <meta name="description" content=""> --}}
    {{-- <meta name="author" content="reza gunadi, ayo indonesia"> --}}
    {{-- <meta name="generator" content="Hugo 0.88.1">
    {{-- <title>Ayo Indonesia | Platform penghubung untuk kamu yang suka olahraga</title> --}}
    @stack('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (!empty($title))
    
    <title>{{ $title }}</title>
    @else
    <title>{{ config('app.name', 'Laravel') }}</title>
        @php
            $title=config('app.name', 'Laravel');
        @endphp
    @endif
    @php
        if ($title == 'Kelas Privat' || $title == 'KELAS PRIVAT' ) {
            # code...
            $background = '#F8F8F8';
        } else {
            $background = '#E5E5E5';
            # code...
        }
        
    @endphp
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ URL::To('/assets/img/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
    @stack('css') 
    <style>
        body
        {
          /* font-family: 'Rubik', sans-serif; */
          font-family: 'Rubik';
        }
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        a{
            text-decoration: none;
        }
        body{
            background-color: {{ $background }};
        }
        
        .side-bar.active {
          color: #1A237E!important;
          text-stroke: 6px #000000!important;
      font-weight: 700!important;
      text-stroke: 6px #FCE4EC;
        }
    .active {
      font-weight: 600!important;
      text-stroke: 6px #1A237E;
    }
    

    </style>
  
      
      <!-- Custom styles for this template -->
    <link href="{{ URL::To('/assets/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ URL::To('/assets/css/texting.css') }}" rel="stylesheet">

</head>
<header class="navbar navbar-light sticky-top col-md-9 mx-auto bg-gradient flex-md-nowrap p-0 " style="background-color: #ffffff">
{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> --}}
    
    @include('partial.navbar')
    @include('layouts.flash')

  </header>
<body>
    <div id="app" class="container-fluid">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <div class="row">
            @include('partial.side-bar')
            @yield('content-top')
            <main class="col-11 mx-auto col-lg-10 px-0 h-100" style="background-color: {{ $background }}">
                {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">

                 </div> --}}
                @yield('content')

            </main>
        </div>
        
    <a href="https://api.whatsapp.com/send?phone=6281211006445&text=Halo%20nama%20saya%20......%20saya,%20mau%20tanya%20terkait">
        <img src="{{ URL::To("/assets/img/WhatsApp_icon_new.png") }}" style="position: fixed; bottom: 2%; right:2%; width:230px;" alt="">
    </a>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  
    {{-- CKEditor JS --}}
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    
    @stack('script')
    {{-- @push('script') --}}
        <script>
          $('#button-block').click(function() {
            alert( "Silahkan Login untuk Melanjutkan" );
          });
          $('#button-not-nomer').click(function() {
            alert( "Anda belum melengkapi data profile, silahkan ke manu profile untuk melengkapi" );
          });
          $('#button-not-siswa').click(function() {
            alert( "Anda belum terdaftar sebagai siswa kelas privat, silahkan menghubungi kami untuk pendaftaran di 0812-1100-6445" );
          });
          $(window).bind('DOMContentLoaded load resize', function() {
          //   var pembagi =6500/$(window).innerWidth();
          // var margin = $(window).innerWidth()/pembagi;
          // // var pengurang =$(window).innerWidth()/1.3;
          // // var margin = $(window).innerWidth()-pengurang;
          // $('.nav-button').css('margin-left', margin+'px');
          if ($(window).innerWidth() <= 777) {
    
            $('.s24-500').addClass('s16-500');
            $('.s36-500').addClass('s17-500');
            $('.s16-400').addClass('s14-400');
            $('.s12-400').addClass('s8-400');
            $('.s12-500').addClass('s8-500');
            $('.s24-500').removeClass('s24-500');
            $('.s36-500').removeClass('s36-500');
            $('.s16-400').removeClass('s16-400');
            $('.s12-400').removeClass('s12-400');
            $('.s12-500').removeClass('s12-500');
            $('.foto').css('max-width', '100%');
            $('.foto').css('height', 'auto');
            $('.foto').css('max-height', '');
            $('.cover-img').css('height', $(window).innerWidth()/4);
            $('.mobile').css('display', 'block');
          } else {
            $('.s16-500').addClass('s24-500');
            $('.s17-500').addClass('s36-500');
            $('.s14-400').addClass('s16-400');
            $('.s8-400').addClass('s12-400');
            $('.s8-500').addClass('s12-500');
            $('.s16-500').removeClass('s16-500');
            $('.s17-500').removeClass('s17-500');
            $('.s14-400').removeClass('s14-400');
            $('.s8-400').removeClass('s8-400');
            $('.s8-500').removeClass('s8-500');
            $('.cover-img').css('height', '200px');
            $('.foto').css('max-width', '150px');
            $('.foto').css('height', 'auto');
            $('.foto').css('max-height', '150px');
            $('.mobile').css('display', 'none');
    
          }
    
        });
        </script>
        
<script>
    
    var title = '<?php echo $title; ?>';
    
    if (title == 'Kelas News') {
        $(".nav-bar").removeClass('active');
        $(".nav-news").addClass('active');
    }
    if (title == 'Tanya Kelas') {
        $(".nav-bar").removeClass('active');
        $(".nav-tanya-kelas").addClass('active');
    }
    if (title == 'Profile SiLas') {
        $(".nav-bar").removeClass('active');
        $(".nav-Profile").addClass('active');
    }
    if (title == 'Reward') {
        $(".nav-bar").removeClass('active');
        $(".nav-Reward").addClass('active');
    }
    if (title == 'Latihan Soal SiLas') {
        $(".nav-bar").removeClass('active');
        $(".nav-Practice").addClass('active');
    }
    if (title == 'Award') {
        $(".nav-bar").removeClass('active');
        $(".nav-Award").addClass('active');
    }
    if (title == 'About Kelas Privat') {
        $(".nav-bar").removeClass('active');
        $(".nav-About").addClass('active');
    }
    if (title == 'List Soal') {
        $(".nav-bar").removeClass('active');
        $(".nav-buatSoal").addClass('active');
    }
    if (title == 'Latihan Soal SiLas') {
        $(".nav-bar").removeClass('active');
        $(".nav-Practice").addClass('active');
    }
    if (title == 'Materi SiLas') {
        $(".nav-bar").removeClass('active');
        $(".nav-materi").addClass('active');
    }
    if (title == 'Create Materi') {
        $(".nav-bar").removeClass('active');
        $(".nav-create-materi").addClass('active');
    }
    
    // $('.nav-materi').click(function() {
    //     alert( "Coming soon" );
    //   });
    // $(document).ready(function(){
    //     $('img').error(function(){
    //         $(this).attr('src', 'https://ayo.co.id/backend/assets/images/avatar-default.jpg');
    //     });
    // });
</script>
    {{-- @endpush --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</body>
</html>
