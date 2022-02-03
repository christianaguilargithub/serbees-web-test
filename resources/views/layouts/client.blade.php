<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Serbees is the best service marketplace that connects clients to fully-vetted service providers.">
    <meta name="keywords" content="Serbees, Serbees Provider, Serbees Client, Service Provider, Job Listing, Service, Bookings">
    <meta name="author" content="Serbees development Team">
    <meta name="robots" content="index, follow">
    @hasSection('meta')
        @yield('meta')
    @endif

    <title>
        {{ (request()->path() === '/') ? 'Home' : ucfirst(explode('/', request()->path())[0]) }} |
        {{ config('app.name', 'Serbees') }}
    </title>

    {{-- CANONICAL TAG --}}
    <link rel="canonical" href="https://serbees.com" />

    {{-- PRELOAD --}}
    <link rel="preload" as="style" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css">
    <link rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="preload" as="style" href="{{ asset('css/font.css') }}">
    <link rel="preload" as="style" href="{{ asset('css/app.css') }}">
    <link rel="preload" as="script" href="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    <link rel="preload" as="script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    <link rel="preload" as="image" href="{{ asset('images/white-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/google-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/apple-logo.png') }}">
    @hasSection('preload')
        @yield('preload')
    @endif

    {{-- STYLES --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    @hasSection('styles')
        @yield('styles')
    @endif
    @livewireStyles

    {{-- FONTS --}}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @hasSection('fonts')
        @yield('fonts')
    @endif

    {{-- FONT AWESOME ICON --}}
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

{{--    TODO: Move the css below to their specific page--}}
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}" type="text/css">

</head>
<body class="antialiased bg-serbees-yellow">
    <x-preloader/>

    @include('partials.header')
    <div class="w-full h-screen">
        {{ $slot }}
    </div>
    @include('partials.footer')

    {{-- SCRIPTS --}}
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script defer>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }
        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }
        document.addEventListener('DOMContentLoaded', nav)
        function nav(){
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.main-nav');
            burger.addEventListener('click', ()=>{
                nav.classList.toggle('show')
            })
        }

        document.onreadystatechange = function() {
            if(document.readyState === "complete") {
                document.getElementById('preloader').remove();
            }
        }
    </script>
    @hasSection('scripts')
        @yield('scripts')
    @endif
    @livewireScripts
</body>
</html>
