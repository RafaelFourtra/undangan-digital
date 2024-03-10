@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Cerita Cinta</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Cerita Cinta
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
                            <form id="ceritacinta-submit">
                                <div class="row match-height">
                                    <div class="col-md-12 col-12">
                                        <div class="row mt-1">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <div id="image-preview-1" class="text-center">
                                                            <img src="{{ $data ? asset('images/ceritacinta/' . $data->cover1) : asset('assets/images/samples/building.jpg') }}"
                                                                class="img-fluid rounded d-flex justify-content-start preview-image-1"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="form-group">
                                                            <label style="color: #3D5782; font-weight:bold">Cover 1
                                                                <span class="text-danger">*</span><span style="font-weight: lighter"> (Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                                    2MB)</span></label>
                                                            <div class="drag-and-drop text-center">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-md d-flex justify-content-start"
                                                                    style="border-radius: 15px; margin-top: 6px;"
                                                                    id="button-fw">
                                                                    <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                                    Pilih
                                                                </button>
                                                                <input type="hidden" name="cover1before" id="cover1before"
                                                                    value="{{ $data ? $data->cover1 : null }}">
                                                                <input type="file" class="form-control image-input-1"
                                                                    accept="image/*" id="cover1" name="cover1" hidden>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 mt-1">
                                                <div class="form-group">
                                                    <label for="judulcerita1" style="color: #3D5782; font-weight:bold">Judul
                                                        Cerita 1</label>
                                                    <input type="text" id="judulcerita1" class="form-control"
                                                        name="judulcerita1" value="{{ $data ? $data->judulcerita1 : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="cerita1" style="color: #3D5782; font-weight:bold">Cerita
                                                        Cinta 1
                                                    </label>
                                                    <textarea class="form-control" id="cerita1" name="cerita1" rows="4">{{ $data ? $data->cerita1 : '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <div id="image-preview-2" class="text-center">
                                                            <img src="{{ $data ? asset('images/ceritacinta/' . $data->cover2) : asset('assets/images/samples/building.jpg') }}"
                                                                class="img-fluid rounded d-flex justify-content-start preview-image-2"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="form-group">
                                                            <label style="color: #3D5782; font-weight:bold">Cover 2
                                                                <span class="text-danger">*</span><span style="font-weight: lighter"> (Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                                    2MB)</span></label>
                                                            <div class="drag-and-drop text-center">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-md d-flex justify-content-start"
                                                                    style="border-radius: 15px; margin-top: 6px;"
                                                                    id="button-fw-2">
                                                                    <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                                    Pilih
                                                                </button>
                                                                <input type="hidden" name="cover2before" id="cover2before"
                                                                    value="{{ $data ? $data->cover2 : null }}">
                                                                <input type="file" class="form-control image-input-2"
                                                                    accept="image/*" id="cover2" name="cover2" hidden>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 mt-1">
                                                <div class="form-group">
                                                    <label for="judulcerita2" style="color: #3D5782; font-weight:bold">Judul
                                                        Cerita 2 </label>
                                                    <input type="text" id="judulcerita2" class="form-control"
                                                        name="judulcerita2" value="{{ $data ? $data->judulcerita2 : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="cerita2" style="color: #3D5782; font-weight:bold">Cerita
                                                        Cinta 2
                                                    </label>
                                                    <textarea class="form-control" id="cerita2" name="cerita2" rows="4">{{ $data ? $data->cerita2 : '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <div id="image-preview-3" class="text-center">
                                                            <img src="{{ $data ? asset('images/ceritacinta/' . $data->cover3) : asset('assets/images/samples/building.jpg') }}"
                                                                class="img-fluid rounded d-flex justify-content-start preview-image-3"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="form-group">
                                                            <label style="color: #3D5782; font-weight:bold">Cover 3
                                                                <span class="text-danger">*</span><span style="font-weight: lighter"> (Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                                    2MB)</span></label>
                                                            <div class="drag-and-drop text-center">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-md d-flex justify-content-start"
                                                                    style="border-radius: 15px; margin-top: 6px;"
                                                                    id="button-fw-3">
                                                                    <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                                    Pilih
                                                                </button>
                                                                <input type="hidden" name="cover3before" id="cover3before"
                                                                    value="{{ $data ? $data->cover3 : null }}">
                                                                <input type="file" class="form-control image-input-3"
                                                                    accept="image/*" id="cover3" name="cover3"
                                                                    hidden>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-1">
                                                <div class="form-group">
                                                    <label for="judulcerita3"
                                                        style="color: #3D5782; font-weight:bold">Judul
                                                        Cerita 3 </label>
                                                    <input type="text" id="judulcerita3" class="form-control"
                                                        name="judulcerita3"
                                                        value="{{ $data ? $data->judulcerita3 : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="cerita3" style="color: #3D5782; font-weight:bold">Cerita
                                                        Cinta 3
                                                    </label>
                                                    <textarea class="form-control" id="cerita3" name="cerita3" rows="4">{{ $data ? $data->cerita3 : '' }}</textarea>
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
            </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/drop-image-ceritacinta.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('#button-fw').on('click', function() {
                $('#cover1').click()
            })
            $('#button-fw-2').on('click', function() {
                $('#cover2').click()
            })
            $('#button-fw-3').on('click', function() {
                $('#cover3').click()
            })

            $('#ceritacinta-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('ceritacinta.store') }}`,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.code === 1) {
                            Swal.fire({
                                title: 'Berhasil!',
                                icon: 'success',
                                text: 'Cerita Cinta berhasil di tambahkan.',
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
