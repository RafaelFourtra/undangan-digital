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
</head>

<body>
    <div style="overflow-x: hidden !important;" class="section-one">
        <div style="overflow-x: hidden !important;" class="background"></div>
        <div style="overflow-x: hidden !important;" class="container my-2">
            <!-- Section 1 -> Welcoming Section -->
            <div style="overflow-x: hidden !important;" class="center-content">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <input type="hidden" name="user_id" id="user_id" value="{{ $getUser->user_id }}">
                            <h1 id="welcoming-sentences-sec1" class="text-light">The Wedding Of</h1>
                            <h1 id="user-name" class="mb-0 pb-0">{{ $mempelai ? $mempelai->namalaki : 'Adi' }} &
                                {{ $mempelai ? $mempelai->namaperempuan : 'Aci' }}</h1>
                            <!-- <h1 id="user-name" class="mt-0 pt-0">Rahmat</h1> -->
                            <h3 id="wedding-date-sec1" class="text-light" style="z-index: 9999;">
                                {{ $afterConvertDay ? $afterConvertDay : 'Minggu' }},
                                {{ $tanggalAcara ? $tanggalAcara : '22 Juli 2014' }}</h3>
                            <h5 style="z-index: 9999; font-family: 'PlayBall', serif; opacity: 0;"
                                class="text-center text-light" id="coupleWeddingSubtext">To: <br>
                                {{ $namaTamu ? $namaTamu : 'Tamu Undangan' }}</h5>
                        </div>
                        <div style="padding: 10% 0;" class="row">
                            <!-- <img style="filter: brightness(99999%); width: 35%;" class="d-block mx-auto p-0 m-0" src="/tema1/ornament/ornament-2.png" alt=""> -->
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center mt-3">
                                <button type="button" id="save-date-button"
                                    class="text-center text-light p-2 px-4 btn border border-2 rounded-5 fw-semibold">Open
                                    Invitation</button>
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
                    {{ $quotes
                        ? $quotes->quotes
                        : '"Demikianlah mereka bukan
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        lagi
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        dua, melainkan satu. Karena itu, apa yang telah
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        dipersatukan Allah, tidak boleh diceraikan manusia."' }}
                </h4>
                <h2 id="bible-verse-sec2" class="text-light text-center mb-3"></h2>
            </div>

            <!-- Couple Profile -->
            <div class="couple-profile py-3 mb-5">
                <div class="row">
                    <div class="col-md mb-5">
                        <div style="position: relative;" class="groom-wrapper">
                            <div style="position: relative;" class="image-container">
                                <img id="groomProfileImage" class="d-block mx-auto rounded"
                                    style="width: 0%; opacity: 0;"
                                    src="{{ $mempelai ? asset('images/mempelai/laki/' . $mempelai->fotolaki) : 'https://i.pinimg.com/736x/9d/79/b2/9d79b2233afeb7a8ae038f202dc1abb9.jpg' }}"
                                    alt="">
                                <img style="position: absolute; top: -4%; left: 2%; max-width: 100%; height: 100%; opacity: 0; z-index: 1;"
                                    src="/tema1/ornament/Group 1.svg" alt="" class="overlayImage">
                            </div>
                            <div class="groom-information p-3 px-5">
                                <h3 id="groom" class="text-light">The Groom</h3>
                                <hr class="mb-2 border-3 rounded horizontalLineSec2"
                                    style="background-color: #EBB760; border: 1.5% solid #EBB760; color: #EBB760; width: 0%;">
                                <br>
                                <h1 id="groom-name" class="mb-2">
                                    {{ $mempelai ? $mempelai->namalengkaplaki : 'Aduy Nababan' }}
                                </h1>
                                <h4 id="groom-parent-name">
                                    Son of Mr. {{ $mempelai ? $mempelai->namabapaklaki : 'Jono Marsinto' }} & Mrs.
                                    {{ $mempelai ? $mempelai->namaibulaki : 'Kina Birmanti' }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div style="position: relative;" class="bride-wrapper">
                            <div style="position: relative;" class="image-container">
                                <img id="brideProfileImage" class="d-block mx-auto rounded"
                                    style="width: 0%; opacity: 0;"
                                    src="{{ $mempelai ? asset('images/mempelai/perempuan/' . $mempelai->fotoperempuan) : 'https://i.pinimg.com/736x/9d/79/b2/9d79b2233afeb7a8ae038f202dc1abb9.jpg' }}"
                                    alt="">
                                <img style="position: absolute; top: -4%; left: 10.5%; max-width: 100%; height: 100%; opacity: 0; z-index: 1; transform: rotateY(180deg);"
                                    src="/tema1/ornament/Group 1.svg" alt="" class="overlayImage">
                            </div>
                            <div class="bride-information p-3 px-5">
                                <h3 id="bride" class="text-light text-end">The Bride</h3>
                                <hr class="mb-2 border-3 rounded horizontalLineSec2"
                                    style="background-color: #EBB760; border: 1.5% solid #EBB760; color: #EBB760; width: 0%;">
                                <br>
                                <h1 id="bride-name" class="text-end mb-2">
                                    {{ $mempelai ? $mempelai->namalengkapperempuan : 'Gina Nababan' }}
                                </h1>
                                <h4 id="bride-parent-name" class="text-end">
                                    Daughter of Mr. {{ $mempelai ? $mempelai->namabapakperempuan : 'Jono Marsinto' }} &
                                    Mrs. {{ $mempelai ? $mempelai->namaibuperempuan : 'Kina Birmanti' }}
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
            <h2 id="event-date" class="text-center mb-5">{{ $afterConvertDay ? $afterConvertDay : 'Minggu' }},
                {{ $tanggalAcara ? $tanggalAcara : '22 Juli 2014' }}</h2>
            <div class="countdown-box mb-5">
                <div class="d-flex align-items-center justify-content-center">
                    <div id="countdown" class="countdown text-light row px-5">
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

            <!-- Live Streaming -->
            <h2 id="liveStreamingText" class="text-center">Live Streaming</h2>
            <h4 id="liveStreamingSubText" class="text-center">Tak semua bisa hadir secara fisik di hari
                pernikahan kami, tapi Anda masih bisa ikut merayakan lewat livestreaming. Klik tautan di bawah ini dan
                saksikan momen spesial kami dari jauh. Terima kasih atas dukungan dan cinta Anda.</h4>
            <iframe style="opacity: 0;" class="d-block mx-auto mb-5 liveStreamingVid" width="560" height="315"
                src="{{ $informasiacara ? $informasiacara->livestream : 'https://www.youtube.com/embed/jfKfPfyJRdk?si=EbCkkUA-HuNzEAUs' }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

            <hr style="background-color: #EBB760 !important; border: 0.3vh solid #EBB760 !important; color: #EBB760 !important;"
                class="rounded w-75 d-block mx-auto mb-5">

            <!-- Event Detail -->
            <div class="event-detail-box">
                <h1 id="wedding-day-text-sec4" class="text-center text-light">Wedding Day</h1>
                <h1 id="wedding-days-text-sec4" class="text-center text-light">
                    {{ $afterConvertDay ? $afterConvertDay : 'Minggu' }}</h1>
                <h3 style="color: #EBB760 !important;" id="wedding-date-text-sec4" class="text-center mb-5">
                    {{ $tanggalAcara ? $tanggalAcara : '22 Juli 2014' }}
                </h3>

                <div class="row my-4 mb-5">
                    <div class="col-md">
                        <h3 id="akad-nikah-event-text" class="text-center text-light">Akad Nikah</h3>
                        <h3 style="color: #EBB760 !important;" id="event-time-text" class="text-center">
                            {{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }} -
                            {{ $informasiacara ? $informasiacara->jamakadnikah : '08.00' }}
                        </h3>
                        <h2 id="event-location-text" class="text-center text-light">
                            {{ $informasiacara ? $informasiacara->lokasiakadnikah : 'BAnjarmasin SOLo' }}</h2>
                        <a href="{{ $informasiacara ? $informasiacara->googlemapspernikahan : '#' }}"
                            style="font-family: 'Playball', serif; opacity: 0; font-size: 2.4vh; color: #EBB760 !important; border: 0.5vh solid #EBB760;"
                            class="viewMapButton viewMapButtonAkadNikah btn bg-transparent mt-4 fw-semibold w-25 d-block mx-auto">View
                            Map</a>
                    </div>
                    @if ($informasiacara->lokasiresepsi)
                        <div class="col-md">
                            <h3 id="resepsi-event-text" class="text-center text-light">Resepsi</h3>
                            <h3 style="color: #EBB760 !important;" id="event-time-text" class="text-center">
                                {{ $informasiacara ? $informasiacara->jamresepsi : '08.00' }} -
                                {{ $informasiacara ? $informasiacara->jamresepsi : '08.00' }}
                            </h3>
                            <h2 id="event-location-text" class="text-center text-light">
                                {{ $informasiacara ? $informasiacara->lokasiresepsi : 'BAnjarmasin SOLo' }}</h2>

                            <a href="{{ $informasiacara ? $informasiacara->googlemapsresepsi : '#' }}"
                                style="font-family: 'Playball', serif; opacity: 0; font-size: 2.4vh; color: #EBB760 !important; border: 0.5vh solid #EBB760;"
                                class="viewMapButton btn bg-transparent mt-4 fw-semibold w-25 d-block mx-auto">View
                                Map</a>
                        </div>
                    @endif
                </div>

                <!-- Health Protocol -->
                <div class="health-protocol">
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
        @if ($count > 0)
            <div class="couple-gallery px-5">
                <h1 id="coupleGalleryText" class="text-center mb-5">Our Gallery</h1>
                <div class="row mb-4">
                    @if ($count > 0)
                        <div class="col-md-6 mb-3">
                            <img style="opacity: 0;" id="coupleImage1" class="d-block mx-auto rounded"
                                src="{{ asset('images/galeri/' . $galeri[0]->foto) }}" alt="">
                        </div>
                    @endif
                    <div class="col-md-6">
                        <div class="row">
                            @if ($count > 1)
                                <div class="col">
                                    <img style="opacity: 0;" id="coupleImage2" class="d-block mx-auto rounded"
                                        src="{{ asset('images/galeri/' . $galeri[1]->foto) }}" alt="">
                                </div>
                            @endif
                            @if ($count > 2)
                                <div class="col">
                                    <img style="opacity: 0;" id="coupleImage3" class="d-block mx-auto rounded"
                                        src="{{ asset('images/galeri/' . $galeri[2]->foto) }}" alt="">
                                </div>
                            @endif
                        </div>
                        <div class="row" style="padding-top: 4%;">
                            @if ($count > 3)
                                <div class="col">
                                    <img style="opacity: 0;" id="coupleImage4" class="d-block mx-auto rounded"
                                        src="{{ asset('images/galeri/' . $galeri[3]->foto) }}" alt="">
                                </div>
                            @endif
                            @if ($count > 4)
                                <div class="col">
                                    <img style="opacity: 0;" id="coupleImage5" class="d-block mx-auto rounded"
                                        src="{{ asset('images/galeri/' . $galeri[4]->foto) }}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            @if ($count > 5)
                                <div class="col">
                                    <img style="opacity: 0;" id="coupleImage6" class="d-block mx-auto rounded"
                                        src="{{ asset('images/galeri/' . $galeri[5]->foto) }}" alt="">
                                </div>
                            @endif
                            @if ($count > 6)
                                <div class="col">
                                    <img style="opacity: 0;" id="coupleImage7" class="d-block mx-auto rounded"
                                        src="{{ asset('images/galeri/' . $galeri[6]->foto) }}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                    @if ($count > 7)
                        <div class="col-md-6">
                            <img style="opacity: 0;" id="coupleImage8" class="d-block mx-auto rounded"
                                src="{{ asset('images/galeri/' . $galeri[7]->foto) }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="couple-gallery px-5">
                <h1 id="coupleGalleryText" class="text-center mb-5">Our Gallery</h1>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <img style="opacity: 0;" id="coupleImage1" class="d-block mx-auto rounded"
                            src="https://w.forfun.com/fetch/8d/8d209d2587ce83b38fd82f77a6d6c1a6.jpeg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <img style="opacity: 0;" id="coupleImage2" class="d-block mx-auto rounded"
                                    src="https://w.forfun.com/fetch/8d/8d209d2587ce83b38fd82f77a6d6c1a6.jpeg"
                                    alt="">
                            </div>
                            <div class="col">
                                <img style="opacity: 0;" id="coupleImage3" class="d-block mx-auto rounded"
                                    src="https://w.forfun.com/fetch/8d/8d209d2587ce83b38fd82f77a6d6c1a6.jpeg"
                                    alt="">
                            </div>
                        </div>
                        <div class="row" style="padding-top: 4%;">
                            <div class="col">
                                <img style="opacity: 0;" id="coupleImage4" class="d-block mx-auto rounded"
                                    src="https://w.forfun.com/fetch/8d/8d209d2587ce83b38fd82f77a6d6c1a6.jpeg"
                                    alt="">
                            </div>
                            <div class="col">
                                <img style="opacity: 0;" id="coupleImage5" class="d-block mx-auto rounded"
                                    src="https://w.forfun.com/fetch/8d/8d209d2587ce83b38fd82f77a6d6c1a6.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <img style="opacity: 0;" id="coupleImage6" class="d-block mx-auto rounded"
                                    src="https://www.mordeo.org/files/uploads/2020/01/Couple-Romantic-Sunset-Silhouette-4K-Ultra-HD-Mobile-Wallpaper-950x1689.jpg"
                                    alt="">
                            </div>
                            <div class="col">
                                <img style="opacity: 0;" id="coupleImage7" class="d-block mx-auto rounded"
                                    src="https://www.mordeo.org/files/uploads/2020/01/Couple-Romantic-Sunset-Silhouette-4K-Ultra-HD-Mobile-Wallpaper-950x1689.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img style="opacity: 0;" id="coupleImage8" class="d-block mx-auto rounded"
                            src="https://w.forfun.com/fetch/8d/8d209d2587ce83b38fd82f77a6d6c1a6.jpeg" alt="">
                    </div>
                </div>
            </div>
        @endif

        <!-- Couple Story & Footage - Section 6 -->
        <div class="couple-stories m-0">
            <h1 style="padding: 3.5% 0;" id="love-story-text-sec6" class="text-center text-light">Love Story</h1>

            <div style="margin-bottom: 5%;" class="d-flex align-items-center justify-content-center">
                <div id="coupleStory1" class="row w-75">
                    <div class="col-md">
                        <img style="width: 50%; opacity: 0;" id="coupleStoryImage1" class="d-block mx-auto rounded"
                            src="{{ $ceritacinta ? ($ceritacinta->cover1 ? asset('images/ceritacinta/' . $ceritacinta->cover1) : 'https://wallpapers.com/images/hd/couple-pictures-aayrqyfiw5ul3poe.jpg') : 'https://wallpapers.com/images/hd/couple-pictures-aayrqyfiw5ul3poe.jpg' }}"
                            alt="">
                    </div>
                    <div class="col-md">
                        <h2 id="love-story-head-sec6" class="coupleStoryHeading1" style="color: #EBB760 !important;">
                            {{ $ceritacinta ? ($ceritacinta->judulcerita1 ? $ceritacinta->judulcerita1 : 'HOW WE MEET') : 'HOW WE MEET' }}
                        </h2>
                        <hr style="width: 0; background-color: #EBB760 !important; color: #EBB760 !important; border: 0.3vh solid #EBB760 !important;"
                            class="rounded coupleStoryLine1">
                        <p id="love-story-desc-sec6" class="text-light loveStory1">
                            {{ $ceritacinta
                                ? ($ceritacinta->cerita1
                                    ? $ceritacinta->cerita1
                                    : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aliquid perferendis
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            saepe, illum amet sint. Deleniti ab harum dignissimos architecto tempore maiores, rerum
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.')
                                : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aliquid perferendis
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            saepe, illum amet sint. Deleniti ab harum dignissimos architecto tempore maiores, rerum
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.' }}
                        </p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 5%;" class="d-flex align-items-center justify-content-center">
                <div id="coupleStory2" class="row w-75 couple-story-container">
                    <div class="col-md">
                        <h2 id="love-story-head-sec6" class="coupleStoryHeading2" style="color: #EBB760 !important;">
                            {{ $ceritacinta ? ($ceritacinta->judulcerita2 ? $ceritacinta->judulcerita2 : 'FIRST DATE') : 'FIRST DATE' }}
                        </h2>
                        <hr style="width: 0; background-color: #EBB760 !important; color: #EBB760 !important; border: 0.3vh solid #EBB760 !important;"
                            class="rounded coupleStoryLine2">
                        <p id="love-story-desc-sec6" class="text-light loveStory2">
                            {{ $ceritacinta
                                ? ($ceritacinta->cerita2
                                    ? $ceritacinta->cerita2
                                    : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aliquid perferendis
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            saepe, illum amet sint. Deleniti ab harum dignissimos architecto tempore maiores, rerum
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.')
                                : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aliquid perferendis
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            saepe, illum amet sint. Deleniti ab harum dignissimos architecto tempore maiores, rerum
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.' }}
                        </p>
                    </div>
                    <div class="col-md">
                        <img style="width: 50%; opacity: 0;" id="coupleStoryImage2" class="d-block mx-auto rounded"
                            src="{{ $ceritacinta ? ($ceritacinta->cover2 ? asset('images/ceritacinta/' . $ceritacinta->cover2) : 'https://wallpapers.com/images/hd/couple-pictures-aayrqyfiw5ul3poe.jpg') : 'https://wallpapers.com/images/hd/couple-pictures-aayrqyfiw5ul3poe.jpg' }}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div id="coupleStory3" class="row w-75">
                    <div class="col-md">
                        <img style="width: 50%; opacity: 0;" id="coupleStoryImage3" class="d-block mx-auto rounded"
                            src="{{ $ceritacinta ? ($ceritacinta->cover3 ? asset('images/ceritacinta/' . $ceritacinta->cover3) : 'https://wallpapers.com/images/hd/couple-pictures-aayrqyfiw5ul3poe.jpg') : 'https://wallpapers.com/images/hd/couple-pictures-aayrqyfiw5ul3poe.jpg' }}"
                            alt="">
                    </div>
                    <div class="col-md">
                        <h2 id="love-story-head-sec6" class="coupleStoryHeading3" style="color: #EBB760 !important;">
                            {{ $ceritacinta ? ($ceritacinta->judulcerita3 ? $ceritacinta->judulcerita3 : "WE'RE FOREVER") : "WE'RE FOREVER" }}
                        </h2>
                        <hr style="width: 0; background-color: #EBB760 !important; color: #EBB760 !important; border: 0.3vh solid #EBB760 !important;"
                            class="rounded coupleStoryLine3">
                        <p id="love-story-desc-sec6" class="text-light loveStory3">
                            {{ $ceritacinta
                                ? ($ceritacinta->cerita3
                                    ? $ceritacinta->cerita3
                                    : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aliquid perferendis
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            saepe, illum amet sint. Deleniti ab harum dignissimos architecto tempore maiores, rerum
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.')
                                : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aliquid perferendis
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            saepe, illum amet sint. Deleniti ab harum dignissimos architecto tempore maiores, rerum
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            facere eum recusandae voluptatibus quis aliquam eligendi corporis illo expedita laudantium,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            distinctio suscipit reprehenderit delectus! Rerum, ad tempore? Repudiandae, accusantium
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            deleniti. Voluptas.' }}
                        </p>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="coupleFootage">
                <h1 style="color: #EBB760 !important; font-family: 'Playball', serif; opacity: 0;" id="footageText"
                    class="text-center mb-5">Our
                    Footage</h1>
                <div class="row">
                    <div class="col-md">
                        <iframe style="opacity: 0;" id="footageVideo" class="d-block mx-auto mb-5" width="560"
                            height="315" src="https://www.youtube.com/embed/YZVAIqUK3H0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <!-- Digital Envelope, Wedding Wish, & Couple Quote - Section 7 -->
        <div class="digiEnve">
            <!-- Digital Envelope -->
            <h1 style="color: #EBB760 !important;" id="wedding-gift-text-sec7" class="text-center">Wedding Gift</h1>
            <h5 id="wedding-gift-subtext-sec7" class="text-center text-light w-75 d-block mx-auto">Berkat dan
                kedatangan
                Anda ke pernikahan kami sudah
                cukup bagi kami. Namun jika anda ingin memberikan kado kami menyediakan Amplop Digital untuk memudahkan
                anda. Terima kasih.</h5>
            <div style="padding: 4% 0;" class="d-flex align-items-center justify-content-center">
                <div class="row w-75">
                    <div style="opacity: 0;" id="paymentSelection" class="col-md mb-5">
                        <h3 id="" class="text-center mb-2" style="color: transparent;">p</h3>
                        <label class="form-label text-light">Pilih Bank</label>
                        <select class="form-select form-select mb-3 text-light bg-dark border-0"
                            aria-label="Large select example">
                            <option class="text-light" selected>
                                {{ $amplopdigital ? $amplopdigital->paymentvendor : 'BCA' }}</option>
                        </select>
                        <!-- <h3 style="font-family: 'Playball', serif;" class="text-light">BANK BCA(014)</h3> -->
                        <h3 style="font-family: 'Playball', serif; font-size: 2.8vh;" class="text-light">Account
                            Number
                            : {{ $amplopdigital ? $amplopdigital->noakun : '0182548765' }}</h3>
                        <h3 style="font-family: 'Playball', serif; font-size: 2.8vh;" class="text-light">Account Name
                            :
                            {{ $amplopdigital ? $amplopdigital->namaakun : 'Unknown People' }}</h3>
                    </div>
                    <div style="opacity: 0;" id="paymentForm" class="col-md mb-5">
                        <h3 id="wedding-gift-form-text" class="text-center text-light mb-2">Tolong isi form dibawah
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

            <!-- Wedding Wish -->
            <div class="d-flex align-items-center justify-content-center">
                <div class="row w-75 weddingWishContainer">
                    <div class="col-md mb-4">
                        <h1 style="opacity: 0;" id="weddingWishTextSec7" class="text-center text-light mb-3">Latest
                            Wedding Wishes</h1>
                        <div class="weddingWishLogWrapper">
                            <div class="weddingWishLog">
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 1</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 2</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 3</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 4</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 5</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 6</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                                <div class="wishMessage p-3">
                                    <h2 id="weddingWishUserName" class="text-light">User 7</h2>
                                    <h3 id="weddingWishUserMessage" class="text-light">Happy Wedding!</h3>
                                    <h4 id="weddingWishTimestamp">14 Oct 2023, 23:50</h4>
                                    <hr class="bg-light border-light border-3 rounded w-75 float-start pt-0 my-0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div style="padding-bottom: 6%; opacity: 0;" class="weddingWish">
                            <h1 id="wedding-wish-text-sec7" class="text-center text-light mb-3">Wedding Wish</h1>
                            <div class="form-group d-block mx-auto">
                                <label class="form-label text-light">Nama</label>
                                <input type="text" class="form-control bg-dark text-light border-0 mb-3"
                                    aria-describedby="passwordHelpBlock" id="nama-ucapan" name="nama-ucapan">
                            </div>
                            <label class="form-label text-light">Pesan Untuk Mempelai</label>
                            <textarea name="pesan-ucapan"  cols="30" rows="10"
                                class="form-control text-light bg-dark d-block mx-auto border-0" id="pesan-ucapan">
                            </textarea>
                            <div class="py-4 d-block mx-auto">
                                <button type="button" class="btn btn-dark text-light float-end"
                                    id="kirim-ucapan">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Closing Part -->
            <div class="coupleQuote mt-4">
                <h3 id="couple-quote-sec7" class="text-light text-center mt-5">
                </h3>
                <h3 style="color: #EBB760 !important;" id="coupleName">{{ $mempelai ? $mempelai->namalaki : 'Adi' }}
                    &
                    {{ $mempelai ? $mempelai->namaperempuan : 'Aci' }}</h3>
                <h3 id="coupleWeddingDate">{{ $tanggalAcara ? $tanggalAcara : '22 Juli 2014' }}</h3>
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
        <audio id="musicPlayer" class="d-none" src="/tema1/music/sample-music.mp3">
        </audio>
        <!-- <a id="button" title="button">play sound</a> -->
    </div>

    <script src="/tema1/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/tema1/jquery/jquery-3.6.3.min.js"></script>
    <script src="/tema1/js/index.js"></script>
</body>

<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
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
