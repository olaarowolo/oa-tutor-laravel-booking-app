<!DOCTYPE html>
<html lang="en">



<main class="">
    {{-- @include('partials.header') --}}

    <body>
        @yield('content')
      
        @include('components.scripts')
        @include('partials.footer')
        
        {{-- @include('partials.blog.footer') --}}
        
    </body>
</main>
<script src="{{ asset('assets/css/blog.css') }}"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
