<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('bootstrap5.0.2/css/bootstrap.min.css') }}">


</head>
<body>
    <style>
    .text-truncate-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* tampil 3 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    </style>

    <div class="container-fluid" style="margin-top: 150px;">
        @include('layout.header')

  
        @yield('content')
 
        
        @include('layout.footer')

    </div>

    <script src="{{ asset('bootstrap5.0.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>