<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tema5/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/tema5/css/main.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        @font-face {
            font-family: 'Cormorant Garamond';
            src: url('/tema5/font/Cormorant_Garamond/CormorantGaramond-Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Birthstone';
            src: url('/tema5/font/Birthstone/Birthstone-Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Playfair';
            src: url('/tema5/font/Playfair_Display/PlayfairDisplay-Italic-VariableFont_wght.ttf') format('truetype');
        }
    </style>
    <title>Online Invitation</title>
</head>

<body>
    <!-- Opening Slide -->
    <div class="openingSlide">
        <div class="background"
            style="background-image: url('{{ asset('images/sampul/' . $informasiacara->sampul) }}');">
        </div>
        <div class="container">
            <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
            <img id="openingSlideOrnament" src="/tema5/ornament/Opening Ornament.png" class="w-25 mt-0"
                style="filter: invert(100);" alt="">
            <h1 id="coupleName" class="text-center m-0 p-0">{{ $mempelai ? $mempelai->namalaki : '' }} &
                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
            <h1 id="weddingDateOpeningSlide" class="text-center m-0 p-0">{{ $afterConvertDay ? $afterConvertDay : '' }},
                {{ $tanggalAcara ? $tanggalAcara : '' }}</h1>
            <img id="openingSlideOrnament" src="/tema5/ornament/Opening Ornament 2.png"
                style=" transform: scaleY(-1); margin-bottom: 6%;" class="w-25" alt="">
            <h1 id="toWhoOpeningSlide">To : {{ $namaTamu }}</h1>
            <br>
            <a href="#" class="btn" id="openInviteButton">Buka Undangan</a>
        </div>
    </div>

    <div class="webContent d-none">
        <!-- Section 1 - Wedding Information -->
        <div class="weddingInformation py-3" id="weddingInformation">

            <img class="d-block mx-auto w-25 sectionOneHeaderOrnament" src="/tema5/ornament/Ornament_1.png"
                alt="">
            <h4 class="text-center text-uppercase" id="secOneText">The Wedding of</h4>
            <img class="sectionOneMainImage d-block mx-auto rounded-circle mt-4 border border-secondary border-2 p-1 mb-4"
                src="{{ asset('images/pembuka/' . $informasiacara->pembuka) }}" alt="">
            <h1 class="text-center" id="coupleNameSecOne">{{ $mempelai ? $mempelai->namalaki : '' }} &
                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
            <h4 class="text-center w-75 d-block mx-auto" id="weddingDateSecOne">{{ $quotes ? $quotes->quotes : '' }}
            </h4>
        </div>

        <!-- Divider -->
        <div class="dividers py-4 my-0">
            <img class="w-25 d-block mx-auto py-0 my-0 sectionOneAndTwoDivider"
                src="/tema5/ornament/Divider_Ornament.png" alt="">
        </div>

        <!-- Section 2 - Couple Profile -->
        <div class="coupleProfile px-4 py-5" id="coupleProfile">
            <h1 class="text-center" id="greetingText">Assalamualaikum wr. wb.</h1>
            <h4 class="text-center" id="subGreetingText">Bismillahirrahmanirrahim.</h4>
            <h4 class="text-center mb-5" id="greetingTextTwo">Dengan memohon Rahmat dan Ridho Allah SWT kami bermaksud
                untuk
                mengundang saudara/i untuk menghadiri acara pernikahan putra - putri kami :</h4>
            <div class="w-75 d-block mx-auto">
                <div class="row">
                    <div class="col-md">
                        <img id="couplePictureSectionTwo" style="height: 30vh; width: 30vh; object-fit:cover;"
                            class="rounded-circle border border-dark border-2 p-1 d-block mx-auto"
                            src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                            alt="">
                        <h1 id="coupleNameSec2" class="text-center" style="opacity: 0;">
                            {{ $mempelai ? $mempelai->namalengkaplaki : '' }}
                        </h1>
                        <h5 id="coupleParentSec2" class="text-center" style="opacity: 0;">
                            Son of Mr. {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                            {{ $mempelai ? $mempelai->namaibulaki : '' }}
                            {{-- <br> <i class="fa fa-instagram mx-1" aria-hidden="true"></i>@Instagram --}}
                        </h5>
                    </div>
                    <div class="col-md my-4 d-flex align-items-center justify-content-center">
                        <h1 id="dividerTextSecTwo">&</h1>
                    </div>
                    <div class="col-md">
                        <img id="couplePictureSectionTwo" style="height: 30vh; width: 30vh; object-fit:cover;"
                            class="rounded-circle border border-dark border-2 p-1 d-block mx-auto"
                            src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                            alt="">
                        <h1 id="coupleNameSec2" class="text-center" style="opacity: 0;">
                            {{ $mempelai ? $mempelai->namalengkapperempuan : '' }}
                        </h1>
                        <h5 id="coupleParentSec2" class="text-center" style="opacity: 0;">
                            Daughter of Mr. {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                            {{ $mempelai ? $mempelai->namaibuperempuan : '' }}
                            {{-- <br> <i class="fa fa-instagram mx-1" aria-hidden="true"></i> @Instagram --}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 - Prewedding Information -->
        <div class="preweddingInformation px-4 py-4" id="preweddingInformation">
            <img src="/tema5/ornament/Ornament_2.png" class="w-25"
                style="position: absolute; opacity: 0.2; top: 80%; left: 50%; transform: translate(-50%, -50%);"
                alt="">
            <img src="/tema5/ornament/Ornament_2.png"
                style="width: 15%; position: absolute; opacity: 0.2; top: 88%; left: 20%; transform: translate(-50%, -50%);"
                alt="">
            <img src="/tema5/ornament/Ornament_2.png"
                style="width: 15%; position: absolute; opacity: 0.2; top: 88%; left: 80%; transform: translate(-50%, -50%);"
                alt="">

            <h1 class="text-center mb-3 mt-4" id="headingTextPreweddingInformation">
                @if ($prewed)
                    Cewe & Cowo Prewedding
                @else
                @endif
            </h1>
            @if ($prewed)
                <video controls class="d-block mx-auto mb-5 prewed-vid" style="border-radius: 10px;">
                    <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4">
                </video>
            @endif

            <h3 id="coupleNameSec4" class="text-center"></h3>
            <h1 id="dDayInformationSec4" class="text-center">Hari Yang Ditunggu</h1>
            <h5 id="preweddingDateSec4" class="text-center">{{ $afterConvertDay ? $afterConvertDay : '' }},
                {{ $tanggalAcara ? $tanggalAcara : '' }}</h5>

            <div class="relativeBox countdownAndOrnamentWrapper">
                <img id="dividerOrnamentSectionThreeForCountdown" src="/tema5/ornament/Divider_Ornament.png"
                    style="width: 25%; position: absolute; top: 88.5%; bottom: 99%; left: 50%; transform: translate(-50%, -28%);"
                    alt="">
                <div class="countdown-box mb-5 rounded-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <div id="countdown" class="countdown row">
                            <input type="hidden" name="tglacara" id="tglacara" value="{{ $oriTanggalAcara }}">
                            <div class="countdown-item col days">
                                <span>
                                    <h2 id="days" class="text-center"></h2>
                                    <h4 id="daysSubText" class="text-center">Hari</h4>
                                </span>
                            </div>
                            <div class="countdown-item col hours">
                                <span>
                                    <h2 id="hours" class="text-center"></h2>
                                    <h4 id="hoursSubText" class="text-center">Jam</h4>
                                </span>
                            </div>
                            <div class="countdown-item col minutes">
                                <span>
                                    <h2 id="minutes" class="text-center"></h2>
                                    <h4 id="minutesSubText" class="text-center">Menit</h4>
                                </span>
                            </div>
                            <div class="countdown-item col second">
                                <span>
                                    <h2 id="seconds" class="text-center"></h2>
                                    <h4 id="secondsSubText" class="text-center">Detik</h4>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn d-block mx-auto mb-1" style="opacity: 0; display:none;"
                id="addToCalendarButtonSec4">Tambah Ke
                Kalender</a>
        </div>

        <!-- Section 6 - Series Of Event -->
        <div class="seriesOfEvent px-4 py-5 pt-1" id="seriesOfEvent">
            <div class="seriesOfEventOrnamentWrapper">
                <img id="seriesOfEventOrnamentImage" src="/tema1/ornament/ornament-2.png" alt=""
                    class="w-25 d-block mx-auto mb-0"
                    style="filter: invert(100%); position: absolute;
                top: 0%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;">
                <h1 class="text-center seriesOfEventHeading pt-5" id="seriesOfEventHeading">Rangkaian Acara</h1>
            </div>
            <h5 class="text-center seriesOfEventBodyText mb-5" id="seriesOfEventBodyText">
            </h5>
            <div style="padding: .01%; width: 15%; background-color: black;" class="d-block mx-auto"
                id="seriesOfEventBottomDivider"></div>
        </div>

        <!-- Section 7 - Map  -->
        <div class="eventMap px-4 py-5">
            <h1 id="weddingDayTextSec4" class="text-center">Wedding Day</h1>
            <h1 id="weddingDaysTextSec4" class="text-center">{{ $afterConvertDay ? $afterConvertDay : '' }}</h1>
            <h3 id="weddingDateTextSec4" class="text-center mb-5">{{ $tanggalAcara ? $tanggalAcara : '' }}
            </h3>

            <div class="row my-4 mb-1">
                <div class="col-md mb-5">
                    <h3 id="akad-nikah-event-text" class="text-center">Akad Nikah</h3>
                    <h3 id="event-time-text" class="eventTimeText text-center">
                        {{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                        Selesai
                    </h3>
                    <h2 id="event-location-text" class="eventLocationText text-center fw-bold">
                    </h2>
                    <h2 id="event-location-text" class="eventLocationText text-center">
                        {{ $informasiacara ? $informasiacara->lokasiakadnikah : '' }}</h2>
                    <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                        style="font-family: 'Playball', serif; font-size: 2.4vh; color: black !important; border: 0.5vh solid black;"
                        class="viewMapButton viewMapButtonAkadNikah btn bg-transparent mt-4 fw-semibold w-25 d-block mx-auto">View
                        Map</a>
                </div>
                <div class="col-md mb-5"
                    @if ($informasiacara) @if ($informasiacara->lokasiresepsi)  @else style="display:none;" @endif
                    @endif>
                    <h3 id="resepsi-event-text" class="text-center">Resepsi</h3>
                    <h3 id="event-time-text" class="eventTimeText text-center">
                        {{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                        Selesai
                    </h3>
                    <h2 id="event-location-text" class="eventLocationText text-center fw-bold">
                    </h2>
                    <h2 id="event-location-text" class="eventLocationText text-center">
                        {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}</h2>
                    <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                        style="font-family: 'Playball', serif; font-size: 2.4vh; color: black !important; border: 0.5vh solid black;"
                        class="viewMapButton btn bg-transparent mt-4 fw-semibold w-25 d-block mx-auto">View
                        Map</a>
                </div>
            </div>
        </div>

        <!-- Section 4 - Love Story -->
        <div class="loveStory px-4 py-4" id="loveStory"
            @if ($ceritacinta) @else style="display: none;" @endif>
            <h1 class="text-center loveStoryHeadingText" id="loveStoryHeadingText">Cerita Cinta Kami</h1>
            <div class="row mb-5" @if ($ceritacinta->cover1) @else style="display: none;" @endif>
                <div class="col-md-6">
                    <img id="loveStoryImageOne" class="rounded-2" style="width: 80vh; height: 60vh;"
                        src="{{ $ceritacinta ? ($ceritacinta->cover1 ? asset('images/ceritacinta/' . $ceritacinta->cover1) : '') : '' }}"
                        alt="">
                </div>
                <div class="col-md-6">
                    <div style="position: relative; top: 50%; transform: translateY(-50%);">
                        <div class="px-3">
                            <h2 class="loveStoryHeading" id="loveStoryHeadingOne">
                                {{ $ceritacinta ? ($ceritacinta->judulcerita1 ? $ceritacinta->judulcerita1 : '') : '' }}
                            </h2>
                            <h5 class="loveStorySubText" id="loveStorySubTextOne">
                                {{ $ceritacinta ? ($ceritacinta->cerita1 ? $ceritacinta->cerita1 : '') : '' }}
                            </h5>
                            <div id="dividerLoveStoryOne" class="dividerLoveStory rounded-5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 coupleStoryContainer"
                @if ($ceritacinta->cover2) @else style="display: none;" @endif>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="px-3">
                            <h2 class="loveStoryHeading float-end" id="loveStoryHeadingTwo">
                                {{ $ceritacinta ? ($ceritacinta->judulcerita2 ? $ceritacinta->judulcerita2 : '') : '' }}
                            </h2>
                            <h5 class="loveStorySubText float-end text-end" id="loveStorySubTextTwo">
                                {{ $ceritacinta ? ($ceritacinta->cerita2 ? $ceritacinta->cerita2 : '') : '' }}
                            </h5>
                            <div id="dividerLoveStoryTwo" class="dividerLoveStory rounded-5 float-end"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img id="loveStoryImageTwo" class="rounded-2 d-block mx-auto" style="width: 80vh; height: 60vh;"
                        src="{{ $ceritacinta ? ($ceritacinta->cover2 ? asset('images/ceritacinta/' . $ceritacinta->cover2) : '') : '' }}"
                        alt="">
                </div>
            </div>
            <div class="row" @if ($ceritacinta->cover3) @else style="display: none;" @endif>
                <div class="col-md-6">
                    <img id="loveStoryImageThree" class="rounded-2" style="width: 80vh; height: 60vh;"
                        src="{{ $ceritacinta ? ($ceritacinta->cover3 ? asset('images/ceritacinta/' . $ceritacinta->cover3) : '') : '' }}"
                        alt="">
                </div>
                <div class="col-md-6">
                    <div style="position: relative; top: 50%; transform: translateY(-50%);">
                        <div class="px-3">
                            <h2 class="loveStoryHeading" id="loveStoryHeadingThree">
                                {{ $ceritacinta ? ($ceritacinta->judulcerita3 ? $ceritacinta->judulcerita3 : '') : '' }}
                            </h2>
                            <h5 class="loveStorySubText" id="loveStorySubTextThree">
                                {{ $ceritacinta ? ($ceritacinta->cerita3 ? $ceritacinta->cerita3 : '') : '' }}
                            </h5>
                            <div id="dividerLoveStoryThree" class="dividerLoveStory rounded-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section 5 - Photo Gallery -->
        <div class="photoGallery px-4 py-4" id="photoGallery"
            @if ($count > 0) @else  style="display:none;" @endif>
            <h1 id="headingTextPhotoGallery" class="text-center mb-4">Galeri Foto</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="column">
                        @if ($count > 0)
                            <img class="coupleImage1" style="height: 51.8% !important;"
                                src="{{ asset('images/galeri/' . $galeri[0]->foto) }}" />
                        @endif
                        @if ($count > 1)
                            <img class="coupleImage1" style="height: 51.8% !important;"
                                src="{{ asset('images/galeri/' . $galeri[1]->foto) }}" />
                        @endif
                        <!-- <img class="coupleImage2"
                            src="https://images.pexels.com/photos/2326290/pexels-photo-2326290.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
                        <img class="coupleImage3"
                            src="https://media.istockphoto.com/id/857153056/photo/asian-couples-are-whispering-and-tell-some-sweet-wording-with-smiling-faces.jpg?s=612x612&w=0&k=20&c=wb9WQ72rJfdtG-4n2zYhKsJIgFD7fzYcyAJj3pCwKJA=" /> -->
                    </div>
                    <div class="column">
                        @if ($count > 2)
                            <img class="coupleImage4" src="{{ asset('images/galeri/' . $galeri[2]->foto) }}">
                        @endif
                        @if ($count > 3)
                            <img class="coupleImage5" style="height: 51.8% !important;"
                                src="{{ asset('images/galeri/' . $galeri[3]->foto) }}" />
                        @endif
                        @if ($count > 4)
                            <img class="coupleImage6" src="{{ asset('images/galeri/' . $galeri[4]->foto) }}">
                        @endif
                    </div>
                    <div class="column">
                        @if ($count > 5)
                            <img class="coupleImage7" src="{{ asset('images/galeri/' . $galeri[5]->foto) }}" />
                        @endif
                        @if ($count > 6)
                            <img class="coupleImage8" src="{{ asset('images/galeri/' . $galeri[6]->foto) }}" />
                        @endif
                        @if ($count > 7)
                            <img class="coupleImage9" style="height: 51.8% !important;"
                                src="{{ asset('images/galeri/' . $galeri[7]->foto) }}" />
                        @endif

                    </div>
                </div>
            </div>
        </div>







        <!-- Section 7 - Health Protocol -->
        <div class="healthProtocol" id="healthProtocol"
            @if ($protokol != null) @else style="display: none;" @endif>
            <h1 class="text-center healthProtocolHeading py-5 pt-0" id="healthProtocolHeading">Protokol Kesehatan</h1>
            <div class="d-flex align-items-center justify-content-center">
                <div class="health-protocol-inside row w-75">
                    <div class="col-md">
                        <div class="row mb-3">
                            <div style="max-width: 50%;" id="jagaJarakProtocolCard"
                                class="col protocol-card rounded-2 mx-3 p-3 px-0">
                                <img style="width: 55%; filter: invert(100%);" class="d-block mx-auto mb-3"
                                    src="/tema1/img/distance.png" alt="" id="jagaJarakProtocolCards">
                                <h3 style="color: black !important;" id="protocol-card-text" class="text-center">
                                    Jaga Jarak</h3>
                            </div>
                            <div style="max-width: 50%;" id="cuciTanganProtocolCard"
                                class="col protocol-card rounded-2 mx-3 p-3 px-0">
                                <img style="width: 45%; filter: invert(100%);" class="d-block mx-auto mb-3"
                                    src="/tema1/img/hand-sanitizer.png" alt="" id="cuciTanganProtocolCards">
                                <h3 style="color: black !important;" id="protocol-card-text" class="text-center">
                                    Cuci Tangan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row">
                            <div style="max-width: 50%;" id="memakaiMaskerProtocolCard"
                                class="col protocol-card rounded-2 mx-3 p-3 px-0">
                                <img style="width: 45%; filter: invert(100%);" class="d-block mx-auto mb-3"
                                    src="/tema1/img/mask.png" alt="" id="memakaiMaskerProtocolCards">
                                <h3 style="color: black !important;" id="protocol-card-text" class="text-center">
                                    Memakai Masker</h3>
                            </div>
                            <div style="max-width: 50%;" id="mengecekSuhuProtocolCard"
                                class="col protocol-card rounded-2 mx-3 p-3 px-0">
                                <img style="width: 45%; filter: invert(100%);" class="d-block mx-auto mb-3"
                                    src="/tema1/img/temp.png" alt="" id="mengecekSuhuProtocolCards">
                                <h3 style="color: black !important;" id="protocol-card-text" class="text-center">
                                    Mengecek Suhu</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section 8 - Live Streaming -->
        <div class="liveStreaming px-4 py-4" id="liveStreaming"
            @if ($informasiacara->livestream) @else style="display: none;" @endif>
            <h1 class="text-center liveStreamingHeadingText">Siaran Langsung</h1>
            <p class="text-center w-75 d-block mx-auto liveStreamingSubText">
                Dikarenakan keterbatasan di kondisi pandemi saat ini, kami memohon maaf atas keterbatasan undangan dan
                tidak dapat mengundang secara langsung.

                <br><br>

                Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila saudara/i berkenan untuk bergabung secara
                virtual serta memberikan doa restu untuk mengiri niat tulus kami, seehingga prosesi akad nikah
                senantiasa dalam Ridho dan Rahmat Allah SWT.
            </p>
            <iframe class="d-block mx-auto liveStreamingVid mb-5" width="560" height="315"
                src="{{ $informasiacara ? $informasiacara->livestream : 'https://www.youtube.com/embed/jfKfPfyJRdk?si=EbCkkUA-HuNzEAUs' }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>




        <!-- Section 10 - Digital Envelope -->
        <div class="digiEnve px-4 py-4 d-flex align-items-center justify-content-center" id="digiEnve"
            @if ($amplopdigital) @else style="display: none;" @endif>
            <div class="digiEnveWrapper">
                <h1 class="text-center digiEnveHeadingText py-2">Wedding Gift</h1>
                <h5 id="digiEnveSubHeadingText" class="text-center d-block mx-auto">Berkat dan kedatangan
                    Anda ke pernikahan kami sudah
                    cukup bagi kami. Namun jika anda ingin memberikan kado kami menyediakan Amplop Digital untuk
                    memudahkan
                    anda.
                    <br>
                    Terima kasih.
                </h5>
                <div class="row">
                    <div class="col">
                        <div id="paymentSelection" class="col-md mb-5">
                            <h3 id="" class="text-center mb-2" style="color: transparent;">p</h3>
                            <label style="font-family: 'Cormorant Garamond', serif;" class="form-label">Pilih
                                Bank</label>
                            <select style="font-family: 'Cormorant Garamond', serif; font-size: 2.5vh;"
                                class="form-select form-select mb-3 border-0" aria-label="Large select example">
                                <option style="font-family: 'Cormorant Garamond', serif; font-size: 2.5vh;"
                                    class="" selected> {{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}
                                </option>
                            </select>
                            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2.8vh;">Nomor Rekening
                                : <b
                                    style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: lighter;">{{ $amplopdigital ? $amplopdigital->noakun : '' }}</b>
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </h3>
                            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2.8vh;">Nama Pemilik
                                : <b
                                    style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: lighter;">{{ $amplopdigital ? $amplopdigital->namaakun : '' }}</b>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 9 - Instagram Wedding Filter -->
        <div class="instagramWeddingFilter px-4 py-4 d-flex align-items-center justify-content-center"
            id="instagramWeddingFilter"
            @if ($weddingfilter) @else
            style="display: none" @endif>
            <div class="instagramWeddingFilterWrapper">
                <h1 class="text-center instagramWeddingFilterHeadingText py-2" id="instagramWeddingFilterHeadingText">
                    Filter Instagram</h1>
                <img id="instagramWeddingFilterImage" class="d-block mx-auto w-50 mb-4"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg5EtFyVdmyEjN-lpl75InTw356qpcWqXRnDI7G50FQZwh6PDL5rKaRXXF7TZuxbTbnIs&usqp=CAU"
                    alt="">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="#" class="btn btn-dark" id="instagramWeddingFilterButtonSend">Masukan</a>
                </div>
            </div>
        </div>

        <div class="rsvp">
            <div class="rsvpWrapper">
                <h1 class="rsvpHeadingText">RSVP</h1>
                <h1 class="rsvpSubHeadingText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Laudantium,
                    molestiae!</h1>
                <div class="custom-select duplicate-select">
                    <button class="select-button" role="combobox" aria-labelledby="duplicate-select button"
                        aria-haspopup="listbox" aria-expanded="false" aria-controls="duplicate-select-dropdown">
                        <span class="selected-value text-dark">Kehadiran</span>
                        <span class="arrow"></span>
                    </button>
                    <ul class="select-dropdown" role="listbox" id="duplicate-select-dropdown">
                        <li role="option">
                            <input type="radio" id="duplicate-hadir" name="duplicate-social-account" />
                            <label for="duplicate-hadir" class="text-dark"><i class="bx bxl-github"></i>
                                Hadir
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="peopleYouBringRSVPBox my-3">
                    <div class="row">
                        <div class="col-1">
                            <span class="min rsvpButton rounded-circle">
                                <i class="fa fa-minus"></i>
                            </span>
                        </div>
                        <div class="col">
                            <input class="form-control peopleYouBringInput" type="text" name="qty"
                                id="qty" maxlength="12" />
                        </div>
                        <div class="col-1">
                            <span class="plus rsvpButton rounded-circle float-end">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn rsvpConfirmButton">Confirm</a>
            </div>

        </div>

        <!-- Section 11 - Wedding Wish -->
        <div class="weddingWish px-4 py-4 d-flex align-items-center justify-content-center" id="weddingWish">
            <div class="weddingWishWrapper">
                <h1 class="text-center weddingWishHeadingText py-4">Ucapan & Harapan</h1>
                <div class="weddingWishInputWrapper">
                    <div class="mb-3">
                        <input type="text" id="nama-ucapan" name="nama-ucapan" class="form-control"
                            placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="pesan-ucapan" id="pesan-ucapan" rows="3" placeholder="Berikan Ucapan"></textarea>
                    </div>
                </div>
                <a id="weddingWishButtonSend" class="btn px-4 text-light kirim-ucapan"
                    style="background-color: rgb(43, 43, 43);">Kirim</a>
            </div>
        </div>

        <!-- Section 12 - Wedding Wish Log -->
        <div class="weddingWishLog px-4 py-4" id="weddingWishLog">

        </div>


        <!-- Section 13 - Footnote -->
        <div class="footNote px-4 pb-4" id="footNote">
            <img src="/tema5/ornament/Footer Ornament.png" class=" footNoteOrnament d-block mx-auto"
                style="transform: scaleY(-1); opacity: 0.8" alt="">
            <h1 class="text-center footNoteCoupleName">{{ $mempelai ? $mempelai->namalaki : '' }} &
                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
            <h4 class="text-center footNoteCoupleDate">{{ $tanggalAcara ? $tanggalAcara : '' }}</h4>
            <img src="/tema5/ornament/Footer Ornament.png" class=" footNoteOrnament d-block mx-auto"
                style=" opacity: 0.8" alt="">
        </div>
    </div>

    <section style="position: fixed; bottom: 0; left: 0; z-index: 9999;" class="music-outer" data-aos="fade-up"
        data-aos-duration="1000" data-aos-delay="300">
        <!-- <div class="music-box auto" id="music-box"></div> -->
        <img class="music-box" src="/tema5/img/musicPlayer.png" alt="">
    </section>
    <audio id="musicPlayer" class="d-none"
        src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '/tema5/music/sample-music.mp3') : '/tema5/music/sample-music.mp3' }}">
    </audio>

    <script src="/tema5/jquery/jquery-3.6.3.min.js"></script>
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script src="/tema5/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/tema5/js/index.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {

        ucapanUndangan()

        $('.kirim-ucapan').on('click', function(e) {
            e.preventDefault()
            const id = $('#user_id').val()
            const nama = $('#nama-ucapan').val()
            const ucapan = $('#pesan-ucapan').val()

            if (nama != null && ucapan != null && nama != '' && ucapan != '') {
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
                            $('#nama-ucapan').val('')
                            $('#pesan-ucapan').val('')
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

    })

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
                    const data = `<div class="weddingWishMessageBox d-block mx-auto mb-4" id="weddingWishMessageBox">
                                    <h3 class="senderName pt-3" id="senderName">${item.nama}</h3>
                                    <h4 class="weddingWishMessage" id="weddingWishMessage">
                                        ${item.ucapan}
                                    </h4>
                                    <h6 class="weddingWishTimeStamp" id="weddingWishTimeStamp">${timereal}</h6>
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
