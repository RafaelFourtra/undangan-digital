@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Music</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Music
    </li>
@endsection
@section('style')
    <style>
        .card {
            box-shadow: 0px 0px 3px 1px rgba(129, 129, 129, 0.2);
            border-radius: 0.3rem;
        }

        .card-top-content .card-body {
            padding-bottom: 0rem;
            padding-top: 0.9rem;
        }

        .music-list {
            display: flex;
            flex-direction: column;
        }

        .music-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin: 10px;
            box-shadow: 0px 0px 8px 4px rgba(129, 129, 129, 0.2);
            border-radius: 0.3rem;
            border: 3px solid white;
            position: relative;
            transition: border-color 0.3s ease-in-out;
        }

        .music-card.selected {
            border-color: #165D99;
        }

        .music-card:hover {
            cursor: pointer;
        }

        .music-info {
            flex: 1;
            margin-bottom: 0;
            margin-top: 10px;
        }


        .play-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 50%;
            /* Membuat tombol menjadi bulat */
            width: 30px;
            /* Lebar dan tinggi yang sama untuk membuat tombol benar-benar bulat */
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .play-button:hover {
            background-color: #0056b3;
        }

        .music-checkbox {
            position: absolute;
            top: 40px;
            right: 10px;
            display: none;
        }

        .music-card.selected .music-checkbox {
            display: none;
        }

        #myAudio {
            display: none;
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <form id="musik-undangan-submit" action="{{ route('informasiacara.musik.store') }}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"
                        style="background-color: #FAFAFA; box-shadow: 0px 0px 5px 2px rgba(129, 129, 129, 0.2);
                        border-radius: 0.3rem;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <input class="form-control form-control-lg" type="text" id="searchInput"
                                            placeholder="Search..." style="border: 1px solid #d9d9d9">
                                    </div>
                                </div>
                                <div class="row" style="max-height: 500px; overflow-y: auto; margin-top:20px"
                                    id="musicContainer">
                                    @foreach ($musik as $item)
                                        <div class="col-lg-4">
                                            <div class="music-list">
                                                <div class="music-card  @if ($checkChecked && $item->id == $checkChecked->musik_id) selected @endif"
                                                    style="background-color: white;">
                                                    <div class="music-info">
                                                        <input type="checkbox" value="{{ $item->id }}"
                                                            class="music-checkbox" name="selected_music"
                                                            @if ($checkChecked && $item->id == $checkChecked->musik_id) checked @endif>
                                                        <h5 style=" margin-bottom: 0; width:190px;">{{ $item->judul }}</h5>
                                                        <p style="font-size: 13px">{{ $item->penyanyi }}</p>
                                                    </div>
                                                    <div class="music-player">
                                                        <button type="button" class="play-button"
                                                            data-music-id="{{ $item->id }}"><i
                                                                class="fa-solid fa-play"></i></button>
                                                        <audio id="myAudio_{{ $item->id }}" controls
                                                            style="display: none;">
                                                            <source src="{{ asset('musik/' . $item->musik) }}"
                                                                type="audio/mpeg">
                                                        </audio>
                                                    </div>
                                                </div>
                                                <!-- Tambahkan lebih banyak entri musik di sini jika diperlukan -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-lg-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-md" style="width: 150px;">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script>
        const cards = document.querySelectorAll('.music-card');
        let currentlyPlayingAudio = null;
        cards.forEach(card => {
            const checkbox = card.querySelector('.music-checkbox');
            const playButton = card.querySelector('.play-button');


            card.addEventListener('click', () => {
                cards.forEach(otherCard => {
                    otherCard.classList.remove('selected');
                    const otherCheckbox = otherCard.querySelector('.music-checkbox');
                    otherCheckbox.checked = false;
                });

                card.classList.add('selected');

                checkbox.checked = true;

            });


            playButton.addEventListener('click', (e) => {
                e.stopPropagation();
                const musicId = playButton.dataset
                    .musicId;
                const audio = document.getElementById(`myAudio_${musicId}`);
                if (audio !== currentlyPlayingAudio) {

                    if (currentlyPlayingAudio) {
                        currentlyPlayingAudio.pause();
                        currentlyPlayingAudio.currentTime = 0;
                    }
                    audio.play();
                    currentlyPlayingAudio = audio;
                } else {
                    if (audio.paused) {
                        audio.play();
                    } else {
                        audio.pause();
                        audio.currentTime = 0;
                    }
                }

            });
        });

        $('#searchInput').on('input', function() {
            const searchText = $(this).val()

            $.ajax({
                url: `{{ route('informasiacara.musik.search') }}`,
                method: 'GET',
                data: {
                    query: searchText
                },
                success: function(response) {
                    var res = response.data;
                    $('#musicContainer').empty();

                    if (res.length === 0) {
                        const notFound = `
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <h5>Tidak Menemukan Hasil !</h5>
                                </div>
                            `
                        $('#musicContainer').append(notFound);
                    } else {
                        res.forEach(function(item) {
                            const musicCard = `
                                    <div class="col-lg-4">
                                        <div class="music-list">
                                            <div class="music-card" style="background-color: white;">
                                                <div class="music-info">
                                                    <input type="checkbox" value="${item.id}"
                                                    class="music-checkbox" name="selected_music">
                                                    <h5 style=" margin-bottom: 0; width:190px;">${item.judul}</h5>
                                                    <p style="font-size: 13px">${item.penyanyi}</p>
                                                </div>
                                                <div class="music-player">
                                                    <button type="button" class="play-button"><i class="fa-solid fa-play"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;
                            $('#musicContainer').append(musicCard);
                        });
                    }
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });

        $(document).ready(function() {
            $('#musik-undangan-submit').on('submit', function(e) {
                e.preventDefault()
                const selectedMusic = $('input[name="selected_music"]:checked').val()
                const url = this.getAttribute('action')
                if (selectedMusic != undefined) {
                    $.ajax({
                        url: url,
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            selectedMusic: selectedMusic
                        },
                        success: function(data) {
                            if (data.code === 1) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    icon: 'success',
                                    text: 'Musik berhasil ditambahkan.',
                                    didClose: () => {

                                    }
                                })
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    icon: 'error',
                                    didClose: () => {

                                    }
                                })
                            }
                        },
                        error: function(res) {
                            console.log(res.responseText);
                        }

                    })
                } else {
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Musik belum dipilih',
                        icon: 'error',
                    })
                }

            })
        })
    </script>
@endsection
