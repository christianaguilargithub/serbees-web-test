<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','SERBEES')}}</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js,then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <!-- Font Awesome CDN -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/faq.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/registration.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/booking.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/services.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
    </head>
    <body class="antialiased">
    {{ $slot }}

    <script>
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
    </script>
    </body>
</html>
