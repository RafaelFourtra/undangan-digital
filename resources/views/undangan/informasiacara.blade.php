@extends('layouts/master')

@section('breadcrumb')
<li>
    <h4><span style="font-weight: 600">Informasi Acara</span> <span style="font-weight: 50">|</span></h4>
</li>
<li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
<li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Informasi Acara
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
            <div class="card" style="background-color: white; box-shadow: 0px 0px 5px 2px rgba(129, 129, 129, 0.2);
                border-radius: 0.3rem;">
                <div class="card-content">
                    <div class="card-body">
                        <form id="informasiacara-submit">
                            <div class="row match-height">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div id="image-preview-4" class="text-center">
                                                <img src="{{ $data ? asset('images/sampul/' . $data->sampul) : asset('assets/images/samples/building.jpg') }}" class="img-fluid rounded d-flex justify-content-start preview-image-2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="form-group">
                                                <label style="color: #3D5782; font-weight:bold">Cover Sampul
                                                    <span class="text-danger">*</span><span style="font-weight:lighter">
                                                        (Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                        2MB)</span></label>
                                                <div class="drag-and-drop text-center">
                                                    <button type="button" class="btn btn-primary btn-md d-flex justify-content-start" style="border-radius: 15px; margin-top: 6px;" id="button-fw">
                                                        <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                        Pilih
                                                    </button>
                                                    <input type="hidden" name="sampulbefore" id="sampulbefore" value="{{ $data ? $data->sampul : null }}">
                                                    <input type="file" class="form-control image-input-4" accept="image/*" id="sampul" name="sampul" hidden>
                                                    <div class="invalid-feedback"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 mt-2">
                                            <div id="image-preview-3" class="text-center">
                                                <img src="{{ $data ? asset('images/pembuka/' . $data->pembuka) : asset('assets/images/samples/building.jpg') }}" class="img-fluid rounded d-flex justify-content-start preview-image-2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="form-group">
                                                <label style="color: #3D5782; font-weight:bold">Cover Pembuka
                                                    <span class="text-danger">*</span><span style="font-weight:lighter">
                                                        (Ekstensi File JPG, PNG, Ukuran Maksimal File
                                                        2MB)</span></label>
                                                <div class="drag-and-drop text-center">
                                                    <button type="button" class="btn btn-primary btn-md d-flex justify-content-start" style="border-radius: 15px; margin-top: 6px;" id="button-fw-2">
                                                        <i class="fa-solid fa-folder-open me-2 mt-1"></i>
                                                        Pilih
                                                    </button>
                                                    <input type="hidden" name="pembukabefore" id="pembukabefore" value="{{ $data ? $data->pembuka : null }}">
                                                    <input type="file" class="form-control image-input-3" accept="image/*" id="pembuka" name="pembuka" hidden>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="judulacara" style="color: #3D5782; font-weight:bold">Judul
                                                    Acara <span class="text-danger">*</span></label>
                                                <input type="text" id="judulacara" class="form-control" name="judulacara" value="{{ $data ? $data->judulacara : 'Wedding Invitation' }}">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="deskirpsi" style="color: #3D5782; font-weight:bold">Deskripsi
                                                    Acara<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ $data ? ($data->deskripsi ? $data->deskripsi : 'Seraya memohon ridho Allah SWT, perkenankan kami mengundang Bapak/Ibu/Saudara/i untuk menyaksikan dan merestui pernikahan putra-putri kami') : 'Seraya memohon ridho Allah SWT, perkenankan kami mengundang Bapak/Ibu/Saudara/i untuk menyaksikan dan merestui pernikahan putra-putri kami' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="tanggalpernikahan" style="color: #3D5782; font-weight:bold">Tanggal
                                                    Pernikahan<span class="text-danger">*</span></label>
                                                <input type="date" id="tanggalpernikahan" class="form-control" name="tanggalpernikahan" value="{{ $data ? $data->tanggalpernikahan : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1 col-md-6">
                                            <label for="jamresepsi" style="color: #3D5782; font-weight:bold">Waktu
                                                Resepsi
                                            </label>
                                            <input type="time" id="jamresepsi" class="form-control" name="jamresepsi" value="{{ $data ? $data->jamresepsi : '' }}">
                                        </div>
                                        <div class="col-12 mt-1 col-md-6 ">
                                            <label for="jamakadnikah" style="color: #3D5782; font-weight:bold">Waktu
                                                Pernikahan<span class="text-danger">*</span>
                                            </label>
                                            <input type="time" id="jamakadnikah" class="form-control" name="jamakadnikah" value="{{ $data ? $data->jamakadnikah : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row mt-1">
                                       
                                        <div class="col-12 mt-2">
                                            <div class="form-group">
                                                <label for="lokasiresepsi" style="color: #3D5782; font-weight:bold">Alamat Resepsi
                                                    <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="lokasiresepsi" name="lokasiresepsi" rows="4">{{ $data ? $data->lokasiresepsi : '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="lokasiakadnikah" style="color: #3D5782; font-weight:bold">Alamat Pernikahan
                                                    <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="lokasiakadnikah" name="lokasiakadnikah" rows="4">{{ $data ? $data->lokasiakadnikah : '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="lokasiakadnikah" style="color: #3D5782; font-weight:bold">Google Maps (Alamat Resepsi)
                                                    <span class="" onclick="tutorialLinkGM()"><i class="fa-solid fa-circle-info" style="cursor: pointer;"></i></span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-link"></i></span>
                                                    <input type="text" id="googlemapsresepsi" class="form-control" name="googlemapsresepsi" value="{{ $data ? $data->googlemapsresepsi : '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="lokasiakadnikah" style="color: #3D5782; font-weight:bold">Google Maps (Alamat Pernikahan)
                                                    <span class="" onclick="tutorialLinkGM()"><i class="fa-solid fa-circle-info" style="cursor: pointer;"></i></span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-link"></i></span>
                                                    <input type="text" id="googlemapspernikahan" class="form-control" name="googlemapspernikahan" value="{{ $data ? $data->googlemapspernikahan : '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                                <label for="lokasiakadnikah" style="color: #3D5782; font-weight:bold">Youtube Live Stream
                                                    <span class="" onclick="tutorialLinkYT()"><i class="fa-solid fa-circle-info" style="cursor: pointer;"></i></span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-link"></i></span>
                                                    <input type="text" id="livestream" class="form-control" name="livestream" value="{{ $data ? $data->livestream : '' }}">
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


<div class="modal fade text-left" id="inlineFormEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tutorial Copy Link Youtube Live Stream </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="inlineFormEdit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tutorial Copy Link Google Maps </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/drop-image-sampul.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#button-fw').on('click', function() {
            $('#sampul').click()
        })
        $('#button-fw-2').on('click', function() {
            $('#pembuka').click()
        })

        $('#informasiacara-submit').on('submit', function(e) {
            e.preventDefault()
            $.ajax({
                url: `{{ route('informasiacara.informasiacara.store') }}`,
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
                            text: 'Informasi Acara berhasil di tambahkan.',
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

    function tutorialLinkYT() {
        $('#inlineFormEdit').modal('show')
    }

    function tutorialLinkGM() {
        $('#inlineFormEdit2').modal('show')
    }
</script>
@endsection