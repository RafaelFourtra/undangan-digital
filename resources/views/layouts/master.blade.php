<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg" type="image/x-icon') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
</head>

<style>
    /*select2*/
    .select2-container--default.select2-container--focus {
        outline: 0;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: #d9d9d9;
    }

    .select2-container--default:active,
    .select2-container--default.active,
    .select2-container--default:focus {
        outline: 0;
    }

    .select2-container--default .select2-selection--single {
        border: 1px solid #d9d9d9;
        border-radius: 3px;
        padding: 6px 12px;
        height: 37px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 28px;
        right: 3px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-top: 0;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        color: #ffffff;
    }

    .select2-container--default .select2-results__option[aria-disabled=true] {
        color: #737373;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #d9d9d9;
        color: #172b4c;
    }

    .select2-container--default .select2-results__option[aria-selected=true]:hover {
        color: #172b4c;
    }

    .select2-container--default .select2-selection--multiple {
        border: 1px solid #d9d9d9;
        border-radius: 5px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        padding: 1px 10px;
        color: #ffffff;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        margin-right: 5px;
        color: rgba(255, 255, 255, 0.7);
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #ffffff;
    }

    .select2-selection.select2-container--focus {
        outline: 0;
    }

    .select2-selection:active,
    .select2-selection.active,
    .select2-selection:focus {
        outline: 0;
    }

    .select2-selection .select2-selection--single {
        border: 1px solid #d9d9d9;
        border-radius: 5px;
        padding: 6px 12px;
        height: 34px;
    }

    .select2-dropdown {
        border: 1px solid #d9d9d9;
        border-radius: 0;
    }

    .select2-dropdown .select2-search__field {
        border: 1px solid #d9d9d9;
    }

    .select2-dropdown .select2-search__field:focus {
        outline: 0;
    }

    .select2-results__option {
        padding: 6px 12px;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 0;
        height: auto;
        margin-top: -4px;
        padding-right: 10px;
    }

    .select2-container[dir=rtl] .select2-selection--single .select2-selection__rendered {
        padding-right: 6px;
        padding-left: 20px;
    }

    .select2-search--inline .select2-search__field {
        border: 1px solid #d9d9d9;
    }

    .select2-search--inline .select2-search__field:focus {
        outline: 0;
    }
</style>
@yield('style')

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-md-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main" class='layout-navbar'>
            @include('layouts.navbar')
            <div id="main-content" style="padding-top:0%;">


                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
                            <ol class="breadcrumb">
                                @yield('breadcrumb')
                            </ol>
                        </nav>
                    </div>
                </div>

                @yield('content')


                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/vendors/jquery-toast-plugin-master/src/jquery.toast.js') }}"></script>

    @yield('script')

</body>

</html>
