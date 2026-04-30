<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    @include('layouts.nav')
    @include('layouts.header')
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            @yield('content')
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
