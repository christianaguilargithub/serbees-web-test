@extends('layouts.app')
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
                    <a onclick="closeNav()" href="/">BOOK A SERVICE</a>
                    <a onclick="closeNav()" href="./#how">HOW IT WORKS</a>
                    <a onclick="closeNav()" href="./#faq">FAQ</a>
                    <a onclick="closeNav()" href="/registration">BE A PROVIDER</a>
                </div>
        </div>
    </div>


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
                <div class="name-inputs-containers">
                    <input type="text" id="firstName" placeholder="  First Name" class="name-inputs input-border">
                    <input type="text" id="middleName" placeholder="  Middle Name" class="name-inputs input-border">
                    <input type="text" id="lastName" placeholder="  Last Name" class="name-inputs input-border">
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
                    <input type="text" id="region" placeholder="  Region" class="name-inputs input-border">
                    <input type="text" id="province" placeholder="  Province" class="name-inputs input-border">
                    <input type="text" id="city" placeholder="  City" class="name-inputs input-border">
                </div>
                <div class="address-inputs-container">
                    <input type="text" id="barangay" placeholder="  Barangay" class="name-inputs input-border">
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
                                <li><a class="a"href="/registration">Registration</a></li>
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
