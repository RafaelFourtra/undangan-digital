<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/tema1/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/tema1/css/main.css">
    <title>Online Invitation</title>
    <link rel="stylesheet" href="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.css">
</head>

<body>
    <div style="overflow-x: hidden !important;" class="section-one">
        <div style="overflow-x: hidden !important; background-image: url('{{ asset('images/sampul/' . $informasiacara->sampul) }}');"
            class="background"></div>
        <div style="overflow-x: hidden !important;" class="container my-2">
            <!-- Section 1 -> Welcoming Section -->
            <div style="overflow-x: hidden !important;" class="center-content">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
                            <h1 id="welcoming-sentences-sec1" class="text-light">The Wedding Of</h1>
                            <h1 id="user-name" class="mb-0 pb-0">{{ $mempelai ? $mempelai->namalaki : '' }} &
                                {{ $mempelai ? $mempelai->namaperempuan : '' }}</h1>
                            <!-- <h1 id="user-name" class="mt-0 pt-0">Rahmat</h1> -->
                            <h3 id="wedding-date-sec1" class="text-light" style="z-index: 9999;">
                                {{ $afterConvertDay ? $afterConvertDay : '' }},
                                {{ $tanggalAcara ? $tanggalAcara : '' }}</h3>
                            <h5 style="z-index: 9999; font-family: 'PlayBall', serif; opacity: 0;"
                                class="text-center text-light" id="coupleWeddingSubtext">To: <br> {{ $namaTamu }}
                            </h5>
                        </div>
                        <div style="padding: 10% 0;" class="row">
                            <!-- <img style="filter: brightness(99999%); width: 35%;" class="d-block mx-auto p-0 m-0" src="/asset/ornament/ornament-2.png" alt=""> -->
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center mt-3">
                                <a href="#" id="save-date-button"
                                    class="text-center text-light p-2 px-4 btn border border-2 rounded-5 fw-semibold">Open
                                    Invitation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="other-section" id="other-section-target"
        style="display: none; position: relative; overflow-x: hidden !important;">

        <!-- Couple information - Section 2 -->
        <div class="couple-information">
            <!-- Bible Verse -->
            <div class="bible-verse py-4">
                <h4 id="bible-verses-sec2" class="text-center w-75 d-block mx-auto">
                    {{ $quotes ? $quotes->quotes : '' }}

                </h4>
                <h2 id="bible-verse-sec2" class="text-light text-center mb-3"></h2>
            </div>

            <!-- Couple Profile -->
            <div class="couple-profile py-3 mb-5">
                <div class="row">
                    <div class="col-md mb-5">
                        <div style="position: relative;" class="groom-wrapper">
                            <div style="position: relative;" class="image-container overlay-container mb-3">
                                <img id="groomProfileImage" class="d-block mx-auto rounded img-fluid"
                                    style="opacity: 0;"
                                    src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : '' }}"
                                    alt="">
                                <div class="overlayImage">
                                    <img src="/tema1/ornament/Group 1.svg" alt="" class="ornament">
                                </div>
                            </div>
                            <div class="groom-information p-3 px-5">
                                <h3 id="groom" class="text-light">The Groom</h3>
                                <hr class="mb-2 border-3 rounded horizontalLineSec2"
                                    style="background-color: #EBB760; border: 1.5% solid #EBB760; color: #EBB760; width: 0%;">
                                <br>
                                <h1 id="groom-name" class="mb-2">
                                    {{ $mempelai ? $mempelai->namalengkaplaki : '' }}
                                </h1>
                                <h4 id="groom-parent-name">
                                    Son of Mr. {{ $mempelai ? $mempelai->namabapaklaki : '' }} & Mrs.
                                    {{ $mempelai ? $mempelai->namaibulaki : '' }} </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div style="position: relative;" class="bride-wrapper">
                            <div style="position: relative;" class="image-container overlay-container mb-3">
                                <img id="brideProfileImage" class="d-block mx-auto rounded img-fluid"
                                    style="opacity: 0;"
                                    src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : '' }}"
                                    alt="">
                                <div class="overlayImage">
                                    <img src="/tema1/ornament/Group 1.svg" alt="" class="ornament">
                                </div>
                            </div>
                            <div class="bride-information p-3 px-5">
                                <h3 id="bride" class="text-light text-end">The Bride</h3>
                                <hr class="mb-2 border-3 rounded horizontalLineSec2"
                                    style="background-color: #EBB760; border: 1.5% solid #EBB760; color: #EBB760; width: 0%;">
                                <br>
                                <h1 id="bride-name" class="text-end mb-2">
                                    {{ $mempelai ? $mempelai->namalengkapperempuan : '' }}
                                </h1>
                                <h4 id="bride-parent-name" class="text-end">
                                    Daughter of Mr. {{ $mempelai ? $mempelai->namabapakperempuan : '' }} & Mrs.
                                    {{ $mempelai ? $mempelai->namaibuperempuan : '' }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Countdown & Event Detail - Section 3 -->
        <div class="event-detail">
            <!-- Countdown -->
            <h2 id="save-date-text" class="text-light text-center">Save The Date</h2>
            <h2 id="event-date" class="text-center mb-5">{{ $afterConvertDay ? $afterConvertDay : '' }},
                {{ $tanggalAcara ? $tanggalAcara : '' }}</h2>
            <div class="countdown-box mb-5">
                <div class="d-flex align-items-center justify-content-center">
                    <div id="countdown" class="countdown text-light row px-1">
                        <div class="countdown-item col days">
                            <input type="hidden" name="tglacara" id="tglacara" value="{{ $oriTanggalAcara }}">
                            <span>
                                <h2 id="days" class="text-light text-center"></h2>
                                <h4 class="text-light text-center">Hari</h4>
                            </span>
                        </div>
                        <div class="countdown-item col hours">
                            <span>
                                <h2 id="hours" class="text-light text-center"></h2>
                                <h4 class="text-light text-center">Jam</h4>
                            </span>
                        </div>
                        <div class="countdown-item col minutes">
                            <span>
                                <h2 id="minutes" class="text-light text-center"></h2>
                                <h4 class="text-light text-center">Menit</h4>
                            </span>
                        </div>
                        <div class="countdown-item col second">
                            <span>
                                <h2 id="seconds" class="text-light text-center"></h2>
                                <h4 class="text-light text-center">Detik</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            @if ($informasiacara)
                @if ($informasiacara->livestream)
                    <!-- Live Streaming -->
                    <h2 id="liveStreamingText" class="text-center">Live Streaming</h2>
                    <h4 id="liveStreamingSubText" class="text-center">Tak semua bisa hadir secara fisik di hari
                        pernikahan kami, tapi Anda masih bisa ikut merayakan lewat livestreaming. Klik tautan di bawah
                        ini dan
                        saksikan momen spesial kami dari jauh. Terima kasih atas dukungan dan cinta Anda.</h4>
                    <iframe style="opacity: 0;" class="d-block mx-auto mb-5 liveStreamingVid" width="560"
                        height="315"
                        src="{{ $informasiacara ? $informasiacara->livestream : 'https://www.youtube.com/embed/jfKfPfyJRdk?si=EbCkkUA-HuNzEAUs' }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                    <hr style="background-color: #EBB760 !important; border: 0.3vh solid #EBB760 !important; color: #EBB760 !important;"
                        class="rounded w-75 d-block mx-auto mb-5">
                @endif
            @endif
            <!-- Event Detail -->
            <div class="event-detail-box">
                <h1 id="wedding-day-text-sec4" class="text-center text-light">Wedding Day</h1>
                <h1 id="wedding-days-text-sec4" class="text-center text-light">
                    {{ $afterConvertDay ? $afterConvertDay : '' }}</h1>
                <h3 style="color: #EBB760 !important;" id="wedding-date-text-sec4" class="text-center mb-5">
                    {{ $tanggalAcara ? $tanggalAcara : '' }}
                </h3>

                <div class="row my-4 mb-5">
                    <div class="col-md">
                        <h3 id="akad-nikah-event-text" class="text-center text-light">Akad Nikah</h3>
                        <h3 style="color: #EBB760 !important;" id="event-time-text"
                            class="text-center event-time-text">
                            {{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                            Selesai
                        </h3>
                        {{-- <h2 id="event-location-text" class="text-center text-light fw-bold">
                        </h2> --}}
                        <h2 id="event-location-text" class="text-center text-light w-75 d-block mx-auto">
                            {{ $informasiacara ? $informasiacara->lokasiakadnikah : '' }}</h2>
                        <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                            style="font-family: 'Playball', serif; opacity: 0; font-size: 2.4vh; color: #EBB760 !important; border: 0.5vh solid #EBB760;"
                            class="viewMapButton viewMapButtonAkadNikah btn bg-transparent mt-4 fw-semibold w-50 d-block mx-auto">View
                            Map</a>
                    </div>

                    <div class="col-md"
                        @if ($informasiacara) @if ($informasiacara->lokasiresepsi)  @else style="display:none;" @endif
                        @endif>
                        <h3 id="resepsi-event-text" class="text-center text-light">Resepsi</h3>
                        <h3 style="color: #EBB760 !important;" id="event-time-text"
                            class="text-center event-time-text">
                            {{ $informasiacara ? $informasiacara->jamresepsi : '' }} -
                            Selesai
                        </h3>
                        {{-- <h2 id="event-location-text" class="text-center text-light fw-bold">JW Marriott Hotel
                                    Medan
                                </h2> --}}
                        <h2 id="event-location-text" class="text-center text-light w-75 d-block mx-auto">
                            {{ $informasiacara ? $informasiacara->lokasiresepsi : '' }}</h2>
                        <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                            style="font-family: 'Playball', serif; opacity: 0; font-size: 2.4vh; color: #EBB760 !important; border: 0.5vh solid #EBB760;"
                            class="viewMapButton btn bg-transparent mt-4 fw-semibold w-50 d-block mx-auto">View
                            Map</a>
                    </div>
                </div>


                <!-- Health Protocol -->
                <div class="health-protocol" @if ($protokol != null) @else style="display: none;" @endif>
                    <h1 id="health-protocol-text-sec4" class="text-center text-light mb-5">Protokol Kesehatan</h1>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="health-protocol-inside row w-75">
                            <div class="col-md">
                                <div class="row mb-3">
                                    <div style="opacity: 0; max-width: 50%;" id="jagaJarakProtocolCard"
                                        class="col protocol-card bg-dark rounded-2 mx-3 p-3 px-0">
                                        <img style="width: 55%;" class="d-block mx-auto mb-3"
                                            src="/tema1/img/distance.png" alt="">
                                        <h3 style="color: #EBB760 !important;" id="protocol-card-text-sec4"
                                            class="text-center">
                                            Jaga Jarak</h3>
                                    </div>
                                    <div style="opacity: 0; max-width: 50%;" id="cuciTanganProtocolCard"
                                        class="col protocol-card bg-dark rounded-2 mx-3 p-3 px-0">
                                        <img style="width: 45%;" class="d-block mx-auto mb-3"
                                            src="/tema1/img/hand-sanitizer.png" alt="">
                                        <h3 style="color: #EBB760 !important;" id="protocol-card-text-sec4"
                                            class="text-center">
                                            Cuci Tangan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row">
                                    <div style="opacity: 0; max-width: 50%;" id="memakaiMaskerProtocolCard"
                                        class="col protocol-card bg-dark rounded-2 mx-3 p-3 px-0">
                                        <img style="width: 45%;" class="d-block mx-auto mb-3"
                                            src="/tema1/img/mask.png" alt="">
                                        <h3 style="color: #EBB760 !important;" id="protocol-card-text-sec4"
                                            class="text-center">
                                            Memakai Masker</h3>
                                    </div>
                                    <div style="opacity: 0; max-width: 50%;" id="mengecekSuhuProtocolCard"
                                        class="col protocol-card bg-dark rounded-2 mx-3 p-3 px-0">
                                        <img style="width: 45%;" class="d-block mx-auto mb-3"
                                            src="/tema1/img/temp.png" alt="">
                                        <h3 style="color: #EBB760 !important;" id="protocol-card-text-sec4"
                                            class="text-center">
                                            Mengecek Suhu</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Couple Gallery - Section 5 -->
        <div class="couple-gallery px-5" @if ($count > 0) @else  style="display:none;" @endif>
            <h1 id="coupleGalleryText" class="text-center mb-5">Our Gallery</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="column">
                        @if ($count > 0)
                            <img class="coupleImage1" style="height: 51.8% !important;"
                                src="{{ asset('images/galeri/' . $galeri[0]->foto) }}" />
                        @endif
                        @if ($count > 1)
                            <img class="coupleImage2" src="{{ asset('images/galeri/' . $galeri[1]->foto) }}" />
                        @endif
                        @if ($count > 2)
                            <img class="coupleImage3" src="{{ asset('images/galeri/' . $galeri[2]->foto) }}" />
                        @endif

                    </div>
                    <div class="column">
                        @if ($count > 3)
                            <img class="coupleImage4" src="{{ asset('images/galeri/' . $galeri[3]->foto) }}">
                        @endif
                        @if ($count > 4)
                            <img class="coupleImage5" style="height: 51.8% !important;"
                                src="{{ asset('images/galeri/' . $galeri[4]->foto) }}" />
                        @endif
                        @if ($count > 5)
                            <img class="coupleImage6" src="{{ asset('images/galeri/' . $galeri[5]->foto) }}">
                        @endif

                    </div>
                    <div class="column">
                        @if ($count > 6)
                            <img class="coupleImage7" src="{{ asset('images/galeri/' . $galeri[6]->foto) }}" />
                        @endif
                        @if ($count > 7)
                            <img class="coupleImage8" src="{{ asset('images/galeri/' . $galeri[7]->foto) }}" />
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <!-- Couple Story & Footage - Section 6 -->
        <div class="couple-stories m-0">
            <div class="cc" @if ($ceritacinta) @else style="display: none;" @endif>
                <h1 style="padding: 3.5% 0;" id="love-story-text-sec6" class="text-center text-light">Love Story
                </h1>
                <div @if ($ceritacinta->cover1) style="margin-bottom: 5%;" @else style="display: none;" @endif
                    class="d-flex align-items-center justify-content-center">
                    <div id="coupleStory1" class="row w-75">
                        <div class="col-md">
                            <img style="width: 432.38px; height: 288.83px; opacity: 0;" id="coupleStoryImage1"
                                class="d-block mx-auto rounded"
                                src="{{ $ceritacinta ? ($ceritacinta->cover1 ? asset('images/ceritacinta/' . $ceritacinta->cover1) : '') : '' }}"
                                alt="">
                        </div>
                        <div class="col-md">
                            <h2 id="love-story-head-sec6" class="coupleStoryHeading1"
                                style="color: #EBB760 !important;">
                                {{ $ceritacinta ? ($ceritacinta->judulcerita1 ? $ceritacinta->judulcerita1 : '') : '' }}
                            </h2>
                            <hr style="width: 0; background-color: #EBB760 !important; color: #EBB760 !important; border: 0.3vh solid #EBB760 !important;"
                                class="rounded coupleStoryLine1">
                            <p id="love-story-desc-sec6" class="text-light loveStory1">
                                {{ $ceritacinta ? ($ceritacinta->cerita1 ? $ceritacinta->cerita1 : '') : '' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div @if ($ceritacinta->cover2) style="margin-bottom: 5%;" @else style="display: none;" @endif
                    class="d-flex align-items-center justify-content-center">
                    <div id="coupleStory2" class="row w-75 couple-story-container">
                        <div class="col-md">
                            <h2 id="love-story-head-sec6" class="coupleStoryHeading2"
                                style="color: #EBB760 !important;">
                                {{ $ceritacinta ? ($ceritacinta->judulcerita2 ? $ceritacinta->judulcerita2 : '') : '' }}
                            </h2>
                            <hr style="width: 0; background-color: #EBB760 !important; color: #EBB760 !important; border: 0.3vh solid #EBB760 !important;"
                                class="rounded coupleStoryLine2">
                            <p id="love-story-desc-sec6" class="text-light loveStory2">
                                {{ $ceritacinta ? ($ceritacinta->cerita2 ? $ceritacinta->cerita2 : '') : '' }}
                            </p>
                        </div>
                        <div class="col-md">
                            <img style="width: 432.38px; height: 288.83px; opacity: 0;" id="coupleStoryImage2"
                                class="d-block mx-auto rounded"
                                src="{{ $ceritacinta ? ($ceritacinta->cover2 ? asset('images/ceritacinta/' . $ceritacinta->cover2) : '') : '' }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div @if ($ceritacinta->cover3) @else style="display: none;" @endif
                    class="d-flex align-items-center justify-content-center">
                    <div id="coupleStory3" class="row w-75">
                        <div class="col-md">
                            <img style="width: 432.38px; height: 288.83px; opacity: 0;" id="coupleStoryImage3"
                                class="d-block mx-auto rounded"
                                src="{{ $ceritacinta ? ($ceritacinta->cover3 ? asset('images/ceritacinta/' . $ceritacinta->cover3) : '') : '' }}"
                                alt="">
                        </div>
                        <div class="col-md">
                            <h2 id="love-story-head-sec6" class="coupleStoryHeading3"
                                style="color: #EBB760 !important;">
                                {{ $ceritacinta ? ($ceritacinta->judulcerita3 ? $ceritacinta->judulcerita3 : '') : '' }}
                            </h2>
                            <hr style="width: 0; background-color: #EBB760 !important; color: #EBB760 !important; border: 0.3vh solid #EBB760 !important;"
                                class="rounded coupleStoryLine3">
                            <p id="love-story-desc-sec6" class="text-light loveStory3">
                                {{ $ceritacinta ? ($ceritacinta->cerita3 ? $ceritacinta->cerita3 : '') : '' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="coupleFootage" @if ($prewed) @else style="display: none" @endif>
                <h1 style="color: #EBB760 !important; font-family: 'Playball', serif; opacity: 0;" id="footageText"
                    class="text-center mb-5">Our
                    Footage</h1>
                <div class="row">
                    <div class="col-md">
                        <video width="560" height="315" id="footageVideo" class="d-block mx-auto mb-5"
                            controls>
                            <source src="{{ asset('video/prewedding/' . $prewed->vidio) }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

        </div>


        <!-- Digital Envelope, Wedding Wish, & Couple Quote - Section 7 -->
        <div class="digiEnve">

            <!-- Section 9 - Instagram Wedding Filter -->
            <div class="imwf" @if ($weddingfilter) @else
            style="display: none" @endif>
                <div class="instagramWeddingFilter px-4 py-4 d-flex align-items-center justify-content-center"
                    id="instagramWeddingFilter">
                    <div class="instagramWeddingFilterWrapper">
                        <h1 class="text-center text-light instagramWeddingFilterHeadingText py-2"
                            id="instagramWeddingFilterHeadingText">
                            Filter Instagram</h1>
                        <img id="instagramWeddingFilterImage" class="d-block mx-auto w-50 mb-4"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg5EtFyVdmyEjN-lpl75InTw356qpcWqXRnDI7G50FQZwh6PDL5rKaRXXF7TZuxbTbnIs&usqp=CAU"
                            alt="">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-dark text-light"
                                id="instagramWeddingFilterButtonSend">Masukan</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Digital Envelope -->
            <div class="amdg" @if ($amplopdigital) @else style="display: none;" @endif>
                <h1 style="color: #EBB760 !important; opacity: 6;" id="wedding-gift-text-sec7" class="text-center">
                    Wedding Gift</h1>
                <h5 id="wedding-gift-subtext-sec7" class="text-center text-light w-75 d-block mx-auto">Berkat dan
                    kedatangan
                    Anda ke pernikahan kami sudah
                    cukup bagi kami. Namun jika anda ingin memberikan kado kami menyediakan Amplop Digital untuk
                    memudahkan
                    anda. Terima kasih.</h5>
                <div style="padding: 4% 0;" class="d-flex align-items-center justify-content-center">
                    <div class="row d-block mx-auto weddingGiftWrappersz">
                        <div style="opacity: 0;" id="paymentSelection" class="col-md mb-5">
                            <h3 id="" class="text-center mb-2" style="color: transparent;">p</h3>
                            <label class="form-label text-light">Pilih Bank</label>
                            <select class="form-select form-select mb-3 text-light bg-dark border-0"
                                aria-label="Large select example">
                                <option class="text-light" selected>
                                    {{ $amplopdigital ? $amplopdigital->paymentvendor : '' }}</option>
                            </select>
                            <!-- <h3 style="font-family: 'Playball', serif;" class="text-light">BANK BCA(014)</h3> -->
                            <h3 style="font-family: 'Playball', serif; font-size: 2.8vh;" class="text-light">
                                Account
                                Number
                                : {{ $amplopdigital ? $amplopdigital->noakun : '' }}</h3>
                            <h3 style="font-family: 'Playball', serif; font-size: 2.8vh;" class="text-light">
                                Account
                                Name
                                :
                                {{ $amplopdigital ? $amplopdigital->namaakun : '' }}</h3>
                        </div>
                        <div style="display: none;" id="paymentForm" class="col-md mb-5">
                            <h3 id="wedding-gift-form-text" class="text-center text-light mb-2">Tolong isi form
                                dibawah
                                ini
                            </h3>
                            <!-- Sender -->
                            <label class="form-label text-light">Nama</label>
                            <input type="text" class="form-control bg-dark text-light border-0 mb-3"
                                aria-describedby="passwordHelpBlock">

                            <!-- Sender Name -->
                            <label class="form-label text-light">Nama Pemilik Rekening</label>
                            <input type="text" class="form-control bg-dark text-light border-0 mb-3"
                                aria-describedby="passwordHelpBlock">

                            <!-- Amount -->
                            <label class="form-label text-light">Jumlah</label>
                            <input type="text" class="form-control bg-dark text-light border-0 mb-3"
                                aria-describedby="passwordHelpBlock">

                            <!-- Message -->
                            <label class="form-label text-light">Pesan Untuk Mempelai</label>
                            <textarea name="" id="" cols="20" rows="5"
                                class="form-control bg-dark text-light border-0"></textarea>

                            <a href="#" class="btn btn-dark text-light my-3 float-end">Kirim</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- RSVP --}}
            <div class="rsvp"
                @if ($kodeTamu) @else
                style="display: none;" @endif>
                <div class="rsvpWrapper">
                    <input type="hidden" name="kdtamu" id="kdtamu"
                    value="{{ $kodeTamu ? $kodeTamu->kode_tamu : null }}">
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
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="peopleYouBringRSVPBox my-3">
                        <div class="row">
                            <div class="col-1">
                                <span class="min rsvpButton rounded-circle text-white">
                                    <i class="fa fa-minus text-white"></i>
                                </span>
                            </div>
                            <div class="col">
                                <input class="form-control peopleYouBringInput" type="text" name="qty"
                                    id="qty" maxlength="12"
                                    value="{{ $kodeTamu ? ($kodeTamu->jumlahkehadiran ? $kodeTamu->jumlahkehadiran : '0') : '0' }}" />
                            </div>
                            <div class="col-1">
                                <span class="plus rsvpButton rounded-circle text-white float-end">
                                    <i class="fa fa-plus text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <a class="btn rsvpConfirmButton" id="kirim-rsvp">Confirm</a>
                </div>
            </div>

            <!-- Wedding Wish -->
            <div class="d-flex align-items-center justify-content-center">
                <div class="row w-75 weddingWishContainer">
                    <div class="col-md">
                        <div style="padding-bottom: 6%; opacity: 0;" class="weddingWish">
                            <h1 id="wedding-wish-text-sec7" class="text-center text-light mb-3">Wedding Wish</h1>
                            <div class="form-group d-block mx-auto">
                                <label class="form-label text-light">Nama</label>
                                <input type="text" class="form-control bg-dark text-light border-0 mb-3"
                                    aria-describedby="passwordHelpBlock" id="nama-ucapan" name="nama-ucapan">
                            </div>
                            <label class="form-label text-light">Pesan Untuk Mempelai</label>
                            <textarea name="pesan-ucapan" id="pesan-ucapan" cols="30" rows="10"
                                class="form-control text-light bg-dark d-block mx-auto border-0">
                            </textarea>
                            <div class="py-4 d-block mx-auto">
                                <button type="button" class="btn btn-dark text-light float-end"
                                    id="kirim-ucapan">Kirim</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-4">
                        <h1 style="opacity: 0;" id="weddingWishTextSec7" class="text-center text-light mb-3">
                            Latest
                            Wedding Wishes</h1>
                        <div class="weddingWishLogWrapper">
                            <div class="weddingWishLog">

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Closing Part -->
            <div class="coupleQuote mt-4">
                <h3 id="couple-quote-sec7" class="text-light text-center mt-5">
                </h3>
                <h3 style="color: #EBB760 !important;" id="coupleName">{{ $mempelai ? $mempelai->namalaki : '' }}
                    &
                    {{ $mempelai ? $mempelai->namaperempuan : '' }}</h3>
                <h3 id="coupleWeddingDate">{{ $tanggalAcara ? $tanggalAcara : '' }}</h3>
            </div>


            <!-- License -->
            <div class="licensePart">
                <h3 id="licenseText">Powered By Cukurukuk</h3>
            </div>
        </div>


        <section style="position: fixed; bottom: 0; left: 0; z-index: 9999;" class="music-outer" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="300">
            <!-- <div class="music-box auto" id="music-box"></div> -->
            <img class="music-box" src="/tema1/img/musicPlayer.png" alt="">
        </section>
        <audio id="musicPlayer" class="d-none"
            src="{{ $musik ? ($musik->musikMaster->musik ? asset('musik/' . $musik->musikMaster->musik) : '/tema1/music/sample-music.mp3') : '/tema1/music/sample-music.mp3' }}">
        </audio>
        <!-- <a id="button" title="button">play sound</a> -->
    </div>

    <script src="/tema1/"></script>
    <script src="/tema1/jquery/jquery-3.6.3.min.js"></script>
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script src="/tema1/js/index.js"></script>
</body>

</html>

<script src="/assets/vendors/jquery-toast-plugin-master/src/jquery.toast.js"></script>
<script>
    $(document).ready(function() {

        ucapanUndangan()

        $('#kirim-ucapan').on('click', function(e) {
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
                const weddingLog = $('.weddingWishLog')
                weddingLog.html('')
                const response = res.ucapan
                response.forEach(item => {
                    const data = `<div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">${item.nama}</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">${item.ucapan}</h3>
                                    <h4 id="weddingWishTimestamp">${item.created_at}</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
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

</html>
