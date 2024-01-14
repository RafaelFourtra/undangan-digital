<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Template 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;1,400&display=swap"
        rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap");

        .cover-section {
            background-color: rgb(0, 0, 0);
        }

        #cover-container {
            background-color: rgb(8, 8, 25);
            max-width: inherit;
            width: inherit;
            left: 0px;
            height: 100%;
            position: fixed;
            padding: 20px;
            z-index: 100;
        }



        html,
        body {
            overflow-x: hidden;
            scroll-behavior: smooth;
            background-color: black;
        }


        body {}

        #backdrop-section {
            position: relative;
        }

        .card-cover {
            background-color: beige;
            height: 100%;
            overflow: clip;
        }

        .card-cover img {
            width: 120%;
            height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            overflow: hidden;
            object-fit: cover;
        }

        .content-card {
            height: 100%;
            position: absolute;
            color: white;
        }

        .content-card .container-bottom {
            padding: 10px;
            position: absolute;
            bottom: 50px;
        }

        .content-card h3 {
            font-family: "Pinyon Script", cursive;
            font-size: 50pt;
            margin: 0px;
        }

        .content-card p {
            margin: 0px;
        }

        .content-card .gradient {
            background: rgb(2, 0, 36);
            background: linear-gradient(0deg,
                    rgba(2, 0, 36, 1) 21%,
                    rgba(10, 167, 199, 0) 100%);
            width: 100%;
            height: 600px;
            bottom: 0px;
            position: absolute;
        }

        #main-content {
            background-color: rgb(8, 8, 25);
            color: white;
            padding: 0px;
            box-shadow: inset 0px 0px 200px rgba(0, 0, 0, 0.9);
        }

        h3 {
            font-family: "Cormorant Garamond", serif;
            font-weight: bold;
        }

        .container-couple-card {
            width: 400px;
        }

        .container-couple-card img {
            width: 100%;
        }

        .couple-img {
            width: 250px;
            height: 300px;
            object-fit: cover;
        }

        .carousel-item img {
            width: 600px !important;
            height: 400px !important;
        }

        .container-gallery .col img {
            width: 100%;
            height: 150px;
        }

        .container-gallery .col {
            padding: 1px;
        }

        .header-content {
            opacity: 0;
        }

        .protocol-card {
            width: 100%;
            height: 200px;
            margin: 2px;
            background-color: rgba(255, 255, 255, 0.648);
            border-radius: 10px;
        }

        .protocol-card h4 {
            font-size: 10pt;
            font-weight: bold;
        }

        .protocol-card svg {
            width: 80px;
            margin-top: 30px;
            margin-bottom: 1px;
        }

        .container-protocol .col {
            margin: 0px;
            padding: 2px;
        }

        p,
        h3,
        h4 {
            font-family: "Poppins", sans-serif;
        }

        p {
            font-size: 10pt;
        }

        .animate-me {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            transition: transform 0.7s ease-in-out;
        }

        .slide-left {
            animation: slideleft 1s ease-in-out;
            animation-delay: 1s;
        }

        .slide-right {
            animation: slideright 1s ease-in-out;
            animation-delay: 1s;
        }

        .slide-up {
            animation: slideup 1s ease-in-out;
            animation-delay: 1s;
        }

        .slide-down {
            animation: slidedown 0.7s ease-in-out;
            animation-delay: 1s;
        }

        .fades {
            animation: fade 0.7s ease-in-out;
            animation-delay: 1s;
        }


        .scale {
            animation: scale 2 ease-in-out;
        }

        @keyframes scale {
            0% {
                width: 0px;
            }

            10% {
                width: 100px;
            }
        }

        .couple-img {
            border-radius: 40px;
        }

        @keyframes slideleft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideright {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideup {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slidedown {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fade {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .primary-btn {
            text-decoration: none;
            color: white;
            border: 1.2px solid white;
            padding: 10px;
            border-radius: 20px;
            background-color: none;
        }

        .primary-btn:hover {
            background: rgba(102, 102, 102, 0.069);
        }

        .blury {
            animation: blury 2s ease-out;
        }

        @keyframes blury {
            0% {
                filter: blur(5px);
            }

            100% {
                filter: blur(0px);
            }
        }

        .rounded {
            animation: rounded 2s ease-in-out;
        }

        @keyframes rounded {
            0% {
                border-radius: 0px;
            }

            100% {
                border-radius: 100px;
            }
        }

        .slide-rotate-hor-top {
            -webkit-animation: slide-rotate-hor-top 0.5s cubic-bezier(0.6, 0.04, 0.98, 0.335) alternate-reverse both;
            animation: slide-rotate-hor-top 0.5s cubic-bezier(0.6, 0.04, 0.98, 0.335) alternate-reverse both;
        }

        /* ----------------------------------------------
 * Generated by Animista on 2023-10-8 18:49:37
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

        @-webkit-keyframes slide-rotate-hor-top {
            0% {
                -webkit-transform: translateY(0) rotateX(0deg);
                transform: translateY(0) rotateX(0deg);
            }

            100% {
                -webkit-transform: translateY(-150px) rotateX(-90deg);
                transform: translateY(-150px) rotateX(-90deg);
            }
        }

        @keyframes slide-rotate-hor-top {
            0% {
                -webkit-transform: translateY(0) rotateX(0deg);
                transform: translateY(0) rotateX(0deg);
            }

            100% {
                -webkit-transform: translateY(-150px) rotateX(-90deg);
                transform: translateY(-150px) rotateX(-90deg);
            }
        }

        /* ----------------------------------------------
 * Generated by Animista on 2023-10-8 20:19:21
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

        /**
 * ----------------------------------------
 * animation flip-2-hor-top-1
 * ----------------------------------------
 */
        @-webkit-keyframes flip-2-hor-top-1 {
            0% {
                -webkit-transform: translateY(0) rotateX(0);
                transform: translateY(0) rotateX(0);
                -webkit-transform-origin: 50% 0%;
                transform-origin: 50% 0%;
            }

            100% {
                -webkit-transform: translateY(-100%) rotateX(-180deg);
                transform: translateY(-100%) rotateX(-180deg);
                -webkit-transform-origin: 50% 100%;
                transform-origin: 50% 100%;
            }
        }

        @keyframes flip-2-hor-top-1 {
            0% {
                -webkit-transform: translateY(0) rotateX(0);
                transform: translateY(0) rotateX(0);
                -webkit-transform-origin: 50% 0%;
                transform-origin: 50% 0%;
            }

            100% {
                -webkit-transform: translateY(-100%) rotateX(-180deg);
                transform: translateY(-100%) rotateX(-180deg);
                -webkit-transform-origin: 50% 100%;
                transform-origin: 50% 100%;
            }
        }

        .form-control {
            /* background-color: #080819 !important; */
            color: white;
        }

        .our-story {
            display: flex;
            overflow-y: hidden;
        }

        .our-story .img img {
            width: 500px;
        }

        .our-story .img {
            padding: 10px;
        }

        .tech-slideshow {
            height: 300px;

            overflow: hidden;
            padding: 10px;
            position: relative;
        }

        .tech-slideshow .cont-slide {
            height: 200px;
            width: 10px;
            top: 0;
            left: 0;
            height: 100%;
            transform: translate3d(0, 0, 0);
            padding: 10px;
        }

        .cont-slide {
            display: inline-flex;
            animation: moveSlideShow 2s infinite;
        }

        .cont-slide div img {
            height: 200px;
        }

        .tech-slideshow:hover .mover-2 {
            opacity: 1;
        }

        @keyframes moveSlideshow {
            100% {
                transform: translateX(-1000px);
            }
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
            height: 300px;
            margin-bottom: 5px;
            /* to match column gap */
            object-fit: cover;
        }

        .btn-instagram {
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            border: 2px solid white;
        }

        .btn-instagram:hover {
            background-color: white;
            color: rgb(39, 19, 68)
        }

        .title-couple {
            font-size: 50px;
            margin-top: 50px;
            margin-bottom: 20px;
            font-family: "Pinyon Script", cursive;
            font-size: 60pt;
        }

        #open-invitation {
            color: rgb(28, 14, 107);
            padding: 12px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: bold;
            background-color: white;
            border-radius: 20px;
            display: inline-block;
            width: 142px;
        }

        @media (max-width: 762px) {
            html {
                overflow: hidden;
            }

            #open-invitation {
                display: block;
            }
        }

        @media (min-width: 763px) {
            html {
                overflow: overlay;
            }

            #open-invitation {
                display: none;
            }

            .container-bottom {
                text-align: left;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(90, 90, 90);
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0);
        }

        #powered-by {
            color: white;
            background-color: rgba(0, 0, 0, 0.64);
            padding: 10px;
            font-weight: bold;
        }

        #disk-player {
            z-index: 200;
            position: fixed;
            left: 10px;
            bottom: 10px;
            width: 80px;
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

        .open-filter {
            color: rgb(28, 14, 107);
            background-color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
        }

        .open-filter:hover {
            background-color: rgba(255, 0, 0, 0);
            color: white !important;
        }

        .bank-bca {
            background-color: rgba(255, 255, 255, 0.671);
            border-radius: 10px;
            color: rgb(25, 25, 74);
            padding: 20px;
        }

        .wrapper {
            display: flex;
            max-width: 1200px;
            position: relative;
        }

        .wrapper i {
            top: 50%;
            height: 44px;
            width: 44px;
            color: #343f4f;
            cursor: pointer;
            font-size: 1.15rem;
            position: absolute;
            text-align: center;
            line-height: 44px;
            background: #fff;
            border-radius: 50%;
            transform: translateY(-50%);
            transition: transform 0.1s linear;
        }

        .wrapper i:active {
            transform: translateY(-50%) scale(0.9);
        }

        .wrapper i:hover {
            background: #f2f2f2;
        }

        .wrapper i:first-child {
            left: -22px;
            display: none;
        }

        .wrapper i:last-child {
            right: -22px;
        }

        .wrapper .carousel {
            font-size: 10pt;
            cursor: pointer;
            overflow: hidden;
            white-space: nowrap;
            scroll-behavior: smooth;
            display: flex;
        }

        .carousel.dragging {
            cursor: grab;
            scroll-behavior: auto;
        }

        .carousel.dragging img {
            pointer-events: none;
        }

        .carousel .image {
            object-fit: cover;
            user-select: none;
            margin-left: 14px;
            width: calc();
            padding: 10px;
        }

        .image img {
            height: 100%;
            width: 100%;
        }

        .carousel .image:first-child {
            margin-left: 0px;
        }

        @media screen and (max-width: 900px) {
            .carousel .image {
                width: calc(100% / 1);
            }
        }

        @media screen and (max-width: 550px) {
            .carousel .image {
                width: 100%;
            }
        }

        .container-content {
            margin-bottom: 100px !important;
        }

        .copy-button {
            color: rgb(25, 25, 74)
        }

        html::-webkit-scrollbar {
            display: none;
        }

        .carousel-item img {
            width: 100px;
            object-fit: cover;
        }

        .btn-submit-rsvp {
            border: 0px;
            width: 100%;
            margin-top: 20px;
            padding: 8px;
            border-radius: 10px;
        }

        .container-rsvp {
            border: 1px solid white;
            border-radius: 10px;
        }

        .form-control {
            color: white;
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
            color: rgb(8, 8, 25);
        }
    </style>
