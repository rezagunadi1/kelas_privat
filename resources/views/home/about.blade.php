@extends('layouts.app')


@push('meta')
    
    
<meta name="title" content="Kelas Privat - Les Privat Terbaik">
<meta name="description" content="Les Privat terbaik berkualitas dan responsive">
<meta name="keywords" content="Kelas Privat, latihan soal, pendalaman matri, Les Privat, olimpiade, berita seputar pendidikan">
<meta property="og:title" content="Kelas Privat: Les Privat Terbaik">
<meta property="og:description" content="latihan soal, pendalaman matri, Les Privat, olimpiade dan berita seputar pendidikan">
<meta property="og:site_name" content="Kelas Privat: Les Privat Terbaik">

<meta property="og:image" content="https://kelas-privat.com/assets/img/logo.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">
<meta property="og:url" content="https://kelas-privat.com">
@endpush



@section('content')
  
<div class="mt-3 pb-3 px-3 my-auto text-center s28-500 align-bottom shadow" style='color:rgb(195, 202, 247); -webkit-text-fill-color: rgb(190, 190, 247); -webkit-text-stroke: 1.3px black; background: white; border-radius: 12px;background-image: url("/assets/img/upgrade.gif");  padding-top: 255px;
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;'>
    Kelas privat merupakan lembaga pendidikan les privat yang berfokus pada perkembangan belajar siswa.
</div>
<div class="mx-auto mt-4 mb-3 text-center">
    <img src="{{ URL::To('/assets/img/management.png') }}" class="img-fluid" alt="">
    <div class="text-center fs-1" style="-webkit-text-stroke: 1px black; font-weight:600; color:blue">
        KELAS PRIVAT
    </div>
    <div class="mt-2 text-center fs-5">
        Kelas privat hadir sebagai solusi bagi orangtua serta siswa yang membutuhkan les privat dengan konsultasi rutin dan diskusi mengenai permasalahan belajar anak serta kiat kiat belajar agar hasil yang didapatkan maksimal. 
    </div>
</div>
<div class="mx-auto my-5">

      
      <section>
        <div class="container reveal fade-left">
            <div class="row justify-content-center">
                <div class="col-auto bg-light p-3 rounded-pill mx-3 my-2">
                    <img src="{{ URL::To('/assets/img/ui.png') }}" class="" style="height: 80px; width:80px;" alt="">
                </div>
                <div class="col-auto bg-light p-3 rounded-pill mx-3 my-2">
                    <img src="{{ URL::To('/assets/img/gundar.png') }}" class="" style="height: 80px; width:80px;" alt="">
                </div>
                <div class="col-auto bg-light p-3 rounded-pill mx-3 my-2">
                    <img src="{{ URL::To('/assets/img/ipb.png') }}" class="" style="height: 80px; width:80px;" alt="">
                </div>
                <div class="col-auto bg-light p-3 rounded-pill mx-3 my-2">
                    <img src="{{ URL::To('/assets/img/itb.png') }}" class="" style="height: 80px; width:80px;" alt="">
                </div>
                <div class="col-auto bg-light p-3 rounded-pill mx-3 my-2">
                    <img src="{{ URL::To('/assets/img/uin.png') }}" class="" style="height: 80px; width:80px;" alt="">
                </div>
            </div>
        </div>
      </section>
      
      <section>
        <div class="container reveal fade-bottom text-center s28-500">
            Kelas privat memiliki tutor tutor pengajar yang berkompeten serta menggunakan metode metode pembelajaran khusus yang sesuai dengan kriteria masing masing siswa
        </div>
      </section>
      <section>
        <div class="container reveal fade-right text-center">
            <div class="row">

                <div class="col-auto mx-auto text-center">
                    <a href="https://api.whatsapp.com/send?phone=6281211006445&text=Halo%20nama%20saya%20......%20saya,%20mau%20tanya%20terkait">
                        <div class="p-3 mb-5 col-auto  text-center" style='color: white;margin-top:-40px; background: rgb(43, 0, 255); border-radius: 12px;width:220px'>
                            KELAS PRIVAT
                        </div>
                    </a>
                </div>
            </div>
        </div>
      </section>
  
</div>
<div class="py-3"></div>
@endsection

@push('css')
<style>
    .stroke{
        
        -webkit-text-stroke: 1px black;
    }
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
<style>
    /* @import url("https://fonts.googleapis.com/css2?family=Asap&display=swap");
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Asap", sans-serif;
        }
        body {
        background: #42455a;
        } */
        section {
        min-height:20vh;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        /* section:nth-child(1) {
        color: #e0ffff;
        }
        section:nth-child(2) {
        color: #42455a;
        background: #e0ffff;
        }
        section:nth-child(3) {
        color: #e0ffff;
        }
        section:nth-child(4) {
        color: #42455a;
        background: #e0ffff;
        }
        section .container {
        margin: 100px;
        }
        section h1 {
        font-size: 3rem;
        margin: 20px;
        }
        section h2 {
        font-size: 40px;
        text-align: center;
        text-transform: uppercase;
        }
        section .text-container {
        display: flex;
        }
        section .text-container .text-box {
        margin: 20px;
        padding: 20px;
        background: #00c2cb;
        }
        section .text-container .text-box h3 {
        font-size: 30px;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 10px;
        }

        @media (max-width: 900px) {
        section h1 {
            font-size: 2rem;
            text-align: center;
        }
        section .text-container {
            flex-direction: column;
        } */
        /* } */

        .reveal {
        position: relative;
        opacity: 0;
        }

        .reveal.active {
        opacity: 1;
        }
        .active.fade-bottom {
        animation: fade-bottom 1s ease-in;
        }
        .active.fade-left {
        animation: fade-left 1s ease-in;
        }
        .active.fade-right {
        animation: fade-right 1s ease-in;
        }
        @keyframes fade-bottom {
        0% {
            transform: translateY(50px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
        }
        @keyframes fade-left {
        0% {
            transform: translateX(-100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
        }

        @keyframes fade-right {
        0% {
            transform: translateX(100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
        }
</style>
@endpush
@push('script')
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
                } else {
                reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>
    <script>
        let colors = ['red','pink','coral','orange','yellow','green'];

        let i= 0;

        function changeColor(){ 
            
      $('#colorChange1').css('color',  colors[i]); 
            i++;
            if (i >= colors.length) {
                i = 0;
            }
        }

        window.setInterval(changeColor,700 );
    </script>
@endpush