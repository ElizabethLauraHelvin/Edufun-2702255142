<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edufun - Homepage</title>

    <link rel="stylesheet" href="{{ asset('bootstrap5.0.2/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container-fluid">
        @include('layout.header')

        @yield('konten')
        @yield('menu')

        @include('layout.footer')
    </div>

     <script src="{{ asset('bootstrap5.0.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

