@extends('layouts/master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Master</a></li>
    <li class="breadcrumb-item active" aria-current="page">Musik</li>
@endsection

@section('style')
    <style>
        .swal2-cancel {
            margin-right: 10px;
            /* Menambahkan margin kanan pada tombol batal */
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" id="btn-tambah" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#inlineForm">
                            <i class="fa-solid fa-plus"></i> Tambah
                        </button>
                        <div class="table-responsive">
                            <table class="table table-striped display" id="musik-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Penyanyi</th>
                                        <th>Musik</th>
                                        <th>Aksi</th>
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
    </section>

    <form id='musik-submit' action="{{ route('musik.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Musik </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Judul </label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Penyanyi </label>
                            <input type="text" class="form-control" id="penyanyi" name="penyanyi" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Musik </label>
                            <input type="file" class="form-control" id="musik" name="musik" required>
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
            $('#musik-submit').on('submit', function(e) {
                e.preventDefault()
                const url = this.getAttribute('action')
                $.ajax({
                    url: url,
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
                                text: 'Musik berhasil ditambahkan.',
                                didClose: () => {
                                    $('#inlineForm').modal('hide')
                                    $('#musik-submit').trigger('reset')
                                    $('#musik-table').DataTable().ajax.reload()
                                }
                            })
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                icon: 'error',
                                didClose: () => {
                                    $('#inlineForm').modal('hide')
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

            showMusik()
        })

        const showMusik = () => {
            const columns = [{
                    render: function(data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                {
                    data: "judul"
                },
                {
                    data: "penyanyi"
                },
                {
                    data: "musik"
                },
                {
                    render: function(data, type, full, meta) {
                        return `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-danger btn-sm delete' id='delete' onClick="deleteMusik(${full.id})"><i class="fa-solid fa-trash"></i></button>`;
                    }
                },
            ];

            var table = $('#musik-table').DataTable({
                destroy: true,
                lengthChange: false,
                ajax: {
                    url: "{{ route('musik.get') }}",
                    // data: filterData
                },
                columns: columns
            });
        }
        MusikSelected = ''
        $("#musik-table tbody").on("click", "tr", function() {
            MusikSelected = $("#musik-table").DataTable().row(this).data();
            $("#musik-table tbody")
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


        const deleteMusik = (id) => {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Apakah Yakin?',
                text: "Data akan di hapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ route('musik.destroy', ['musik' => ':id']) }}`.replace(':id', id),
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res) {
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Data berhasil dihapus',
                                'success'
                            )
                            $('#musik-table').DataTable().ajax.reload()
                        },
                        error: function(res) {
                            alert(res.responseText);
                        }
                    })
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Data masih tersimpan',
                        'error'
                    )
                }
            })

        }
    </script>
@endsection
