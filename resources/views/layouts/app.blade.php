<!DOCTYPE html>
<html lang="en">
@include('components.head')
<main class="main">
    @include('partials.header')

    <body>
        @yield('content')
        @include('components.why-us')
        
        @include('partials.footer')
    </body>
</main>

</html>
