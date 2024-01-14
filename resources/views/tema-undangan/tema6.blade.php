<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tema6/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/tema6/css/main.css">
    <link rel="stylesheet" href="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Anglecia Pro Display */
        @font-face {
            font-family: 'Anglecia';
            src: url('/tema6/font/Anglecia_Pro_Display/Anglecia-Pro-Display.otf') format('truetype');
        }

        /* Ebrima Reguler */
        @font-face {
            font-family: 'Ebrima';
            src: url('/tema6/font/Ebrima_Reguler/Ebrima_Reguler.ttf') format('truetype');
        }

        /* Roboto */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
    <title>Online Invitation</title>
</head>

<body>
    <div class="openingSlide">
        <div class="background"
            style="background-image: url('{{ asset('images/sampul/' . $informasiacara->sampul) }}');">
        </div>
        <div class="container">
            <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
            <h1 class="coupleNameOpeningSlide">{{ $mempelai ? $mempelai->namalaki : '' }} &
                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
            <h1 class="weddingDateOpeningSlide mb-4">{{ $afterConvertDay ? $afterConvertDay : '' }},
                {{ $tanggalAcara ? $tanggalAcara : '' }}</h1>
            <h1 class="toWhoOpeningSlide mb-4">To: {{ $namaTamu }}</h1>
            <a class="btn openInvitationButtonOpeningSlide" id="openInviteButton">Open Invitation</a>
        </div>
    </div>

    <div class="webContent d-none">
        <!-- Section One - Opening -->
        <section class="sectionOne">
            <h1 class="sectionOneTitleText">The Wedding Of</h1>
            <div class="sectionOneCoupleImageContainer">
                <img class="sectionOneCoupleImage" src="{{ asset('images/pembuka/' . $informasiacara->pembuka) }}"
                    alt="">
                <img class="sectionOneCoupleImageBorderOrnament" src="/tema6/ornament/borderOrnament.png"
                    alt="">
            </div>
            <h5 class="sectionOneCoupleHashtag">{{ $quotes ? $quotes->quotes : '' }}</h5>
            <h1 class="sectionOneCoupleName">{{ $mempelai ? $mempelai->namalaki : '' }} &
                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
            <h1 class="sectionOneCoupleWeddingDate m-0">{{ $afterConvertDay ? $afterConvertDay : '' }},
                {{ $tanggalAcara ? $tanggalAcara : '' }}</h1>
        </section>

        <!-- Divider -->
        <div class="dividerOne">
            <img src="/tema6/ornament/divider5.png" alt="">
        </div>

        <!-- Section Two - Couple Profile -->
        <section class="sectionTwo">
            <div class="container">
                <div class="row">
                    <div class="col-md groomContainer">
                        <img class="sectionTwoTopOrnament" src="/tema6/ornament/topDivider.png" alt="">
                        <div class="groomImageContainer">
                            <img class="sectionTwoGroomImage rounded-circle"
                                src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                                alt="">
                        </div>
                        <h1 class="sectionTwoGroomName">{{ $mempelai ? $mempelai->namalengkaplaki : '' }}</h1>
                        <h3 class="sectionTwoGroomParent"> Son of <br> Mr.
                            {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                            {{ $mempelai ? $mempelai->namaibulaki : '' }}
                        </h3>
                        <h3 class="coupleInstagramId">
                            <a href="{{ $mempelai ? $mempelai->instagram_laki : '#' }}" class="instagram-link"> <i
                                    class="fa fa-instagram mx-1" aria-hidden="true"></i>Instagram</a>
                        </h3>
                    </div>
                    <div class="col-md-1 d-flex align-items-center justify-content-center">
                        <h1 class="sectionTwoGroomAndBrideDivider">&</h1>
                    </div>
                    <div class="col-md brideContainer">
                        <img class="sectionTwoTopOrnament" src="/tema6/ornament/topDivider.png" alt="">
                        <div class="brideImageContainer">
                            <img class="sectionTwoBrideImage rounded-circle"
                                src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                                alt="">
                        </div>
                        <h1 class="sectionTwoBrideName"> {{ $mempelai ? $mempelai->namalengkapperempuan : '' }}
                        </h1>
                        <h3 class="sectionTwoBrideParent"> Daughter of <br> Mr.
                            {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                            {{ $mempelai ? $mempelai->namaibuperempuan : '' }}</h3>
                        <h2 class="coupleInstagramId">
                            <a href="{{ $mempelai ? $mempelai->instagram_perempuan : '#' }}" class="instagram-link"> <i
                                    class="fa fa-instagram mx-1" aria-hidden="true"></i>Instagram</a>
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Three - Love Story -->
        <section class="sectionThree" @if ($ceritacinta) @else style="display: none;" @endif>
            <div class="container">
                <h1 class="sectionThreeHeadingText">Our Unexpected Fate</h1>
                <div class="row py-5" @if ($ceritacinta->cover1) @else style="display: none;" @endif>
                    <div class="col-md-6">
                        <div class="loveStoryImageContainer">
                            <img class="sectionThreeLoveStoryImage rounded"
                                src="{{ $ceritacinta ? ($ceritacinta->cover1 ? asset('images/ceritacinta/' . $ceritacinta->cover1) : '') : '' }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6 sectionThreeLoveStoryContainer rounded-4">
                        <h1 class="sectionThreeLoveStoryTitle">
                            {{ $ceritacinta ? ($ceritacinta->judulcerita1 ? $ceritacinta->judulcerita1 : '') : '' }}
                        </h1>
                        <h4 class="sectionThreeLoveStoryText">
                            {{ $ceritacinta ? ($ceritacinta->cerita1 ? $ceritacinta->cerita1 : '') : '' }}
                        </h4>
                    </div>
                </div>
                <div class="row py-5 reversedLoveStoryRow"
                    @if ($ceritacinta->cover2) @else style="display: none;" @endif>
                    <div class="col-md-6 sectionThreeLoveStoryContainer rounded-4">
                        <h1 class="sectionThreeLoveStoryTitle">
                            {{ $ceritacinta ? ($ceritacinta->judulcerita2 ? $ceritacinta->judulcerita2 : '') : '' }}
                        </h1>
                        <h4 class="sectionThreeLoveStoryText">
                            {{ $ceritacinta ? ($ceritacinta->cerita2 ? $ceritacinta->cerita2 : '') : '' }}
                        </h4>
                    </div>
                    <div class="col-md-6">
                        <div class="loveStoryImageContainer">
                            <img class="sectionThreeLoveStoryImage rounded"
                                src="{{ $ceritacinta ? ($ceritacinta->cover2 ? asset('images/ceritacinta/' . $ceritacinta->cover2) : '') : '' }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="row py-5" @if ($ceritacinta->cover3) @else style="display: none;" @endif>
                    <div class="col-md-6">
                        <div class="loveStoryImageContainer">
                            <img class="sectionThreeLoveStoryImage rounded"
                                src="{{ $ceritacinta ? ($ceritacinta->cover3 ? asset('images/ceritacinta/' . $ceritacinta->cover3) : '') : '' }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6 sectionThreeLoveStoryContainer rounded-4">
                        <h1 class="sectionThreeLoveStoryTitle">
                            {{ $ceritacinta ? ($ceritacinta->judulcerita3 ? $ceritacinta->judulcerita3 : '') : '' }}
                        </h1>
                        <h4 class="sectionThreeLoveStoryText">
                            {{ $ceritacinta ? ($ceritacinta->cerita3 ? $ceritacinta->cerita3 : '') : '' }}
                        </h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Four - Couple Gallery -->
        <section class="sectionFour" @if ($count > 0) @else  style="display:none;" @endif>
            <div class="row">
                <div class="column">
                    @if ($count > 0)
                        <img class="coupleImage1" style="height: 51.8% !important;"
                            src="{{ asset('images/galeri/' . $galeri[0]->foto) }}" />
                    @endif
                    @if ($count > 1)
                        <img class="coupleImage2" style="height: 51.8% !important;"
                            src="{{ asset('images/galeri/' . $galeri[1]->foto) }}" />
                    @endif
                </div>
                <div class="column">
                    @if ($count > 2)
                        <img class="coupleImage3" src="{{ asset('images/galeri/' . $galeri[2]->foto) }}">
                    @endif
                    @if ($count > 3)
                        <img class="coupleImage4" style="height: 51.8% !important;"
                            src="{{ asset('images/galeri/' . $galeri[3]->foto) }}" />
                    @endif
                    @if ($count > 4)
                        <img class="coupleImage5" src="{{ asset('images/galeri/' . $galeri[4]->foto) }}">
                    @endif
                </div>
                <div class="column">
                    @if ($count > 5)
                        <img class="coupleImage6" src="{{ asset('images/galeri/' . $galeri[5]->foto) }}" />
                    @endif
                    @if ($count > 6)
                        <img class="coupleImage7" src="{{ asset('images/galeri/' . $galeri[6]->foto) }}" />
                    @endif
                    @if ($count > 7)
                        <img class="coupleImage8" style="height: 51.8% !important;"
                            src="{{ asset('images/galeri/' . $galeri[7]->foto) }}" />
                    @endif

                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="dividerOne">
            <img src="/tema6/ornament/divider5.png" alt="">
        </div>

        <!-- Section Five - Couple Highlight -->
        <section class="sectionFive" @if ($prewed) @else style="display: none;" @endif>
            <h1 class="sectionFiveHighlightTitle">Pre Wedding</h1>

            <div class="sectionFiveVideoWrapper">
                <div class="row mb-5">
                    <div class="col-md">
                        <video controls class="d-block mx-auto sectionFiveLiveStreamingVid mb-5"
                            style="border-radius: 10px;" width="560">
                            <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4">
                        </video>
                        <h2 class="sectionFiveLiveStreamingVidText"></h2>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section Six - Countdown -->
        <section class="sectionSix">
            <div class="container">
                <h1 class="sectionSixCountdownText">Save The Date</h1>
                <p class="sectionSixCountdownDateText">{{ $afterConvertDay ? $afterConvertDay : '' }},
                    {{ $tanggalAcara ? $tanggalAcara : '' }}</p>
                <div class="sectionSixBackOrnamentColor"></div>
                <div class="sectionSixCountdownWrapper">
                    <input type="hidden" name="tglacara" id="tglacara" value="{{ $oriTanggalAcara }}">
                    <div id="countdown" class="sectionSixCountdown row">
                        <div class="col countdownItems1 countdownItem">
                            <img src="/tema6/ornament/Shaping Background.png" alt="">
                            <h2 class="sectionSixCountdownTime" id="days"></h2>
                            <h4 class="sectionSixCountdownSubText">Days</h4>
                        </div>
                        <div class="col countdownItems2 countdownItem">
                            <img src="/tema6/ornament/Shaping Background.png" alt="">
                            <h2 class="sectionSixCountdownTime" id="hours"></h2>
                            <h4 class="sectionSixCountdownSubText">Hours</h4>
                        </div>
                        <div class="col countdownItems3 countdownItem">
                            <img src="/tema6/ornament/Shaping Background.png" alt="">
                            <h2 class="sectionSixCountdownTime" id="minutes"></h2>
                            <h4 class="sectionSixCountdownSubText">Minutes</h4>
                        </div>
                        <div class="col countdownItems4 countdownItem">
                            <img src="/tema6/ornament/Shaping Background.png" alt="">
                            <h2 class="sectionSixCountdownTime" id="seconds"></h2>
                            <h4 class="sectionSixCountdownSubText">Seconds</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Seven - Special Day -->
        <section class="sectionSeven">
            <div class="container">
                <img class="sectionSeventTopOrnament" src="/tema6/ornament/ornament2.png" alt="">
                <h1 class="sectionSevenHeadingText">Our Special Day</h1>
                <img class="sectionSeventDividerOrnament" src="/tema6/ornament/ornament3.png" alt="">
                <!-- Akad Nikah-->
                <div class="resepsiWrapper pb-3">
                    <img class="sectionSevenResepsiOrnament" src="/tema6/ornament/ornament4.png" alt="">
                    <h2 class="sectionSevenResepsiTextDate">
                        Akad Nikah
                    </h2>
                    <h2 class="sectionSevenResepsiDate">
                        {{ $afterConvertDay ? $afterConvertDay : '' }},
                        {{ $tanggalAcara ? $tanggalAcara : '' }}
                    </h2>
                    <h1 class="sectionSevenResepsiTimeText">
                        {{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                        Selesai</h1>
                    <h1 class="sectionSevenResepsiNamePlace"></h1>
                    <h1 class="sectionSevenResepsiAddressPlace">
                        {{ $informasiacara ? $informasiacara->lokasiakadnikah : '' }}
                    </h1>
                    <h2 class="coupleInstagramId">
                        <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                            class="instagram-link">View
                            Map</a>
                    </h2>
                </div>

                <!-- Resepsi -->
                <div class="akadNikahWrapper pt-3"
                    @if ($informasiacara) @if ($informasiacara->lokasiresepsi)  @else style="display:none;" @endif
                    @endif>
                    <img class="sectionSevenResepsiOrnament" src="/tema6/ornament/ornament5.png" alt="">
                    <h2 class="sectionSevenResepsiTextDate">
                        Resepsi
                    </h2>
                    <h2 class="sectionSevenResepsiDate">
                        {{ $afterConvertDay ? $afterConvertDay : '' }},
                        {{ $tanggalAcara ? $tanggalAcara : '' }}
                    </h2>
                    <h1 class="sectionSevenResepsiTimeText">{{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                        Selesai</h1>
                    <h1 class="sectionSevenResepsiNamePlace"></h1>
                    <h1 class="sectionSevenResepsiAddressPlace">
                        {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}
                    </h1>
                    <h2 class="coupleInstagramId">
                        <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                            class="instagram-link">View
                            Map</a>
                    </h2>
                </div>
                <img class="sectionSeventDividerOrnament" src="/tema6/ornament/ornament3.png" alt="">
            </div>
        </section>

        <!-- Section Eight - Live Streaming -->
        <section class="sectionEight" @if ($informasiacara->livestream) @else style="display: none;" @endif>
            <div class="container">
                <h1 class="sectionEightLivestreamText">Live Streaming</h1>
                <h3 class="sectionEightLivestreamHashtag"></h3>
                <iframe class="d-block mx-auto sectionEightLiveStreaming sectionFiveLiveStreamingVid mb-5"
                    width="560" height="315"
                    src="{{ $informasiacara ? $informasiacara->livestream : 'https://www.youtube.com/embed/jfKfPfyJRdk?si=EbCkkUA-HuNzEAUs' }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>

        <!-- Section Nine - Wedding Gift -->
        <section class="sectionNine" @if ($amplopdigital) @else style="display: none;" @endif>
            <div class="container">
                <h1 class="sectionNineWeddingGiftText">Wedding Gift</h1>
                <h3 class="sectionNineWeddingGiftParagraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid exercitationem accusantium
                    voluptates nesciunt minus! Odio consequatur quis molestiae nulla dolore asperiores excepturi esse
                    nisi unde.
                </h3>
                <div class="weddingGiftWrapperBox rounded">
                    <h4 class="sectionNineWeddingGiftHeadingText">Choose destination bank</h4>
                    <div class="custom-select">
                        <button class="select-button" role="combobox" aria-labelledby="select button"
                            aria-haspopup="listbox" aria-expanded="false" aria-controls="select-dropdown">
                            <span
                                class="selected-value">{{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</span>
                            <span class="arrow"></span>
                        </button>
                        <ul class="select-dropdown" role="listbox" id="select-dropdown">
                            <li role="option">
                                <input type="radio" id="github" name="social-account" />
                                <label for="github"><i class="bx bxl-github"></i>
                                    {{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}
                                </label>
                            </li>
                        </ul>
                    </div>

                    <h2 class="sectionNineWeddingGiftBoxBankName">
                        {{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</h2>
                    <h2 class="sectionNineWeddingGiftBoxAccountNumber">Account Number :
                        {{ $amplopdigital ? $amplopdigital->noakun : '' }}</h2>
                    <h2 class="sectionNineWeddingGiftAccountName">a/n
                        {{ $amplopdigital ? $amplopdigital->namaakun : '' }}</h2>
                </div>
            </div>
        </section>

        <div class="weddingFilter" @if ($weddingfilter) @else
        style="display: none" @endif>
            <div class="container">
                <h1 class="weddingFilterHeadingText">Instagram Wedding Filter</h1>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg5EtFyVdmyEjN-lpl75InTw356qpcWqXRnDI7G50FQZwh6PDL5rKaRXXF7TZuxbTbnIs&usqp=CAU"
                    alt="" class="weddingFilterPhotos">
                <div class="weddingFilterButtonWrapper">
                    <a href="#" class="btn weddingFilterButton">Make</a>
                </div>
            </div>
        </div>

        <div class="dividerOne sectionTenDivider">
            <h2 class="dividerTenHeadingText">To all beloved invited guests, are expected to obey</h2>
            <h2 class="dividerTenHeadingSubText">HEALTH PROTOCOL</h2>
        </div>

        <!-- Section Ten - Health Protocol -->
        <section class="sectionTen" @if ($protokol != null) @else style="display: none;" @endif>
            <div class="container">
                <div class="row">
                    <div style="max-width: 50%;" class="healthProtocolImage1 col-md p-4">
                        <img style="width: 55%;" class="sectionTenHealthProtocolImage" src="/tema6/img/distance.png"
                            alt="">
                        <h3 class="sectionTenHealthProtocolImageSubText">Social Distancing</h3>
                    </div>
                    <div style="max-width: 50%;" class="healthProtocolImage2 col-md p-4">
                        <img class="sectionTenHealthProtocolImage" src="/tema6/img/hand-sanitizer.png"
                            alt="">
                        <h3 class="sectionTenHealthProtocolImageSubText">Hand Sanitizer</h3>
                    </div>
                    <div style="max-width: 50%;" class="healthProtocolImage3 col-md p-4">
                        <img class="sectionTenHealthProtocolImage" src="/tema6/img/mask.png" alt="">
                        <h3 class="sectionTenHealthProtocolImageSubText">Wearing Mask</h3>
                    </div>
                    <div style="max-width: 50%;" class="healthProtocolImage4 col-md p-4">
                        <img class="sectionTenHealthProtocolImage" src="/tema6/img/temp.png" alt="">
                        <h3 class="sectionTenHealthProtocolImageSubText">Check Temperature</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- RSVP -->
        <div class="rsvp rounded rounded-3"
            @if ($kodeTamu) @else
            style="display: none" @endif>
            <div class="container">
                <input type="hidden" name="kdtamu" id="kdtamu"
                    value="{{ $kodeTamu ? $kodeTamu->kode_tamu : null }}">
                <h1 class="rsvpHeadingText">RSVP</h1>
                <h1 class="rsvpSubHeadingText"></h1>
                <div class="custom-select duplicate-select">
                    <button class="select-button" role="combobox" aria-labelledby="duplicate-select button"
                        aria-haspopup="listbox" aria-expanded="false" aria-controls="duplicate-select-dropdown">
                        <span class="selected-value text-dark">Kehadiran</span>
                        <span class="arrow"></span>
                    </button>
                    <ul class="select-dropdown" role="listbox" id="duplicate-select-dropdown">
                        <li role="option">
                            <input type="radio" id="duplicate-github" name="duplicate-social-account" />
                            <label for="duplicate-github"><i class="bx bxl-github"></i>

                            </label>
                        </li>
                        <li role="option">
                            <input type="radio" id="duplicate-github" name="duplicate-social-account" />
                            <label for="duplicate-github"><i class="bx bxl-github"></i>

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
                                id="qty" maxlength="12" value="{{ $kodeTamu ? $kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0' : '0' }}"/>
                        </div>
                        <div class="col-1">
                            <span class="plus rsvpButton rounded-circle float-end">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn rsvpConfirmButton d-flex justify-content-center"
                    id="kirim-rsvp">Confirm</a>
            </div>
        </div>

        <!-- Section Eleven - Wedding Wish -->
        <section class="sectionEleven">
            <div class="container">
                <h1 class="sectionElevenWeddingWishHeadingText">Wedding Wish</h1>
                <div class="sectionElevenWeddingWishBoxWrapper">
                    <form action="#">
                        <div class="sectionElevenFormControl sectionElevenFormControl1">
                            <input type="text" id="nama-ucapan" name="nama-ucapan" placeholder="Nama"
                                class="sectionElevenFormControlInput rounded">
                        </div>
                        <div class="sectionElevenFormControl sectionElevenFormControl2">
                            <textarea name="pesan-ucapan" id="pesan-ucapan" placeholder="Berikan Ucapan" cols="15" rows="5"
                                placeholder="Message" class="sectionElevenFormControlInput rounded"></textarea>
                        </div>
                        <a class="btn sectionElevenFormControlButton kirim-ucapan">Send</a>
                    </form>
                </div>

                <div class="sectionElevenWeddingWishMessageBox" id="weddingWishLog">

                </div>
            </div>
        </section>

        <!-- Section Twelve - Closing -->
        <section class="sectionTwelve">
            <div class="container">
                <h1 class="sectionTwelveCoupleName">{{ $mempelai ? $mempelai->namalaki : '' }} &
                    {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
                <h1 class="sectionTwelveCoupleDate">{{ $tanggalAcara ? $tanggalAcara : '' }}</h1>
                <img src="/tema6/ornament/divider5.png" alt="" class="sectionTwelveBottomOrnament">
            </div>
            <div class="sectionTwelvePoweredByBox">
                <h1 class="sectionTwelvePoweredByText">Powered By LOREM1</h1>
            </div>
        </section>
    </div>

    <section style="position: fixed; bottom: 0; left: 0; z-index: 9999;" class="music-outer" data-aos="fade-up"
        data-aos-duration="1000" data-aos-delay="300">
        <!-- <div class="music-box auto" id="music-box"></div> -->
        <img class="music-box" src="/tema6/img/musicPlayer.png" alt="">
    </section>
    <audio id="musicPlayer" class="d-none"
        src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '/tema6/music/sample-music.mp3') : '/tema6/music/sample-music.mp3' }}">
    </audio>


    <script src="/tema6/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/tema6/jquery/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="/tema6/js/index.js"></script>
    <script src="/tema6/js/gsapAnimation.js"></script>
</body>

</html>
<script src="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.js"></script>
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
    })

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
                    const data = `<div class="sectionElevenWeddingWishMessage">
                        <h1 class="sectionElevenWeddingWishSenderName">${item.nama}</h1>
                        <h1 class="sectionElevenWeddingWishMessageText">${item.ucapan}</h1>
                        <h1 class="sectionElevenWeddingWishTimestampText">${timereal}</h1>
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
