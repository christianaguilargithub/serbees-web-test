<x-guest-layout>
    <div class="main-nav">
        <div class="bgmid"></div>
            <header class="myHeader">
                <div class="myNavbar">
                    <img class="landinglogo" src="{{ asset('images/white-logo.png') }}">
                    <nav class="navmenu">
                        <ul class="landingmenu">
                            <li><a class="aa" href="/">HOME</a></li>
                            <li><a a class="aa"href="/services">SERVICES</a></li>
                            <li><a class="aa"href="#how">HOW IT WORKS</a></li>
                            <li><a class="aa"href="#faq">FAQ</a></li>
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
                            <li><a class="aa"href="/registration">BE A PROVIDER</a></li>
                            <li><a class="aa sign" href="./login">SIGN IN</a></li>
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
                        <a onclick="closeNav()" href="./#how">HOW IT WORKS</a>
                        <a onclick="closeNav()" href="./#faq">FAQ</a>
                        <a onclick="closeNav()" href="/registration">BE A PROVIDER</a> 
                    </div>
            </div>
        </div> 
        
    <div class="search-service">
        Book a service now!
        <form>
            <input placeholder="  Do you need a service?" id="search-service"/>
            <button class="book">Book Now</button>
        </form>
        
    </div>
    <div class="top-page">
        <div class="top-page-left">
            <div class="top-page-text">
                Offer & Avail Services <br>Instantly Any Kind, <br>Anywhere
                <p class="words">Serbees is the best service marketplace that connects clients to fully-vetted service providers. If you’re looking for affordable and quality service, Serbees is an all-in-one mobile app which can help you find the most suitable provider anytime</p>
                
            </div>
            {{-- <div class="dropdown">
                <button class="btn btn-dark 
                        dropdown-toggle" type="button" 
                        id="dropdownMenuButton" 
                        data-toggle="dropdown"
                        aria-haspopup="true" 
                        aria-expanded="false">
                    Download Now
                </button>
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
            </div> --}}
        </div>
        <div class="cell-image">
            <img class="cp" src="{{asset('images/cellphone.png')}}" alt="">
        </div>
    </div>
    <section id="how">
        <div class="bottom-page">
            <img class="how" src="{{asset('images/how-it-works.png')}}" alt="">
            <img class="how2" src="{{asset('images/how-it-works2.png')}}" alt="">
        </div>
    </section>
    <section id="faq">
        <div class="body-faq-desktop-container">
            <div class="faq-container">
                <div class="faq">
                    <p id="dl">Frequently Asked Questions</p>
                    <h1 class="faq-h1" style="margin-top: 40px;">How Does Serbees Works?</h1>
                    <p class="faq-p">SERBEES is an all-in-one platform for services na bukas sa provider ng LAHAT 
                    ng serbisyo mapa
                    <br>
                    delivery guy, driver, cleaner, tutor, make-up artist, barbero, 
                    manikurista, fitness instructor,
                    <br>
                    masahahista, sports instructor o professional.
                </p>
                <p class="faq-p">
                    Gamit ang App, ikaw ay awtomatikong makakatanggap ng notifications sa tuwing may
                    <br> 
                    maghahanap ng serbisyong iyong ini-register at di tulad ng iba, sa SERBEES walang 
                    commission 
                    <br>
                    charges. Buong makukuha ang perang pinaghirapan. <a href="#" class="faq-terms">Download the App Now</a> 
                </p>
                <hr class="thin-hr" style="margin-bottom: 40px;margin-top:40px;" >
                <h1 class="faq-h1">How do I register as a Service Provider?</h1>
                <p class="faq-p">To register as a service provider, please fill up the form in the 
                    <a href="#" class="faq-terms">Registration Page</a>  of our website or 
                    <br>
                    download the app and register from there.</p>
                    <hr class="thin-hr" style="margin-bottom: 40px">
                <h1 class="faq-h1">How do I earn cash incentives?</h1>
                <p class="faq-p">Ang Serbees ay isang social enterprise na nagnanais bigyang oportunidad ang 
                    lahat na mapabilis 
                    <br>
                    kumita gamit ang App.
                    <br><br>
                    Dahil dito magbibigay ng P250 cash incentive ang Serbees sa tuwing makakapagimbita 
                    ng ibang 
                    <br>
                    Serbees Providers na mag register sa App. Kailangang i-type ng inimbitahan 
                    ang iyong Serbees ID
                    <br>
                    sa sign-up page. 
                    <br><br>
                    Ang incentives ay makikita sa iyong profile at ma-eencash gamit ang App 
                    thru our payment 
                    <br>
                    channels.
                    </p>
                <!-- <h1 class="faq-h1">What are the services included in Serbees?</h1>
                <p class="faq-p">Here are is the <a href="#" class="faq-terms">List of Services</a> that you can provide with the Serbees Provider App         </p>
                <hr class="thin-hr" style="margin-bottom: 60px">     -->
                </div>
            </div>
        </div>    
    </section>
            
        <div class="newsletter-container">
            <div class="newsletter-label">
                Stay up to date with Serbees
            </div>
            <div class="newsletter-content">
                <input class="newsletter-input" type="text" placeholder="  Enter Email">
                <button class="newsletter-btn">Subscribe</button>
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