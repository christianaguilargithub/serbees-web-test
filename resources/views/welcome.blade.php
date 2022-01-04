{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serbees</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js,then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Font Awesome CDN -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/dashboardpage.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/faq.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/registration.css') }}" type="text/css">
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
    <div class="main-nav">
    <div class="bgmid"></div>
        <header class="myHeader">
            <div class="myNavbar">
                <img class="landinglogo" src="{{ asset('images/white-logo.png') }}">
                <nav class="navmenu">
                    <ul class="landingmenu">
                        <li><a class="aa"href="#">HOME</a></li>
                        <li><a class="aa"href="#">HOW IT WORKS</a></li>
                        <li><a class="aa"href="#">FAQ</a></li>
                        <li><a class="aa"href="#">BE A PROVIDER</a></li>
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
                    <a href="#">HOME</a>
                    <a href="#">HOW IT WORKS</a>
                    <a href="#">FAQ</a>
                    <button class="register-provider-btn" >BE A PROVIDER</button>
                </div>
        </div>
    </div>
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



        $(function() {
            var now = new Date();
            $('[data-toggle="datepicker"]').datepicker({
                endDate: new Date(now.getFullYear() - 12, 1, 0)
            });
        })

        $('#service-id').select2({
                placeholder: 'Select service(s)',
                maximumSelectionLength: 3,
                allowClear: true,
                templateResult: serviceFormatState
            });
        
        
    </script>

        



<div class="registration-form-container">
    <div class="registration-form-body">
        <div class="registration-form-content">
            <div class="registration-title-container">
                <p class="registration-title">Service Provider Registration Form</p>
                <p class="registration-title-desc">After Submission, please wait for an email to confirm if your account has been approved.</p>
            </div>
            <div class="separator"></div>
            <div class="name-container">
                <div class="name-label">
                    Enter your name
                </div>
                <div class="name-inputs-container">
                    <input type="text" id="firstName" placeholder="  First Name" class="name-input input-border">
                    <input type="text" id="middleName" placeholder="  Middle Name" class="name-input input-border">
                    <input type="text" id="lastName" placeholder="  Last Name" class="name-input input-border">
                </div>
                <div class="name-label">
                    Enter your date of birth and gender
                </div>
                <div class="date-gender-container">
                    <!-- <input type="date" id="dateOfBirth" placeholder="  Date of Birth" class="date-input input-border" autocomplete="off"> -->
                    <input type="text" placeholder=" Date of birth" onfocus="(this.type='date')" class="date-input input-border">
                    <input type="text" id="gender" placeholder="  Gender" class="gender-input input-border">
                </div>
                <div class="name-label">
                    Enter your adress
                </div>
                <div class="address-inputs-container">
                    <input type="text" id="region" placeholder="  Region" class="name-input input-border">
                    <input type="text" id="province" placeholder="  Province" class="name-input input-border">
                    <input type="text" id="city" placeholder="  City" class="name-input input-border">
                </div>
                <div class="address-inputs-container">
                    <input type="text" id="barangay" placeholder="  Barangay" class="name-input input-border">
                    <input type="text" id="detailedAddress" placeholder="  Blk / Lot / House No / Bldg / Street No" class="detailed-address-input input-border">
                </div>
                <div class="name-label">
                    Enter your account credential
                </div>
                <div class="date-gender-container">
                    <input type="text" id="email" data-toggle="datepicker" placeholder="  Email Address" class="date-input input-border" autocomplete="off">
                    <input type="text" id="mobile" placeholder="  Mobile Number" class="gender-input input-border">
                </div>
                <div class="date-gender-container">
                    <input type="text" id="password" data-toggle="datepicker" placeholder="  Password" class="date-input input-border" autocomplete="off">
                    <input type="text" id="passwordConfirm" placeholder="  Confirm Password" class="gender-input input-border">
                </div>
                <div class="name-label">
                    Choose what type of service you would like to offer
                </div>
                <select name="service-id" id="service-id" placeholder="Services" class="gender-input input-border"></select>
                <div class="name-label">
                    Upload one copy of any  government issued ID ( e.g SSS, Passport, Driver’s License, UMID, TIN etc. )
                </div>
                <div class="custom-file">
                    <input type="file" id="requirements" name="requirements[]" multiple="multiple" class="custom-file-input" accept="image/x-png,image/jpeg,image/jpg" capture="camera">
                    <label class="custom-file-label" for="requirements">Choose file or capture photo of your documents here</label>
                </div>
                <div class="name-label2">
                Files uploaded will be reviewed. Any fake documents or unecessary files uploaded will delay your account approval
                </div>
                <div class="name-label">
                Did any service provider invite you to register?
                </div>
                <div class="name-label">
                For every service provider that you will invite, you will receive an incentive
                </div>
                <div class="referral-choice">
                <input name="referral" value="1" id="yes" type="radio" class="referral">  Yes
                <input name="referral" value="0" id="no" type="radio" class="referral">  No
                </div>
                <input type="text" id="detailedAddress" placeholder="  Invitor's user ID ( if any )" class="referral-input input-border">
                <div class="name-label2">
                Please provide the correct user id of the service provider who invited you to register
                </div> 
                <label class="terms-and-conditions" for="agreement">
                <input type="checkbox" name="agreement" id="agreement"> 
                    By signing in, you agree and accept our <a class="terms-and-conditions-link" href="#    " target="_blank">terms and conditions</a>
                </label>
                <div>
                <button class=submitButton>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>



<div>
    @yield('footer')
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
                                <li><a class="a"href="#">FAQ</a></li>
                                <li><a class="a"href="#">How It Works</a></li>
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
                            <a href=""><img class="social" src="{{ asset('images/facebook-square-brands.svg') }}" alt=""></i></a>
                            <a href=""><img class="social" src="{{ asset('images/instagram-square-brands.svg') }}" alt=""></a>
                            <a href=""><img class="social" src="{{ asset('images/twitter-square-brands.svg') }}" alt=""></a>
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
    </body>
</html> --}}