</head>

<body style="background-color: rgb(0, 0, 0);">
    <div class="container-content-main header-content row" anim="fades"
        style="background-color: rgb(8, 8, 25); opacity: 0;">
        <audio controls autoplay class="d-none" id="music-audio">
            <source
                src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '/tema2/music/music2.mp3') : '/tema2/music/music2.mp3' }}"
                type="audio/mpeg" />
            Your browser does not support the audio element.
        </audio>
        <img src="/tema2/img/vinyl.png" alt="" id="disk-player" class="spining" onclick="toggleMusic()" />
        <div class="col-md-7 p-0 m-0" id="card-cover">
            <div id="cover-container" class="m-0">
                <div class="card-cover position-relative">
                    <img src="{{ asset('images/sampul/' . $informasiacara->sampul) }}" alt="" />
                    <div class="content-card position-relative">
                        <div class="gradient"></div>
                        <div class="container-bottom">
                            <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
                            <h3 class="header-content" anim="slide-left">{{ $mempelai ? $mempelai->namalaki : '' }} &
                                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h3>
                            <p class="m-2 my-3">{{ $afterConvertDay ? $afterConvertDay : '' }},
                                {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                            <p class="m-2 mb-3">To {{ $namaTamu }}</p>
                            <a href="" id="open-invitation" class="">Open Invitation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-content" class="col-md-5 0 m-0 p-3">
            <div class="container-fluids p-0 m-0 header-content" style="min-height: 100vh">
                <div class="row text-center header-content" anim="slide-down">
                    <div class="col-md-12">
                        <img src="/tema2/img/ornament-png.png" style="width: 200px; margin-top: 10px" />
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-md-12 pt-4 mb-5 position-relative">
                        <img src="/tema2/img/frame.svg" alt="" class="position-absolute header-content"
                            style="
                  left: 50%;
                  transform: translateX(-50%) translateY(20px);
                  width: 250px;
                "
                            anim="fades" />
                        <img src="{{ asset('images/pembuka/' . $informasiacara->pembuka) }}" alt=""
                            style="width: 240px; height: 240px; object-fit: cover; border-radius: 50%" class="mt-5" />
                    </div>
                </div>
                <div class="row text-center">
                    <h3 style="
                font-size: 40pt;
                font-family: 'Pinyon Script', cursive;
                font-size: 40pt;
              "
                        class="header-content" anim="fades">
                        {{ $mempelai ? $mempelai->namalaki : '' }} &
                        {{ $mempelai ? $mempelai->namaperempuan : '' }}
                    </h3>
                </div>
                <div class="row text-center header-content" anim="slide-up">
                    <div class="col-md-12">
                        <div class="container p-4">
                            <p class="mt-3 text-center" class="header-content" anim="slide-down"
                                style="font-family: 'Poppins', sans-serif">
                                {{ $quotes ? $quotes->quotes : '' }}

                            </p>
                            <img src="/tema2/img/ornament-png.png" style="width: 200px" class="header-content mt-5"
                                anim="slide-up" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row header-content" style="background-color: #0000006e; height: 100px" anim="slide-down">
            </div>
            <div class="container-header container-fluid container-couple mb-5 mt-5 header-content" anim="slide-left">
                <div class="container text-center p-2 container-couple">
                    <img src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                        alt="" class="couple-img header-content" />
                    <h3 class="mt-3">{{ $mempelai ? $mempelai->namalengkaplaki : '' }}</h3>
                    <p>Son of Mr.
                        {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                        {{ $mempelai ? $mempelai->namaibulaki : '' }}</p>
                    <a href="{{ $mempelai ? $mempelai->instagram_laki : '#' }}" class="btn-instagram header-content"
                        anim="slide-right"><i class="fa fa-instagram mr-1 p-2"></i>Instagram</a>
                </div>
            </div>
            <div class="container-fluid container-couple header-content" anim="slide-left">
                <div class="container text-center p-2 container-couple">
                    <img src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                        alt="" class="couple-img header-content" />
                    <h3 class="mt-3">{{ $mempelai ? $mempelai->namalengkapperempuan : '' }}</h3>
                    <p>Daughter of Mr.
                        {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                        {{ $mempelai ? $mempelai->namaibuperempuan : '' }}</p>
                    <a href="{{ $mempelai ? $mempelai->instagram_perempuan : '#' }}"
                        class="btn-instagram header-content" anim="slide-right"><i
                            class="fa fa-instagram mr-1 p-2"></i>Instagram</a>
                </div>
            </div>
            @if ($ceritacinta)
                <div class="row mt-5 justify-content-center animated" anim="slide-right">
                    <div class="col-11  text-center  fade-in">
                        <h2>Our Story</h2>
                        <div id="carouselExampleCaptions" class="carousel slide animated" data-bs-ride="carousel"
                            anim="slide-up">
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

                        <p class="mt-4" animated='animated' anim="fades">
                            "Once in a while, right in the middle of an ordinary life,
                            love gives us a fairy tale."
                        </p>
                    </div>
                </div>
            @endif

            <!-- Save the Date -->
            <div class="container-fluid mt-5 text-center container-content header-content"
                style="margin-bottom: 100px;">
                <h3 class="" anim="slide-right">Save The Date</h3>
                <p>{{ $afterConvertDay ? $afterConvertDay : '' }},
                    {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                <div class="row">
                    <input type="hidden" name="tglacara" id="tglacara" value="{{ $oriTanggalAcara }}">
                    <div class="col header-content" anim="slide-down">
                        <h3 id="days"></h3>
                        Days
                    </div>
                    <div class="col header-content" anim="slide-down">
                        <h3 id="hours"></h3>
                        Hour
                    </div>
                    <div class="col header-content" anim="slide-down">
                        <h3 id="minutes"></h3>
                        Minutes
                    </div>
                    <div class="col  header-content" anim="slide-down">
                        <h3 id="seconds"></h3>
                        Second
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
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <span style="width: 100px; font-size: 30pt">{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}</span>
                                        <button class="btn-number btn-secondary" type="button" data-type="plus">
                                            <i class="fa-solid fa-plus"></i>
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


            @if ($prewed)
                <div class="container-fluid text-center mt-5 container-content header-content" anim="slide-right">
                    <h3>Prewedding</h3>
                    <video style="width: 100%; height: 80%;" controls>
                        <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4">
                    </video>
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

            <div class="container-fluid mt-5 header-content text-center container-content">
                <h3 class="header-content" anim="slide-up">it's Wedding Day</h3>
                <p>
                    True love stands by each other’s side on good days and stands
                    closer on bad days
                </p>
            </div>

            <div class="container-fluid mt-5 text-center header-content">
                <h3 class="">{{ $afterConvertDay ? $afterConvertDay : '' }}</h3>
                <p>{{ $tanggalAcara ? $tanggalAcara : '' }}</p>
            </div>

            <div class="container-fluid text-center mt-5 mb-5 header-content position-relative container-content">
                <div class="img-con" style="height: 120px; margin-top: 100px">
                    <img src="/tema2/img/glow.png" alt=""
                        style="
                  width: 200px;
                  transform: translateX(-50%);
                  top: -50px;
                  z-index: 0;
                  opacity: 0.6;
                "
                        class="position-absolute" />
                    <svg style="width: 200px; top: 0; z-index: 0;transform: translateX(-50%);"
                        class="position-absolute header-content" width="80px" height="80px" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg" anim="scale">
                        <path fill="#ffffff"
                            d="M201.837 53.087L177.547 21h55.676zM278.766 21l30.82 31.465L333.065 21h-54.298zm12.428 38.12L256 23.18l-35.25 35.985h70.5zm82.091 0l-23.511-30.855-23.003 30.9h46.57zM161.096 28.683L138.5 59.188h45.746zm51.248 48.242L256 196.821l43.69-119.896h-87.38zm-73.166 0l90.384 99.017-36.153-99.017h-54.231zm233.712 0h-54.23l-36.076 99.017zm-19.455 48.142l-29.059 31.838a154.298 154.298 0 0 1 85.786 138.119C410.14 380.008 340.995 449.197 256 449.197s-154.14-69.144-154.14-154.14a154.298 154.298 0 0 1 85.787-138.119L158.588 125.1a196.044 196.044 0 0 0-98.53 169.924C60.057 403.056 147.955 491 256 491c108.044 0 195.943-87.899 195.943-195.943a196.044 196.044 0 0 0-98.542-169.99z" />
                    </svg>
                </div>
                <h3 class="header-content" anim="slide-up">Akad Nikah</h3>
                <h5>{{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                    Selesai</h5>
                <div class="container mt-4">
                    <h5></h5>
                    <p class="tlp">
                        {{ $informasiacara ? $informasiacara->lokasiakadnikah : 'BAnjarmasin SOLo' }}
                    </p>
                    <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                        class="primary-btn mb-5">View Map</a>
                </div>
            </div>
            @if ($informasiacara)
                @if ($informasiacara->lokasiresepsi)
                    <div class="container-fluid text-center mt-5 mb-5 header-content position-relative container-content"
                        anim="slide-right">
                        <div class="img-con" style="height: 120px; margin-top: 100px">
                            <img src="/tema2/img/glow.png" alt=""
                                style="
                  width: 200px;
                  transform: translateX(-50%);
                  top: -50px;
                  z-index: 0;
                  opacity: 0.6;
                "
                                class="position-absolute" />
                            <svg style="width: 200px; top: 0; z-index: 0;transform: translateX(-50%);"
                                class="position-absolute" width="80" height="80" viewBox="0 0 475 451"
                                fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M370.442 0.0250744C373.095 9.87541 374.247 19.5667 375.208 29.6911C375.557 33.1658 375.997 36.6238 376.442 40.0876C380.587 72.857 383.984 107.38 377.442 140.025C377.238 141.083 377.034 142.141 376.824 143.232C373.213 161.781 368.301 179.775 362.63 197.787C362.346 198.702 362.061 199.617 361.768 200.56C361.234 202.276 360.689 203.989 360.132 205.697C357.776 213.244 359.639 217.914 362.38 225.213C362.683 226.03 362.987 226.847 363.3 227.689C366.377 235.935 369.572 244.134 372.751 252.341C375.249 258.823 377.636 265.326 379.88 271.9C382.661 280.04 385.767 288.032 388.942 296.025C392.011 303.75 395.026 311.465 397.692 319.338C401.076 329.3 404.894 339.09 408.692 348.9C414.771 364.603 420.682 380.356 426.405 396.193C427.32 398.692 428.273 401.173 429.239 403.654C430.442 407.025 430.442 407.025 430.442 410.025C432.651 409.298 434.859 408.568 437.067 407.838C437.743 407.616 438.419 407.394 439.115 407.165C442.509 406.041 445.873 404.88 449.204 403.58C462.866 398.319 462.866 398.319 469.442 400.025C471.092 401.345 472.742 402.665 474.442 404.025C474.442 419.205 474.442 434.385 474.442 450.025C441.772 450.025 409.102 450.025 375.442 450.025C370.568 441.495 370.568 441.495 371.442 437.025C380.641 426.514 397.674 422.766 410.442 418.025C409.867 411.561 407.754 405.996 405.442 399.963C404.772 398.185 404.102 396.407 403.434 394.628C402.938 393.31 402.44 391.992 401.943 390.674C399.776 384.933 397.646 379.18 395.524 373.424C395.18 372.491 394.837 371.557 394.482 370.596C393.77 368.663 393.058 366.73 392.346 364.797C385.048 344.998 377.67 325.23 370.244 305.48C366.942 296.697 363.648 287.911 360.354 279.125C359.416 276.622 358.478 274.12 357.539 271.617C357.247 270.836 356.954 270.055 356.652 269.25C356.077 267.717 355.502 266.183 354.926 264.65C353.56 261.006 352.194 257.363 350.831 253.718C348.61 247.784 346.385 241.852 344.106 235.939C343.765 235.052 343.423 234.165 343.071 233.252C342.38 231.462 341.688 229.673 340.993 227.884C340.659 227.016 340.325 226.147 339.981 225.252C339.684 224.484 339.387 223.717 339.081 222.926C338.442 221.025 338.442 221.025 338.442 219.025C337.398 218.657 337.398 218.657 336.334 218.282C332.981 216.825 330.198 214.984 327.181 212.92C326.59 212.517 325.999 212.115 325.391 211.701C323.509 210.417 321.632 209.128 319.755 207.838C318.514 206.99 317.272 206.143 316.03 205.297C290.447 187.835 266.121 170.085 247.442 145.025C246.945 144.362 246.448 143.698 245.935 143.014C236.525 130.398 227.892 117.298 219.442 104.025C218.875 103.134 218.307 102.243 217.723 101.324C211.318 91.2212 205.178 80.9803 199.255 70.5876C198.702 69.6221 198.148 68.6566 197.578 67.6618C197.066 66.7517 196.553 65.8416 196.024 64.904C195.573 64.1055 195.121 63.307 194.656 62.4843C193.297 59.7316 192.353 56.9533 191.442 54.0251C201.832 48.6549 212.335 43.7901 223.151 39.3425C225.444 38.3995 227.732 37.4474 230.02 36.4938C269.738 20.0059 310.068 8.73159 352.6 2.47576C356.172 1.90944 359.694 1.17788 363.224 0.392262C365.663 -0.0114962 367.974 -0.0357704 370.442 0.0250744Z"
                                    fill="#ffffff" />
                                <path
                                    d="M90.4423 9.02508C95.1097 8.94871 99.7747 8.97577 104.442 9.02508C105.259 9.03089 106.075 9.03669 106.916 9.04266C122.73 9.21897 138.357 10.7035 154.067 12.4001C155.054 12.5051 156.041 12.6101 157.058 12.7183C196.238 16.9227 196.238 16.9227 206.442 22.0251C206.442 22.6851 206.442 23.3451 206.442 24.0251C205.925 24.2558 205.409 24.4866 204.876 24.7243C199.644 27.0629 194.418 29.4163 189.197 31.7805C187.425 32.5812 185.651 33.3787 183.875 34.1721C181.538 35.2169 179.208 36.2754 176.88 37.3376C176.173 37.6502 175.466 37.9628 174.737 38.2849C171.062 39.9798 168.313 41.3404 166.442 45.0251C165.254 56.3279 173.791 67.3329 179.255 76.5251C180.015 77.8101 180.774 79.0952 181.533 80.3806C183.082 82.9997 184.634 85.6167 186.189 88.2321C187.623 90.6435 189.053 93.0572 190.476 95.4743C199.566 110.898 208.905 126.16 219.368 140.701C220.317 142.024 220.317 142.024 221.286 143.373C221.865 144.168 222.445 144.964 223.042 145.783C224.414 147.98 225.187 149.456 225.442 152.025C224.088 154.728 222.71 157.132 221.067 159.65C220.61 160.364 220.152 161.077 219.681 161.812C200.867 190.522 165.671 208.659 136.45 225.166C132.933 227.167 129.42 229.177 125.927 231.22C125.112 231.695 124.297 232.169 123.457 232.658C119.776 235.156 119.026 238.259 117.684 242.32C115.642 248.48 113.557 254.624 111.446 260.759C105.1 279.217 98.8648 297.701 92.886 316.28C90.139 324.816 87.3684 333.338 84.4071 341.802C84.169 342.484 83.9308 343.166 83.6855 343.868C82.5814 347.02 81.466 350.168 80.3358 353.311C79.7601 354.939 79.7601 354.939 79.1727 356.599C78.8365 357.533 78.5003 358.468 78.1539 359.43C77.426 362.084 77.3052 364.287 77.4423 367.025C78.4606 367.337 79.479 367.65 80.5282 367.971C84.3398 369.142 88.1485 370.322 91.9564 371.505C93.5985 372.014 95.2414 372.52 96.8851 373.024C99.2604 373.752 101.633 374.489 104.005 375.228C104.729 375.448 105.453 375.668 106.2 375.895C111.954 377.702 118.11 379.693 122.442 384.025C122.88 389.367 122.879 392.663 119.442 397.025C113.421 400.036 105.873 397.336 99.8173 395.576C98.9121 395.321 98.0069 395.067 97.0743 394.805C94.1941 393.992 91.3183 393.165 88.4423 392.338C86.5428 391.801 84.643 391.265 82.743 390.73C73.697 388.172 64.6876 385.522 55.7255 382.683C50.6594 381.08 45.5642 379.624 40.4423 378.213C32.3426 375.93 24.3154 373.454 16.3173 370.838C15.2796 370.505 14.2419 370.172 13.1727 369.829C12.2072 369.508 11.2417 369.187 10.2469 368.857C8.96279 368.435 8.96279 368.435 7.6527 368.005C5.32434 366.973 4.02064 366.012 2.44226 364.025C2.44226 363.365 2.44226 362.705 2.44226 362.025C1.78225 362.025 1.12225 362.025 0.442255 362.025C-0.319566 354.102 -0.319566 354.102 2.25476 350.463C9.01059 347.416 15.5548 348.562 22.4227 350.822C29.4729 353.067 36.5864 354.949 43.7548 356.775C44.9839 357.091 46.213 357.407 47.4794 357.732C50.4663 358.499 53.4539 359.263 56.4423 360.025C56.5521 359.183 56.6619 358.342 56.775 357.475C57.4987 353.733 58.7194 350.359 60.118 346.834C63.6417 337.695 66.6479 328.414 69.6298 319.088C70.4137 316.648 71.1988 314.209 71.9841 311.77C72.4659 310.272 72.9469 308.774 73.4267 307.276C75.9162 299.508 78.5063 291.784 81.2508 284.103C83.3922 278.072 85.4672 272.023 87.4774 265.947C87.727 265.193 87.9767 264.438 88.2338 263.661C89.2476 260.592 90.259 257.523 91.2677 254.453C92.0223 252.158 92.7803 249.865 93.5399 247.572C93.9027 246.471 93.9027 246.471 94.2727 245.348C96.148 239.726 98.3033 234.273 100.655 228.831C102.308 222.938 99.6881 217.811 97.4423 212.4C90.3645 194.764 84.7769 176.417 79.9686 158.037C79.6119 156.674 79.2505 155.312 78.8846 153.951C71.2813 125.66 71.7973 96.3468 77.1298 67.6501C77.3973 66.1745 77.6647 64.6989 77.932 63.2233C81.2685 44.9981 84.8822 26.7192 90.4423 9.02508Z"
                                    fill="#ffffff" />
                            </svg>
                        </div>

                        <h3>Resepsi</h3>
                        <h5>{{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                            Selesai</h5>
                        <div class="container mt-4">
                            <h5></h5>
                            <p class="tlp">
                                {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}
                            </p>
                            <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                                class="primary-btn">View Map</a>
                        </div>
                    </div>
                @endif
            @endif

            @if ($informasiacara)
                @if ($informasiacara->livestream)
                    <div class="container-fluid container-content text-center" style="margin-top: 200px">
                        <h3 class="header-content" anim="slide-left">Live Streaming</h3>
                        <iframe class="header-content" width="400" height="315"
                            src="https://www.youtube.com/embed/M5Byww-rz-Y?si=r_3QyOykFlldZJ8l"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <p>Please join and watch us become husband & wife</p>
                    </div>
                @endif
            @endif

            @if ($weddingfilter)
                <div class="container-fluid mt-5 container-content header-content text-center py-5" anim="slide-down"
                    style="border: 2px solid white; border-radius: 20px;">
                    <h3>Instagram Wedding Filter</h3>
                    <p class="m=2">
                        Capture your moment while attending our wedding by using the
                        Instagram filter below.
                    </p>
                    <img class="mb-3" src="https://cdn.pixabay.com/photo/2017/08/15/18/39/drone-2645068_150.jpg"
                        alt=""
                        style="
                width: 80%;
                height: 600px;
                object-fit: cover;
                border-radius: 10px;
              " />
                    <div class="row mt-2">
                        <div class="col">
                            <a href="" class="open-filter mt-5">Open Filter</a>
                        </div>
                    </div>
                </div>
            @endif

            @if ($protokol != null)
                <div class="container-fluid mt-5 justify-content-center text-center header-content container-content">
                    <h3>Let`s Keep Yourself and other</h3>
                    <div class="container text-center mt-4">
                        <div class="row justify-content-center container-protocol text-center" style="color: #061b40">
                            <div class="col p-3">
                                <div class="protocol-card header-content" anim="slide-left">
                                    <svg width="131" height="118" viewBox="0 0 115 118" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.6841 0.460861C52.0598 1.03693 51.8814 2.37341 51.9929 5.43811C52.0598 7.78848 52.1044 7.90369 52.6841 8.43368C53.4645 9.12496 53.9997 9.12496 54.7578 8.43368C55.3375 7.92673 55.3821 7.76543 55.4713 5.66853L55.5605 3.45643H57.099H58.6375V55.5332V107.61H57.0767H55.5159L55.4713 60.81L55.4044 14.01L54.8693 13.5722C54.5794 13.3418 54.0666 13.1344 53.7321 13.1344C53.3977 13.1344 52.8848 13.3418 52.5949 13.5722L52.0598 14.01L51.9929 60.81L51.9483 107.61H38.347H24.7456V106.573C24.7456 104.131 23.051 101.573 20.8213 100.72L19.7287 100.282L19.6619 93.8073L19.6173 87.3323H20.1524C20.4646 87.3323 20.9774 87.0788 21.3342 86.7793C21.9139 86.2493 21.9585 86.111 22.0254 83.8528C22.1146 80.9494 21.8247 79.7282 20.9105 79.4056C19.3943 78.8525 18.547 79.9816 18.5247 82.5394L18.5024 83.8759H13.597C9.07064 83.8759 8.69159 83.8528 8.69159 83.4611C8.69159 83.1385 8.91456 83.0694 10.2078 83.0694C12.0139 83.0694 13.3963 82.355 14.3328 80.9264C15.1801 79.659 15.3808 78.0921 15.3808 72.2853V67.285H16.9416H18.5024L18.5247 70.3267C18.5247 73.8522 18.77 74.8892 19.6842 75.2118C20.6206 75.5574 21.4679 75.1426 21.7801 74.1979C22.1146 73.207 22.1592 50.9938 21.847 48.4591C21.6017 46.5004 20.8659 44.8413 19.5727 43.4127C18.9706 42.7214 18.77 42.3758 18.9706 42.3066C20.6652 41.7997 21.4679 41.3388 22.2929 40.4171C23.5416 39.0115 23.8537 38.1359 23.8537 36.0159C23.8537 34.0112 23.6085 33.4121 22.5605 32.9743C22.0477 32.7439 21.9362 32.5826 22.0254 32.1447C22.07 31.8221 22.3152 31.5456 22.6497 31.4765C23.6977 31.2 23.9206 30.4165 23.7869 27.7436C23.6531 24.8863 23.051 23.3193 21.5794 22.0289C20.0855 20.6925 18.8815 20.3929 15.0463 20.3929C12.17 20.3929 11.5233 20.462 10.4308 20.8768C7.822 21.9137 5.77065 23.8263 4.522 26.4301C3.83078 27.8588 3.6524 28.6192 3.18416 31.9604C2.872 34.1955 2.69362 36.2924 2.76051 36.9607C3.00578 39.2419 4.85646 41.2697 7.04159 41.6153C7.91118 41.7306 8.02267 41.8227 8.02267 42.3297C8.02267 42.6523 7.71051 43.2744 7.35375 43.7122C6.21659 45.0257 5.56997 46.6387 5.3247 48.6895C5.19092 49.8416 5.12402 57.6071 5.16862 68.3911L5.23551 86.2262L5.85983 86.7793C6.39497 87.2401 6.72943 87.3323 8.04497 87.3323H9.58348V97.4711V107.61H6.9747C3.63011 107.61 2.8274 107.84 1.53416 109.2C0.0848377 110.675 -0.316513 112.311 0.240919 114.408C0.553081 115.583 2.31457 117.403 3.49632 117.726C4.81186 118.118 109.453 118.071 110.679 117.703C111.237 117.518 111.995 116.988 112.597 116.366C114.671 114.223 114.671 111.389 112.597 109.2C111.371 107.886 110.546 107.61 107.647 107.61H105.462V101.895C105.462 98.7615 105.373 95.8581 105.239 95.4203C104.994 94.5217 104.458 94.0378 103.678 94.0378C102.362 94.0378 101.894 95.1208 101.894 98.2085V100.236H100.356H98.8395L98.7057 91.4109C98.6165 86.5719 98.4605 81.779 98.3267 80.7651C98.1037 79.1291 97.0557 73.5296 96.6544 71.8245L96.4983 71.2023H97.9699H99.4415V74.4514C99.4415 78.3686 99.6645 79.2443 100.958 80.6499L101.939 81.6868L101.917 84.9128C101.894 88.6227 102.14 89.6135 103.076 89.9592C104.012 90.3048 104.86 89.89 105.172 88.9453C105.328 88.4844 105.44 86.8254 105.44 85.1432L105.462 82.1477L106.465 81.7098C107.692 81.2029 108.896 79.8203 109.23 78.5069C109.431 77.8156 109.475 73.3914 109.431 62.423L109.364 47.33L108.539 45.5787L108.539 45.5786L108.539 45.5784C108.2 44.8775 107.996 44.4571 107.874 44.0143C107.692 43.351 107.692 42.6374 107.692 40.8549V37.9054L108.472 36.7533L108.521 36.6802C109.05 35.8946 109.394 35.384 109.618 34.8252C110.033 33.788 110.033 32.5847 110.033 29.148V29.1479L110.033 28.9187V23.8493L109.408 22.5359C109.052 21.7985 108.405 20.8998 107.959 20.5081C106.51 19.2638 105.685 19.1255 100.133 19.1255C97.3456 19.1255 94.7145 19.2408 94.2686 19.356C93.0422 19.7247 91.6152 20.9459 90.924 22.2363C89.7422 24.4484 90.2774 27.7896 92.0611 29.3105C92.6409 29.8174 92.7523 30.0939 92.7523 30.9235C92.7523 31.8221 92.6855 31.9604 92.0834 32.1908C91.0578 32.5826 90.6787 33.7808 90.7902 36.0851C90.9463 39.3571 92.4402 41.3619 95.1159 41.9379L96.3645 42.2145L95.2496 43.3896C94.6253 44.0579 93.8226 45.21 93.4882 45.9704L92.8638 47.353L92.7969 58.4136L92.7301 69.4741L93.6442 73.8522C95.1159 80.8803 95.2051 81.802 95.2051 91.6413C95.2051 99.8906 95.1828 100.467 94.826 100.467C94.0902 100.467 92.0834 101.849 91.4145 102.817C90.701 103.831 90.4111 104.73 90.1882 106.504L90.0544 107.61H76.1186H62.2051V54.888C62.2051 21.8216 62.1159 1.88952 61.9821 1.40562C61.6253 0.0921783 61.3801 0.0230408 57.0544 -4.73918e-10C53.4645 -4.73918e-10 53.1078 0.0460892 52.6841 0.460861ZM105.417 22.9046C106.51 23.5037 106.599 23.9184 106.532 29.034L106.465 33.7577L105.885 33.8269C104.882 33.9421 103.968 32.9282 103.79 31.4995C103.567 29.7944 102.786 28.504 101.604 27.9049C100.802 27.4901 100.222 27.421 98.0145 27.421C94.4692 27.421 93.6442 26.9601 93.6442 25.0015C93.6442 23.9415 93.9341 23.3654 94.7145 22.9507C95.5841 22.4437 104.525 22.4207 105.417 22.9046ZM18.8815 24.2641C19.751 24.748 20.2416 25.6467 20.4423 27.0753L20.576 28.1122H17.5213C14.0429 28.1122 13.1956 28.3427 12.4821 29.5409C12.0808 30.2322 12.0362 30.693 12.0362 34.2647V38.2511H9.80645C5.92673 38.2511 5.77065 37.9746 6.46186 32.7899C6.997 28.7114 7.33146 27.6975 8.71389 26.1536C10.4531 24.195 11.8578 23.7111 15.4923 23.8032C17.5213 23.8493 18.3463 23.9645 18.8815 24.2641ZM100.333 31.3382C100.556 31.753 100.49 31.8452 99.7537 32.1678C99.174 32.4213 98.8618 32.4443 98.7057 32.283C98.5719 32.1447 97.9253 32.0295 97.2787 32.0295C96.1638 32.0295 96.0969 32.0065 96.0969 31.4535C96.0969 30.8774 96.1192 30.8774 98.1036 30.8774H98.1037C99.8652 30.8774 100.11 30.9235 100.333 31.3382ZM18.5024 32.1447C18.5024 32.6978 18.4578 32.7208 16.9416 32.7208C15.4254 32.7208 15.3808 32.6978 15.3808 32.1447C15.3808 31.5917 15.4254 31.5687 16.9416 31.5687C18.4578 31.5687 18.5024 31.5917 18.5024 32.1447ZM102.162 35.7164C102.395 35.9377 102.799 36.2644 103.105 36.5124L103.232 36.615L103.79 37.0529L103.121 37.3524C102.764 37.5137 101.894 37.652 101.225 37.652L99.999 37.675L99.9321 36.8224C99.8652 36.0851 99.9544 35.9238 100.49 35.6242C101.315 35.1634 101.537 35.1634 102.162 35.7164ZM96.5429 37.0989C96.5429 37.9746 96.4537 38.7119 96.3422 38.7119C96.253 38.7119 95.8517 38.5967 95.4503 38.4585C94.6476 38.1589 94.0902 37.2372 94.0902 36.1772C94.0902 35.4859 94.0902 35.4859 95.3165 35.4859H96.5429V37.0989ZM20.5092 36.7303C20.5092 37.4215 19.7956 38.3433 18.9929 38.6889C18.6362 38.8502 17.6997 38.9424 16.9193 38.8963L15.4923 38.8272L15.4254 37.8133L15.4227 37.7743C15.3777 37.1145 15.3512 36.7273 15.5292 36.5C15.7819 36.1772 16.4469 36.1772 18.0564 36.1772C20.4869 36.1772 20.5092 36.1772 20.5092 36.7303ZM104.347 40.9932C104.347 41.3158 104.235 41.408 103.901 41.3158C103.344 41.1545 103.321 40.8549 103.856 40.7167C103.96 40.6809 104.064 40.6512 104.147 40.6278C104.223 40.606 104.281 40.5895 104.302 40.5784C104.325 40.5784 104.347 40.7628 104.347 40.9932ZM15.849 44.8874C16.6071 45.2792 17.2983 45.9013 17.722 46.5235L18.3909 47.5143L18.4578 55.6715L18.5247 63.8286H16.9639H15.4254L15.3362 56.7314L15.2693 49.6573L14.6004 48.413C13.8423 47.0074 12.7497 46.1317 11.2112 45.74L10.1855 45.4635L11.3673 44.8644C12.9727 44.0348 14.2882 44.0348 15.849 44.8874ZM103.031 44.5879C103.187 44.7031 103.054 44.8644 102.608 45.0487C102.251 45.21 101.537 45.74 101.047 46.2009C99.4638 47.6526 99.4415 47.906 99.4415 58.4596V67.7459H97.7692H96.0969V58.2292C96.0969 52.1229 96.1861 48.413 96.3422 47.8369C96.6544 46.6848 98.1929 45.0026 99.3301 44.5648C100.222 44.2422 102.474 44.2422 103.031 44.5879ZM105.573 48.7356C106.086 49.2656 106.131 49.4499 106.131 51.7311V54.1506H104.458H102.786V51.7311C102.786 49.4499 102.831 49.2656 103.344 48.7356C103.633 48.413 104.146 48.1595 104.458 48.1595C104.771 48.1595 105.283 48.413 105.573 48.7356ZM11.3004 49.5882L11.8132 50.0721V64.4277V78.7834L11.2335 79.2443C10.4754 79.8434 10.0294 79.8434 9.27132 79.2443L8.69159 78.7834V64.4047V50.026L9.18213 49.5421C9.80645 48.943 10.6538 48.943 11.3004 49.5882ZM106.131 67.6307V77.6774L105.573 78.2304C105.283 78.553 104.771 78.8065 104.458 78.8065C104.146 78.8065 103.633 78.553 103.344 78.2304L102.786 77.6774V67.6307V57.6071H104.458H106.131V67.6307ZM16.2727 93.7843V100.236H14.6004H12.9281V93.7843V87.3323H14.6004H16.2727V93.7843ZM19.9963 104.154C20.8659 104.684 21.401 105.697 21.401 106.803V107.61H17.1646H12.9281V105.651V103.693H16.1166C18.8592 103.693 19.372 103.762 19.9963 104.154ZM101.894 105.651V107.61H97.7692H93.6442V106.688C93.6442 105.444 94.1348 104.545 95.0267 104.084C95.6064 103.785 96.4537 103.693 98.8395 103.693H101.894V105.651ZM110.278 111.642C110.969 112.357 110.969 113.232 110.256 113.947L109.721 114.523H57.0767H4.43281L3.89767 113.947C3.18416 113.232 3.18416 112.357 3.87538 111.642L4.41051 111.089H57.0767H109.743L110.278 111.642ZM37.7896 36.9837C37.0092 37.7672 37.076 38.5506 38.0348 39.6337L38.8375 40.5554H34.9355C32.7727 40.5554 30.7436 40.6706 30.4092 40.7858C29.1828 41.2697 28.8706 42.3527 29.6734 43.4127L30.1193 44.0118H34.5788C37.0092 44.0118 39.0159 44.0809 39.0159 44.1501C39.0159 44.2422 38.6146 44.7492 38.124 45.3022C37.076 46.4774 36.9869 47.2378 37.7896 48.0443C38.8152 49.1273 39.2835 48.8969 42.1821 45.9013C44.345 43.6892 44.8132 43.067 44.8132 42.514C44.8132 41.961 44.345 41.3388 42.1821 39.1267C39.2835 36.1311 38.8152 35.9007 37.7896 36.9837ZM69.3402 42.514C69.3402 41.961 69.8085 41.3388 71.9713 39.1267C74.8699 36.1311 75.3382 35.9007 76.3639 36.9837C77.1443 37.7672 77.0774 38.5506 76.1186 39.6337L75.3159 40.5554H79.1956C83.4098 40.5554 84.3017 40.7167 84.703 41.6153C85.0598 42.4218 85.0152 42.6984 84.4801 43.4127L84.0341 44.0118H79.5747C77.1443 44.0118 75.1375 44.0809 75.1375 44.1501C75.1375 44.2422 75.5389 44.7492 76.0294 45.3022C77.0774 46.4774 77.1666 47.2378 76.3639 48.0443C75.3382 49.1273 74.8699 48.8969 71.9713 45.9013C69.8085 43.6892 69.3402 43.067 69.3402 42.514ZM37.678 53.5054C36.9645 54.3119 37.1429 55.2337 38.3024 56.501L38.8821 57.1462H34.5787C30.3422 57.1462 30.2976 57.1462 29.7625 57.7223C29.4503 58.0218 29.2051 58.5518 29.2051 58.8744C29.2051 59.197 29.4503 59.727 29.7625 60.0266C30.2976 60.6026 30.3199 60.6026 34.6679 60.6026H39.0605L38.1463 61.6626C37.1875 62.7917 37.0537 63.2986 37.4774 64.1282C37.8341 64.8195 38.1017 64.9808 39.0159 64.9808C39.6848 64.9808 40.0416 64.7043 42.2936 62.3769C44.5233 60.0726 44.8132 59.6809 44.8132 58.9896C44.8132 58.2983 44.5233 57.9066 42.2936 55.6023C39.997 53.2289 39.7071 52.9985 38.949 52.9985C38.4139 52.9985 37.9902 53.1598 37.678 53.5054ZM69.3402 58.9896C69.3402 58.2027 70.1028 57.4157 71.6279 55.8417L71.8821 55.5793C74.3125 53.0676 74.4463 52.9754 75.249 53.0446C75.851 53.0907 76.2301 53.298 76.5422 53.7359C77.0997 54.4963 76.9436 55.2336 76.0071 56.3397L75.3159 57.1462H79.5747C83.8111 57.1462 83.8557 57.1462 84.3909 57.7223C84.703 58.0218 84.9483 58.5518 84.9483 58.8744C84.9483 59.197 84.703 59.727 84.3909 60.0266C83.8557 60.6026 83.8334 60.6026 79.4632 60.6026H75.0929L75.8956 61.5243C76.9436 62.7226 77.0997 63.4599 76.5422 64.2434C76.2301 64.6812 75.851 64.8886 75.249 64.9347C74.4463 65.0038 74.3125 64.9116 71.8821 62.4L71.6279 62.1375C70.1028 60.5636 69.3402 59.7766 69.3402 58.9896ZM37.7896 69.935C37.0092 70.7184 37.076 71.5019 38.0348 72.5849L38.8375 73.5066H34.9355C32.7727 73.5066 30.7436 73.6218 30.4092 73.737C29.1828 74.2209 28.8706 75.3039 29.6734 76.3639L30.1193 76.963H34.5788C37.0092 76.963 39.0159 77.0322 39.0159 77.1013C39.0159 77.1935 38.6146 77.7004 38.124 78.2534C37.076 79.4286 36.9869 80.189 37.7896 80.9955C38.8152 82.0785 39.2835 81.8481 42.1821 78.8525C44.345 76.6404 44.8132 76.0183 44.8132 75.4652C44.8132 74.9122 44.345 74.2901 42.1821 72.0779C39.2835 69.0824 38.8152 68.852 37.7896 69.935ZM69.3402 75.4652C69.3402 74.9122 69.8085 74.2901 71.9713 72.0779C74.8699 69.0824 75.3382 68.852 76.3639 69.935C77.1443 70.7184 77.0774 71.5019 76.1186 72.5849L75.3159 73.5066H79.1956C83.4098 73.5066 84.3017 73.6679 84.703 74.5666C85.0598 75.3731 85.0152 75.6496 84.4801 76.3639L84.0341 76.963H79.5747C77.1443 76.963 75.1375 77.0322 75.1375 77.1013C75.1375 77.1935 75.5389 77.7004 76.0294 78.2534C77.0774 79.4286 77.1666 80.189 76.3639 80.9955C75.3382 82.0785 74.8699 81.8481 71.9713 78.8525C69.8085 76.6404 69.3402 76.0183 69.3402 75.4652Z"
                                            fill="#061b40" />
                                    </svg>

                                    <h4 class="m-0">Distancing</h4>
                                </div>
                            </div>
                            <div class="col p-3">
                                <div class="protocol-card header-content" anim="slide-right">
                                    <svg width="131" height="118" viewBox="0 0 126 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" fill="#061b40">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.1937 0.136749C6.23205 0.900955 2.68871 3.48576 1.16311 6.7224C0.0065975 9.19483 -0.0672222 9.93656 0.031204 21.557C0.12963 31.7389 0.178843 32.6155 0.670974 34.6608C2.44265 41.9208 6.45351 48.1918 12.236 52.7096C18.2893 57.4297 25.2283 60.0369 33.2008 60.5764C35.4646 60.7337 35.5877 60.7787 36.8918 61.6777C41.1733 64.6447 46.9559 67.1845 52.2709 68.3758C56.5524 69.3647 58.2257 69.5446 62.9747 69.5446C67.6992 69.5446 69.397 69.3647 73.6048 68.3982C79.0674 67.162 84.7023 64.7121 89.0577 61.6777C90.411 60.7562 90.4849 60.7337 92.8717 60.5764C97.6946 60.2842 101.927 59.2053 106.479 57.1375C109.924 55.6091 111.204 54.5751 111.204 53.3839C111.204 52.7545 111.031 52.3724 110.49 51.8779C109.407 50.889 108.448 51.0013 105.864 52.3499C104.658 52.9793 102.862 53.7884 101.828 54.1481C99.7615 54.8673 96.4396 55.7664 96.4396 55.5866C96.4396 55.5191 96.9318 54.8898 97.5223 54.193C101.533 49.4055 104.117 44.3258 105.569 38.3021C106.085 36.1668 106.11 35.3576 106.258 22.7932L106.405 9.53198L107.094 8.25081C108.669 5.30637 112.262 3.86787 115.731 4.78941C117.527 5.26142 119.299 6.7224 120.234 8.49805L120.923 9.75674L120.997 19.6465C121.071 29.9632 120.948 32.3233 120.037 35.2677C119.791 36.1443 119.57 37.1782 119.57 37.6053C119.57 39.6956 122.621 40.5272 123.901 38.7516C124.442 37.9874 125.18 35.4026 125.598 32.6829C126.115 29.3564 126.115 11.0379 125.598 8.99254C123.704 1.73259 115.559 -1.99853 108.349 1.12572C105.47 2.36194 102.911 5.01418 101.976 7.73385L101.533 9.03749L98.0637 8.90263C91.9859 8.67787 87.7043 7.62146 80.6915 4.58712C73.2849 1.37296 69.6677 0.563805 62.9747 0.563805C56.331 0.563805 52.6154 1.41792 45.1104 4.65455C38.2206 7.62146 33.9144 8.67787 27.8858 8.90263L24.4163 9.03749L23.8996 7.62146C22.2017 3.03623 17.3542 -0.0880127 12.0884 0.00189209C11.3256 0.0243683 10.4644 0.0693207 10.1937 0.136749ZM15.5825 5.23895C17.1081 5.93572 18.2647 7.03707 19.0275 8.49805C19.5196 9.5095 19.5442 9.93656 19.6918 22.7932C19.8395 35.3576 19.8641 36.1668 20.3808 38.3021C21.8326 44.3258 24.4163 49.4055 28.4272 54.193C29.0177 54.8898 29.5098 55.5191 29.5098 55.5866C29.5098 55.7439 26.3848 54.9348 24.4655 54.2605C16.0747 51.3834 9.4309 44.9776 6.50273 36.9984C5.02633 32.9526 4.87869 31.3793 4.95251 19.8937L4.95284 19.8492C5.02633 9.84631 5.02717 9.7326 5.59228 8.61044C6.33048 7.14946 8.17597 5.48618 9.72618 4.92427C11.3994 4.29492 13.7617 4.42979 15.5825 5.23895ZM67.5762 5.2839C70.9227 5.73343 74.466 6.78983 78.0093 8.40815C85.2683 11.7572 92.3549 13.4429 98.9741 13.4654H101.386L101.287 24.5239C101.213 34.7507 101.164 35.7622 100.672 37.6952C99.9092 40.8194 99.2448 42.5277 97.6454 45.4946C92.1827 55.6315 81.6265 62.7117 68.8803 64.757C66.1736 65.1841 59.2345 65.1167 56.331 64.6222C44.1015 62.5543 33.6191 55.4068 28.3041 45.4946C26.7047 42.5277 26.0403 40.8194 25.2775 37.6952C24.7854 35.7622 24.7362 34.7507 24.6624 24.5239L24.5639 13.4654H26.9754C33.7176 13.4429 40.1645 11.8695 48.4569 8.22833C55.1991 5.26142 60.9324 4.36236 67.5762 5.2839ZM58.6686 15.8479C51.5573 16.5222 41.3702 18.7249 37.3101 20.4556C36.5473 20.7703 35.9075 21.6918 35.9075 22.456C35.9075 23.5799 37.1133 24.7037 38.319 24.7037C38.5404 24.7037 39.8938 24.3441 41.2964 23.917C56.7001 19.1295 69.0033 19.0845 84.2594 23.7822C87.5075 24.7936 87.7535 24.8161 88.6886 24.434C90.4849 23.6922 90.4356 21.2873 88.5901 20.4331C86.0311 19.2644 77.1727 17.1066 71.8331 16.3649C68.6589 15.9378 60.9816 15.6231 58.6686 15.8479ZM37.2609 35.6723C35.5631 34.9755 35.5138 32.593 37.1625 31.7613C38.0729 31.2893 87.8027 31.3118 88.787 31.7613C90.411 32.548 90.411 34.8406 88.787 35.6273C88.1964 35.897 84.2348 35.942 62.9993 35.942C44.0523 35.942 37.753 35.8746 37.2609 35.6723ZM37.1625 42.9997C36.006 43.5841 35.6123 44.8877 36.2766 46.034C36.6949 46.7982 37.8761 47.2927 41.9361 48.4165C50.3024 50.7316 55.6174 51.5183 62.8517 51.5408C69.84 51.5408 74.8843 50.844 82.5369 48.8211C87.286 47.5624 89.2545 46.7982 89.6728 46.0565C90.3372 44.8652 89.9681 43.5616 88.787 42.9997C87.8766 42.5726 87.3352 42.5951 85.8096 43.1345C81.159 44.7528 72.6697 46.506 67.4039 46.978C60.0466 47.6074 50.7699 46.3936 41.6409 43.5841C38.4666 42.6176 38.0483 42.5501 37.1625 42.9997ZM116.863 48.7537C114.427 48.7537 113.517 45.6519 115.657 44.573C117.281 43.7414 119.324 44.8427 119.324 46.5285C119.324 47.6523 118.118 48.7537 116.863 48.7537Z"
                                            fill="#061b40" />
                                    </svg>
                                    <h4 class="m-0">Wear a mask</h4>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col p-3">
                                <div class="protocol-card header-content" anim="slide-left">
                                    <svg width="131" height="118" viewBox="0 0 88 156" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.9378 0.213516C52.2695 0.365402 49.6876 0.790649 47.1968 1.18553C42.1849 1.94492 41.547 2.24867 41.547 3.98007C41.547 4.6787 41.79 5.22546 42.3064 5.71147L43.0657 6.4101L49.4446 5.40771C53.2415 4.83058 56.2487 4.49644 56.8562 4.61795C58.2535 4.89133 59.4381 5.86334 60.1064 7.35175C60.8354 8.96164 60.8354 10.0248 60.1064 10.9057L59.5292 11.6347L40.9698 11.7258L40.9574 11.7258H40.9573H40.9571H40.957H40.9569H40.9567H40.9566C25.9226 11.7958 22.4688 11.8118 22.3628 11.2243C22.3312 11.0491 22.5974 10.8202 22.9431 10.523L22.9572 10.5108C24.0204 9.56914 25.0835 9.23502 29.2449 8.56676C32.7381 7.98962 33.5886 7.74661 34.0139 7.19986C34.7429 6.34935 34.7125 5.37733 33.9227 4.37495C33.1634 3.40294 32.6166 3.37256 27.5743 4.1927C23.0787 4.92171 21.1043 5.77222 19.4033 7.71625C17.277 10.1463 16.4265 14.1558 17.7934 15.4923C18.4595 16.1887 18.6427 16.191 25.9838 16.2812L26.0555 16.2821L33.6494 16.3732V22.2357V28.1285L31.0067 28.25C29.0627 28.3411 27.9995 28.5538 27.0883 29.0398C25.5088 29.8599 23.8381 31.7736 23.3825 33.3227C22.8965 34.9022 22.8965 45.6855 23.3825 47.022C23.4162 47.1206 23.4497 47.2082 23.4801 47.2876C23.557 47.4884 23.6139 47.637 23.604 47.781C23.5756 48.1916 23.0038 48.5646 20.8019 50.0009L20.8018 50.0009L20.7975 50.0038C20.5042 50.195 20.1821 50.4052 19.8286 50.6367C13.875 54.5551 8.13402 61.1162 4.79273 67.8292C-0.340715 78.1568 -1.00897 85.3862 1.17806 106.406C1.99819 114.425 3.69921 127.669 5.09648 137.328C6.09887 144.284 6.40263 145.772 7.19239 147.443C8.92379 151.149 12.7207 154.217 16.6391 155.128C17.52 155.341 27.1794 155.462 43.977 155.462C66.0599 155.462 70.2214 155.401 71.7098 155.007C76.2661 153.822 79.6681 150.876 81.3084 146.714C82.3715 144.011 87.0797 108.714 87.8998 97.3844C88.0821 94.5292 88.0821 94.438 87.3227 93.6786C86.3507 92.7066 85.1661 92.6763 84.2548 93.5875C83.6777 94.1646 83.5258 94.7418 83.3435 97.1414C82.8575 103.794 80.3668 124.054 78.1493 139.454C77.147 146.228 76.1142 148.172 72.5906 149.904L70.8592 150.754H43.977H17.0948L15.5456 149.934C13.9661 149.083 12.1132 147.291 11.3842 145.833C10.7767 144.679 10.4729 142.917 9.19716 134.048C5.82549 110.021 4.24597 93.5571 4.5801 86.0544C4.88386 79.8578 6.73676 73.1145 9.47054 68.4671L10.2907 67.0698H44.2808H78.2405L79.6074 69.8643C81.1565 73.0841 82.6753 77.7619 83.1613 80.8906C83.6169 83.6851 84.0725 84.3838 85.5306 84.3838C87.6265 84.3838 88.1732 83.4421 87.7176 80.5261C85.6217 67.1609 77.39 55.4664 65.0879 48.3585C64.5715 48.0548 64.5412 47.9029 64.8753 46.8094C65.0879 46.05 65.2398 43.5288 65.2398 40.1268C65.2398 33.6265 64.936 32.4114 62.9009 30.4067C61.291 28.8575 59.347 28.1893 56.3702 28.1893H54.3046V22.3268V16.434L57.3422 16.2517C61.6555 15.9783 63.5691 14.8545 64.5108 11.9992C65.5435 8.84013 64.5412 4.73946 62.1415 2.4613C60.076 0.486893 56.2183 -0.454742 52.9378 0.213516ZM49.7483 22.2661V28.1893H43.977H38.2057V22.2661V16.3429H43.977H49.7483V22.2661ZM59.6507 33.7783L60.6835 34.8111V40.1572V45.5033L59.8026 46.4753L58.9217 47.4777L44.5541 47.5688C34.105 47.6295 29.9436 47.5384 29.3057 47.2954C27.6958 46.6271 27.5743 46.1715 27.5743 40.2483C27.5743 37.1196 27.6958 34.5985 27.878 34.2644C28.6678 32.8063 28.9108 32.776 44.22 32.7456H58.618L59.6507 33.7783ZM43.2176 52.0947C53.7275 52.1858 58.2838 52.1251 59.5292 51.8517L61.2606 51.4872L63.8729 52.9756C67.0623 54.8285 71.163 58.109 73.3804 60.5998L75.0511 62.5135H44.3111H13.5712L14.1787 61.663C14.9989 60.5087 18.6135 57.1067 20.6791 55.5575C21.5903 54.8589 23.4129 53.6742 24.719 52.9148C26.5719 51.8517 27.3009 51.6087 27.878 51.7606C28.3033 51.8821 35.1985 52.034 43.2176 52.0947ZM26.3593 71.9298C24.9924 73.2967 26.0251 75.5749 27.9692 75.5749C29.2449 75.5749 30.0954 74.694 30.0954 73.4486C30.0954 71.535 27.7262 70.563 26.3593 71.9298ZM73.836 76.7899C71.892 76.7899 70.8592 74.5118 72.2261 73.1449C73.593 71.778 75.9623 72.75 75.9623 74.6636C75.9623 75.909 75.1118 76.7899 73.836 76.7899ZM38.2057 77.5189C26.7845 80.1616 18.4009 88.1807 15.5153 99.2373C14.4217 103.46 14.4217 109.383 15.5153 113.635C17.9149 122.718 24.5064 130.281 33.1026 133.683C37.1729 135.323 38.6006 135.566 44.1289 135.566C48.5941 135.566 49.5965 135.475 51.6924 134.868C61.9896 131.891 69.7961 124.024 72.5906 113.818C73.1982 111.661 73.2893 110.537 73.2893 106.406C73.2893 102.275 73.1982 101.151 72.5906 98.9943C69.8569 89.0312 62.1415 81.0728 52.3302 78.1264C49.961 77.4278 48.9586 77.3063 44.7364 77.2152C41.547 77.1544 39.2992 77.2455 38.2057 77.5189ZM49.9002 82.2271C58.5876 84.323 65.2398 90.6715 68.0343 99.5715C68.6418 101.546 68.733 102.488 68.733 106.406C68.733 110.324 68.6418 111.266 68.0343 113.24C65.179 122.262 58.4053 128.61 49.4446 130.706C47.1361 131.223 41.8204 131.314 39.2384 130.828C31.7965 129.461 24.8405 123.993 21.4992 116.825C18.492 110.415 18.492 102.396 21.4992 95.9872C24.6886 89.1527 30.703 84.1711 38.0234 82.2575C41.0306 81.4677 46.65 81.4677 49.9002 82.2271ZM36.9907 95.41C36.9907 91.8865 37.0514 91.4916 37.6589 90.8537C38.2968 90.1855 38.4487 90.1551 44.0378 90.1551C49.718 90.1551 49.7787 90.1551 50.5077 90.9145C51.2367 91.6131 51.2671 91.8257 51.2671 95.4708V99.2677H55.064C58.7091 99.2677 58.9217 99.2981 59.6203 100.027C60.3797 100.756 60.3797 100.817 60.3797 106.406C60.3797 111.995 60.3797 112.056 59.6203 112.785C58.9217 113.514 58.7091 113.544 55.064 113.544H51.2671V117.341C51.2671 120.986 51.2367 121.199 50.5077 121.897C49.7787 122.657 49.718 122.657 44.0986 122.657H44.0985C43.7812 122.657 43.4781 122.657 43.1884 122.658C39.7642 122.663 38.2276 122.665 37.5402 121.902C36.9807 121.281 36.9838 120.153 36.9894 118.107V118.107C36.99 117.892 36.9907 117.668 36.9907 117.432V113.544H33.133C28.8197 113.514 28.3337 113.362 27.878 111.691C27.4832 110.324 27.4832 102.457 27.878 101.029C28.0603 100.392 28.4552 99.7537 28.7893 99.5715C29.0931 99.4196 31.0675 99.2677 33.1634 99.2677H36.9907V95.41ZM47.4702 103.065C46.7412 102.366 46.7108 102.153 46.7108 98.5083V94.7114H44.1593H41.6077L41.4862 98.6906L41.4805 98.9403C41.4249 101.357 41.3969 102.578 40.7721 103.195C40.1338 103.825 38.8725 103.825 36.3224 103.824H36.3224L36.049 103.824H32.1306V106.406V108.988H36.049L36.3224 108.988H36.3224C38.8725 108.987 40.1338 108.987 40.7721 109.617C41.3969 110.234 41.4249 111.455 41.4805 113.872V113.872L41.4862 114.121L41.6077 118.1H44.1593H46.7108V114.304C46.7108 110.659 46.7412 110.446 47.4702 109.747C48.1688 109.018 48.3814 108.988 52.0265 108.988H55.8234V106.406V103.824H52.0265C48.3814 103.824 48.1688 103.794 47.4702 103.065ZM11.7791 80.1312C10.4122 81.4981 11.4449 83.7763 13.389 83.7763C14.6647 83.7763 15.5152 82.8954 15.5152 81.65C15.5152 79.7363 13.146 78.7643 11.7791 80.1312ZM69.5835 136.326C67.6394 136.326 66.6067 134.048 67.9736 132.681C69.3405 131.314 71.7097 132.286 71.7097 134.199C71.7097 135.445 70.8592 136.326 69.5835 136.326ZM20.1627 137.298C19.0692 138.847 19.9501 140.882 21.7422 140.943C23.1091 140.973 23.9292 140.153 23.9292 138.756C23.9292 137.358 23.1698 136.629 21.7118 136.629C20.9221 136.629 20.4968 136.812 20.1627 137.298ZM53.7883 146.35C51.8442 146.35 50.8115 144.071 52.1784 142.705C53.5453 141.338 55.9145 142.31 55.9145 144.223C55.9145 145.469 55.064 146.35 53.7883 146.35Z"
                                            fill="#061b40" />
                                    </svg>

                                    <h4 class="m-0">Hand Sanitizer</h4>
                                </div>
                            </div>
                            <div class="col p-3">
                                <div class="protocol-card header-content" anim="slide-right">
                                    <svg width="131" height="118" viewBox="0 0 131 130" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23.1151 0.429547C21.7765 0.0728767 20.4109 -0.0616752 19.0182 0.0258912C16.1642 0.500375 13.4329 1.44224 10.8245 2.85148C1.01144 9.3403 -2.12951 18.1759 1.4016 29.3582C5.09265 37.6103 11.5111 42.185 20.657 43.0825C21.738 43.1872 22.694 42.9181 23.5248 42.2752C24.3338 40.6797 23.9241 39.5586 22.2958 38.9114L19.0182 38.6423C8.32789 35.8805 3.50265 29.0633 4.54255 18.1904C7.06405 9.36581 12.9818 4.70135 22.2958 4.197C22.7953 4.1234 23.205 3.89915 23.5248 3.52424C24.1661 2.38109 24.0296 1.3495 23.1151 0.429547ZM23.1151 9.04087C22.0513 8.70013 20.9588 8.56558 19.8376 8.63721C13.1065 10.2476 9.3738 14.4635 8.63944 21.2851C9.24166 28.9198 13.3841 33.3154 21.0667 34.4712C22.0064 34.5215 22.8258 34.2524 23.5248 33.6639C24.3338 32.0683 23.9241 30.9473 22.2958 30.3001C17.6487 30.0541 14.5988 27.7667 13.146 23.4379C12.6456 16.9363 15.6955 13.3931 22.2958 12.8083C22.7953 12.7347 23.205 12.5105 23.5248 12.1356C24.1661 10.9924 24.0296 9.96083 23.1151 9.04087ZM63.1281 19.9396C61.6767 16.3749 58.9911 14.7603 55.0709 15.0957C51.5208 16.5291 49.9277 19.1304 50.2912 22.8997C51.6183 26.7145 54.304 28.3741 58.3484 27.8781C62.0116 26.446 63.6047 23.7999 63.1281 19.9396ZM58.7581 22.3615C59.0744 20.2058 58.1185 19.2191 55.8903 19.4014C55.3509 19.7099 54.9412 20.1583 54.6612 20.7469C54.2895 22.0316 54.6992 22.9734 55.8903 23.5725C57.1942 23.9387 58.1501 23.5351 58.7581 22.3615ZM74.736 15.0957C78.6562 14.7603 81.3418 16.3749 82.7932 19.9396C83.2234 24.7638 80.993 27.4548 76.1016 28.0127C71.5232 27.221 69.4748 24.5299 69.9563 19.9396C70.8721 17.6472 72.4652 16.0326 74.736 15.0957ZM75.5554 19.4014C77.7835 19.2191 78.7395 20.2058 78.4232 22.3615C77.8152 23.5351 76.8593 23.9387 75.5554 23.5725C74.3643 22.9734 73.9546 22.0316 74.3263 20.7469C74.6063 20.1583 75.0159 19.7099 75.5554 19.4014ZM102.458 19.9396C101.007 16.3749 98.3213 14.7603 94.4011 15.0957C92.1303 16.0326 90.5372 17.6472 89.6214 19.9396C89.1399 24.5299 91.1883 27.221 95.7667 28.0127C100.658 27.4548 102.888 24.7638 102.458 19.9396ZM98.0883 22.3615C98.4046 20.2058 97.4486 19.2191 95.2205 19.4014C94.681 19.7099 94.2713 20.1583 93.9914 20.7469C93.6197 22.0316 94.0294 22.9734 95.2205 23.5725C96.5244 23.9387 97.4803 23.5351 98.0883 22.3615ZM105.326 38.9114C93.9463 38.7768 82.566 38.7319 71.1853 38.7768C69.3797 40.1576 69.3797 41.5481 71.1853 42.9479C82.5657 43.1274 93.9458 43.1274 105.326 42.9479C105.826 42.8745 106.235 42.65 106.555 42.2752C107.364 40.6797 106.955 39.5586 105.326 38.9114ZM106.965 61.1124C108.18 61.0161 109.136 61.4644 109.833 62.458C118.187 79.3326 121.192 97.0935 118.846 115.74C117.436 117.237 116.161 117.148 115.022 115.471C116.788 97.474 113.693 80.3412 105.736 64.0726C105.554 63.5344 105.554 62.9962 105.736 62.458C106.202 62.0443 106.612 61.5957 106.965 61.1124ZM116.251 0.160442C87.391 0.0258901 58.5306 -0.0189695 29.6702 0.0258901C29.1307 0.334391 28.7211 0.782879 28.4411 1.37141C28.1718 15.0217 28.2627 28.6564 28.7142 42.2752C28.9609 42.5984 29.2793 42.8228 29.6702 42.9479L43.5996 43.217C53.5018 44.2601 61.65 48.5208 68.0444 55.9995C68.1881 63.2028 67.3231 70.2894 65.4497 77.2586C65.4262 78.3211 65.8812 79.0834 66.8153 79.546C71.1845 79.6806 75.5546 79.7255 79.9254 79.6806C82.5231 91.5572 83.57 103.577 83.0663 115.74C84.2337 123.02 88.4671 127.46 95.7667 129.061C101.958 129.241 108.148 129.241 114.339 129.061C121.996 127.886 126.502 123.536 127.859 116.01C129.978 95.815 126.519 76.619 117.48 58.4214C116.393 55.3819 117.076 52.8254 119.529 50.7519C123.035 48.7103 126.586 46.7369 130.181 44.8317C130.664 44.3023 130.937 43.6745 131 42.9479C126.603 28.8743 122.096 14.8362 117.48 0.833201C117.16 0.458286 116.751 0.234042 116.251 0.160442ZM104.507 4.33155H43.5996V39.0459C54.4397 40.058 63.4985 44.5432 70.7757 52.5011C78.9236 62.2833 83.7942 73.496 85.3879 86.1391C89.85 86.0941 94.311 86.1391 98.7711 86.2736C99.8027 86.4833 100.349 87.1111 100.41 88.1573C100.444 89.3285 99.8975 90.0459 98.7711 90.3102C94.5841 90.4447 90.3962 90.4897 86.2073 90.4447C86.5979 92.5785 86.78 94.7313 86.7535 96.9032C91.4887 96.8583 96.2228 96.9032 100.956 97.0378C101.988 97.2474 102.534 97.8752 102.595 98.9215C102.629 100.093 102.082 100.81 100.956 101.074C96.405 101.209 91.8528 101.254 87.2998 101.209V107.667C91.8528 107.622 96.405 107.667 100.956 107.802C101.988 108.012 102.534 108.639 102.595 109.686C102.629 110.857 102.082 111.574 100.956 111.838C96.405 111.973 91.8528 112.018 87.2998 111.973C86.8142 118.529 89.7276 122.79 96.0398 124.755C101.958 124.935 107.875 124.935 113.793 124.755C118.572 124.175 121.713 121.618 123.216 117.086C125.119 102.259 123.753 87.7276 119.119 73.4912C117.175 68.2254 115.081 63.0228 112.837 57.8832C112.157 54.4252 112.976 51.3755 115.295 48.7337C116.259 48.052 117.124 47.2896 117.89 46.4463C113.344 32.4276 108.883 18.3894 104.507 4.33155ZM72.2779 62.1888C74.9856 66.2251 77.0797 70.5757 78.5598 75.2404C75.8285 75.4199 73.0972 75.4199 70.366 75.2404C71.3429 70.9447 71.9802 66.5941 72.2779 62.1888Z"
                                            fill="#061b40" />
                                    </svg>

                                    <h4 class="m-0">Temperature check</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($amplopdigital)
                <div class="container-fluid header-content text-center container-content" style="margin-top: 50px">
                    <h3>Wedding Gift</h3>
                    <div class="container-fluid text-start">
                        <div class="row">
                            {{-- <label for="nk">Choose destination bank</label>
                            <div class="dropdown mt-2">
                                <button class="form-control dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"></button>
                                <ul class="dropdown-menu form-control">
                                    <li>
                                        <div class="p-2">
                                            <b>{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</b>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                            <select class="form-select form-select mb-3 border-0" aria-label="Large select example"
                                style="background-color: #ADADB3; width:95%; margin-left:13px;">
                                <option style="color: rgb(25, 25, 74);" selected>
                                    {{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</option>
                            </select>

                        </div>
                        <div class="container-fluid mt-3 bank-bca">
                            <h4>{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</h4>
                            <p class="mt-1">
                                Account Number <br />
                                <span id="no-rek"><b>{{ $amplopdigital ? $amplopdigital->noakun : '' }}</b></span>
                                <a href="#" class="copy-button"><i class="fa fa-copy"></i></a>
                            </p>
                            <p>
                                Account Name <br />
                                {{ $amplopdigital ? $amplopdigital->namaakun : '' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="container-fluid mt-5 header-content container-content p-4 text-start" anim="slide-up">
                <h3 class="" anim="slide-left">Wedding Wish</h3>
                <input type="text" class="form-control mb-3" id="nama-ucapan" name="nama-ucapan"
                    placeholder="Name" />
                <textarea name="pesan-ucapan" id="pesan-ucapan" cols="30" rows="" class="form-control mb-4"
                    placeholder="Give you wish"></textarea>
                <a class="primary-btn mt-2" style="cursor: pointer" id="kirim-ucapan">Send</a>
                <div class="container mt-5 text-start" style="font-size: 8pt;">
                    <div class="container-fluid weddingWishLog" style="height: 300px; overflow-y: scroll;">

                        {{-- <div class="row">
                            <div class="col-2 p-0">
                                <img style="aspect-ratio: 1/1;  object-fit:cover;width: 90%;border-radius: 50%;"
                                    src="https://th.bing.com/th/id/R.3fea078f720a09d723dd7de6ac535f61?rik=EEIRT4htflWyYw&riu=http%3a%2f%2fhdqwalls.com%2fwallpapers%2fwedding-couple-on-beach-wide.jpg&ehk=QrXxBkdE5gz9GYFFd4U4Bm%2bI2lr1kTZ54%2bYtk57Z0Is%3d&risl=&pid=ImgRaw&r=0"
                                    alt="">
                            </div>
                            <div class="col p-2 pt-2 p-2 p-2">
                                <div class="container-fluid">
                                    <p class="m-0"><b>Bambang Pamungkas</b></p>
                                    <p class="m-0">03 October 2023, 21:28</p>
                                    <p>Anjay</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-2 p-0">
                                <img style="aspect-ratio: 1/1;  object-fit:cover;width: 90%;border-radius: 50%;"
                                    src="https://th.bing.com/th/id/R.3fea078f720a09d723dd7de6ac535f61?rik=EEIRT4htflWyYw&riu=http%3a%2f%2fhdqwalls.com%2fwallpapers%2fwedding-couple-on-beach-wide.jpg&ehk=QrXxBkdE5gz9GYFFd4U4Bm%2bI2lr1kTZ54%2bYtk57Z0Is%3d&risl=&pid=ImgRaw&r=0"
                                    alt="">
                            </div>
                            <div class="col p-2 pt-2 p-2 p-2">
                                <div class="container-fluid">
                                    <p class="m-0"><b>Bambang Pamungkas</b></p>
                                    <p class="m-0">03 October 2023, 21:28</p>
                                    <p>Anjay</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>

            <div class="container text-center mt-5 header-content container-content" anim="slide-up">
                <p>{{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                <h2 style="font-family: 'Pinyon Script', cursive">
                    {{ $mempelai ? $mempelai->namalaki : '' }} &
                    {{ $mempelai ? $mempelai->namaperempuan : '' }}
                </h2>
                <div id="powered-by" class="mt-5">
                    <span class="mt-5">Powered By</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.js"></script>

   
   
   <script>
        $(document).ready(function() {});
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

            function inframechecker(elm, i) {

                var element = elm;



                // Calculate the element's position
                var elementTop = element.offset().top;
                var windowHeight = $(window).height();
                var scrollTop = $(window).scrollTop();

                // Check if the element is in the viewport
                if (elementTop - scrollTop < windowHeight - 100) {
                    //  element.after("<span style='position-absolute'>"+currentindex+"..kali"+"</span>")
                    // element.after("<p>h3</p>");
                    // element.css("animation-delay", currentindex + "s");
                    // Add a class to trigger the animation
                    currentindex += 1;
                    if (element.attr("anim") != undefined) {
                        element.addClass(element.attr("anim"));
                    } else {
                        element.addClass("slide-left");
                    }
                } else {
                    currentindex = 0;
                    // Remove the class if the element is not in the viewport
                }
            }

            $(".header-content").each(function(i) {
                inframechecker($(this), i);
            });

            $(".header-content").on("animationend", function(e) {
                $(e.target).css("opacity", 1);
            });
            $(window).on("scroll", function() {
                // Get the element you want to animate
                $(".header-content").each(function(i) {
                    inframechecker($(this), i);
                });
            });
        });
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
            // Update the countdown every second
            var tanggalAcara = $('#tglacara').val()
            updateCountdown(tanggalAcara);

            $("#open-invitation").click(function(e) {
                e.preventDefault();
                $("#cover-container").animate({
                        top: -1000,
                    },
                    1000,
                    function() {
                        $("#cover-container").hide();
                        $("html").css("overflow-y", "scroll");
                    }
                );
            });
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
                    response.forEach(item => {
                        const data = `<div class="row mt-3">
                            <div class="col-2 p-0">
                                <img style="aspect-ratio: 1/1;  object-fit:cover;width: 75%;border-radius: 50%;"
                                    src="{{ asset('images/sampul/' . $informasiacara->sampul) }}"
                                    alt="">
                            </div>
                            <div class="col p-0 pt-2 p-0 p-0">
                                <div class="container-fluid">
                                    <p class="m-0"><b>${item.nama}</b></p>
                                    <p>${item.ucapan}</p>
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

        document
            .getElementById("open-invitation")
            .addEventListener("click", function() {
                audio.play();
            });
        window.addEventListener("scroll", function() {
            if (hasPlay == false) {
                audio.play();
                hasPlay = true;
            }
        });

        function toggleMusic() {
            if (audio.paused) {
                audio.play();
                toggleButton.classList.add("spining");
            } else {
                audio.pause();
                toggleButton.classList.remove("spining");
            }
        }

        $(".copy-button").click(function(e) {
            e.preventDefault()

            var textToCopy = $("#no-rek").text();
            // Create a temporary input element to hold the text
            var tempInput = $("<input>");
            $("body").append(tempInput);
            tempInput.val(textToCopy).select();

            // Copy the selected text to the clipboard
            document.execCommand("copy");

            // Remove the temporary input element
            tempInput.remove();
        });
    </script>
    <script>
        const carousel = document.querySelector(".carousel"),
            firstImg = carousel.querySelectorAll(".img")[0],
            arrowIcons = document.querySelectorAll(".wrapper i");
        let time = 0.05;

        setInterval(function() {
            console.log(carousel.scrollLeft);
            if (carousel.scrollLeft >= carousel.getBoundingClientRect().width) {
                carousel.scrollLeft = 0;
            } else {
                carousel.scrollLeft += time;
            }
        });

        let isDragStart = false,
            isDragging = false,
            prevPageX,
            prevScrollLeft,
            positionDiff;

        const showHideIcons = () => {
            // showing and hiding prev/next icon according to carousel scroll left value
            let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
            arrowIcons[0].style.display =
                carousel.scrollLeft == 0 ? "none" : "block";
            arrowIcons[1].style.display =
                carousel.scrollLeft == scrollWidth ? "none" : "block";
        };

        arrowIcons.forEach((icon) => {
            icon.addEventListener("click", () => {
                let firstImgWidth = firstImg.clientWidth +
                    14; // getting first img width & adding 14 margin value
                // if clicked icon is left, reduce width value from the carousel scroll left else add to it
                carousel.scrollLeft +=
                    icon.id == "left" ? -firstImgWidth : firstImgWidth;
                setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
            });
        });

        const autoSlide = () => {
            // if there is no image left to scroll then return from here
            if (
                carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) >
                -1 ||
                carousel.scrollLeft <= 0
            )
                return;

            positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
            let firstImgWidth = firstImg.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiff;

            if (carousel.scrollLeft > prevScrollLeft) {
                // if user is scrolling to the right
                return (carousel.scrollLeft +=
                    positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff);
            }
            // if user is scrolling to the left
            carousel.scrollLeft -=
                positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
        };

        const dragStart = (e) => {
            // updatating global variables value on mouse down event
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX;
            prevScrollLeft = carousel.scrollLeft;
        };

        const dragging = (e) => {
            // scrolling images/carousel to left according to mouse pointer
            if (!isDragStart) return;
            e.preventDefault();
            isDragging = true;
            carousel.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
            showHideIcons();
        };

        const dragStop = () => {
            isDragStart = false;
            carousel.classList.remove("dragging");

            if (!isDragging) return;
            isDragging = false;
            autoSlide();
        };

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("touchstart", dragStart);

        document.addEventListener("mousemove", dragging);
        carousel.addEventListener("touchmove", dragging);

        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("touchend", dragStop);
    </script>
</body>

</html>
