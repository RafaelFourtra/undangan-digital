@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Video Prewedding</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Video Prewedding
    </li>
@endsection
@section('style')
    <style>
        .card {
            box-shadow: 0px 0px 6px 3px rgba(129, 129, 129, 0.2);
            border-radius: 0.3rem;
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card"
                    style="background-color: white; box-shadow: 0px 0px 5px 2px rgba(129, 129, 129, 0.2);
                    border-radius: 0.3rem;">
                    <div class="card-content">
                        <div class="card-body">
                            <form id="vidio-submit" enctype="multipart/form-data">
                                <div class="row match-height">
                                    <div class="col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="judulacara" style="color: #3D5782; font-weight:bold">
                                                        Video Prewedding <span class="text-danger"> *Ekstensi File MP4,
                                                            Ukuran Maksimal File
                                                            200MB</span></label>
                                                    <input type="file" class="form-control" id="vidio"
                                                        name="vidio">
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
                        </div>
                    </div>
                </div>
                @if ($check)
                    <div class="card"
                        style="background-color: white; box-shadow: 0px 0px 5px 2px rgba(129, 129, 129, 0.2);
                border-radius: 0.3rem;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row match-height">
                                    <div class="col-md-12 col-12">
                                        <div class="row">
                                            <label style="color: #3D5782; font-weight:bold">Video Sebelumnya</label>
                                            <div class="col-lg-12 mt-2" style="text-align: center">
                                                <video controls style="width: 100%;">
                                                    <source src="{{ asset('video/prewedding/'. $check->vidio) }}" type="video/mp4">
                                                </video>
                                                <input type="hidden" name="id" id="id" value="{{ $check->id }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <button type="button" id="btn-hapus" class="btn btn-danger btn-md" style="width: 150px;">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#vidio-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('vidio.store') }}`,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        Swal.showLoading()
                    },
                    success: function(data) {
                        if (data.code === 1) {
                            Swal.fire({
                                title: 'Berhasil!',
                                icon: 'success',
                                text: 'Video Prewedding di tambahkan.',
                                didClose: () => {
                                    location.reload()
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
            })

            $('#btn-hapus').on('click', function(){
                const id = $('#id').val()
                $.ajax({
                    url: 'vidio/delete/' + id,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        Swal.showLoading()
                    },
                    success: function(data) {
                        if (data.code === 1) {
                            Swal.fire({
                                title: 'Berhasil!',
                                icon: 'success',
                                text: 'Video di hapus.',
                                didClose: () => {
                                    location.reload()
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
            })
        })
    </script>
@endsection
