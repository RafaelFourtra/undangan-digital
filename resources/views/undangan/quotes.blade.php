@extends('layouts/master')

@section('breadcrumb')
    <li>
        <h4><span style="font-weight: 600">Quotes</span> <span style="font-weight: 50">|</span></h4>
    </li>
    <li class="breadcrumb-item ms-2" style="margin-top: 3px"><a href="{{ route('undangan.index') }}">Undangan</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="margin-top: 3px">Quotes
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
                            <form id="quotes-submit">
                                <div class="row match-height">
                                    <div class="col-md-12 col-12">
                                        <div class="row mt-1">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="quotes"
                                                        style="color: #3D5782; font-weight:bold">Quotes
                                                        </label>
                                                    <textarea class="form-control" id="quotes" name="quotes" rows="4" placeholder="Quotes">{{ $data ? $data->quotes : '' }}</textarea>
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
    <script>
        $(document).ready(function() {
            $('#quotes-submit').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    url: `{{ route('quotes.store') }}`,
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
                                text: 'Quotes berhasil di tambahkan.',
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
