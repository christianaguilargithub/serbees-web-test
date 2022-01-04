<x-guest-layout>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <div class="main-nav">
        <div class="bgmid"></div>
            <header class="myHeader">
                <div class="myNavbar">
                    <img class="landinglogo" src="{{ asset('images/white-logo.png') }}">
                    <nav class="navmenu">
                        <ul class="landingmenu">
                            <li><a class="aa" href="/">HOME</a></li>
                            <li><a a class="aa"href="#">SERVICES</a></li>
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
                        <a onclick="closeNav()" href="/">SERVICES</a>
                        <a onclick="closeNav()" href="./#how">HOW IT WORKS</a>
                        <a onclick="closeNav()" href="./#faq">FAQ</a>
                        <a onclick="closeNav()" href="./registration">BE A PROVIDER</a> 
                    </div>
            </div>
        </div> 
        
    <div class="search-service">
        Available Services
    </div>
  <div class="top-page-services1">
    <div class="up1 up">
    
        <a href="#" class="card wallet">
          <div class="overlay-service"></div>
          <div class="circle">
            <img src="{{ asset('images/cleaning-logo.png') }}" class="service-logo" alt="">
          </div>
          <p class="book" style="font-size: 14px">Cleaning</p>
          
          <button class="book" onclick="location.href='{{ route('booking-hour') }}'">Book Now</button>

          <p class="mobile-service-title" style="font-size: 14px">Cleaning</p>
          <p class="p-text-covid">The service provider performs regular cleaning and organizing
            of all the rooms inside the house.
          </p>
        </a>
      
  
        <a href="#" class="card education covid-card">
          <div class="overlay-service"></div>
          <div class="circle">
            <img src="{{ asset('images/covid-logo.png') }}" class="service-logo" alt="">
          </div>
          <p class="book" style="font-size: 14px">Covid Test Available</p>
            <button class="book" onclick="location.href='{{ route('booking-covid-test') }}'">RT-PCR</button>
            <button class="book" onclick="location.href='{{ route('booking-covid-test2') }}'">Antigen</button>
            <button class="book" onclick="location.href='{{ route('booking-covid-test3') }}'">Rapid Antibody</button>
          <p>Covid Test<br></p>
          <p class="p-text-covid">
            The service providers offers home service testing in partnership with PMP Diagnostic Center, Inc.
            </p>
        </a>
      
    </div>
    <div class="down">
      
        <a href="#" class="card credentialing">
          <div class="overlay-service"></div>
          <div class="circle">
            <img src="{{ asset('images/aircon-logo.png') }}" class="service-logo" alt="">
          </div>
          <p class="book" style="font-size: 14px">Aircon Cleaning</p>
    
          <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>
          <p>Aircon</p>
          <p class="p-text-covid1">The service provider repairs or replaces defective or 
            damaged aircon components upon approval from costumers.
          </p>
        </a>
     
    
        <a href="#" class="card human-resources">
          <div class="overlay-service"></div>
          <div class="circle">
                <img src="{{ asset('images/petcare-logo.png') }}" class="service-logo2" alt="">
              </div>
              <p class="book" style="font-size: 14px">Pet Grooming</p>
              <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>
              <p>Pet grooming</p>
              <p class="p-text-covid2">The service includes nail clipping, bathing, hair removal and even
                creative grooming services such as coloring the pet's fur and painting the pet's nails.
              </p>
        </a>
     
     
    </div>
  </div>
  <div class="top-page-services">
    <div class="up">
      <a href="#" class="card wallet">
        <div class="overlay-service"></div>
        <div class="circle">
          <img src="{{ asset('images/laundry-logo.png') }}" class="service-logo2" alt="">
        </div>
        <p class="book" style="font-size: 14px">Laundry</p>
        <button class="book" onclick="location.href='{{ route('booking-day-range') }}'">Book Now</button>
        <p>Laundry</p>
        <p class="p-text-covid">
          The service includes wash, dry, fold clothes.
        </p>
      </a>
      <a href="#" class="card education">
        <div class="overlay-service"></div>
      <div class="circle">
        <img src="{{ asset('images/massage-logo.png') }}" class="service-logo" alt="">
      </div>
      <p class="book" style="font-size: 14px">Massage</p>
      <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>
      <p>Massage</p>
      <p class="p-text-covid2">The service provider does therapeutic massage on client to improve blood circulation, promote relaxation, and relieve stress, pain and injuries.
      </p>
      </a>
    </div>
    <div class="down">
      <a href="#" class="card credentialing">
        <div class="overlay-service"></div>
        <div class="circle">
          <img src="{{ asset('images/haircut-logo.png') }}" class="service-logo" alt="">
        </div>
        <p class="book" style="font-size: 14px">Haircut</p>
        <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>
        <p>Haircut</p>
        <p class="p-text-covid">The service provider offers haircuts for both adults and children.
        </p>
      </a>
      <a href="#" class="card human-resources">
        <div class="overlay-service"></div>
        <div class="circle">
          <img src="{{ asset('images/mani-logo.png') }}" class="service-logo2" alt="">
        </div>
        <p class="book" style="font-size: 14px">Manicure/Pedicure</p>
        <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>
        <p>Manicure/Pedicure</p>
        <p class="p-text-covid">
          The service includes cleaning, shaping, polishing, and applying acrylic or get nail polish.
        </p>
      </a>
    </div>
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