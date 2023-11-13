@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Galeri</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Galeri
    @endsection
    @section('style')
        <style>
            .card {
                box-shadow: 0px 0px 9px 4px rgba(129, 129, 129, 0.2);
                border-radius: 0.3rem;
            }
        </style>
    @endsection

    @section('content')
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h4>Pilih Galeri Undangan</h4>
                                </div>
                                <div class="col-lg-2 d-flex justify-content-end">
                                    <button type="button" id="btn-tambah" class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#inlineForm">
                                        <i class="fa-solid fa-plus"></i> Tambah
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Upload maksimal {{ $qtyFotoMax }} foto terbaik dengan pasanganmu untuk section
                                        gallery di undangan
                                        kamu
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped display" id="galeri-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
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

        <form id='galeri-submit' action="{{ route('galeri.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Tambah Foto </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Foto </label>
                                <div class="drag-and-drop text-center">
                                    <input type="file" class="form-control image-input" accept="image/*" id="foto"
                                        name="foto" required>
                                    <p class="text-center">Max Size 1 MB</p>
                                    <div id="image-preview" class="text-center img-flex"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
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
                        <h4 class="modal-title" id="myModalLabel33">Edit Galeri </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form id='galeri-submit-edit' enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label style="color: #3D5782; font-weight:bold">Foto </label>
                                <div class="drag-and-drop text-center">
                                    <input type="hidden" name="id" id="id-edit">
                                    <input type="hidden" name="foto_name" id="fotobefore_name">
                                    <input type="file" class="form-control image-input-2" accept="image/*" id="foto_edit"
                                        name="foto_edit">
                                    <p class="text-center">Max Size 1 MB</p>
                                    <div id="image-preview-2" class="text-center img-flex">
                                        <img id="preview-image" src="" class="img-thumbnail" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
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
        <script>
            $(document).ready(function() {

                $('#galeri-submit').on('submit', function(e) {
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
                                    text: 'Foto berhasil ditambahkan.',
                                    didClose: () => {
                                        $('#inlineForm').modal('hide')
                                        $('#galeri-submit').trigger('reset')
                                        $('#image-preview').html('')
                                        $('#galeri-table').DataTable().ajax.reload()
                                    }
                                })
                            } else if (data.code === 2) {
                                Swal.fire({
                                    title: 'Error!',
                                    icon: 'error',
                                    text: 'Foto telah mencapai batas.',
                                    didClose: () => {
                                        $('#inlineForm').modal('hide')
                                    }
                                })
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    icon: 'error',
                                    text: 'Foto telah mencapai batas maksimal.',
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
                $('#galeri-submit-edit').on('submit', function(e) {
                    e.preventDefault()
                    const id = $('#id-edit').val()
                    const url = 'update-galeri/' + id
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
                                    text: 'Foto berhasil diupdate.',
                                    didClose: () => {
                                        $('#inlineFormEdit').modal('hide')
                                        $('#galeri-submit-edit').trigger('reset')
                                        $('#galeri-table').DataTable().ajax.reload()
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

                showFoto()
            })

            const showFoto = () => {
                const columns = [{
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: "foto",
                        render: function(data, type, row) {
                            return `<img src="{{ asset('images/galeri/${data}') }}" width="100" height="auto">`;
                        }
                    },
                    {
                        render: function(data, type, full, meta) {
                            return `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-warning btn-sm edit me-1' id='edit' onClick="editFoto(${full.id})"><i class="fa-solid fa-pen-to-square"></i></button>` +
                                `<button class='waves-effect waves-light btn btn-social-icon btn-bitbucket btn-danger btn-sm delete' id='delete' onClick="deleteFoto(${full.id})"><i class="fa-solid fa-trash"></i></button>`;
                        }
                    },
                ];

                var table = $('#galeri-table').DataTable({
                    destroy: true,
                    lengthChange: false,
                    pageLength: 10,
                    ajax: {
                        url: "{{ route('galeri.get') }}",
                        // data: filterData
                    },
                    columns: columns
                });
            }
            GaleriSelected = ''
            $("#galeri-table tbody").on("click", "tr", function() {
                GaleriSelected = $("#galeri-table").DataTable().row(this).data();
                $("#galeri-table tbody")
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

            const editFoto = (id) => {
                $.ajax({
                    url: `galeri/${id}/edit`,
                    type: 'GET',
                    success: function(res) {
                        const response = res.data
                        $('#id-edit').val(response.id)
                        $('#fotobefore_name').val(response.foto)
                        const imagePreview = document.getElementById('preview-image');
                        const imageUrl = `{{ asset('images/galeri/${response.foto}') }}`;
                        imagePreview.src = imageUrl;
                        $('#inlineFormEdit').modal('show')
                    },
                    error: function(res) {
                        alert(res.responseText);
                    }
                })
            }

            const deleteFoto = (id) => {
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
                            url: `{{ route('galeri.destroy', ['galeri' => ':id']) }}`.replace(':id', id),
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
                                $('#galeri-table').DataTable().ajax.reload()
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
