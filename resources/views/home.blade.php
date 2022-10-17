@extends('layouts.app')
@section('content')
  
<div class="mt-3 p-3 my-auto rounded" style=' background-image: url("/assets/img/bg-blue.jpg")'>
    <div class="fs-2 fw-bold col-12 mx-auto text-center stroke" id="colorChange1">
        Fasilitas Gratis 
    </div>
    <div class="row justify-content-center">
        <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px black; font-weight:500; color:white">
            ⦿ Akses Ribuan Soal Latihan
        </div>
        <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px black; font-weight:500; color:white">
            ⦿ Les / Tanya PR via WA
        </div>
        <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px black; font-weight:500; color:white">
            ⦿ Re-Schedule jadwal
        </div>
        <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px black; font-weight:500; color:white">
            ⦿ Beasiswa pendaftaran lomba & Olimpiade
        </div>
        <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px black; font-weight:500; color:white">
            ⦿ Konsultasi via WA
        </div>
    </div>
</div>
<div class="mx-auto mt-4 mb-3">
    <div class="text-center fs-1" style="-webkit-text-stroke: 1px black; font-weight:600; color:blue">
        KELAS PRIVAT
    </div>
    <div class="mt-2 text-center fs-5">
        Jasa Guru Les Privat KELAS PRIVAT, memberikan Jasa Guru Les Privat datang ke rumah dan online.
    </div>
</div>

<div class="mx-auto mb-5">

    <div class="row">
        <div class="col text-center shadow rounded py-3">
            <a href="{{ URL::route('practice') }}">
                <div class="bg-primary mb-3 fs-6" style="-webkit-text-stroke: 1px gold; font-weight:600; color:yellow; border-radius:12px;">
                    <div>
                        Bimbingan
                    </div>
                    <div>
                        Olimpiade
                    </div>
                </div>
                <i class="bi bi-award fs-1"></i>
            </a>
        </div>
        <div class="col text-center shadow rounded py-3">
            <a href="{{ URL::route('practice') }}">
                <div class="bg-primary mb-3 fs-6" style="-webkit-text-stroke: 1px gold; font-weight:600; color:yellow; border-radius:12px;">
                    <div>
                        Bimbingan
                    </div>
                    <div>
                        Belajar
                    </div>
                </div>
                <i class="bi bi-journal-richtext fs-1"></i>
            </a>
        </div>
        <div class="col text-center shadow rounded py-3">
            <div class="bg-primary mb-3 fs-6" style="-webkit-text-stroke: 1px gold; font-weight:600; color:yellow; border-radius:12px;">
                <div>
                    Pengembangan
                </div>
                <div>
                    Bakat
                </div>
            </div>
            <i class="bi bi-cpu fs-1"></i>
            {{-- <i class="bi bi-browser-safari fs-1"></i> --}}
        </div>
        <div class="col text-center shadow rounded py-3">
            <div class="bg-primary mb-3 fs-6" style="-webkit-text-stroke: 1px gold; font-weight:600; color:yellow; border-radius:12px;">
                <div>
                    Pendalaman
                </div>
                <div>
                    Materi
                </div>
            </div>
            <i class="bi bi-book-half fs-1" ></i>
        </div>
    </div>
</div>
<div class="mx-auto">

      <section>
        <div class="container reveal fade-bottom px-0 pb-md-3 pb-1">
            <div class="row shadow rounded p-3">
                <div class="col-md-6 col-12 my-auto">
                    
                    <div class="col-md-auto col-12 mb-3 fs-1" style="-webkit-text-stroke: 1px blue; font-weight:600; color: GOLD">
                        Kami Merencanakan
                    </div>
                    <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px blue; font-weight:500; color: blue">
                        ⦿ Metode Belajar
                    </div>
                    <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px blue; font-weight:500; color: blue">
                        ⦿ Perkembangan & Prestasi
                    </div>
                    <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px blue; font-weight:500; color: blue">
                        ⦿ Pemahaman Mendalam
                    </div>
                    <div class="col-md-auto col-12 fs-4" style="-webkit-text-stroke: 1px blue; font-weight:500; color: blue">
                        ⦿ Minat & Bakat
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img src="{{ URL::To('assets/img/guru-belajar.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
      </section>
      
      <section>
        <div class="container reveal fade-left">
        </div>
      </section>
      
      <section>
        <div class="container reveal fade-right">
         
        </div>
      </section>
  
</div>
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
        min-height:40vh;
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