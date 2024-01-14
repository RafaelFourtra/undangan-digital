<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, " ; />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Template 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/tema3/css/mm-masonry.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/tema3/css/anim.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    html,
    body {
        overflow-x: hidden;
    }

    body {
        position: relative;
    }

    p,
    span {
        font-family: "Merriweather";
    }

    h1,
    h2,
    h3 {
        font-family: "Great Vibes";
    }

    .time-card {
        margin: 10px;
        background-color: rgb(2, 54, 33);
        padding: 10px;
        color: white;
        border-radius: 10px;
        font-family: "Times New Roman", Times, serif !important;
    }

    .backdrop-main {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        animation: imagetrans 2s ease-in-out;
        filter: brightness(0.6);
        left: 0px;
    }

    .container-content {}

    .title-container {
        top: 33%;
        position: absolute;
        color: white;
        display: block;
        z-index: 30;
    }

    .main-title {
        font-size: 55pt;
        font-family: "Great Vibes";
    }

    #backdrop-collider {
        background-color: rgb(0, 217, 255);
        width: inherit;
        height: 100%;
        position: fixed;
        z-index: 2;

    }

    #backdrop-section {
        position: relative;
    }

    #open-invitation {
        color: rgb(255, 255, 255);
        z-index: 100;
        text-decoration: none;
        padding: 10px 20px;
        background-color: rgb(10, 97, 29);
        border-radius: 10px;
    }

    .date-title {
        font-size: 15pt;
        font-family: "Merriweather";
    }

    .ornament-container {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: clip;
    }

    .ornament-flower-2 {
        position: absolute;
        width: 300px;
        z-index: 20;
        left: -100px;
        bottom: -50px;
        animation: floating2 10s linear alternate-reverse infinite;
    }

    .clouds {
        bottom: -100px;
        left: -400px;
        z-index: 10;
    }

    @keyframes floating2 {

        0%,
        100% {
            transform: translate(0px, 0px) scale(1);
        }

        30% {
            transform: translate(10px, 10px) scale(1.05);
        }

        30% {
            transform: translate(-20px, -10px) scale(1.1);
        }

        70% {
            transform: translate(-10px, 20px);
        }
    }

    @media (max-width: 768px) {
        .elem {
            max-width: 100%;
            /* Ubah lebar maksimum elemen menjadi 100% pada perangkat mobile */
        }

        #open-invitation {
            display: unset;
        }

        html {
            overflow: hidden;
        }

        .backdrop-fixer {
            left: 0px;
        }

        .title-container {
            top: 30%
        }

    }

    @media (min-width: 769px) {
        #open-invitation {
            display: none;
        }

        #backdrop-collider {
            top: 0px;
            display: unset;
        }
    }

    @keyframes hiddenCard {
        0% {
            top: 0px;
        }

        100% {
            top: -200%;
            display: none;
        }
    }

    @keyframes floating {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .hidden-card {
        animation: hiddenCard 2s ease-in-out;
    }

    .couple-img {
        width: 80%;
        height: 300px;
        object-fit: cover;
        border-radius: 50px;
    }

    .container-couple {}

    .ornament-flower {
        width: 200px;
        position: absolute;
        left: -40px;
        bottom: -50px;
        animation: floating 5s infinite;
    }

    .btn-instagram {
        background-color: rgb(0, 66, 32);
        color: white;
        padding: 10px;
        border-radius: 10px;
        transition: 1s;

    }

    .protocol-card {
        background-color: rgb(0, 59, 43);
        margin: 10px;
        color: white;
        border-radius: 20px;
        display: block;
        height: 200px;
        padding: 10px;
    }

    .protocol-card img {
        mix-blend-mode: screen;
        width: 50px;
        margin: 10px;
        margin-top: 20%;
    }

    .form-control,
    .form-select {
        background-color: rgba(255, 255, 255, 0.293);
        border: 1px solid rgba(0, 79, 18, 0.571)
    }

    .chat-row {
        background-color: rgba(255, 255, 255, 0.356);
        padding: 10px;
        border-radius: 30px;
        border-radius: 10px;
        backdrop-filter: blur(2px);
    }

    .pp {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .btn-primary {
        background-color: #ffffff12;
        border: none;
        border-radius: 10px;
        font-family: "Merriweather", serif;
        padding: 10px 20px;
        border: 2px solid rgba(0, 79, 18, 0.461);
        color: rgb(0, 79, 19);
    }

    .backdrop-fixer {
        width: inherit;
        position: fixed;
        opacity: 0.2;
        filter: blur(5px);
        z-index: -2;
        height: 100vh;
        top: 0px;
    }

    .image-gallery-trans2 {
        display: unset;
        animation: imageAnim2 3s ease-in-out both;
    }

    .gallery-container .col-lg-4 {}

    @keyframes imageAnim2 {
        0% {
            transform: translateX(100px) translateY(200px) scale(0.1);
            opacity: 0;
        }

        100% {
            transform: translateX(0px) translateY(0px) scale(1);
            opacity: 1;
        }
    }

    .bottom-to-top {
        animation: bottomToTop 2s ease-in-out;
    }

    @keyframes bottomToTop {
        0% {
            opacity: 0;
            margin-top: 100px
        }

        100% {
            opacity: 1;
            margin-left: 0px;
        }
    }

    .d-flex {
        border: 2px solid #000;
    }

    .d-flex picture {
        width: 300px;
        flex: auto;
        cursor: pointer;
        border: 2px solid #000;

    }

    @media (min-width: 992px) {
        .w-lg-50 {
            width: 50% !important;
        }
    }

    .carousel-item img {
        border-radius: 20px !important;
        display: none;
    }

    .image-gallery-trans {
        animation: imageAnim 3s cubic-bezier(.25, .46, .45, .94) both;
    }

    @keyframes imageAnim {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes rotateImage {
        0% {
            opacity: 0;
            transform: scale(0);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .rotate-image {
        animation: rotateImage 2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: rgb(13, 103, 30);
        border: 2px solid rgba(0, 79, 18, 0.461);
    }

    .btn-instagram:hover {
        color: white;
        padding: 12px;
    }

    .form-control:focus {
        border: 2px solid rgb(13, 103, 30);
        box-shadow: none !important;
        background-color: rgb(255, 255, 255, 0.5) !important
    }

    #disk-player {
        z-index: 100;
        position: fixed;
        left: 10px;
        bottom: 10px;
        width: 50px;
    }

    .spining {
        animation: spining 2s linear infinite;
    }

    @keyframes spining {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(720deg);
        }
    }

    .btn-white {
        background-color: white !important;
        border-radius: 20px;
        transition: .2s;
    }

    .btn-white:hover {
        transform: scale(1.2);
    }

    #gallery {
        -webkit-column-count: 5;
        /* split it into 5 columns */
        -webkit-column-gap: 5px;
        /* give it a 5px gap between columns */
        -moz-column-count: 5;
        -moz-column-gap: 5px;
        column-count: 2;
        column-gap: 5px;
    }

    #gallery img {
        width: 100% !important;
        max-height: 200px;
        margin-bottom: 5px;
        /* to match column gap */
        object-fit: cover;
        height: 151px;
    }

    #gallery img:nth-last-child(1) {
        /* Apply your styles here */
        /* For example, changing border or opacity */
        height: 151px;
    }

    .flip-2-hor-top-1 {
        -webkit-animation: flip-2-hor-top-1 0.5s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
        animation: flip-2-hor-top-1 0.5s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
    }

    html::-webkit-scrollbar {
        display: none;
    }

    .btn-submit-rsvp {
        border: 0px;
        width: 100%;
        margin-top: 20px;
        padding: 8px;
        border-radius: 10px;
        background: rgb(0, 66, 32);
        color: white;
        transition: .2s;
    }

    .btn-submit-rsvp:hover {
        background-color: rgb(255, 255, 255);
        color: rgb(0, 66, 32);
    }

    .input-rsvp-cont {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .input-rsvp-cont .btn-number {
        height: 40px;
        width: 40px;
        border: 0px;
        border-radius: 50%;
        background-color: #004220;
    }
</style>
</head>

<body>
    <div class="row" id="content-all">
        <div class="col-md-7" id="backdrop-section">
            <div class="" id="backdrop-collider">
                <audio controls autoplay class="d-none" id="music-audio">
                    <source
                        src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '/tema3/music/music-1.mp3') : '/tema3/music/music-1.mp3' }}"
                        type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
                <img src="/tema3/img/vinyl.png" alt="" id="disk-player" class='spining' onclick="toggleMusic()">
                <img src="{{ asset('images/sampul/' . $informasiacara->sampul) }}" alt=""
                    class="backdrop-main" />
                <div class="container text-center title-container animated" anim="slide-down">
                    <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
                    <h1 class="main-title" id="">{{ $mempelai ? $mempelai->namalaki : '' }} &
                        {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
                    <h4 class="text-center date-title">{{ $afterConvertDay ? $afterConvertDay : '' }},
                        {{ $tanggalAcara ? $tanggalAcara : '' }}</h4>
                    <p>To: <br>{{ $namaTamu }}</p>
                    <div class="d-block p-3">
                        <a class="p-3" href="#content-main" id="open-invitation">Open Invitation</a>
                    </div>
                </div>
                <div class="ornament-container">
                    <img src="/tema3/img/img8.png" alt="" style="mix-blend-mode: screen"
                        class="position-absolute clouds" width="1000px" />
                    <img src="/tema3/img/img8.png" alt="" style="mix-blend-mode: screen"
                        class="position-absolute clouds" width="200px" />

                    <img src="/tema3/img/img8.png" alt="" style="mix-blend-mode: screen"
                        class="position-absolute clouds" width="500px" />
                    <img src="/tema3/img/img8.png" alt="" style="mix-blend-mode: screen"
                        class="position-absolute clouds" width="200px" />
                    <img src="/tema3/img/flower4.png" alt="" class="ornament-flower-2" />
                    <img src="/tema3/img/flower4.png" alt="" class="ornament-flower-2"
                        style="left: unset; right: -100px; transform: scale(-1)" />
                </div>
            </div>
        </div>
        <div class="col-md-5 position-relative p-0">
            <img src="/tema3/img/backdrop1.jpeg" alt="" class="backdrop-fixer" />
            <div class="container-content">
                <!-- Title-->
                <div class="container ">
                    <div class="col-12 text-center position-relative p-0 animated" anim="fades">
                        <img src="/tema3/img/img7.png" alt="" style="width: 90%; margin-top: 2px;">
                        <img src="/tema3/img/img2.png" class="" width="300px" />
                        <div class="fade-in mb-3">

                            <img src="{{ asset('images/pembuka/' . $informasiacara->pembuka) }}"
                                class="position-absolute" width="212px" height="237px"
                                style="transform: translate(-102px, -245px); border-radius: 400px; object-fit: cover;">
                        </div>
                        <h5 class="wedding-invitation mt-3 mb-3">WEDDING INVITATION</h5>
                        <h2 class="fade-in" style="font-size: 40pt">{{ $mempelai ? $mempelai->namalaki : '' }} &
                            {{ $mempelai ? $mempelai->namaperempuan : '' }}</h2>
                        <h5>
                            <span style="font-weight: lighter">#FromDateToLifeMa</span>
                        </h5>
                    </div>
                </div>
                <!-- image -->
                <p class="fade-in p-4 animated" style="text-align: center; margin-top: 100px" anim="slide-up"
                    delay="1">
                    {{ $quotes ? $quotes->quotes : '' }}
                </p>

                <p class="fade-in p-4 animated" style="text-align: center" anim="slide-up" delay="2">
                    Seraya memohon ridho Allah SWT, perkenankan kami mengundang
                    Bapak/Ibu/Saudara/i untuk menyaksikan dan merestui pernikahan
                    putra-putri kami
                </p>
                <div class="container mt-4 p-5 animated" style="border-radius: 10px"anim="slide-left" delay="1">
                    <div class="row">
                        <div class="col-12 text-center fade-in animated" anim="slide-right" delay="1">
                            <div class="container-couple position-relative" style="margin-bottom: 50px">
                                <img src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                                    alt="" class="img3 mx-auto mb-3 couple-img" />
                                <img src="/tema3/img/flower1.png" alt="" class="ornament-flower" />
                                <img src="/tema3/img/flower1.png" alt="" class="ornament-flower"
                                    style="right: -40px !important; left: unset" />
                            </div>

                            <h4 class="animated" anim="slide-up" delay="1">
                                {{ $mempelai ? $mempelai->namalengkaplaki : '' }}</h4>
                            <p class="animated" anim="slide-up">Son of Mr.
                                {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                                {{ $mempelai ? $mempelai->namaibulaki : '' }}</p>
                            <a href="{{ $mempelai ? $mempelai->instagram_laki : '#' }}"
                                class="btn-instagram animated"style="text-decoration: none;" anim="slide-down"
                                anim=2><i class="fa-brands fa-instagram  mr-1 p-2"></i><span
                                    class="d-inline m-2">Instagram</span></a>
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 text-center fade-in">
                            <h2 style="font-size: 60px">&</h2>
                        </div>
                    </div>
                </div>

                <div class="container p-5 mt-2 animated" anime="slide-right">
                    <div class="row">
                        <div class="col-12 text-center fade-in">
                            <div class="container-couple position-relative animated" anim="slide-right"
                                style="margin-bottom: 50px">
                                <img src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                                    alt="" class="img3 mx-auto mb-3 couple-img" />
                                <img src="/tema3/img/flower1.png" alt="" class="ornament-flower" />
                                <img src="/tema3/img/flower1.png" alt="" class="ornament-flower"
                                    style="right: -40px !important; left: unset" />
                            </div>
                            <h4 class="animated" anim="slide-left">
                                {{ $mempelai ? $mempelai->namalengkapperempuan : '' }}</h4>
                            <p class="animated" anim="slide-right">Daughter of Mr.
                                {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                                {{ $mempelai ? $mempelai->namaibuperempuan : '' }}</p>
                            <a anim="slide-up" href="{{ $mempelai ? $mempelai->instagram_perempuan : '#' }}"
                                class="btn-instagram animated" style="text-decoration: none;"><i
                                    class="fa-brands fa-instagram  mr-1 p-2"></i><span
                                    class="d-inline m-2">Instagram</span></a>
                        </div>
                    </div>
                </div>
                <div class="container mt-5 animated" anim="slide-right">
                    <div class="row">
                        <div class="col-12 text-center fade-in">
                            <h4>{{ $afterConvertDay ? $afterConvertDay : '' }}</h4>
                            <h3>{{ $tanggalAcara ? $tanggalAcara : '' }}</h3>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 animated" anim="slide-up">
                    <div class="row">
                        <div class="col-12 text-center fade-in">
                            <h3>Akad Nikah</h3>
                            <p>{{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                                Selesai</p>

                            <p class="text-center">
                                {{ $informasiacara ? $informasiacara->lokasiakadnikah : 'BAnjarmasin SOLo' }}
                            </p>
                            <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                                class="btn btn-primary'"><button class="btn btn-primary">View
                                    map</button></a>
                        </div>
                    </div>
                </div>
                @if ($informasiacara)
                    @if ($informasiacara->lokasiresepsi)
                        <div class="container-fluid mt-5 m-0 p-3 animated" style="border-radius: 40px"
                            anim="slide-right">
                            <div class="row">
                                <div class="col-12 text-center fade-in">
                                    <h3>Resepsi</h3>
                                    <p>{{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                                        Selesai</p>

                                    <p class="text-center">
                                        {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}
                                    </p>
                                    <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                                        class="btn btn-primary'"><button class="btn btn-primary">View
                                            map</button></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                <div class="container mt-5 animated" anim="slide-left">
                    <div class="row">
                        <div class="col-12 text-center fade-in">
                            <h3>Save the Date!</h3>
                            <h5>{{ $afterConvertDay ? $afterConvertDay : '' }},
                                {{ $tanggalAcara ? $tanggalAcara : '' }}</h5>

                            <div class="row mt-4 justify-content-center">
                                <input type="hidden" name="tglacara" id="tglacara"
                                    value="{{ $oriTanggalAcara }}">
                                <div class="col-2 time-card">
                                    <span id="days"></span><br>
                                    <span>Hari</span>
                                </div>
                                <div class="col-2 time-card">
                                    <span id="hours"></span><br>
                                    <span>Jam</span>
                                </div>
                                <div class="col-2 time-card">
                                    <span id="minutes"></span><br>
                                    <span>Menit</span>
                                </div>
                                <div class="col-2 time-card">
                                    <span id="seconds"></span><br>
                                    <span>Detik</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($informasiacara)
                    @if ($informasiacara->livestream)
                        <div class="container-fluid mt-5 animated" anim="slide-right">
                            <div class="row">
                                <div class="col-12 text-center fade-in">
                                    <h2>Live Streaming</h2>
                                    <p class="animated" anim="slide-right">Please join and watch us become husband &
                                        wife</p>
                                    <div class="mb-5">
                                        <iframe
                                            src="{{ $informasiacara ? $informasiacara->livestream : 'https://www.youtube.com/embed/jfKfPfyJRdk?si=EbCkkUA-HuNzEAUs' }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                @if ($ceritacinta)
                    <div class="row mt-5 justify-content-center">
                        <div class="col-11  text-center  fade-in">
                            <h2>Our Story</h2>
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    @if ($ceritacinta->cover1)
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/ceritacinta/' . $ceritacinta->cover1) }}"
                                                class="d-block w-100" alt="..." />
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{ $ceritacinta ? ($ceritacinta->judulcerita1 ? $ceritacinta->judulcerita1 : '') : '' }}
                                                </h5>
                                                <p>
                                                <p class="text-center">
                                                    {{ $ceritacinta ? ($ceritacinta->cerita1 ? $ceritacinta->cerita1 : '') : '' }}
                                                </p>
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($ceritacinta->cover2)
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/ceritacinta/' . $ceritacinta->cover2) }}"
                                                class="d-block w-100" alt="..." />
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{ $ceritacinta ? ($ceritacinta->judulcerita2 ? $ceritacinta->judulcerita2 : '') : '' }}
                                                </h5>
                                                <p>
                                                    {{ $ceritacinta ? ($ceritacinta->cerita2 ? $ceritacinta->cerita2 : '') : '' }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($ceritacinta->cover3)
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/ceritacinta/' . $ceritacinta->cover3) }}"
                                                class="d-block w-100" alt="..." />
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>{{ $ceritacinta ? ($ceritacinta->judulcerita3 ? $ceritacinta->judulcerita3 : '') : '' }}
                                                </h5>
                                                <p>
                                                    {{ $ceritacinta ? ($ceritacinta->cerita3 ? $ceritacinta->cerita3 : '') : '' }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <p class="mt-4">
                                "Once in a while, right in the middle of an ordinary life,
                                love gives us a fairy tale."
                            </p>
                        </div>
                    </div>
                @endif

                @if ($kodeTamu)
                    <div class="section-9c row text-center animated" anim="slide-up">
                        <input type="hidden" name="kdtamu" id="kdtamu"
                            value="{{ $kodeTamu ? $kodeTamu->kode_tamu : null }}">

                        <div class="col-md-12">
                            <div class="container-fluid my-5 container-rsvp p-3">
                                <h3 class="section-title">RSVP</h3>
                                <div class="container">
                                    <form action="">
                                        <p for="" class="mb-2 text-">Masukan Jumlah orang</p>
                                        <div class="input-rsvp-cont">
                                            <button class="btn-number" type="button" data-type="min">
                                                <i class="fa-solid fa-minus" style="color: white"></i>
                                            </button>
                                            <span style="width: 100px; font-size: 30pt">{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}</span>
                                            <button class="btn-number" type="button" data-type="plus">
                                                <i class="fa-solid fa-plus" style="color: white"></i>
                                            </button>
                                            <input class="form-control hidden-value" value="{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}" type="hidden"
                                                name="qty" id="qty" />
                                        </div> <button type="submit" class="btn-submit-rsvp"
                                            id="kirim-rsvp">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($count > 0)
                    <div class="container-fluid text-center mt-5 container-content">
                        <h3 anim="slide-down" class="header-content">Pict Of Us</h3>
                        <div id="gallery">
                            @if ($count > 0)
                                <img class="header-content" anim="slide-left"
                                    src="{{ asset('images/galeri/' . $galeri[0]->foto) }}" />
                            @endif
                            @if ($count > 1)
                                <img class="header-content" anim="slide-right"
                                    src="{{ asset('images/galeri/' . $galeri[1]->foto) }}" />
                            @endif
                            @if ($count > 2)
                                <img class="header-content" anim="slide-left"
                                    src="{{ asset('images/galeri/' . $galeri[2]->foto) }}" />
                            @endif
                            @if ($count > 3)
                                <img class="header-content" anim="slide-right"
                                    src="{{ asset('images/galeri/' . $galeri[3]->foto) }}" />
                            @endif
                            @if ($count > 4)
                                <img class="header-content" anim="slide-left"
                                    src="{{ asset('images/galeri/' . $galeri[4]->foto) }}" />
                            @endif
                            @if ($count > 5)
                                <img class="header-content" anim="slide-right"
                                    src="{{ asset('images/galeri/' . $galeri[5]->foto) }}" />
                            @endif
                            @if ($count > 6)
                                <img class="header-content" anim="slide-left"
                                    src="{{ asset('images/galeri/' . $galeri[6]->foto) }}" />
                            @endif
                            @if ($count > 7)
                                <img class="header-content" anim="slide-right"
                                    src="{{ asset('images/galeri/' . $galeri[7]->foto) }}" alt="" />
                            @endif
                        </div>
                    </div>
                @endif

                @if ($prewed)
                    <div class="container-fluid mb-5">
                        <div class="row mt-5 justify-content-center mb-5">
                            <div class="col-11 text-center" style="height: 400px;">
                                <h3>Prewedding</h3>
                                <video style="width: 100%; height: 80%;" controls>
                                    <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($weddingfilter)
                    <div class="row m-3 animated" anim="slide-right"
                        style="background-color: rgb(0, 59, 43); color: white;border-radius: 50px;"
                        id="instagram-weeding-filer">
                        <div class="col-12 p-3 text-center">
                            <h1 style="color: white; font-size: 30pt;" class="p-2 animated" anim="slide-up">
                                Instagram
                                Wedding Filter</h1>
                            <p class="p-3 animated" anim="slide-right">Dapatkan momen terbaik anda ketika datang
                                di acara
                                pernikahan kami dengan menggunakan filter instagram</p>
                            <img style="width: 300px;border-radius: 30px;"
                                src="https://th.bing.com/th/id/OIP.MuuiYhqEUO-bxxaqHusrCAHaKK?w=188&h=258&c=7&r=0&o=5&pid=1.7"
                                alt="">
                            <div class="row mt-2 justify-content-center">
                                <div class="col-md-3">

                                    <a href=""><button class="btn btn-white my-4">Buka Filter</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($protokol != null)
                    <div class="row mt-5">
                        <div class="col-12 text-center fade-in">
                            <h2 class="animated" anim="slide-up">Protokol Kesehatan</h2>
                            <div class="container protocol-card-container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="protocol-card animated" anim="slide-left">
                                            <img src="/tema3/img/distance.png" alt="">
                                            <h6 class="mt-2">Jaga Jarak</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="protocol-card animated" anim="slide-right">
                                            <img src="/tema3/img/mask.png" alt="">
                                            <h6 class="mt-2">Memakai Masker</h6>
                                        </div>

                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-6">
                                        <div class="protocol-card animated" anim="slide-left">
                                            <img src="/tema3/img/hand-sanitizer.png" alt="">
                                            <h6 class="mt-2">Memamaki Hand Sanitizer</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="protocol-card animated" anim="slide-right">
                                            <img src="/tema3/img/mask.png" alt="">
                                            <h6 class="mt-3">Cek temperatur</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($amplopdigital)
                    <div class="container mt-5 animated" anim="slide-right">
                        <div class="row">
                            <div class="col-12 text-center fade-in">
                                <h3 class="animated" anim="slide-left">Wedding Gift</h3>
                                <p class="mt-4 animated" anim="slide-right">
                                    Your blessing and coming to our wedding are enough for us.
                                    However, if you want to give a gift we provide a Digital
                                    Envelope to make it easier for you. thank you
                                </p>

                                <div class="container p-3 animated" anim="slide-right">
                                    <div class="form-group">
                                        <select name="" id="" class="form-select">
                                            <option selected>{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group form-control mt-3 mb-3 text-start">
                                        BANK : {{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}<br />
                                        Account Number : {{ $amplopdigital ? $amplopdigital->noakun : '' }} <br />
                                        Account Name : {{ $amplopdigital ? $amplopdigital->namaakun : '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="container
        mt-5 animated" anim="slide-up">
                    <div class="row">
                        <div class="col-12 text-center fade-in">
                            <h3 class="fade-in mb-3">Wedding Wish</h3>
                            <div class="form-group text-start mb-3">
                                <label class="form-label ">Nama</label>
                                <input type="text" class="form-control" id="nama-ucapan" name="nama-ucapan" />
                            </div>
                            <div class="form-group text-start">
                                <label class="form-label ">Deskripsi</label>
                                <textarea name="pesan-ucapan" id="pesan-ucapan" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn-primary" id="kirim-ucapan">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container p-4 animated weddingWishLog" anim="slide-right"
                    style="height: 300px; overflow-y: scroll;">
                    {{-- <div class="row chat-row mb-2 animated" anim="slide-down">
                        <div class="col-2 text-center">
                            <img src="/tema3/img/img2.jpg" alt="" class="pp">
                        </div>
                        <div class="col-10">
                            <span>Dionisius Hermawan</span>
                            <p class="chat-bubble">Selamat mas Bro....</p>
                        </div>
                    </div>
                    <div class="row chat-row mb-2 animated" anim="slide-down">
                        <div class="col-2 text-center">
                            <img src="/tema3/img/img2.jpg" alt="" class="pp">
                        </div>
                        <div class="col-10">
                            <span>Dionisius Hermawan</span>
                            <p class="chat-bubble">Selamat mas Bro....</p>
                        </div>
                    </div> --}}
                </div>
                <div class="row animated" anim='slide-up'>
                    <div class="col-12 text-center fade-in">
                        <p class="mt-4">Wedding Invitation</p>
                        <h1 class="fade-in mb-3">{{ $mempelai ? $mempelai->namalaki : '' }}
                            &
                            {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
                        <p>
                            {{ $tanggalAcara ? $tanggalAcara : '' }} <br />
                            #PromDateToLifeMate
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script>
        const backdropMain = document.getElementById("backdrop-section");
        const contentMain = document.getElementById("content-main");
        backdropMain.addEventListener("scroll", function() {

        });
    </script>

    <script>
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <=
                (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fungsi untuk menambahkan atau menghapus kelas animasi
        function toggleAnimation() {
            var elem = document.querySelectorAll("p,h3,h4,h1");
            for (let i = 0; i < elem.length; i++) {
                let element = elem[i];
                let className = "bottom-to-top";
                if (isElementInViewport(element)) {
                    if (!element.classList.contains(className)) {
                        element.classList.add(className);
                    }
                } else {}
            }
        }
        var animationPlayed = [];

        function checkAnimations() {
            $("p,h1,h2,h3,h4").each(function(index) {

                var element = $(this);
                var elementTop = element.offset().top;
                var windowHeight = $(window).height();
                var scrollTop = $(window).scrollTop();

                if (elementTop < scrollTop + windowHeight && !animationPlayed[index]) {
                    element.addClass("bottom-to-top");
                    animationPlayed[index] = true;
                }
            });
        }

        //image-galery
        //image animation

        // Memanggil fungsi toggleAnimation() saat halaman di-scroll
        // Memanggil fungsi toggleAnimation() pada saat halaman dimuat
    </script>
    <script>
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <=
                (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        //image-galery
        //image animation




        // Memanggil fungsi toggleAnimation() saat halaman di-scroll

        // Memanggil fungsi toggleAnimation() pada saat halaman dimuat

        //audio
        let toggleButton = document.getElementById("disk-player");
        let audio = document.getElementById("music-audio");

        let hasPlay = false;

        document.getElementById("open-invitation").addEventListener("click", function() {
            audio.play();
        })
        window.addEventListener("scroll", function() {
            if (hasPlay == false) {
                audio.play();
                hasPlay = true;
            }
        })

        function toggleMusic() {
            if (audio.paused) {
                audio.play();
                toggleButton.classList.add("spining");
            } else {
                audio.pause();
                toggleButton.classList.remove("spining");
            }
        }

        const clouds = document.getElementsByClassName("clouds");
        console.log(clouds.length);

        for (let i = 0; i < clouds.length; i++) {
            gsap.to(clouds[i], {
                duration: 3, // Durasi animasi dalam detik
                opacity: 0.8, // Mengubah opacity menjadi 1 (fade-in)
                scale: 1, // Mengubah scale menjadi 1 (tidak ada zoom)
                ease: "power2.inOut", // Efek animasi
                x: 200 * (i + 1),
            });
        }
    </script>
    <script>
        $(document).ready(function() {

            ucapanUndangan()

            $('#kirim-ucapan').on('click', function(e) {
                e.preventDefault()
                const id = $('#user_id').val()
                const nama = $('#nama-ucapan').val()
                const ucapan = $('#pesan-ucapan').val()

                if (nama != null && ucapan != null) {
                    $.ajax({
                        url: `{{ route('ucapan.store', ['id' => ':id']) }}`.replace(':id', id),
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            nama: nama,
                            ucapan: ucapan
                        },
                        success: function(data) {
                            if (data.code === 1) {
                                ucapanUndangan()
                                $('#nama-ucapan').trigger('reset')
                                $('#pesan-ucapan').trigger('reset')
                            } else {
                                console.log('error');
                            }
                        },
                        error: function(res) {
                            alert('Terjadi kesalahan: ' + res.responseText);
                        }
                    })
                } else {
                    ucapanUndangan()
                }

            })

            $('#kirim-rsvp').on('click', function(e) {
                e.preventDefault()
                const id = $('#user_id').val()
                const kodetamu = $('#kdtamu').val()
                const jumlahtamu = $('#qty').val()

                if (kodetamu != null && jumlahtamu != 0) {
                    $.ajax({
                        url: `{{ route('rsvp.store', ['id' => ':id']) }}`.replace(':id', id),
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            kodetamu: kodetamu,
                            jumlahtamu: jumlahtamu
                        },
                        success: function(data) {
                            if (data.code === 1) {
                                $.toast({
                                    heading: 'Berhasil',
                                    text: 'RSVP berhasil diperbarui.',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'success',
                                    hideAfter: 3500

                                })
                            } else {
                                $.toast({
                                    heading: 'Gagal',
                                    text: 'Error',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'error',
                                    hideAfter: 3500

                                })
                            }
                        },
                        error: function(res) {
                            alert('Terjadi kesalahan: ' + res.responseText);
                        }
                    })
                } else {
                    console.log('j');
                    $.toast({
                        heading: 'Gagal',
                        text: 'Jumlah Tamu minimal 1 orang.',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3500

                    })
                }

            })

            function isElementInViewports(elem) {
                console.log("tes: " + elem);
                var $elem = elem;

                // Get the viewport dimensions
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                var viewportLeft = $(window).scrollLeft();
                var viewportRight = viewportLeft + $(window).width();

                // Get the element's position and dimensions
                var elemTop = $elem.offset().top;
                var elemBottom = elemTop + $elem.height();
                var elemLeft = $elem.offset().left;
                var elemRight = elemLeft + $elem.width();

                // Check if the element is in the viewport
                return (
                    elemBottom >= viewportTop &&
                    elemTop <= viewportBottom &&
                    elemRight >= viewportLeft &&
                    elemLeft <= viewportRight
                );
            }



            $("#open-invitation").click(function() {
                $("#content-main").show();
            });

            $("#open-invitation").click(function() {
                $("#backdrop-collider").animate({
                    top: "-200%",
                }, 1000, function() {

                    $("html").css("overflow", "auto")
                })

            });



            function checkResponsive() {
                // Get the current screen width
                var screenWidth = $(window).width();

                // Example: Perform actions based on screen width
                if (screenWidth < 768) {
                    // Actions for screens smaller than 768px wide (e.g., mobile)

                    // Add your code here for mobile view
                } else if (screenWidth >= 768 && screenWidth < 1024) {
                    // Actions for screens between 768px and 1023px wide (e.g., tablet)
                    $("#backdrop-collider").show();
                    $("#backdrop-collider").css("top", "0px")
                    // Add your code here for tablet view
                } else {
                    // Actions for screens 1024px and wider (e.g., desktop)
                    $("#backdrop-collider").show();
                    $("#backdrop-collider").css("top", "0px")
                    // Add your code here for desktop view
                }
            }

            $(window).on('resize', function() {
                checkResponsive();
            });
        });
        const ucapanUndangan = () => {
            const id = $('#user_id').val()
            $.ajax({
                url: `{{ route('ucapan.show', ['id' => ':id']) }}`.replace(':id', id),
                type: 'GET',
                success: function(res) {
                    const weddingLog = $('.weddingWishLog')
                    weddingLog.html('')
                    const response = res.ucapan
                    response.forEach(item => {
                        const data = `<div class="row chat-row mb-2">
                        <div class="col-2 text-center">
                            <img src="{{ asset('images/sampul/' . $informasiacara->sampul) }}" alt="" class="pp">
                        </div>
                        <div class="col-10">
                            <span>${item.nama}</span>
                            <p class="chat-bubble">${item.ucapan}</p>
                        </div>
                    </div>`
                        weddingLog.append(data)
                    });
                },
                error: function(res) {
                    alert(res.responseText);
                }
            })
        }
    </script>
    <script>
        $(document).ready(function() {

            // Initial call to set up the countdown
            var tanggalAcara = $('#tglacara').val()
            updateCountdown(tanggalAcara);

        })

        function updateCountdown(tanggalAcara) {
            const targetDate = new Date(tanggalAcara);
            const timer = setInterval(function() {
                const currentDate = new Date();
                const timeLeft = targetDate - currentDate;

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById("days").textContent = days;
                document.getElementById("hours").textContent = hours;
                document.getElementById("minutes").textContent = minutes;
                document.getElementById("seconds").textContent = seconds;

                if (timeLeft < 0) {
                    clearInterval(timer);
                    document.getElementById("days").textContent = '00';
                    document.getElementById("hours").textContent = '00';
                    document.getElementById("minutes").textContent = '00';
                    document.getElementById("seconds").textContent = '00';
                }
            }, 1000);
        }
    </script>
    <script>
        $(document).ready(function() {
            $(".btn-number").click(function() {
                let type = $(this).data("type");
                let span = $(this).closest(".input-rsvp-cont").find("span");
                let inp = $(this).closest(".input-rsvp-cont").find(".hidden-value");
                if (type == "plus") {
                    span.text(parseInt(span.text()) + 1);
                } else {
                    if (parseInt(span.text()) - 1 > -1) {
                        span.text(parseInt(span.text()) - 1);
                    }
                }
                inp.val(span.text());
            });
        });
    </script>
    <script>
        function inframechecker(elm, i) {
            var element = elm;
            elm.attr("  ");
            // Calculate the element's position
            var elementTop = element.offset().top;
            var windowHeight = $(window).height();
            var scrollTop = $(window).scrollTop();

            // Check if the element is in the viewport
            if (elementTop - scrollTop < windowHeight - 100) {


                if (element.attr("delay") != undefined) {
                    element.css("animation-delay", (parseFloat(element.attr("delay") * 0.3)) + "s");
                }
                if (element.attr("anim") != undefined) {
                    element.addClass(element.attr("anim"));
                } else {
                    element.addClass("fades");
                }
            } else {
                currentindex = 0;
                // Remove the class if the element is not in the viewport
            }
        }
        $(document).ready(function() {
            $(".animated").each(function(i) {
                inframechecker($(this), i);
            });

            $(".animated").on("animationend", function(e) {
                $(e.target).css("opacity", 1);
            });
            $(window).on("scroll", function() {
                // Get the element you want to animate
                $(".animated").each(function(i) {
                    inframechecker($(this), i);
                });
            });
        })
    </script>
</body>

</html>
