@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Buku Tamu</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Buku Tamu
    </li>
@endsection
@section('style')
    <style>
        .card {
            box-shadow: 0px 0px 6px 3px rgba(129, 129, 129, 0.2);
            border-radius: 0.3rem;
        }

        #tautan:hover {
            text-decoration: underline;
        }

        .rounded-circle {
            width: 50px;
            /* Sesuaikan ukuran div sesuai kebutuhan */
            height: 50px;
            /* Sesuaikan ukuran div sesuai kebutuhan */
            border-radius: 50%;
            /* Membuat div menjadi rounded circle */
            background-color: #7445F7;
            /* Warna latar belakang div */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-text-container {
            display: flex;
            /* Menggunakan tata letak fleksibel */
            align-items: center;
            /* Menyelaraskan elemen secara vertikal */
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
                            <div class="row match-height">
                                <div class="col-md-12 col-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="kirim-tab" data-bs-toggle="tab" href="#kirim"
                                                role="tab" aria-controls="kirim" aria-selected="true">Daftar Tamu</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="template-tab" data-bs-toggle="tab" href="#template"
                                                role="tab" aria-controls="template" aria-selected="false">Template</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent" style="margin-top: 30px;">
                                        <div class="tab-pane fade show active" id="kirim" role="tabpanel"
                                            aria-labelledby="kirim-tab">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-header"
                                                            style="padding: 0; margin-left: 20px; margin-top:15px; color: #25396f; font-weight:600;">
                                                            Tamu Publik
                                                        </div>
                                                        <hr>
                                                        <div class="card-body">
                                                            <div class="kirimtamu">
                                                                <a href="https://adc.com/axsa?to=" target="_BLANK"
                                                                    id="tautan" data-url=""
                                                                    style="font-weight: 700">https://adc.com/axsa?to=</a>
                                                            </div>
                                                            <label for="judulcerita1"
                                                                style="color: #3D5782; margin-top:20px">Masukan Nama
                                                                Tamu</label>
                                                            <input type="text" id="namatamu" class="form-control mt-1"
                                                                name="namatamu">
                                                        </div>
                                                        <div class="card-footer d-flex justify-content-end"
                                                            style="padding: 1rem;">
                                                            <button type="button" class="btn btn-md me-1"
                                                                style="border-radius:10px; background-color:#9ebf68; color:white;" id="btn-share">
                                                                Share
                                                            </button>
                                                            <button type="button" class="btn btn-md"
                                                                style="border-radius:10px; background-color:#e33a8a; color:white;"
                                                                id="btn-copy"
                                                                data-text="{{ $templatePesan->templatepesan }}">
                                                                Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-header"
                                                            style="padding: 0; margin-left: 20px; margin-top:15px; color: #25396f; font-weight:600;">
                                                            Jumlah Tamu
                                                        </div>
                                                        <hr>
                                                        <div class="card-body" style="padding: 41px;">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="image-text-container"
                                                                        style="position: relative; bottom:30px">
                                                                        <div class="rounded-circle">
                                                                            <svg version="1.0"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="25px"
                                                                                viewBox="0 0 512.000000 512.000000"
                                                                                preserveAspectRatio="xMidYMid meet">

                                                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                                                    fill="white" stroke="none">
                                                                                    <path
                                                                                        d="M1110 4694 c-84 -17 -229 -90 -305 -151 -162 -131 -260 -325 -272
                                                                                    -538 -8 -139 13 -239 79 -375 44 -91 62 -115 142 -195 76 -76 106 -99 186
                                                                                    -138 121 -59 207 -80 335 -80 136 0 262 31 361 88 39 23 42 28 64 112 44 170
                                                                                    156 357 277 460 l56 48 -6 90 c-14 205 -113 399 -272 528 -77 63 -220 133
                                                                                    -310 152 -87 18 -249 18 -335 -1z" />
                                                                                    <path
                                                                                        d="M3670 4695 c-85 -19 -229 -91 -305 -152 -150 -122 -251 -310 -271
                                                                                    -508 l-6 -61 43 -29 c191 -125 352 -384 384 -612 6 -48 9 -52 48 -67 93 -35
                                                                                    173 -49 277 -49 133 0 217 20 340 80 80 39 110 62 186 138 80 80 98 104 142
                                                                                    195 66 136 87 236 79 375 -18 318 -228 583 -538 680 -75 24 -292 30 -379 10z" />
                                                                                    <path
                                                                                        d="M2473 3930 c-184 -33 -357 -138 -468 -285 -63 -84 -95 -145 -127
                                                                                    -245 -19 -64 -23 -96 -23 -215 0 -154 14 -213 77 -338 214 -424 782 -541 1144
                                                                                    -235 277 234 350 610 181 933 -31 60 -65 103 -132 170 -101 101 -196 158 -325
                                                                                    195 -86 24 -247 34 -327 20z" />
                                                                                    <path
                                                                                        d="M769 3140 c-379 -80 -671 -375 -749 -757 -19 -95 -20 -131 -18 -539
                                                                                    l3 -437 150 -43 c168 -49 419 -105 570 -129 100 -16 351 -45 391 -45 21 0 22
                                                                                    4 27 208 4 181 8 220 31 307 50 191 172 400 313 537 110 107 298 222 421 259
                                                                                    23 7 42 15 42 19 0 3 -14 19 -31 36 -119 113 -225 346 -245 540 l-7 64 -406
                                                                                    -1 c-352 0 -417 -3 -492 -19z" />
                                                                                    <path
                                                                                        d="M3526 3138 c-3 -13 -8 -48 -11 -78 -17 -151 -95 -330 -201 -461 -36
                                                                                    -45 -64 -82 -62 -84 2 -1 29 -12 60 -23 268 -99 492 -301 623 -562 87 -174
                                                                                    113 -293 122 -557 6 -189 6 -193 27 -188 12 2 66 7 121 10 294 19 631 96 838
                                                                                    192 l77 36 0 430 c0 393 -2 437 -21 530 -77 385 -370 679 -753 758 -79 16
                                                                                    -138 19 -453 19 l-363 0 -4 -22z" />
                                                                                    <path
                                                                                        d="M2177 2379 c-242 -25 -480 -153 -636 -341 -73 -87 -163 -261 -193
                                                                                    -373 -21 -76 -22 -103 -26 -556 l-3 -476 123 -36 c262 -77 483 -124 728 -157
                                                                                    199 -27 637 -38 814 -21 331 33 616 100 814 192 l84 39 -5 452 c-5 504 -8 529
                                                                                    -74 688 -140 333 -440 553 -802 590 -119 12 -709 11 -824 -1z" />
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        <p
                                                                            style="font-size:20px; margin: 0; margin-left:10px;">
                                                                            <span id="jumlah-orang"></span> Orang
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer d-flex justify-content-end"
                                                            style="padding: 1rem;">
                                                            <button type="button" class="btn btn-md me-1"
                                                                style="border-radius:10px; background-color:#00B1A9; color:white; width:500px;"
                                                                id="btn-tambah" data-bs-toggle="modal"
                                                                data-bs-target="#inlineForm">
                                                                <i class="fa-solid fa-plus"></i> Tamu Undangan
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="row mt-2" id="cari">
                                                <div class="col-lg-3">
                                                    <h4>Daftar Tamu</h4>
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-end">
                                                    <div class="form-group me-2">
                                                        <select class="form-control select2" id="groupSearch"
                                                            name="groupSearch">
                                                            <option disabled selected>Group</option>
                                                            @foreach ($groupTamu as $item)
                                                                <option value="{{ $item->group }}">
                                                                    {{ $item->group }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="namaSearch" class="form-control"
                                                            placeholder="Nama Tamu">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <button type="button" class='btn btn-md btn-primary'
                                                        style="border-radius:8px;" onclick="cari()"><i
                                                            class='fa fa-search'></i></button>
                                                </div>
                                            </form>
                                            <div class="row mt-3">
                                                <div class="table-responsive">
                                                    <table class="table table-striped display" id="tamu-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Kode</th>
                                                                <th>Nama</th>
                                                                <th>Group</th>
                                                                <th>WhatsApp</th>
                                                                <th>Tamu</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="template" role="tabpanel"
                                            aria-labelledby="template-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label
                                                            style="color: #3D5782; font-weight:bold;font-size: 20px;">Undangan
                                                            Pernikahan</label>
                                                        <p style="font-size: 17px;margin-top:6px;">
                                                            @if ($templatePesan)
                                                                {{ $templatePesan->templatepesan }}
                                                            @endif
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-md"
                                                            style="border-radius:10px; background-color:#00B1A9; color:white;"
                                                            id="btn-edit-template" data-bs-toggle="modal"
                                                            data-bs-target="#inlineForm2">
                                                            Edit Template
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <form id='bukutamu-submit'>
        @csrf
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Tamu </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Tamu</label>
                            <input type="text" name="nama" class="form-control" required placeholder="Nama Tamu">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Nama Group (Opsional)</label>
                            <input type="text" name="group" class="form-control" placeholder="Nama Group">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Nama WhatsApp (Opsional)</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input type="number" name="whatsapp" class="form-control" placeholder="81234xxxx">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Tamu (Opsional)</label>
                            <div class="input-group mb-3">
                                <input type="number" id="livestream" class="form-control" name="jumlah"
                                    placeholder="Jumlah Tamu">
                                <span class="input-group-text" id="basic-addon1">Orang</span>
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id='template-submit'>
        @csrf
        <div class="modal fade text-left" id="inlineForm2" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Template Pesan </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required placeholder="Title"
                                value="{{ $templatePesan->title }}">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea style="overflow: auto; resize:vertical" name="templatepesan" rows="5" class="form-control">
                @if ($templatePesan)
                {{ $templatePesan->templatepesan }}
                @endif
                </textarea>
                        </div>
                        <label style="color: #3D5782; font-weight:bold;font-size: 17px; margin-bottom:10px;">Gunakan
                            variabel berikut untuk menampilkan data otomatis</label>
                        <div class="alert alert-danger" style="opacity: 0.7">
                            Contoh: <br>Kepada Yth.<br>*{nama_tamu}*<br>ini adalah link undangan Anda {link_undangan}
                        </div>
                        <div class="d-flex mb-2"><span class="text-danger font-weight-bold"
                                style="width: 50%;">{nama_tamu}</span> <span style="width: 50%;">Nama Tamu</span></div>
                        <div class="d-flex mb-2"><span class="text-danger font-weight-bold"
                                style="width: 50%;">{nama_group}</span> <span style="width: 50%;">Nama Group</span></div>
                        <div class="d-flex mb-2"><span class="text-danger font-weight-bold"
                                style="width: 50%;">{kode_undangan}</span> <span style="width: 50%;">Kode Undangan</span>
                        </div>
                        <div class="d-flex"><span class="text-danger font-weight-bold"
                                style="width: 50%;">{link_undangan}</span> <span style="width: 50%;">Link Undangan</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id='bukutamu-edit'>
        @csrf
        <div class="modal fade text-left" id="inlineForm3" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Edit Tamu </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Tamu</label>
                            <input type="text" name="nama" id="nama-edit" class="form-control" required placeholder="Nama Tamu">
                            <input type="hidden" name="id_tamu" id="id-tamu">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Nama Group (Opsional)</label>
                            <input type="text" name="group" id="group-edit" class="form-control" placeholder="Nama Group">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Nama WhatsApp (Opsional)</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input type="number" name="whatsapp" id="whatsapp-edit" class="form-control" placeholder="81234xxxx">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Tamu (Opsional)</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="jumlah"
                                    placeholder="Jumlah Tamu" id="jumlah-edit">
                                <span class="input-group-text" id="basic-addon1">Orang</span>
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2()
            getJumlahTamu()
            showTamu()
            $('#namatamu').on('input', function() {
                var newURL = 'https://adc.com/axsa?to=' + $(this).val();

                $('#tautan').attr('href', newURL);
                $('#tautan').text(newURL);
            })
            $('#bukutamu-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('bukutamu.store') }}`,
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
                                text: 'Tamu berhasil di tambahkan.',
                                didClose: () => {
                                    $('#bukutamu-submit').trigger('reset')
                                    $('#inlineForm').modal('hide')
                                    getJumlahTamu()
                                    showTamu()
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

            $('#bukutamu-edit').on('submit', function(e) {
                e.preventDefault()

                var data = new FormData(this)
                console.log(data);
                $.ajax({
                    url:`{{ route('bukutamu.update') }}`,
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
                                text: 'Tamu berhasil di update.',
                                didClose: () => {
                                    $('#bukutamu-edit').trigger('reset')
                                    $('#inlineForm3').modal('hide')
                                    getJumlahTamu()
                                    showTamu()
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

            $('#template-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('template.pesan.update') }}`,
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
                                text: 'Template Pesan berhasil di atur.',
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

            $('#btn-copy').on('click', function() {
                const nama = $('#namatamu').val()
                const tautan = $('#tautan').attr('href')
                copyPesan(null, nama, null)
            })

            $('#btn-share').on('click', function() {
                const nama = $('#namatamu').val()
                const tautan = $('#tautan').attr('href')
                kirimPesan(null, nama, null, null)
            })
        })

        function getJumlahTamu() {
            $.ajax({
                url: `{{ route('bukutamu.jumlahtamu') }}`,
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    const resJT = JSON.parse(response)
                    $('#jumlah-orang').text(resJT.jumlahTamu)
                },
                error: function(res) {
                    console.log(res.responseText);
                }
            })
        }

        const showTamu = (filterData = $('#cari').serialize()) => {
            const columns = [{
                    data: "kode_tamu"
                },
                {
                    data: "nama"
                },
                {
                    data: "group"
                },
                {
                    data: "whatsapp"
                },
                {
                    data: "jumlah"
                },
                {
                    render: function(data, type, row) {
                        if (row.status == 'Menunggu') {
                            return '<span class="badge bg-warning">Menunggu</span>';
                        } else if (row.status == 'Tidak Hadir') {
                            return '<span class="badge bg-danger">Tidak Hadir</span>';
                        } else if (row.status == 'Hadir') {
                            return '<span class="badge bg-success">Hadir</span>';
                        }
                    }
                },
                {
                    render: function(data, type, full, meta) {
                        return `<div style='width:180px'>` +
                            `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-danger btn-sm delete me-1' id='delete'"><i class="fa-solid fa-trash"></i></button>` +
                            `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-warning btn-sm edit me-1' id='edit' onClick="editTamu(${full.id})"><i class="fa-solid fa-pen-to-square"></i></button>` +
                            `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn btn-sm kirim me-1' style='background-color:#9ebf68; color:white;' id='kirim' onClick="kirimPesan('${full.kode_tamu}', '${full.nama}', '${full.group}', '${full.whatsapp}')">Kirim</button>` +
                            `<button class=' waves-effect waves-light btn btn-social-icon btn-bitbucket btn btn-sm copy' style='background-color:#e33a8a; color:white' id='copy' onClick="copyPesan('${full.kode_tamu}', '${full.nama}', '${full.group}')">Copy</button>` +
                            `</div>`;
                    }
                },
            ];

            var table = $('#tamu-table').DataTable({
                searching: false,
                destroy: true,
                lengthChange: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('bukutamu.get') }}" + `?${filterData}`,
                    // data: filterData
                },
                columns: columns
            });
        }

        const cari = () => {
            showTamu($('#cari').serialize());
        }

        const copyPesan = (kodetamu, nama, group) => {

            const text = $('#btn-copy').data('text')

            const pesanLinkUndangan = text
                .replace(/{nama_tamu}/g, nama)
                .replace(/{nama_group}/g, group)
                .replace(/{kode_tamu}/g, kodetamu)
                .replace(/{link_undangan}/g, 'https:test/' + nama);

            const convertedValue = pesanLinkUndangan.replace(/\\n/g, '\n\n');

            const dummy = $('<textarea>').val(convertedValue).appendTo('body').select();
            document.execCommand('copy');
            dummy.remove(); 
        }

        const kirimPesan = (kodetamu, nama, group, whatsapp) => {
            const text = $('#btn-copy').data('text')

            const pesanLinkUndangan = text
                .replace(/{nama_tamu}/g, nama)
                .replace(/{nama_group}/g, group)
                .replace(/{kode_tamu}/g, kodetamu)
                .replace(/{link_undangan}/g, 'https:test/' + nama);

            const convertedValue = pesanLinkUndangan.replace(/\n/g, '%0A');   

            if (whatsapp != null) {
                window.location.href = `https://api.whatsapp.com/send/?phone=62${whatsapp}&text=${convertedValue}`
            } else {
                window.location.href = `https://api.whatsapp.com/send/?text=${convertedValue}`
            }
        }

        const editTamu = (id) => {
            $.ajax({
                url: `bukutamu/edit/${id}`,
                type: 'GET',
                success: function(res) {
                    const response = res.data
                    $('#id-tamu').val(response.id)
                    $('#nama-edit').val(response.nama)
                    $('#group-edit').val(response.group)
                    $('#whatsapp-edit').val(response.whatsapp)
                    $('#jumlah-edit').val(response.jumlah)
                    $('#inlineForm3').modal('show')
                },
                error: function(res) {
                    alert(res.responseText);
                }
            })
        }
    </script> 
@endsection
