@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Tema</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Tema
    </li>
@endsection
@section('style')
    <style>
        .card {
            box-shadow: 0px 0px 9px 4px rgba(129, 129, 129, 0.2);
            border-radius: 0.3rem;
        }

        .card-top-content .card-body {
            padding: 0.5rem;
        }

        .card-top-content {
            border: 3px solid white;
            position: relative;
            transition: border-color 0.3s ease-in-out;
        }

        .card-top-content.selected {
            border-color: #165D99;
        }

        .card-top-content:hover {
            cursor: pointer;
        }

        .card-checkbox {
            position: absolute;
            top: 10px;
            right: 10px;
            display: none;
        }

        .card-top-content.selected .card-checkbox {
            display: block;
        }

        .card-top-content.selected .card-checkbox::before {
            content: "\f00c";
            /* Kode ikon cek dari Font Awesome */
            font-family: "Font Awesome 6 Free";
            /* Nama font dari Font Awesome */
            font-size: 17px;
            /* Sesuaikan ukuran ikon */
            display: block;
            position: absolute;
            top: -5px;
            right: -5px;
            width: 30px;
            height: 30px;
            background-color: #165D99;
            color: white;
            text-align: center;
            line-height: 32px;
            border-radius: 50%;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <form id="tema-undangan-submit" action="{{ route('informasiacara.tema.store') }}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"
                        style="background-color: #FAFAFA; box-shadow: 0px 0px 5px 2px rgba(129, 129, 129, 0.2);
                    border-radius: 0.3rem;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row" style="max-height: 530px; overflow-y: auto;">
                                    @foreach ($tema as $tm)
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div
                                                class="card card-top-content  @if ($checkChecked && $tm->id == $checkChecked->tema_id) selected @endif">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <input type="checkbox" value="{{ $tm->id }}"
                                                            class="card-checkbox" name="selected_themes"
                                                            @if ($checkChecked && $tm->id == $checkChecked->tema_id) checked @endif>
                                                        <img class="img-fluid w-100"
                                                            src="{{ asset('images/thumbnail-tema/' . $tm->thumbnail_tema) }}"
                                                            alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between">
                                                    <span>{{ $tm->nama_tema }}</span>
                                                    <a href="{{ $tm->url_tema }}" class="btn btn-primary btn-sm">Preview</a>
                                                </div>
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
        const cards = document.querySelectorAll('.card-top-content');

        cards.forEach(card => {
            const checkbox = card.querySelector('.card-checkbox');

            card.addEventListener('click', () => {
                cards.forEach(otherCard => {
                    otherCard.classList.remove('selected');
                    const otherCheckbox = otherCard.querySelector('.card-checkbox');
                    otherCheckbox.checked = false;
                });

                card.classList.add('selected');

                checkbox.checked = true;
            });
        });

        $(document).ready(function() {
            $('#tema-undangan-submit').on('submit', function(e) {
                e.preventDefault()
                const selectedThemes = $('input[name="selected_themes"]:checked').val()
                const url = this.getAttribute('action')
                if (selectedThemes != undefined) {
                    $.ajax({
                        url: url,
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            selectedThemes: selectedThemes
                        },
                        success: function(data) {
                            if (data.code === 1) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    icon: 'success',
                                    text: 'Tema berhasil dipilih.',
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
                        text: 'Tema belum dipilih',
                        icon: 'error',
                    })
                }

            })
        })
    </script>
@endsection
