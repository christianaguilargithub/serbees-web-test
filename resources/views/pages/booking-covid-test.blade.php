@extends('layouts.app')
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
                            <li><a class="aa"href="./registration">BE A PROVIDER</a></li>
                            <li><a class="aa sign" href="/">SIGN IN</a></li>
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


<div class="booking-form-container">
    <form class="booking-form-body" action="POST">
        <div class="booking-form-content">
                {{-- <img class="booking-bg-img" src="{{asset('images/booking.png')}}" alt=""> --}}
                <div class="booking-title-container">
                    <p class="booking-title">Booking Form</p>
                    <p class="booking-title-desc">After Submission, please wait for an email to confirm your booking request.</p>
                </div>
                
                <div class="separator"></div>
                <div class="booking-container">
                    <div class="booking-left">
                        <div class="service-label">
                            When do you need the service?
                        </div>
                        <div class="name-inputs-container">
                            <input type="date" id="service-date" placeholder="  Enter start date" class="name-input input-border">
                        </div>
                        <div class="service-label">
                            What time do you need the service?
                        </div>
                        <div class="name-inputs-container">
                            <input type="time" id="service-time" placeholder="  Time" class="name-input input-border">
                        </div>
                        <div class="service-label">
                            Where do you need the service?
                        </div>
                        <div class="name-inputs-container">
                            <input type="text" id="service-location" placeholder="  Enter location" class="name-input input-border">
                        </div>
                        <div class="service-label">
                            No. of clients to be tested
                        </div>
                        <div class="numbers">
                            
                            <button type="button" class="but" (click)="decrement()">-</button>
                            <div class="data">
                              
                            </div>
                            <button type="button" class="but2" (click)="increment()">+</button>
                          </div>
                        <div class="service-label-1">
                            or pin location on the map
                        </div>
                        <div class="pinLoc">
                            <button class=pinLocationButton>pin location</button>
                        </div>
                        <!--The div element for the map -->
                        <div id="map"></div>
                        <script>
                            // Initialize and add the map
                            function initMap() {
                            // The location of Uluru
                            const manila = { lat: 14.599756087678845, lng: 120.98416786669692 };
                            // The map, centered at Uluru
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 18,
                                center: manila,
                            });
                            // The marker, positioned at Uluru
                            const marker = new google.maps.Marker({
                                position: manila,
                                map: map,
                            });
                            }
                        </script>
                        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtj4ZgKu8_6ET9zxf1rTK2kdp8OgVWEr4&callback=initMap&libraries=&v=weekly"
                            async
                        ></script>
                        <div class="service-label-3 mobile-switch">
                            Client Message
                        </div>
                        <div class="message-inputs-container mobile-switch">
                            <textarea id="message" placeholder="  Client Message" class="message-input"></textarea>
                        </div>
                        <div>
                            <button class="submitButton" type="submit">Submit</button>
                        </div>
                    </div>
                    <div class="booking-right">
                        <div class="booking-right-content">
                            <div class="service-label-2">
                                Covid-19 Test - RT - PCR
                            </div>
                            <div class="service-desc">
                                An RT-PCR (Swab) is a test that combines reverse transcription of RNA into DNA for virus detection. Nasal and oral swabs of an individual are collected under the observation of healthcare professionals.
                            </div>
                            <br>
                            <div class="service-label-2">
                                RATE: <b>P3,500</b>
                            </div>
                            <div class="service-desc">
                                SWAB RT PCR<br><b>(results within 24 hrs)</b><br> 
                                
                                Note: Additional payment for home service.<br><br>
                                <b>PMP to point of destination</b><br>
                                5km & below - &#8369; 500<br>
                                5.1km to 10km - &#8369; 700<br>
                                10.1km to 20km - &#8369; 1000
                            </div>
                            <br>
                            <div class="service-desc1">
                                Payment can be made directly to provider upon completion of service
                                <br>
                                <br>
                                We do not charge commision for every bookings.
                                <br>
                                <br>
                                Within the day service minimum of 30 minutes grace period upon 
                                booking
                            </div>
                        </div>
                        <div class="service-label-3 desktop-switch">
                            Your message to provider
                        </div>
                        <div class="message-inputs-container desktop-switch">
                            <textarea id="message" placeholder="  Client Message" class="message-input"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
  
</div>
<script>
      increment () {
    if ((this.currentNumber+1) <= 5) {
      this.currentNumber++;
    }
  }
  
  decrement () {
    if ((this.currentNumber-1) > 0) {
      this.currentNumber--;
    }
    
  }
</script>
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
                                <li><a class="a"href="./#faq">FAQ</a></li>
                                <li><a class="a"href="./#how">How It Works</a></li>
                                <li><a class="a"href="#">Registration</a></li>
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
                            <a href="https://www.facebook.com/serbees"><img class="social" src="{{ asset('images/facebook-square-brands.svg') }}" alt=""></i></a>
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
