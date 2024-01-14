<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/tema4/css/anim.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url("/tema4/font/stylesheet.css");

        .couple-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
        }

        .btn-instagram {
            text-decoration: none;
            padding: 5px;
            border: 1px solid rgb(88, 82, 82);
            border-radius: 5px;
            color: black;
            transition: .2s;
        }

        .btn-instagram:hover {
            background-color: #57674F;
            color: white;
            border: none;
        }



        h3,
        h4,
        p {
            font-family: "Visia Pro";
        }

        .container-text-cover {
            bottom: 10%;
            z-index: 200;
        }

        .c-1 {
            font-size: 60pt;
        }

        .section-1 {
            color: white;
            height: 100vh;
            padding-top: 30%;
        }

        /*Section Weeding Of*/

        .section-2 {
            padding: 20px;
            background-color: rgb(246, 246, 246);
        }

        .c-2 {
            font-size: 40pt;
        }

        .container-couple {
            padding: 20px;
            box-shadow: 0px 0px 10px -5px;
            width: 90%;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .container-couple img {
            margin-top: 20px;
        }

        .couple-title {
            font-size: 25pt;
            margin-top: 50px;
        }

        /*Section 3 (Ayat2)*/
        .section-3 {
            color: white;
            background-color: rgb(87, 103, 79);
        }

        .text-verse {
            padding: 20px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        /*Section 4 (Our Story) */
        .section-4 {
            padding: 10px;
        }

        .our-story {
            padding-bottom: 20px;
            padding-top: 40px;
        }

        .carousel-item img {
            height: 600px;
            object-fit: cover;
            border-radius: 20px;
        }

        .carousel {
            width: 80% !important;
        }

        /*Section 5 (Galery Photo)*/
        .section-5 {
            color: white;
            padding: 10px;
            background: rgb(142, 177, 147);
            background: linear-gradient(90deg,
                    rgba(142, 177, 147, 1) 35%,
                    rgba(107, 128, 114, 1) 100%);
        }

        .img-hm {
            width: 80%;
        }

        .img-galery .col img {
            width: 90%;
            height: 100%;
            object-fit: cover;
        }

        .img-galery .col {
            padding: 2px;
        }

        .img-galery-viewer {
            width: 100%;
            margin-bottom: 30px;
            height: 600px;
            object-fit: cover;
        }

        .text-hm {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        /*Section 6 (Save the Date)*/
        .section-6 {
            padding-top: 40pt;
            padding-bottom: 20pt;
        }

        .text-std {
            font-size: 30pt;
        }

        .time-card {
            background-color: white;
            padding-top: 10px;
            border-radius: 10px;
            padding-bottom: 10px;
            box-shadow: 0px 0px 30px -20px;
            width: 100%;
            margin: 0p;
        }

        .container-time .row {
            width: 100%;
        }

        .time-card p {
            margin: 0px;
        }

        .text-std-date {
            font-size: 20pt;
        }

        .text-counter {
            font-size: 20pt;
            margin: 0px;
            font-weight: bold;
        }

        /*Section 7 (The Wedding Days)*/
        .section-7 {
            padding: 40px;
            background-image: url("/tema4/img/hand.png");
            background-size: 179%;
            background-position: 50%;
            background-repeat: no-repeat;
        }

        .card-save-the-date {
            margin-top: 50px;
        }

        .twd-subtext {
            padding: 10px;
            text-align: center;
        }

        .twd-subtext p {
            font-size: 12pt;
            background-color: whitesmoke;
            width: 180px;
            border-radius: 10px;
        }

        .address {
            margin-top: 20px;
            padding-bottom: 30pt;
        }

        /*Section 10 (Wedding Gift) */
        .section-10 {
            padding-top: 10px;
        }

        .card-bank-info {
            background-color: rgb(225, 225, 225);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .protocol-card {
            border: 1.5px solid black;
            margin: 2px;
            height: 200px;
            padding: 30px;
            border-radius: 10px;
        }

        .protocol-card img {
            width: 70px;
            height: 70px;
            margin-bottom: 30px;
        }

        .protocol-card p {
            font-weight: bold;
        }

        .protocol-container .col {
            padding: 0px;
        }

        .protocol-container {
            width: 70%;
            margin-top: 30px;
        }

        /*Section 12 */
        .section-12 {
            padding-top: 50px;
        }

        .container-chat {
            border-bottom: 1px solid rgb(69, 69, 69);
            height: 400px !important;
        }

        .chat-subject {
            font-weight: bold;
            margin: 0px;
            font-size: 15pt;
        }

        .chat-message {
            margin: 5px;
        }

        .chat-date {
            margin: 0px;
        }

        .section-13 {
            padding-top: 30px;
            padding-bottom: 20px;
            background-color: rgb(83, 99, 81);
            color: white;
        }

        .couple-img-1 {
            width: 100%;
            box-shadow: inset rgb(0, 0, 0) 0px 0px 0px 500px;
        }

        .container-cover {
            position: fixed;
            width: inherit;
            height: 100vh;
            z-index: 50;
        }


        .main-title {
            font-family: "Creattion Demo";
            color: white;
        }

        .img-select {
            border-radius: 20px;
            box-shadow: 0px 0px 20px -30px black;
            border: 2px solid white;
        }

        .img-galery-viewer {
            border-radius: 20px;
        }

        .actived-select {
            width: 105% !important;
            height: 105% !important;
        }

        .view-maps {
            text-decoration: none;
            width: 200px !important;
            color: black;
            border: 1px solid black;
            padding: 10px 50px;
            border-radius: 50px;
        }

        .view-maps:hover {
            background-color: rgba(0, 0, 0, 0.864);
            color: white;
            border: none;
        }

        .btn-filter {
            text-decoration: none;
            width: 200px !important;
            color: black;
            border: 1px solid black;
            padding: 10px 50px;
            border-radius: 50px;
            transition: .2s;
        }

        .btn-filter:hover {
            background-color: rgba(0, 0, 0, 0.864);
            color: white;
            border: none;
        }

        .form-control {
            margin-bottom: 10px;
            background-color: rgb(230, 230, 230);
            border: none;
        }

        .btn-send {
            padding: 10px;
            background-color: rgb(65, 106, 92);
            width: 100%;
            color: white;
            border-radius: 40px;
        }

        .form-select {
            background-color: cadetblue;
            color: white;
        }

        .btn-open {
            color: white;
            border-radius: 30px;
            background-color: rgb(64, 154, 108);
        }

        .couple-img-1 {
            height: 100vh;
            object-fit: cover;
        }

        html {
            overflow-x: hidden;

        }

        body {
            overflow-x: hidden
        }

        @media only screen and (max-width: 600px) {
            html {
                overflow-y: hidden;
            }


        }

        @media only screen and (min-width: 599px) {
            .btn-open {
                display: none;
            }


        }

        #disk-player {
            z-index: 200;
            position: fixed;
            left: 10px;
            bottom: 10px;
            width: 50px;
        }

        .shadow-gradient {
            background: rgb(0, 0, 0);
            background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 49%, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 1) 100%);
        }


        .iwf-img {
            width: 85%;
            height: 600px;
            object-fit: cover;
            border-radius: 20px;
            margin-top: 40px;
            margin-bottom: 30px;
            box-shadow: 0px 0px 20px -20px black;
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
            background: rgb(189, 165, 146);
            color: white;
            transition: .2s;
        }


        .input-rsvp-cont {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input-rsvp-cont .btn-number {
            background: rgb(189, 165, 146);
            height: 40px;
            width: 40px;
            border: 0px;
            border-radius: 50%;
            color: white
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row p-0">
            <div class="col-md-7 p-0 position-relative">

                <div class="container-cover">
                    <div class="music-cont">
                        <audio controls autoplay class="d-none" id="music-audio">
                            <source
                                src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '/tema4/music/music2.mp3') : '/tema4/music/music2.mp3' }}"
                                type="audio/mpeg" />
                            Your browser does not support the audio element.
                        </audio>
                        <img src="/tema4/img/vinyl.png" alt="" id="disk-player" class="spining"
                            onclick="toggleMusic()" />
                    </div>
                    <div anim="fades" class="animated box-shadow position-absolute shadow-gradient"
                        style="width: 100%; height: 100%;z-index: 100;">

                    </div>
                    <img src="{{ asset('images/sampul/' . $informasiacara->sampul) }}" alt="" anim="fades"
                        class="animated couple-img-1 position-absolute" style="filter: brightness(0.8);" />

                    <div class="container position-absolute container-text-cover text-white  text-center p-5">
                        <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
                        <h3 class="main-title c-1 animated" anim="slide-left">{{ $mempelai ? $mempelai->namalaki : '' }}
                            &
                            {{ $mempelai ? $mempelai->namaperempuan : '' }}</h3>
                        <p class=" animated" anim="slide-down" delay="4">
                            {{ $afterConvertDay ? $afterConvertDay : '' }},
                            {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                        <h4 class="animated" anim="slide-right" delay="4">To : {{ $namaTamu }}</h4>
                        <button class="btn btn-open animated" anim="slide-up" delay="5">Open Invitation</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 p-0" style="background-color: whitesmoke">
                <div class="container-fluid section-1 text-center animated" anim="slide-up"
                    style="background: url('{{ asset('images/pembuka/' . $informasiacara->pembuka) }}');   background-repeat: no-repeat; background-size:cover;">
                    <h3 class="animated" anim="slide-up" delay="2" style="margin-top:180px;">
                        Wedding Invitation
                    </h3>
                    <h3 class="main-title c-2 animated" anim="slide-down" delay="3">
                        {{ $mempelai ? $mempelai->namalaki : '' }} &
                        {{ $mempelai ? $mempelai->namaperempuan : '' }}
                    </h3>
                    <p class=" animated" anim="slide-down" delay="4"></p>
                </div>
                <div class="container-fluid section-2 text-center animated" data-type="slide-left">
                    <div class="container my-5">
                        <h3 class="animated" anim="slide-up" delay="1">The Wedding of</h3>
                        <p class="animated" anim="slide-up" delay="1.2">
                            The pleasure of your company is requested at the marriage of
                        </p>
                    </div>
                    <div class="row mt-2 animated mb-5" anim="slide-left" delay="1.4">
                        <div class="col-12 text-center">
                            <div class="container-couple mx-auto animated" anim="slide-right" delay="4">
                                <img src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                                    alt="" class="couple-img" />
                                <p class="couple-title">{{ $mempelai ? $mempelai->namalengkaplaki : '' }}</p>
                                <p class="couple-title-of-son">
                                    Son of Mr.
                                    {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                                    {{ $mempelai ? $mempelai->namaibulaki : '' }}
                                </p>
                                <a href="{{ $mempelai ? $mempelai->instagram_laki : '#' }}" class="btn-instagram"><i
                                        class="fa-brands fa-instagram me-1"></i>Instagram</a>
                            </div>
                            <div class="container-couple mx-auto animated" anim="slide-right" delay="4.2">
                                <img src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                                    alt="" class="couple-img" />
                                <p class="couple-title">{{ $mempelai ? $mempelai->namalengkapperempuan : '' }}</p>
                                <p class="couple-title-of-son">
                                    Daughter of Mr.
                                    {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                                    {{ $mempelai ? $mempelai->namaibuperempuan : '' }}
                                </p>
                                <a href="{{ $mempelai ? $mempelai->instagram_perempuan : '#' }}"
                                    class="btn-instagram"><i class="fa-brands fa-instagram me-1"></i>Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid section-3 text-center animated animated" anim="slide-down"
                    delay="1.6">
                    <p class="text-verse m-0">
                        {{ $quotes ? $quotes->quotes : '' }}

                    </p>
                </div>
                @if ($ceritacinta)
                    <div class="container-fluid section-4 text-center mb-5  animated" anim="slide-down"
                        delay="2" animated anim="slide-left" delay="2">
                        <h3 class="our-story">Our Story</h3>
                        <div id="carouselExampleCaptions" class="carousel slide mx-auto" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
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
                    </div>
                @endif

                <div class="container-fluid section-5 text-center  animated" anim="slide-up" delay="1">
                    @if ($count > 0)
                        <div class="container galery-photo">
                            <div class="container-text-gf py-4">
                                <h3 class="animated" anim="slide-up" delay="3">Galery Photo</h3>
                                <p class="animated" anim="slide-up" delay="4">A memory that we will treasure
                                    forever
                                </p>
                            </div>
                            <div class="container-photo">
                                <div class="container">
                                    <div class="row  animated" anim="slide-up" delay="1.2">
                                        @if ($count > 0)
                                            <div class="col-12 p-0">
                                                <img class="img-galery-viewer"
                                                    src="{{ asset('images/galeri/' . $galeri[0]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row img-galery">
                                        @if ($count > 0)
                                            <div class="col">
                                                <img class="img-select animated" anim="slide-up" delay="1.4"
                                                    src="{{ asset('images/galeri/' . $galeri[0]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 1)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-left" delay="1.6"
                                                    src="{{ asset('images/galeri/' . $galeri[1]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 2)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-right" delay="1.8"
                                                    src="{{ asset('images/galeri/' . $galeri[2]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 3)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-left" delay="2"
                                                    src="{{ asset('images/galeri/' . $galeri[3]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 4)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-right" delay="2.2"
                                                    src="{{ asset('images/galeri/' . $galeri[4]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 5)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-right" delay="2.2"
                                                    src="{{ asset('images/galeri/' . $galeri[5]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 6)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-right" delay="2.2"
                                                    src="{{ asset('images/galeri/' . $galeri[6]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                        @if ($count > 7)
                                            <div class="col">
                                                <img class="img-select  animated" anim="slide-right" delay="2.2"
                                                    src="{{ asset('images/galeri/' . $galeri[7]->foto) }}"
                                                    alt="" />
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($prewed)
                        <div class="container happiest-moment">
                            <div class="text-hm animated" anim="slide-right" delay="1">
                                <h3 class="  animated" anim="slide-right" delay="2">Happiest Moments Prewedding
                                </h3>
                                <p class=" animated" anim="slide-right" delay="2.3">A memory that we will treasure
                                    forever</p>
                            </div>
                            <video style="width: 80%; height: 80%;" controls>
                                <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4">
                            </video>
                        </div>
                    @endif
                </div>

                <div class="container-fluid section-6 text-center  animated mb-5" anim="slide-right" delay="1">
                    <div class="background-cont"></div>
                    <h3 class="text-std">Save the Date</h3>
                    <p class="text-std-date">{{ $afterConvertDay ? $afterConvertDay : '' }},
                        {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                    <div class="line">-</div>
                    <div class="container-time">
                        <div class="row mx-auto">
                            <div class="col">
                                <input type="hidden" name="tglacara" id="tglacara"
                                    value="{{ $oriTanggalAcara }}">
                                <div class="time-card animated" anim="slide-down" delay="1">
                                    <p class="text-counter" id="days">10</p>
                                    <p>Days</p>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="time-card animated" anim="slide-down" delay="1.2">
                                    <p class="text-counter" id="hours">10</p>
                                    <p>Hours</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="time-card animated" anim="slide-down" delay="1.3">
                                    <p class="text-counter" id="minutes">10</p>
                                    <p>Minutes</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="time-card animated" anim="slide-down" delay="1.4">
                                    <p class="text-counter" id="seconds">10</p>
                                    <p>Seconds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <button class="btn-number btn-secondary" type="button" data-type="min">
                                                <i class="fa-solid fa-minus" style="color: white"></i>
                                            </button>
                                            <span style="width: 100px; font-size: 30pt">{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}</span>
                                            <button class="btn-number btn-secondary" type="button" data-type="plus">
                                                <i class="fa-solid fa-plus" style="color: white"></i>
                                            </button>
                                            <input class="form-control hidden-value" value="{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}" type="hidden"
                                                name="qty" id="qty" />
                                        </div>
                                        <button type="submit" class="btn-submit-rsvp" id="kirim-rsvp">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="container-fluid section-7 text-center animated" anim="slide-down" delay="1">
                    <h3>The Wedding Day</h3>
                    <p>Save the date</p>
                    <div class="container card-save-the-date">
                        <h3 class="">{{ $afterConvertDay ? $afterConvertDay : '' }}</h3>
                        <p>{{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                    </div>
                    <div class="akad-nikah twd-subtext">
                        <h4>Akad Nikah</h4>
                        <p class="mx-auto">{{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                            Selesai</p>
                    </div>
                    <div class="address">
                        <p>
                            {{ $informasiacara ? $informasiacara->lokasiakadnikah : 'BAnjarmasin SOLo' }}
                        </p>
                        <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                            class="view-maps">View Maps</a>
                    </div>
                    @if ($informasiacara)
                        @if ($informasiacara->lokasiresepsi)
                            <div class="resepsi twd-subtext">
                                <h4>Resepsi</h4>
                                <p class="mx-auto">{{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                                    Selesai</p>
                            </div>
                            <div class="address">
                                <p>
                                    {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}
                                </p>
                                <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                                    class="view-maps">View Maps</a>
                            </div>
                        @endif
                    @endif
                </div>

                {{-- @if ($informasiacara)
                    @if ($informasiacara->livestream) --}}
                <div class="container-fluid container-content text-center">
                    <h3 class="header-content" anim="slide-left">Live Streaming</h3>
                    <iframe class="header-content mt-2" width="400" height="315"
                        src="https://www.youtube.com/embed/M5Byww-rz-Y?si=r_3QyOykFlldZJ8l"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <p>Please join and watch us become husband & wife</p>
                </div>
                {{-- @endif
                @endif --}}
                {{-- @if ($weddingfilter) --}}
                <div class="container-fluid section-9 text-center animated mb-5 pt-3" style="margin-top: 90px">
                    <h4 id="instagram-wedding-filter">Instagram Wedding Filter</h4>
                    <div class="row text-center">
                        <div class="col-12">
                            <img class='iwf-img animated'
                                src="https://live.staticflickr.com/5611/15432200529_d40727621d_z.jpg" alt="">
                        </div>
                    </div>

                    <p class="mb-3">
                        Capture your moment while attending our wedding by using the
                        Instagram filter below.
                    </p>
                    <a href="" class="btn-filter">Use Filter</a>
                </div>
                {{-- @endif --}}
                @if ($protokol != null)
                    <div class="container-fluid section-11 text-center animated" style="padding-bottom: 60px;">
                        <h3>Protected Yourself And Other from Covid-19</h3>
                        <div class="container">
                            <div class="row protocol-container mx-auto">
                                <div class="col">
                                    <div class="protocol-card animated" anim="slide-left" delay="2">
                                        <img src="/tema4/img/Distancing.svg" alt="" />
                                        <p>SOCIAL DISTANCING</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="protocol-card animated" anim="slide-right" delay="2.2">
                                        <img src="/tema4/img/Mask.svg" alt="" />
                                        <p>WEARING A MASK</p>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="protocol-card animated" anim="slide-left" delay="2.4">
                                        <img src="/tema4/img/Hand Sanitizer.svg" alt="" />
                                        <p>HAND YOUR HAND</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="protocol-card animated" anim="slide-right" delay="2.6">
                                        <img src="/tema4/img/Temperatur Gun.svg" alt="" />
                                        <p>TEMPERATURE CHECK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($amplopdigital)
                    <div class="container-fluid section-10 text-center animated">
                        <h3 id="wedding-gift">Wedding Gift</h3>
                        <p>
                            Your blessing and coming to our wedding are enough for us.
                            However, if you want to give a gift we provide a Digital Envelope
                            to make it easier for you. thank you
                        </p>
                        <div class="container">
                            <div class="form-group">
                                <select name="" id="" class="form-select">
                                    <option selected>{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</option>
                                </select>
                            </div>
                            <div class="form-group card-bank-info">
                                <div class="row o">
                                    <div class="col-8 text-start">
                                        <p><b>{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</b></p>
                                        <p class="m-0">
                                            <span>Account
                                                Number</span><span><br /><b>{{ $amplopdigital ? $amplopdigital->noakun : '' }}</b></span><span
                                                class="p-2"><i class="fa fa-copy btn-copy"></i></span>
                                        </p>
                                        <p class="m-0">
                                            <span>Account
                                                Name</span><span><br /><b>{{ $amplopdigital ? $amplopdigital->namaakun : '' }}</b></span>
                                        </p>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="container-fluid section-12 text-center animated" anim="slide-right" delay="1">
                    <h3 class=" animated" anim="slide-right" delay="1.2">Wedding Wish</h3>
                    <div class="form-group" class=" animated" anim="slide-right" delay="1.4">
                        <input type="text" placeholder="Nama" class="form-control animated" anim="slide-right"
                            id="nama-ucapan" name="nama-ucapan" delay="1.6" />
                        <textarea name="pesan-ucapan" id="pesan-ucapan" cols="30" rows="4" class="form-control animated"
                            anim="slide-right" delay="1.8"></textarea>
                        <button class="btn btn-send mb-3 animated" delay="2.0" id="kirim-ucapan">Send</button>
                    </div>
                    <div class="container-fluid container-chat text-start mb-5 animated" anim="slide-right"
                        delay="1">
                        <div class="containers weddingWishLog"
                            style="height: 375px; overflow-y: scroll; overflow-x: hidden;">
                        </div>

                    </div>
                </div>
                <div class="container-fluid section-13 text-center animated">
                    <div class="container-couple-end-text text-white">
                        <p class="animated" anim="slide-down" delay="0.5">
                            {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                        <h3 anim="slide-up" delay="1.4">{{ $mempelai ? $mempelai->namalaki : '' }} &
                            {{ $mempelai ? $mempelai->namaperempuan : '' }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.js"></script>

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
        function doElementsOverlap(element1, element2) {
            const rect1 = element1[0].getBoundingClientRect();
            const rect2 = element2[0].getBoundingClientRect();
            return (
                rect1.right > rect2.left &&
                rect1.left < rect2.right &&
                rect1.bottom > rect2.top &&
                rect1.top < rect2.bottom
            );
        }
        $(document).ready(function() {
            let currentindex = 0;

            $(".btn-open").click(function() {
                $(".container-cover").animate({
                    top: "-100%"
                }, "slow", function() {
                    $("html").css("overflow", "auto")
                })
            })

            function inframechecker(elm, i) {
                var element = elm;
                elm.attr("  ");
                // Calculate the element's position
                var elementTop = element.offset().top;
                var windowHeight = $(window).height();
                var scrollTop = $(window).scrollTop();

                // Check if the element is in the viewport
                if (elementTop - scrollTop < windowHeight - 100) {
                    currentindex += 1;

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

            $(".img-select").click(function() {
                $(".img-select").each(function() {
                    $(this).removeClass("actived-select")
                })
                $(this).toggleClass("actived-select")
                $(".img-galery-viewer").attr("src", $(this).attr("src"));
            })


            // Update the countdown every second
            var tanggalAcara = $('#tglacara').val()
            updateCountdown(tanggalAcara);

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
        });

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
        const ucapanUndangan = () => {
            const id = $('#user_id').val()
            $.ajax({
                url: `{{ route('ucapan.show', ['id' => ':id']) }}`.replace(':id', id),
                type: 'GET',
                success: function(res) {
                    const weddingLog = $('.weddingWishLog')
                    weddingLog.html('')
                    const response = res.ucapan
                    console.log(response);
                    response.forEach(item => {
                        const data = `<div class="row">
                            <div class="col-2 pl-2">
                                <img style="aspect-ratio: 1/1;  object-fit:cover;width: 75%;border-radius: 50%;"
                                    src="{{ asset('images/sampul/' . $informasiacara->sampul) }}"
                                    alt="">
                            </div>
                            <div class="col p-0 pt-0 p-0 p-0">
                                <div class="container-fluid">
                                <p class="chat-subject animated" anim="slide-down" delay="1">${item.nama}</p>
                                <p class="chat-message mb-2 animated" anim="slide-down" delay="1">${item.ucapan}</p>
                                </div>
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
    </script>
</body>

</html>
