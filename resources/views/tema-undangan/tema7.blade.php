<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="/tema7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/tema7/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/tema4/css/anim.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,600&family=Viaoda+Libre&display=swap");

        .container-cover {
            position: fixed;
            width: inherit;
            height: 100vh;
        }

        .container-text {
            color: white;
            bottom: 100px;
            left: 80px;
        }

        .container-text h3 {
            font-size: 60pt;
        }

        .section-1 {}

        .container-content {
            background-color: rgb(255, 249, 243);
        }

        h3 {
            font-family: "Bonheur Royale", cursive;
        }

        p,
        button,
        a,
        h5 {
            font-family: "EB Garamond", serif;
        }

        .couple-title {
            font-size: 30pt;
        }

        .two-text {
            font-family: "Viaoda Libre", serif;
        }

        .couple-img img {
            width: 96%;
            height: 96%;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
        }

        .couple-img {
            background-image: url("/tema7/img/batik8.jpg");
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .btn-instagram,
        .btn-filter {
            color: white;
            background-color: rgb(87, 23, 23);
            padding: 10px;
            border-radius: 20px;
            transition: 0.2s;
            text-decoration: none;
            width: 80%;
        }

        .btn-instagram:hover {
            background-color: white;
            color: rgb(87, 23, 23);
            box-shadow: 0px 0px 5px -3px black;
        }

        .section-5,
        .section-9 {
            background-color: rgb(87, 23, 23);
            color: white;
        }

        .cont-date {}

        .cont-date div {
            background-color: white;
            border-radius: 20px 0px;
            height: 100px;
            color: black;
            width: 80%;
            margin: 3px;
        }

        .cont-date div p {
            font-size: 30pt;
            margin: 0px;
        }

        .img-os {
            height: 80%;
            object-fit: cover;
            border-radius: 20px;
        }

        .view-map {
            background-color: white;
            padding: 10px;
            color: rgb(87, 23, 23);
            text-decoration: none;
            display: block;
            width: 100px;
            border-radius: 10px;
        }

        .ls-button,
        .filter-btn {
            background-color: rgb(87, 23, 23);
            text-decoration: none;
            padding: 10px;
            width: 100%;
            display: block;
            color: white;
            border-radius: 30px;
        }

        .iwf-img {
            height: 400px;
            width: 100px;
            object-fit: cover;
            border-radius: 20px;
        }

        .filter-btn {
            background-color: rgb(87, 23, 23);
            width: 200px;
            text-decoration: none;
            border-radius: 20px;
        }

        .cont-bank {
            background-color: white;
        }

        .cont-bank-account {
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 10px;
        }

        .protocol-card {
            border: 2px solid black;
            border-radius: 20px;
            padding-top: 50px;
            padding-bottom: 40px;
            height: 200px;
        }

        .protocol-card img {
            width: 50px;
            margin-bottom: 20px;
        }

        .section-14 {
            background-color: rgba(197, 223, 197, 0.435);
        }

        .btn-wish-send {
            background-color: rgba(58, 86, 56, 0.482);
            border: 0px;
            padding: 10px;
            color: white;
            border-radius: 40px;
        }

        .text-name {
            color: rgb(7, 109, 89);
            margin: 0px;
            font-size: 10pt;
        }

        .text-date-message {
            color: rgb(110, 121, 116);
            margin: 0px;
        }

        .row-message {
            border-bottom: 2px solid white;
            margin: 0px;
            padding-top: 20px;
        }

        .section-15 {
            background-color: rgb(47, 64, 48);
            color: white;
        }

        .gradient {
            background: rgb(0, 0, 0);
            background: linear-gradient(0deg,
                    rgba(0, 0, 0, 0.3925945378151261) 0%,
                    rgba(0, 0, 0, 0) 65%,
                    rgba(0, 0, 0, 0.6755077030812324) 100%);
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .container-cover {
            z-index: 20;
        }

        .btn-open {
            border: none;
            background-color: rgb(87, 23, 23);
            padding: 10px;
            color: white;
            border-radius: 40px;
            width: 75%;
            display: none;
        }

        @media screen and (max-width: 762px) {
            .btn-open {
                display: block;
            }

            .container-cover {
                text-align: center;
            }

            .container-text {
                left: 0px;
                bottom: 200px;
            }

            .container-text h3 {
                font-size: 100px;
            }

            .protokol-text {
                font-size: 13px;
            }
        }
        
        .section-title {
            font-family: "Viaoda Libre", serif;
        }

        html,
        body {
            overflow-x: hidden;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }

        html::-webkit-scrollbar {
            display: none;
        }

        .container-chat::-webkit-scrollbar {
            display: none;
        }

        .container-rsvp {
            background-color: rgb(80, 18, 18);
            color: white;
            border-radius: 30px;
        }

        .btn-submit-rsvp {
            border: none;
            margin-top: 10px;
            width: 100%;
            border-radius: 10px;
            padding: 10px;
            color: rgb(80, 18, 18);
        }

        #disk-player {
            z-index: 200;
            position: fixed;
            left: 10px;
            bottom: 10px;
            width: 50px;
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
            color: rgb(80, 18, 18);
        }


    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="min-height: 100vh">
            <div class="col-md-7 p-0 position-relative" style="background-color: whitesmoke" style="height: 100vh">
                <div class="container-cover p-0">
                    <div class="music-cont">
                        <audio controls autoplay class="d-none" id="music-audio">
                            <source
                                src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '') : '' }}"
                                type="audio/mpeg" />
                            Your browser does not support the audio element.
                        </audio>
                        <img src="/tema7/img/vinyl.png" alt="" id="disk-player" class="spining"
                            onclick="toggleMusic()" />
                    </div>
                    <div class="gradient"></div>
                    <div class="container-bg position-absolute aanimated" style="width: 100%; height: 100%">
                        <img class="m-0" src="{{ asset('images/sampul/' . $informasiacara->sampul) }}" alt=""
                            style="width: 100%; height: 100%; object-fit: cover" />
                    </div>
                    <div class="gradient"></div>
                    <div class="container-text animated" anime="slide-up" style="position: absolute">
                        <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
                        <h3>{{ $mempelai ? $mempelai->namalaki : '' }}
                            &
                            {{ $mempelai ? $mempelai->namaperempuan : '' }}</h3>
                        <p>To : {{ $namaTamu }}</p>
                        <button class="btn-open mx-auto ">Open Invitation</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 container-content mb-3">
                <div class="section-1 row text-center animated">
                    <div class="col-12 p-0">
                        <img src="/tema7/img/ornament-grid.png" alt=""
                            style="width: 100%; transform: translateY(-25px)" />
                        <p>Wedding Invitation</p>
                        <img src="{{ asset('images/pembuka/' . $informasiacara->pembuka) }}" alt=""
                            style="
                  width: 100%;
                  box-shadow: 0px 0px 500px;
                  clip-path: polygon(
                    0% 15%,
                    15% 15%,
                    15% 0%,
                    85% 0%,
                    85% 15%,
                    100% 15%,
                    100% 85%,
                    85% 85%,
                    85% 100%,
                    15% 100%,
                    15% 85%,
                    0% 85%
                  );
                " />
                        <div class="d-flex justify-content-center">
                            <p class="mt-5" style="width: 80%; text-align:center;">
                                #TogeTher</p>
                        </div>
                        <h3 class="couple-title">{{ $mempelai ? $mempelai->namalaki : '' }}
                            &
                            {{ $mempelai ? $mempelai->namaperempuan : '' }}</h3>
                        <p>{{ $afterConvertDay ? $afterConvertDay : '' }},
                            {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                    </div>
                </div>
                <div class="section-2 row text-center mt-2 p-0 animated">
                    <div class="col-12 p-0">
                        <img src="/tema7/img/ornament-grid.png" alt=""
                            style="width: 100%; transform: translateY(-25px)" class="my-5" />
                        <h3 class="two-text animated" anim="slide-up">The Wedding of</h3>
                        <p class="animated" anim="slide-down">
                            The pleasure of your company is requested at the marriage of
                        </p>
                    </div>
                </div>
                <div class="section-3 row text-center animated">
                    <div class="col-12 p-0">
                        <div class="couple-img my-5 mx-auto d-flex animated" anim="slide-left">
                            <img src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                                alt="" class="my-auto mx-auto" />
                        </div>
                        <div class="container animated" anim="slide-up">
                            <h3 class="h3 text-couple">{{ $mempelai ? $mempelai->namalengkaplaki : '' }}</h3>
                            <p>Son of Mr.
                                {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                                {{ $mempelai ? $mempelai->namaibulaki : '' }}</p>
                            <a href="{{ $mempelai ? $mempelai->instagram_laki : '#' }}"
                                class="btn-instagram mx-auto"><i class="fa-brands fa-instagram me-1"></i>Instagram</a>
                        </div>
                    </div>
                </div>
                <div class="section-4 row text-center mb-5 animated">
                    <div class="col-12">
                        <div class="couple-img my-5 mx-auto d-flex animated" anim="slide-left">
                            <img src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                                alt="" class="my-auto mx-auto" />
                        </div>
                        <div class="container animated" anim="slide-up">
                            <h3 class="h3 text-couple">{{ $mempelai ? $mempelai->namalengkapperempuan : '' }}</h3>
                            <p> Daughter of Mr.
                                {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                                {{ $mempelai ? $mempelai->namaibuperempuan : '' }}</p>
                            <a href="{{ $mempelai ? $mempelai->instagram_perempuan : '#' }}"
                                class="btn-instagram mx-auto"><i class="fa-brands fa-instagram me-1"></i>Instagram</a>
                        </div>
                    </div>
                </div>
                <div class="padder mt-5" style="margin-bottom: 100px"></div>
                <div class="section-5 row text-center animated">
                    <div class="col-12 position-relative p-0">
                        <img src="/tema7/img/ornament-grid2.png" alt=""
                            style="width: 100%; transform: translateY(-100%)" class="" />
                        <h3 class="std-text">Save The Date</h3>
                        <p>{{ $afterConvertDay ? $afterConvertDay : '' }},
                            {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                        <div class="container-bottom mx-auto" style="width: 90%">
                            <div class="row cont-date flex-nowrap p-3">
                                <input type="hidden" name="tglacara" id="tglacara"
                                    value="{{ $oriTanggalAcara }}">
                                <div class="col animated" anim="slide-up">
                                    <p id="days">0</p>
                                    <span>Days</span>
                                </div>
                                <div class="col animated" anim="slide-down">
                                    <p id="hours">0</p>
                                    <span>Hours</span>
                                </div>
                                <div class="col animated" anim="slide-up">
                                    <p id="minutes">0</p>
                                    <span>Minutes</span>
                                </div>
                                <div class="col animated" anim="slide-down">
                                    <p id="seconds">0</p>
                                    <span>Seconds</span>
                                </div>
                            </div>
                        </div>
                        <img src="/tema7/img/ornament-grid2.png" alt=""
                            style="width: 100%; transform: translateY(90%)" class="" />
                    </div>
                </div>
                @if ($ceritacinta)
                <div class="section-6 row text-center animated">
                    <div class="padder my-5"></div>
                    <div class="col 12">
                        <h3 class="os-text section-title mb-5">Our Story</h3>
                        @if ($ceritacinta->cover1)
                            <div class="row animated" anim="slide-left">
                                <div class="col-6" style="height: 300px">
                                    <img src="{{ asset('images/ceritacinta/' . $ceritacinta->cover1) }}" alt="" class="img-os" style="width: 100%" />
                                </div>
                                <div class="col-6 text-start">
                                    <h5 class="o-text">{{ $ceritacinta ? ($ceritacinta->judulcerita1 ? $ceritacinta->judulcerita1 : '') : '' }}</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reprehenderit, iure. Quam natus accusantium laborum illum
                                        quaerat repellat neque, porro officia.
                                    </p>
                                </div>
                            </div>
                        @endif
                        @if ($ceritacinta->cover2)
                            <div class="row animated" anim="slide-right">
                                <div class="col-6" style="height: 300px">
                                    <img src="{{ asset('images/ceritacinta/' . $ceritacinta->cover2) }}" alt="" style="width: 100%" class="img-os" />
                                </div>
                                <div class="col-6 text-start">
                                    <h5 class="o-text">{{ $ceritacinta ? ($ceritacinta->judulcerita2 ? $ceritacinta->judulcerita2 : '') : '' }}</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reprehenderit, iure. Quam natus accusantium laborum illum
                                        quaerat repellat neque, porro officia.
                                    </p>
                                </div>
                            </div>
                        @endif
                        @if ($ceritacinta->cover3)
                        <div class="row animated" anim="slide-right">
                            <div class="col-6" style="height: 300px">
                                <img src="{{ asset('images/ceritacinta/' . $ceritacinta->cover3) }}" alt="" style="width: 100%" class="img-os" />
                            </div>
                            <div class="col-6 text-start">
                                <h5 class="o-text">{{ $ceritacinta ? ($ceritacinta->judulcerita3 ? $ceritacinta->judulcerita3 : '') : '' }}</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit, iure. Quam natus accusantium laborum illum
                                    quaerat repellat neque, porro officia.
                                </p>
                            </div>
                        </div>
                    @endif
                    </div>
                </div> @endif
                @if ($prewed)
                <div class="section-7
        row text-center animated">
    <div class="col-12 p-0">
        <img src="/tema7/img/ornament-grid2.png" class="my-5 mb-5 animated" anim="slide-down" alt=""
            style="width: 100%" />
        <h3 class="section-title mb-4">Prewedding</h3>
        <video style="width: 80%; border-radius: 10px" controls class="animated" anim="slide-up">
            <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
    </div>
    @endif
    @if ($count > 0)
    <div class="section-8 row text-center animated">
        <div class="col-12">
            <h3 class="mb-4 mt-5 section-title">Galery</h3>
            <div class="container">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="height: 100%">
                            @if ($count > 0)
                            <div class="carousel-item active">
                                <img src="{{ asset('images/galeri/' . $galeri[0]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 1)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[1]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 2)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[2]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 3)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[3]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 4)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[4]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 5)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[5]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 6)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[6]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                            @if ($count > 7)
                            <div class="carousel-item">
                                <img src="{{ asset('images/galeri/' . $galeri[7]->foto) }}" class="d-block w-100" alt="..." />
                            </div>
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> @endif
    <div class="padder
        my-5">
    </div>
    <div class="section-9 row text-center animated" style="margin-top: 100px;">
        <div class="col-12 p-0">
            <img src="/tema7/img/ornament-grid2.png" class="w-100" alt=""
                style="transform: translateY(-90%)" />
            <div class="row">
                <div class="col-12">
                    <h3 class="animated section-title" anim="slide-up">
                        It's Wedding Day
                    </h3>
                    <p class="mb-5">{{ $informasiacara ? $informasiacara->deskripsi : '' }}</p>
                </div>
            </div>
            <div class="row py-3 animated" anim="slide-down" style="border: 0.2px solid white">
                <div class="col-12">
                    <h3>{{ $afterConvertDay ? $afterConvertDay : '' }}</h3>
                    <h3>{{ $tanggalAcara ? $tanggalAcara : '' }}</h3>
                </div>
            </div>
            <div class="row animated" anim="slide-down">
                <div class="col-12">
                    <div class="row p-5">
                        <div class="col-12">
                            <img src="/tema7/img/ring.png" alt="" style="width: 100px" />
                            <h3>Akad Nikah</h3>
                            <p>{{ $informasiacara ? $informasiacara->jamakadnikah : '00.00' }} -
                                Selesai</p>
                            <img src="/tema7/img/ic-maps.png" style="width: 30px" alt="" />
                            <p>
                                {{ $informasiacara ? $informasiacara->lokasiakadnikah : '' }}
                            </p>
                            <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}" class="view-map mx-auto">View Map</a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($informasiacara)
                @if ($informasiacara->lokasiresepsi)
                <div class="row animated" anim="slide-left">
                    <div class="col-12">
                        <div class="row p-5">
                            <div class="col-12">
                                <img src="/tema7/img/resepsi.png" alt="" style="width: 100px" />
                                <h3>Resepsi</h3>
                                <p>{{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                                    Selesai</p>
                                <img src="/tema7/img/ic-maps.png" style="width: 30px" alt="" />
                                <p>
                                    {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}
                                </p>
                                <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}" class="view-map mx-auto">View Map</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif @endif
            <div class="row
        animated" anim="slide-up">
    <div class="col-12">
        <p style="width: 80%" class="mx-auto">
            {{ $quotes ? $quotes->quotes : '' }}
        </p>
    </div>
    </div>
    <img src="/tema7/img/ornament-grid2.png" alt="" style="width: 100%; transform: translateY(90%)" />
    </div>
    </div>
    <div class="padder my-5"></div>
    @if ($kodeTamu)
    <div class="section-9c row text-center">
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
                                <i class="fa fa-subtract"></i>
                            </button>
                            <span style="width: 100px; font-size: 30pt">{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}</span>
                            <button class="btn-number btn-secondary" type="button" data-type="plus">
                                <i class="fa fa-plus"></i>
                            </button>
                            <input class="form-control hidden-value" value="{{ $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' }}" type="hidden" name="qty" id="qty"/>
                        </div>

                        <button type="submit" class="btn-submit-rsvp" id="kirim-rsvp">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
   
    @if ($informasiacara)
        @if ($informasiacara->livestream)
            <div class="section-10 row text-center mt-4 mb-4 animated">
                <div class="col-12">
                    <h3 class="my-5 section-title">Live Streaming</h3>
                    <iframe style="width: 80%; border-radius: 30px" height="315"
                        src="{{ $informasiacara ? $informasiacara->livestream : 'https://www.youtube.com/embed/jfKfPfyJRdk?si=EbCkkUA-HuNzEAUs' }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        @endif 
    @endif
    @if ($weddingfilter)
            <div class="section-11
        row text-center mt-4 mb-4 animated">
    <div class="col-12">
        <h3 class="animated section-title mt-4 mb-4" anim="slide-up">
            Instagram Wedding Filter
        </h3>
        <img src="/tema7/img/img1.jpg" style="width: 80%" class="iwf-img" />
        <div class="row">
            <a href="" class="btn-filter mx-auto my-3">Use Filter</a>
        </div>
    </div>
    </div>
    @endif
    @if ($amplopdigital)
    <div class="section-12 row text-center my-5">
        <div class="col-12">
            <h3 class="my-3 section-title animated" anim="slide-down">
                Wedding Gift
            </h3>
            <p>
                Your blessing and coming to our wedding are enough for us.
                However, if you want to give a gift we provide a Digital
                Envelope to make it easier for you. thank you
            </p>
            <div class="container cont-bank p-4">
                <div class="row">
                    <select name="" id="" class="form-control my-2">{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</select>
                </div>

                <div class="container text-start cont-bank-account">
                    <div class="row">
                        <div class="col-12"><b>{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</b></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                    <p><b>Account Number </b><br />{{ $amplopdigital ? $amplopdigital->noakun : '' }}</p>
                                    <p><b>Account Name</b> <br />{{ $amplopdigital ? $amplopdigital->namaakun : '' }}</p>
                                </div>
                                <div class="col">
                                    <img src="https://katsudoto.id/media/public/70/14434/book/thumb_md_111115_1665721310_600_600.jpeg"
                                        alt="" style="width: 100%" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if ($protokol != null)
    <div class="section-13 row text-center animated" style="margin-bottom:80px;">
        <div class="col-12">
            <h3 class="animated section-title" anim="slide-up">
                Protect Yourself And Other From <br />
                Covid-19
            </h3>
            <div class="container">
                <div class="container">
                    <div class="row protocol-container mx-auto">
                        <div class="col">
                            <div class="protocol-card animated" anim="slide-left" delay="2">
                                <img src="/tema7/img/Distancing.svg" alt="" />
                                <p class="protokol-text">SOCIAL DISTANCING</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="protocol-card animated" anim="slide-right" delay="2.2">
                                <img src="/tema7/img/Mask.svg" alt="" />
                                <p class="protokol-text">WEARING A MASK</p>
                            </div>
                        </div>
                        <div class="w-100 mb-3"></div>
                        <div class="col">
                            <div class="protocol-card animated p-4" anim="slide-left" delay="2.4">
                                <img src="/tema7/img/Hand Sanitizer.svg" alt="" />
                                <p class="protokol-text">WASH YOUR HAND</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="protocol-card animated" anim="slide-right" delay="2.6">
                                <img src="/tema7/img/Temperatur Gun.svg" alt="" />
                                <p class="protokol-text">TEMPERATURE CHECK</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> @endif
    <div class="section-14
        row text-center pb-5 animated">
    <div class="col-12 p-0">
        <img src="/tema7/img/ornament-grid3.png" style="width: 100%; transform: translateY(-50%)" alt=""
            class="mb-3" />
        <h3 class="animated section-title" anim="slide-up">
            Wedding Wish
        </h3>
        <div class="p-5 container-fluid">
            <div class="row mb-3">
                <input type="text" id="nama-ucapan" name="nama-ucapan" class="form-control l animated"
                    anim="slide-up" placeholder="Nama" />
            </div>
            <div class="row mb-3">
                <textarea name="pesan-ucapan" id="pesan-ucapan" cols="30" rows="10" class="form-control animated"
                    anim="slide-up"></textarea>
            </div>
            <div class="row mb-3">
                <button type="submit" class="btn-wish-send animated" anim="slide-right" id="kirim-ucapan">
                    Kirim <i class="fa fa-send"></i>
                </button>
            </div>
        </div>
        <div class="container-fluid container-chat" id="weddingWishLog" style="height: 400 px; overflow-y: scroll">

        </div>
    </div>
    </div>
    <div class="section-15 row text-center animated position-relative">
        <div class="col-12 p-0">
            <img src="/tema7/img/ornament-grid4.png" alt="" style="width: 100%; transform: translateY(-50%)" />
            <h3 style="height: 200px; padding-top: 20px; font-size: 40pt" class="animated" anim="slide-up">
                {{ $mempelai ? $mempelai->namalaki : '' }} &
                {{ $mempelai ? $mempelai->namaperempuan : '' }} </h3>
        </div>
    </div>
    <div class="section-16 row text-center">
        <p class="my-2">Powered by</p>
    </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

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



        const ucapanUndangan = () => {
            const id = $('#user_id').val()
            $.ajax({
                url: `{{ route('ucapan.show', ['id' => ':id']) }}`.replace(':id', id),
                type: 'GET',
                success: function(res) {
                    const weddingLog = $('#weddingWishLog')
                    weddingLog.html('')
                    const response = res.ucapan
                    response.forEach(item => {
                        function getIndonesianMonth(monthNumber) {
                            const months = [
                                "Januari", "Februari", "Maret",
                                "April", "Mei", "Juni",
                                "Juli", "Agustus", "September",
                                "Oktober", "November", "Desember"
                            ];

                            return months[monthNumber - 1];
                        }
                        var date = new Date(item.created_at);

                        var hours = ('0' + date.getHours()).slice(-2);
                        var minutes = ('0' + date.getMinutes()).slice(-2);
                        var seconds = ('0' + date.getSeconds()).slice(-2);

                        var day = ('0' + date.getDate()).slice(-2);
                        var month = ('0' + (date.getMonth() + 1)).slice(-
                            2);
                        var year = date.getFullYear();

                        var monthText = getIndonesianMonth(month);

                        var timeFormatted = hours + ':' + minutes + ':' + seconds;
                        var dateFormatted = day + '-' + monthText + '-' + year;


                        var timereal = timeFormatted + ", " + dateFormatted;
                        const data = `<div class="row text-start row-message animated" anim="slide-up">
                <div class="col-12">
                    <p class="text-name">${item.nama}</p>
                    <p class="text-date-message">${timereal}</p>
                    <p>
                        ${item.ucapan}
                    </p>
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

        function updateCountdown() {
            var tanggalAcara = $('#tglacara').val()
            const targetDate = new Date(tanggalAcara).getTime(); // Change this to your target date
            const now = new Date().getTime();
            const timeRemaining = targetDate - now;

            if (timeRemaining <= 0) {
                // The countdown has ended
                $("#countdown").html(
                    "<div class='timer'><span>00</span><span class='label'>Days</span></div><div class='timer'><span>00</span><span class='label'>Hours</span></div><div class='timer'><span>00</span><span class='label'>Minutes</span></div><div class='timer'><span>00</span><span class='label'>Seconds</span></div>"
                );
                return;
            }

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutes = Math.floor(
                (timeRemaining % (1000 * 60 * 60)) / (1000 * 60)
            );
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            // Update the HTML with the remaining time
            $("#days").text(days.toString().padStart(2, "0"));
            $("#hours").text(hours.toString().padStart(2, "0"));
            $("#minutes").text(minutes.toString().padStart(2, "0"));
            $("#seconds").text(seconds.toString().padStart(2, "0"));
        }

        // Update the countdown every second
        setInterval(updateCountdown, 1000);

        // Initial call to set up the countdown
        updateCountdown();
    </script>

    <script src="/tema7/js/anim.js"></script>
    </body>

</html>
