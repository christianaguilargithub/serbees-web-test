<x-guest-layout>
    <div class="main-nav">
        <div class="bgmid"></div>
            <header class="myHeader">
                <div class="myNavbar">
                    <img class="landinglogo" src="{{ asset('images/white-logo.png') }}">
                    <nav class="navmenu">
                        <ul class="landingmenu">
                            <li><a class="aa" href="/">HOME</a></li>
                            <li><a a class="aa"href="./services">SERVICES</a></li>
                                
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
                                    <li class="dropdown-item" >
                                        <img src=
                                        "{{asset('images/google-logo.png')}}"
                                        width="20" height="15">  Android Serbees Provider App</li>
                                    <li class="dropdown-item" style="cursor:pointer">
                                        <img src=
                                        "{{asset('images/apple-logo.png')}}"
                                        width="20" height="17">  IOS Serbees Provider App</li>
                                </ul>
                            </div>
                            <li><a class="aa"href="./registration">BE A PROVIDER</a></li>
                            <li><a class="aa sign" href="/login">SIGN IN</a></li>
                        </ul>
                    </nav>
                </div> 
            </header>
        </div>
        <div class="burger">
            <div class="burger-top">
                <div class="b1">
                    <img class="landinglogo-burger" src="{{ asset('images/white-logo.png') }}">
                </div>
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
                        <a onclick="closeNav()" href="/booking-hour">BOOK A SERVICE</a>
                        <a onclick="closeNav()" href="./#how">HOW IT WORKS</a>
                        <a onclick="closeNav()" href="./#faq">FAQ</a>
                        <a onclick="closeNav()" href="/registration">BE A PROVIDER</a> 
                    </div>
            </div>
        </div> 
        
 
    <div class="top-page">

        <form action="" class="login-form-container">
            <div class="login-form-content">
                <br>
                <label style="font-family: cocogoose; font-weight:600; color:white; font-size:30px">LOGIN & <br>BOOK NOW!</label>    
                <br>
                <label style="font-family: Roboto; font-weight:700">User Name        
                </label>  
                <input type="text" name="Uname" id="Uname" placeholder="Username" class="login-input">    
                <br>   
                <label style="font-family: Roboto; font-weight:700">Password     
                </label>     
                <input type="Password" name="Pass" id="Pass" placeholder="Password" class="login-input">    
                <br>
                <input type="button" name="log" id="log" value="Log In" style="width: 150px;font-family:roboto; border-radius:10px;color:white;background-color:#1E90FF;box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 4px );
                -webkit-backdrop-filter: blur( 4px ); margin-left:auto;margin-right:auto;">       
                <br>   
                <span style="font-family: Roboto; font-weight:700"><input type="checkbox" id="check">    
                Remember me</span>    
                <br>    
                <span style="font-family: Roboto; font-weight:700">Forgot <a href="#">Password</a></span>   
                <br> 
            </div>
                
        </form>
    </div>
  

            
       
        </div>
    
        <div class="footer-container">
            <div class="footer-top">
                <div class="allignment">
                    <div class="footer-top-logo-description">
                        <img class="serbees-grey-logo" src="{{ asset('images/dark-logo.png') }}" alt="">
                        <p class="serbees-description">Serbees is the best service marketplace that connects clients to fully-vetted service providers.
                            If you’re looking for affordable and quality service, Serbees is an all-in-one mobile app which can help you find the most suitable provider anytime
                        </p>
                    </div>
                    <div class="footer-menu-container">
                        <div class="footer-top-menu">
                            <nav class="footer-navmenu">
                                <ul class="landingmenu2">
                                    <li class="orange">MENU</li>
                                    <li><a class="a"href="#faq">FAQ</a></li>
                                    <li><a class="a"href="#how">How It Works</a></li>
                                    <li><a class="a"href="./registration">Registration</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="divider"></div>
                        <div class="footer-top-contact">
                            <nav class="footer-navmenu-contact">
                                <ul class="landingmenu2">
                                    <li class="orange" >CONTACT US</li>
                                    <li><a class="a"href="#">0917304BEES</a></li>
                                    <li><a class="a"href="#">(02) 7904-8488</a></li>
                                    <li><a class="a"href="#">costumerservice@serbees.com</a></li>
                                    <li><a class="a"href="#">info@serbees.com</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="divider"></div>
                        <div class="footer-top-social">
                            <p class="orange follow-lbl">FOLLOW US</p>
                            <div class="social-img">
                                <div class="social-media">
                                    
                                <a href="https://www.facebook.com/serbees" target="_blank"><img class="social" src="{{ asset('images/facebook-square-brands.svg') }}" alt=""></i></a>
                                <a href="https://www.instagram.com/serbeesapp" target="_blank"><img class="social" src="{{ asset('images/instagram-square-brands.svg') }}" alt=""></a>
                                <a href="https://twitter.com/SerbeesApp" target="_blank"><img class="social" src="{{ asset('images/twitter-square-brands.svg') }}" alt=""></a>
                                </div>
                        </div>
                    </div>
                </div>
                <img class="serbee" src="{{ asset('images/serbee.png') }}" alt="">
            </div>
        </div>
        <div class="footer-bottom">
                <div class="copyright">
                    Copyright © 2021-2022 SERBEES. All Rights reserved.
                </div>
                <div class="terms-privacy">
                    <a class="terms-text" href="">Terms and Conditions</a>
                    <a class="terms-text2" href="">Privacy and Policy</a>
                </div>
            </div>
</x-guest-layout>