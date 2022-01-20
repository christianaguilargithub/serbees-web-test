{{--DESKTOP NAVIGATION--}}
<div class="main-nav">
    <div class="bgmid"></div>
    <header class="myHeader">
        <div class="myNavbar">
            <img class="landinglogo" src="{{ asset('images/white-logo.png') }}">
            <nav class="navmenu">
                <ul class="landingmenu">
                    <li><a class="aa" href="{{ route('home') }}">HOME</a></li>
                    <li><a a class="aa"href="/services">SERVICES</a></li>

                    <li><a class="aa"href="./#how">HOW IT WORKS</a></li>
                    <li><a class="aa"href="./#faq">FAQ</a></li>
                    <div class="dropdown">
                        <button class=" btn-dl
                                        dropdown-toggle" type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                            DOWNLOAD NOW
                        </button>
                        <li>
                        </li>
                        <ul class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item" style="cursor:pointer">
                                <img src=
                                    "{{asset('images/google-logo.png')}}"
                                    width="20" height="15">  Android Serbees Client App</li>
                            <li class="dropdown-item" style="cursor:pointer">
                                <img src=
                                    "{{asset('images/apple-logo.png')}}"
                                    width="20" height="17">  IOS Serbees Provider App</li>
                            <div style="border-bottom:2px solid grey;margin-top:3px"></div>
                            <li class="dropdown-item" style="cursor:pointer">
                                <img src=
                                    "{{asset('images/google-logo.png')}}"
                                    width="20" height="15">  Android Serbees Provider App</li>
                            <li class="dropdown-item" style="cursor:pointer">
                                <img src=
                                    "{{asset('images/apple-logo.png')}}"
                                    width="20" height="17">  IOS Serbees Provider App</li>
                        </ul>
                    </div>
                    <li><a class="aa"href="{{ route('register.index') }}">BE A PROVIDER</a></li>
                    <li><a class="aa sign" href="{{ route('login.index') }}">SIGN IN</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>

{{--MOBILE NAVIGATION--}}
<div class="burger">
    <div class="burger-top">
        <div class="b1">
            <img class="landinglogo-burger" src="{{ asset('images/white-logo.png') }}">
        </div>
        <div class="mobile-sign">
            
        
            <a class="mobile-sign-text" href="{{ route('login.index') }}">SIGN IN</a>
        <div class="b2" onclick="openNav()"style="padding-top:20px;padding-right:20px;font-weight:600;cursor: pointer;">
                    <span style="font-size: 1.2rem;font-weight: 700;"
                    >&#9776;</span>
        </div>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <img class="landinglogo-serbees" src="{{ asset('images/white-logo.png') }}">
            <a onclick="closeNav()" href="/">HOME</a>
            <a onclick="closeNav()" href="/services">SERVICES</a>
            <a onclick="closeNav()" href="./#how">HOW IT WORKS</a>
            <a onclick="closeNav()" href="./#faq">FAQ</a>
            <a onclick="closeNav()" href="{{ route('register.index') }}">BE A PROVIDER</a>
        </div>
    </div>
    </div>
</div>
