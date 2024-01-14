@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Undangan Views</h6>
                            <h6 class="font-extrabold mb-0" id="visitor"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Tamu</h6>
                            <h6 class="font-extrabold mb-0" id="tamu"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Hadir</h6>
                            <h6 class="font-extrabold mb-0" id="hadir"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Ucapan</h6>
                            <h6 class="font-extrabold mb-0" id="ucapan"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h4>List Ucapan</h4>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped display" id="ucapan-table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Ucapan</th>
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            showUcapan()
            $.ajax({
                url: `{{ route('dashboard') }}`,
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    $('#visitor').html(response.visitor)
                    $('#tamu').html(response.tamu)
                    $('#hadir').html(response.hadir)
                    $('#ucapan').html(response.ucapan)
                },
                error: function(res) {
                    console.log(res.responseText);
                }
            })
        })

        const showUcapan = () => {
            const columns = [{
                    data: "nama",
                },
                {
                    data: "ucapan",

                },
            ];

            var table = $('#ucapan-table').DataTable({
                destroy: true,
                lengthChange: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('list.ucapan') }}",
                    // data: filterData
                },
                columns: columns
            });
        }
    </script>
@endsection
