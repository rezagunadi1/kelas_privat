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
<meta property="og:type" content="aplikasi">
<meta property="og:url" content="https://kelas-privat.com">
@endpush



@section('content')
  
{{-- <div class="mt-3 p-3 p-md-5f my-auto rounded" style=' background-image: url("/assets/img/edu.jpg"); background-repeat: no-repeat;
background-position: right;
background-size: 100% 100%;
  -webkit-background-size: strech;
  -moz-background-size: strech;
  -o-background-size: strech;
  background-size: strech;'>
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
</div> --}}
<div class="mx-auto mt-4 mb-3">
    <div class="text-center fs-1" style="-webkit-text-stroke: 1px black; font-weight:600; color:black">
        Kebijakan Privasi
    </div>
    <div class="mt-2 text-left fs-5">
        {{-- <div class="fw-bold">

            Kebijakan Privasi
        </div> --}}
        <br>
        <br>
        Aplikasi Kelas Privat dimiliki oleh kelas-privat.com, yang akan menjadi pengontrol atas data pribadi Anda.
        <br>
        Kami telah mengadopsi Kebijakan Privasi ini untuk menjelaskan bagaimana kami memproses informasi yang dikumpulkan oleh Kelas Privat, yang juga menjelaskan alasan mengapa kami perlu mengumpulkan data pribadi tertentu tentang Anda. Oleh karena itu, Anda harus membaca Kebijakan Privasi ini sebelum menggunakan aplikasi Kelas Privat.
        <br>
        <br>
        <div class="text-center fst-italic">

            Kami menjaga data pribadi Anda dan berjanji untuk menjamin kerahasiaan dan keamanannya.
        </div>
        <br>

        Informasi pribadi yang kami kumpulkan:
        Saat Anda mendaftarkan perangkat Kelas Privat yang anda miliki pada aplikasi Kelas Privat, kami secara otomatis mengumpulkan informasi tertentu mengenai data suhu tubuh, kadar keringat, detak jantung dan lokasi anak Anda. Selain itu, selama Anda menggunakan Aplikasi. Kami menyebut informasi yang dikumpulkan secara otomatis ini sebagai "Informasi Perangkat". Kemudian, kami mungkin akan mengumpulkan data pribadi yang Anda berikan kepada kami (termasuk tetapi tidak terbatas pada, diri Anda, termasuk informasi nama, email, nomor ponsel, dll.) selama pendaftaran untuk dapat memenuhi perjanjian.
        <br>
        <br>

        Mengapa kami memproses data Anda?
        Menjaga data pelanggan agar tetap aman adalah prioritas utama kami. Oleh karena itu, kami hanya dapat memproses sejumlah kecil data pengguna, sebanyak yang benar-benar diperlukan untuk menjalankan aplikasi. Informasi yang dikumpulkan secara otomatis hanya digunakan untuk mengidentifikasi kemungkinan kasus penyalahgunaan dan menyusun informasi statistik terkait penggunaan aplikasi. Informasi statistik ini tidak digabungkan sedemikian rupa hingga dapat mengidentifikasi pengguna tertentu dari sistem.
        <br>
        <br>

        Anda dapat mengunjungi aplikasi tanpa memberi tahu kami identitas Anda atau mengungkapkan informasi apa pun, yang dapat digunakan oleh seseorang untuk mengidentifikasi Anda sebagai individu tertentu yang dapat dikenali. Namun, jika Anda ingin menggunakan beberapa fitur aplikasi, atau menerima dan memberikan detail lainnya anda diharuskan untuk mengisi formulir, Anda dapat memberikan data pribadi kepada kami, seperti email, nama lengkap dan nomor telepon Anda. Anda dapat memilih untuk tidak memberikan data pribadi Anda kepada kami, tetapi Anda mungkin tidak dapat memanfaatkan fitur aplikasi. Contohnya, Anda tidak akan dapat menghubungkan dan menerima data dari perangkat pada aplikasi. Pengguna yang tidak yakin tentang informasi yang wajib diberikan dapat menghubungi kami melalui rezagunadi97@gmail.com.
        <br>
        <br>

        <div class="fw-bold">

            Hak-hak Anda:
        </div>
        <br>
        Jika Anda seorang warga indonesia, Anda memiliki hak-hak berikut terkait data pribadi Anda:
        <br>
        <div class="fw-light">
            • Hak untuk mendapatkan penjelasan.
        </div>
        <div class="fw-light">
            • Hak atas akses.
        </div>
        <div class="fw-light">
            • Hak untuk memperbaiki.
        </div>
        <div class="fw-light">
            • Hak untuk menghapus.
        </div>
        <div class="fw-light">
            • Hak untuk membatasi pemrosesan.
        </div>
        <div class="fw-light">
            • Hak atas portabilitas data.
        </div>
        <div class="fw-light">
            • Hak untuk menolak.
        </div>
        <div class="fw-light">
            • Hak-hak terkait pengambilan keputusan dan pembuatan profil otomatis.
        </div>


        <br>
        <br>







        Jika Anda ingin menggunakan hak ini, silakan hubungi kami melalui informasi kontak di bawah ini.
        <br>
        <br>
{{-- 
        Selain itu, jika Anda seorang warga Indonesia, perlu diketahui bahwa kami akan memproses informasi Anda untuk memenuhi kontrak yang mungkin kami miliki dengan Anda (misalnya, jika Anda melakukan pemesanan melalui aplikasi), atau untuk memenuhi kepentingan bisnis sah kami seperti yang tercantum di atas. Di samping itu, harap diperhatikan bahwa informasi Anda mungkin dapat dikirim ke luar Indonesia, termasuk Kanada dan Amerika Serikat.
        <br> --}}

        Link ke aplikasi lain:
        aplikasi kami mungkin berisi tautan ke aplikasi lain yang tidak dimiliki atau dikendalikan oleh kami. Perlu diketahui bahwa kami tidak bertanggung jawab atas praktik privasi aplikasi lain atau pihak ketiga. Kami menyarankan Anda untuk selalu waspada ketika meninggalkan aplikasi kami dan membaca pernyataan privasi setiap aplikasi yang mungkin mengumpulkan informasi pribadi.
        <br>
        <br>

        Keamanan informasi:
        Kami menjaga keamanan informasi yang Anda berikan pada server komputer dalam lingkungan yang terkendali, aman, dan terlindungi dari akses, penggunaan, atau pengungkapan yang tidak sah. Kami menjaga pengamanan administratif, teknis, dan fisik yang wajar untuk perlindungan terhadap akses, penggunaan, modifikasi, dan pengungkapan tidak sah atas data pribadi dalam kendali dan pengawasannya. Namun, kami tidak menjamin tidak akan ada transmisi data melalui Internet atau jaringan nirkabel.
        <br>
        <br>

        Pengungkapan hukum:
        Kami akan mengungkapkan informasi apa pun yang kami kumpulkan, gunakan, atau terima jika diwajibkan atau diizinkan oleh hukum, misalnya untuk mematuhi panggilan pengadilan atau proses hukum serupa, dan jika kami percaya dengan itikad baik bahwa pengungkapan diperlukan untuk melindungi hak kami, melindungi keselamatan Anda atau keselamatan orang lain, menyelidiki penipuan, atau menanggapi permintaan dari pemerintah.
        <br>
        <br>

        Informasi kontak:
        Jika Anda ingin menghubungi kami untuk mempelajari Kebijakan ini lebih lanjut atau menanyakan masalah apa pun yang berkaitan dengan hak perorangan dan Informasi pribadi Anda, Anda dapat mengirim email ke rezagunadi97@gmail.com.
    </div>
