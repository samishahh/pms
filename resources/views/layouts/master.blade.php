<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PMS|Patient Management System</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('public/assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href={{asset('public/toastr/build/toastr.css')}}/>
    <link rel="stylesheet" href="{{asset('public/assets/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('public/assets/img/favicon.ico')}}" />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        @include('partials.topnav')
        @include('partials.nav')
        @yield('content')
        @include('partials.footer')

    </div>

</div>

<!-- General JS Scripts -->
<script src="{{asset('public/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('public/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<script type="text/javascript" src={{asset('public/toastr/toastr.js')}}></script>
<script type="text/javascript" src={{asset('public/sweetalert/docs/assets/sweetalert/sweetalert.min.js')}}></script>
<script type="text/javascript" src={{asset('public/mask/phone-mask.min.js')}}></script>
<!-- Page Specific JS File -->
<script src="{{asset('public/assets/js/page/index.js')}}"></script>
<script src="{{asset('public/assets/js/page/datatables.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('public/assets/js/scripts.js')}}"></script>
<script src="{{asset('public/assets/js/myscript.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('public/assets/js/custom.js')}}"></script>

@if (Session::has('message'))
    <script type="text/javascript">
        toastr.success("{!! Session::get('message') !!}")
    </script>
@endif

</body>
</html>