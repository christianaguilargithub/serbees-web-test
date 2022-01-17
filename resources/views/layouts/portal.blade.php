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
        <link rel="stylesheet" href="{{ asset('css/portal.css') }}" type="text/css">
        
    </head>
    <body class="antialiased">
        <div class="portal-container">
            <div class="portal-nav-container">
                <img src="{{ asset('images/white-logo.png') }}" alt="" class="portal-logo">
                    <ul class="ul-portal"> 
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/dashboard.svg')}}" alt="" class="portal-menu-image"> Dashboard</li></a>
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/clientDashboard.svg')}}" alt="" class="portal-menu-image"> Clients</li></a>
              
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/providerDashboard.svg')}}" alt="" class="portal-menu-image"> Providers</li></a>
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/serviceDashboard.svg')}}" alt="" class="portal-menu-image"> Services</li></a>
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/bookingDashboard.svg')}}" alt="" class="portal-menu-image"> Booking</li></a>
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/administratorDashboard.svg')}}" alt="" class="portal-menu-image"> Administrator</li></a>
                        <a href="" class="portal-menu"><li class="portal-menu-text"><img src="{{asset('images/settingsDashboard.svg')}}" alt="" class="portal-menu-image"> Settings</li></a>
                    </ul>
            </div>
            <div class="portal-content">
                @yield('content')
            </div>    
        </div>
    </body>
</html>
