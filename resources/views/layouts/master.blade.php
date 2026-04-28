<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asas Laravel</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
</head>

<body>
    <div class="container">
        {{-- @include('layouts.header') --}}
        <main>
            @yield('content')
        </main>
        {{-- @include('layouts.footer') --}}
    </div>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
</body>

</html>
