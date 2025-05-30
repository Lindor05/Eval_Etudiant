<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>@yield('title', 'Admin')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- AdminLTE CSS -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">

@stack('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts.partials.navbar')
@include('layouts.partials.sidebar')

<div class="content-wrapper">
    <section class="content mt-3">
    <div class="container-fluid">
        @yield('content')
    </div>
    </section>
</div>

@include('layouts.partials.footer')

</div>

<!-- AdminLTE JS -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>

@stack('scripts')
</body>
</html>