</div>

{{-- <div class="mx-auto mb-5">

    <div class="row">
        <div class="col text-center shadow rounded py-3">
            <a href="https://api.whatsapp.com/send?phone=6281211006445&text=Halo%20nama%20saya%20......%20saya,%20mau%20tanya%20terkait">
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
        <div class="col text-center shadow rounded py-3 nav-materi">
            <div class="bg-primary mb-3 fs-6" style="-webkit-text-stroke: 1px gold; font-weight:600; color:yellow; border-radius:12px;">
                <div>
                    Pengembangan
                </div>
                <div>
                    Bakat
                </div>
            </div>
            <i class="bi bi-cpu fs-1"></i>
             <i class="bi bi-browser-safari fs-1"></i> 
        </div>
        <div class="col text-center shadow rounded py-3 nav-materi">
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
        <div class=" reveal fade-bottom px-0 pb-md-3 pb-1">
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
        <div class=" reveal fade-left">
            <div class="row">
                @for($i = 1; $i < 13; $i++)
                    
                <div class="col-4 px-0" style="border-radius:8%; background:white;">
                    <img src='{{ URL::To("assets/img/testi/k$i.jpg") }}' class="img-fluid" style="border-radius:8%; height: auto; padding:1%" alt="">
                </div>
                @endfor
            </div>
        </div>
      </section>
      
      <section>
        <div class="container reveal fade-right">
         
        </div>
      </section> --}}
  
</div>
@endsection

@push('css')
{{-- <style>
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
</style> --}}
@endpush
@push('script')
    {{-- <script>
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
    </script> --}}
@endpush