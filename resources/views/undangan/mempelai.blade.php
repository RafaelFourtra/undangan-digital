@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Mempelai</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Mempelai
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
                            <form id="mempelai-submit">
                                <div class="row match-height container">
                                    <div class="col-md-6 col-12">
                                        <h4 class="card-title">Pria</h4>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <div id="image-preview-3" class="text-center">
                                                        <img id="preview-image"
                                                            src="{{ $data ? asset('images/mempelai/laki/' . $data->fotolaki) : asset('assets/images/samples/building.jpg') }}"
                                                            class="img-fluid rounded d-flex justify-content-start"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-group">
                                                        <div class="drag-and-drop text-center">
                                                            <button type="button"
                                                                class="btn btn-primary btn-md d-flex justify-content-start"
                                                                style="border-radius: 15px; margin-top: 10px"
                                                                id="button-fp">
                                                                <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                                Pilih
                                                            </button>
                                                            <input type="hidden" name="fotolakibefore" id="fotolakibefore"
                                                                value="{{ $data ? $data->fotolaki : null }}">
                                                            <input type="file" class="form-control image-input-3"
                                                                accept="image/*" id="fotolaki" name="fotolaki" hidden>
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                        <label>Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                            2MB</label>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 20px;">
                                                    <div class="form-group">
                                                        <label for="namalengkaplaki"
                                                            style="color: #3D5782; font-weight:bold">Nama Lengkap Pria <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="namalengkaplaki" class="form-control"
                                                            name="namalengkaplaki"
                                                            value="{{ $data ? $data->namalengkaplaki : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="namalaki" style="color: #3D5782; font-weight:bold">Nama
                                                            Panggilan Pria <span class="text-danger">*</span></label>
                                                        <input type="text" id="namalaki" class="form-control"
                                                            name="namalaki" value="{{ $data ? $data->namalaki : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="namabapaklaki"
                                                            style="color: #3D5782; font-weight:bold">Nama Ayah Pria <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="namabapaklaki" class="form-control"
                                                            name="namabapaklaki"
                                                            value="{{ $data ? $data->namabapaklaki : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="namaibulaki"
                                                            style="color: #3D5782; font-weight:bold">Nama Ibu Pria <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="namaibulaki" class="form-control"
                                                            name="namaibulaki"
                                                            value="{{ $data ? $data->namaibulaki : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="urutananak_laki"
                                                            style="color: #3D5782; font-weight:bold">Urutan Anak Pria <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="urutananak_laki" class="form-control"
                                                            name="urutananak_laki"
                                                            value="{{ $data ? $data->urutananak_laki : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="instagram_laki"
                                                            style="color: #3D5782; font-weight:bold">Username
                                                            Instagram</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">@</span>
                                                            <input type="text" id="instagram_laki"
                                                                class="form-control" name="instagram_laki"
                                                                value="{{ $data ? $data->instagram_laki : '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">

                                        <h4 class="card-title">Wanita</h4>

                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <div id="image-preview-4" class="text-center">
                                                        <img src="{{ $data ? asset('images/mempelai/perempuan/' . $data->fotoperempuan) : asset('assets/images/samples/building.jpg') }}"
                                                            class="img-fluid rounded d-flex justify-content-start preview-image-2"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-group">
                                                        <div class="drag-and-drop text-center">
                                                            <button type="button"
                                                                class="btn btn-primary btn-md d-flex justify-content-start"
                                                                style="border-radius: 15px; margin-top: 10px"
                                                                id="button-fw">
                                                                <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                                Pilih
                                                            </button>
                                                            <input type="hidden" name="fotoperempuanbefore"
                                                                id="fotoperempuanbefore"
                                                                value="{{ $data ? $data->fotoperempuan : null }}">
                                                            <input type="file" class="form-control image-input-4"
                                                                accept="image/*" id="fotoperempuan" name="fotoperempuan"
                                                                hidden>
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                        <label>Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                            2MB</label>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 20px;">
                                                    <div class="form-group">
                                                        <label for="namalengkapperempuan"
                                                            style="color: #3D5782; font-weight:bold">Nama
                                                            Lengkap Wanita
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" id="namalengkapperempuan"
                                                            class="form-control" name="namalengkapperempuan"
                                                            value="{{ $data ? $data->namalengkapperempuan : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="namaperempuan"
                                                            style="color: #3D5782; font-weight:bold">Nama
                                                            Panggilan Wanita <span class="text-danger">*</span></label>
                                                        <input type="text" id="namaperempuan" class="form-control"
                                                            name="namaperempuan"
                                                            value="{{ $data ? $data->namaperempuan : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="namabapakperempuan"
                                                            style="color: #3D5782; font-weight:bold">Nama Ayah
                                                            Wanita <span class="text-danger">*</span></label>
                                                        <input type="text" id="namabapakperempuan"
                                                            class="form-control" name="namabapakperempuan"
                                                            value="{{ $data ? $data->namabapakperempuan : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="namaibuperempuan"
                                                            style="color: #3D5782; font-weight:bold">Nama Ibu
                                                            Wanita <span class="text-danger">*</span></label>
                                                        <input type="text" id="namaibuperempuan" class="form-control"
                                                            name="namaibuperempuan"
                                                            value="{{ $data ? $data->namaibuperempuan : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="urutananak_perempuan"
                                                            style="color: #3D5782; font-weight:bold">Urutan
                                                            Anak Wanita
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" id="urutananak_perempuan"
                                                            class="form-control" name="urutananak_perempuan"
                                                            value="{{ $data ? $data->urutananak_perempuan : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="instagram_perempuan"
                                                            style="color: #3D5782; font-weight:bold">Username
                                                            Instagram</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">@</span>
                                                            <input type="text" id="instagram_perempuan"
                                                                class="form-control" name="instagram_perempuan"
                                                                value="{{ $data ? $data->instagram_perempuan : '' }}">
                                                        </div>


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
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/drop-image-mempelai.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#button-fp').on('click', function() {
                $('#fotolaki').click()
            })

            $('#button-fw').on('click', function() {
                $('#fotoperempuan').click()
            })

            $('#mempelai-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('mempelai.store') }}`,
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
                                text: 'Mempelai berhasil ditambahkan.',
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
                        try {
                            const errors = JSON.parse(res.responseText).errors;
                            for (const fieldName in errors) {
                                const input = $(`[name="${fieldName}"]`);
                                const errorMessage = errors[fieldName][0];
                                input.addClass('is-invalid');
                                input.siblings('.invalid-feedback').text(errorMessage);
                            }
                        } catch (e) {
                            alert('Terjadi kesalahan: ' + res.responseText);
                        }
                    }
                })
            })
        })
    </script>
@endsection
