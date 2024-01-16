@extends('layouts.master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Master</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tema</li>
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
    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" id="btn-tambah" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#inlineForm">
                            <i class="fa-solid fa-plus"></i> Tambah
                        </button>
                        <div class="table-responsive">
                            <table class="table table-striped display" id="tema-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tema</th>
                                        <th>Url</th>
                                        <th>Jenis</th>
                                        <th>Thumbail</th>
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

    <form id='tema-submit' action="{{ route('tema.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Tema </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tema </label>
                            <input type="text" placeholder="Tema" name="nama_tema" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Url </label>
                            <input type="text" placeholder="Url" name="url_tema" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <select class="form-control select2" style="width: 100%;" id="jenis" name="jenis">
                                <option disabled selected>Pilih Jenis</option>
                                <option value="1">One Section</option>
                                <option value="2">Two Section</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Thumbnail </label>
                            <div class="drag-and-drop text-center">
                                <input type="file" class="form-control image-input" accept="image/*" id="thumbnail_tema"
                                    name="thumbnail_tema" required>
                                <p class="text-center">Max Size 5 MB</p>
                                <div id="image-preview" class="text-center img-flex"></div>
                                <div class="invalid-feedback"></div>
                            </div>
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


    <div class="modal fade text-left" id="inlineFormEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Tema </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form id='tema-submit-edit' enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tema </label>
                            <input type="hidden" name="id" id="id-edit">
                            <input type="text" placeholder="Tema" id="nama_tema-edit" name="nama_tema_edit"
                                class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Url </label>
                            <input type="text" placeholder="Url" id="url_tema-edit" name="url_tema_edit"
                                class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <select class="form-control select2" style="width: 100%;" id="jenis_edit" name="jenis_edit">
                                <option disabled selected>Pilih Jenis</option>
                                <option value="1">One Section</option>
                                <option value="2">Two Section</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Thumbnail </label>
                            <div class="drag-and-drop text-center">
                                <input type="hidden" name="thumbnailbefore_name" id="thumbnailbefore_name">
                                <input type="file" class="form-control image-input-2" accept="image/*"
                                    id="thumbnail_tema" name="thumbnail_tema_edit">
                                <p class="text-center">Max Size 5 MB</p>
                                <div id="image-preview-2" class="text-center img-flex">
                                    <img id="preview-image" src="" class="img-thumbnail" alt="">
                                </div>
                            </div>
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
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/drop-image.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('#tema-submit').on('submit', function(e) {
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
                                text: 'Tema berhasil ditambahkan.',
                                didClose: () => {
                                    $('#inlineForm').modal('hide')
                                    $('#tema-submit').trigger('reset')
                                    $('#image-preview').html('')
                                    $('#tema-table').DataTable().ajax.reload()
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

            $('#tema-submit-edit').on('submit', function(e) {
                e.preventDefault()
                const id = $('#id-edit').val()
                const url = 'update-tema/' + id
                const data = new FormData(this)
                $.ajax({
                    url: url,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.code === 1) {
                            Swal.fire({
                                title: 'Berhasil!',
                                icon: 'success',
                                text: 'Tema berhasil diupdate.',
                                didClose: () => {
                                    $('#inlineFormEdit').modal('hide')
                                    $('#tema-submit-edit').trigger('reset')
                                    $('#tema-table').DataTable().ajax.reload()
                                }
                            })
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                icon: 'error',
                                didClose: () => {
                                    $('#inlineFormEdit').modal('hide')
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

            showTema()
        })

        const showTema = () => {
            const columns = [{
                    render: function(data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                {
                    data: "nama_tema"
                },
                {
                    data: "url_tema"
                },
                {
                    data: "jenis"
                },
                {
                    data: "thumbnail_tema",
                    render: function(data, type, row) {
                        return `<img src="{{ asset('images/thumbnail-tema/${data}') }}" width="100" height="auto">`;
                    }
                },
                {
                    render: function(data, type, full, meta) {
                        return `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-warning btn-sm edit me-1' id='edit' onClick="editTema(${full.id})"><i class="fa-solid fa-pen-to-square"></i></button>` +
                            `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-danger btn-sm delete' id='delete' onClick="deleteTema(${full.id})"><i class="fa-solid fa-trash"></i></button>`;
                    }
                },
            ];

            var table = $('#tema-table').DataTable({
                destroy: true,
                lengthChange: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('tema.get') }}",
                    // data: filterData
                },
                columns: columns
            });
        }
        TemaSelected = ''
        $("#tema-table tbody").on("click", "tr", function() {
            TemaSelected = $("#tema-table").DataTable().row(this).data();
            $("#tema-table tbody")
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
            console.log(TemaSelected);
        });

        const editTema = (id) => {
            $.ajax({
                url: `tema/${id}/edit`,
                type: 'GET',
                success: function(res) {
                    const response = res.data
                    $('#id-edit').val(response.id)
                    $('#nama_tema-edit').val(response.nama_tema)
                    $('#url_tema-edit').val(response.url_tema)
                    $('#thumbnailbefore_name').val(response.thumbnail_tema)
                    $('#jenis_edit').val(response.jenis).change()
                    const imagePreview = document.getElementById('preview-image');
                    const imageUrl = `{{ asset('images/thumbnail-tema/${response.thumbnail_tema}') }}`;
                    imagePreview.src = imageUrl;
                    $('#inlineFormEdit').modal('show')
                },
                error: function(res) {
                    alert(res.responseText);
                }
            })
        }

        const deleteTema = (id) => {
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
                        url: `{{ route('tema.destroy', ['tema' => ':id']) }}`.replace(':id', id),
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
                            $('#tema-table').DataTable().ajax.reload()
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
