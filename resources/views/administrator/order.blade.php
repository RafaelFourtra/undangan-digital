@extends('layouts/master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Administrator</a></li>
    <li class="breadcrumb-item active" aria-current="page">Order</li>
@endsection

@section('style')
    <style>
    </style>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Customer Order</h4>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="order-tab" data-bs-toggle="tab" href="#order" role="tab"
                                    aria-controls="order" aria-selected="true">Order</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="daftarorder-tab" data-bs-toggle="tab" href="#daftarorder"
                                    role="tab" aria-controls="daftarorder" aria-selected="false">Daftar Customer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" style="margin-top: 30px;">
                            <div class="tab-pane fade show active" id="order" role="tabpanel"
                                aria-labelledby="order-tab">
                                <form id="order-submit">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="basicInput">Nama</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Nama Customer" name="name">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="basicInput">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Email" name="email">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="basicInput">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password" name="password">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="basicInput">Confirm Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    placeholder="Confirm Password" name="password_confirmation">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Paket</label>
                                                <select class="form-control select2" style="width: 100%;" id="paket"
                                                    name="paket">
                                                    <option disabled selected>Pilih Paket</option>
                                                    @foreach ($paket as $p)
                                                        <option data-harga="{{ $p->harga }}"
                                                            value="{{ $p->paket }}">
                                                            {{ $p->paket }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" id="harga" name="harga"
                                                    readonly="readonly">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Domain</label>
                                                <input type="text" class="form-control" id="domain" name="domain"
                                                    placeholder="Domain">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Expired</label>
                                                <input type="date" class="form-control" id="expired" name="expired">
                                                <div class="invalid-feedback"></div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="btn-save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="daftarorder" role="tabpanel"
                                aria-labelledby="daftarorder-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="row mt-2" id="cari">
                                            <div class="col-lg-11 d-flex justify-content-end">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Dari</label>
                                                            <input type="date" name="tanggaldariSearch"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Sampai</label>
                                                            <input type="date" name="tanggalsampaiSearch"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="namaSearch" class="form-control"
                                                                placeholder="Nama Tamu">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" name="emailSearch" class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <button type="button" class='btn btn-md btn-primary search-btn'
                                                    style="border-radius:8px; margin-top:22px" onclick="cari()"><i
                                                        class='fa fa-search'></i></button>
                                            </div>
                                        </form>
                                        <div class="table-responsive">
                                            <table class="table table-striped display" id="order-table"
                                                style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Domain</th>
                                                        <th>Expired</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2()

            $('#order-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('order.store') }}`,
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
                                text: 'Order ditambahkan.',
                                didClose: () => {
                                    $('#order-submit').trigger('reset')
                                    $('#paket').val('Pilih Paket').change()
                                    $('#order-table').DataTable().ajax.reload()
                                }
                            })
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                icon: 'error',
                                didClose: () => {}
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

            $('#paket').on('change', function() {
                var harga = $('#paket option:selected').attr('data-harga');
                $('#harga').val(harga);

                var paket = $('#paket').val()
            })

            $('#password').on('click', function() {
                var randomPassword = generateRandomPassword(16);
                $('#password').val(randomPassword).prop('readonly', true);
                $('#password_confirmation').val(randomPassword).prop('readonly', true);
            })

            function generateRandomPassword(length) {
                var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-#*";
                var password = "";
                for (var i = 0; i < length; i++) {
                    var randomIndex = Math.floor(Math.random() * charset.length);
                    password += charset.charAt(randomIndex);
                }
                return password;
            }

            showOrder()
        })

        const showOrder = () => {
            const columns = [{
                    data: "tanggal_order"
                },
                {
                    data: "user.name"
                },
                {
                    data: "user.email"
                },
                {
                    data: "domain",
                },
                {
                    data: "expired"
                },
            ];

            var table = $('#order-table').DataTable({
                destroy: true,
                lengthChange: false,
                searching: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('order.get') }}",
                    // data: filterData
                },
                columns: columns
            });
        }
        OrderSelected = ''
        $("#order-table tbody").on("click", "tr", function() {
            OrderSelected = $("#order-table").DataTable().row(this).data();
            $("#order-table tbody")
                .find("tr")
                .each(function(i) {
                    $(this)
                        .find("td")
                        .each(function(i) {
                            $(this).removeClass("selected");
                        });
                });
            $(this)
                .find("td")
                .each(function(i) {
                    $(this).toggleClass("selected");
                });
        });
    </script>
@endsection
