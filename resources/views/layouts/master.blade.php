<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asas Laravel</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"> --}}
</head>

<body>
    <div class="container">
        {{-- @include('layouts.header') --}}
        <main>
            @yield('content')
        </main>
        {{-- @include('layouts.footer') --}}
    </div>
    {{-- @include('layouts.script') --}}
</body>

</html>
