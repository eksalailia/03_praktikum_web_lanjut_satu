<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie-edge">
    <title>@yield('judul_halaman_website')</title>
</head>
<body>
    @section('sidebar')

    @show
    <div class="container">
        @yield('konten_website')
    </div>
</body>
</html>