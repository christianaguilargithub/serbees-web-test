@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/profile-client.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

<x-guest-layout>
    <div class="top-page">
        <div class="profile-container">
            <div class="profile-account-content">
                <img class="profile-image" src="{{ asset('images/squid.jpg') }}" alt="">
                <div class="profile-account-info">
                    <span class="profile-info "><i class="far fa-user" style="margin-right: 10px"></i>Michael Kim</span>
                    <span class="profile-info"><i class="fas fa-map-marker-alt" style="margin-right: 10px"></i>721 Bukahyeon-dong, Seodaemun-gu, Seoul, South Korea</span>
                    <span class="profile-info"><i class="far fa-envelope" style="margin-right: 10px"></i>MichaelKim@email.com</span>
                    <div class="profile-menu-bar-mobile">
                        <button class="profile-buttons-mobile" onclick="openMenu('BookingsMobile')">Bookings</button>
                        <button class="profile-buttons-mobile" onclick="openMenu('NotificationsMobile')">Notifications</button>
                        <button class="profile-buttons-mobile editProfileButton-mobile">Edit Profile</button>
                    </div>
                </div>
                <button class="editProfileButton-desktop">Edit Profile</button>
                <div class="profile-content-mobile">
                    {{-- <div class="profile-menu-bar-mobile">
                        <button class="profile-buttons-mobile" onclick="openMenu('Bookings')">Bookings</button>
                        <button class="profile-buttons-mobile" onclick="openMenu('Notifications')">Notifications</button>
                    </div> --}}
                    <div id="BookingsMobile" class="tabMenu">
                        <li class="list-group-item py-2 px-1 profile-card-mobile" style="border-radius:10px;width: 95%; margin-left:auto;margin-right:auto; ">
                            <div class="row align-items-center ">
                                <div class="col-auto">
                                    <a href="#" class="user-avatar rounded bordered">
                                        <img class="p-1 rounded service-logo2" alt="Image placeholder" src="{{ asset('images/cleaning-logo.png') }}" >
                                    </a>
                                </div>
                                <div class="col-auto px-0">
                                    <h4 class="fs-6 mb-0">
                                        Cleaning
                                    </h4>
                                    <span class="small text-muted">Maria Jones</span>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-6 fw-bolder">$40</span><br>
                                    <span class="fs-6 fw-bolder">Pending</span>
                                </div>
                            </div>
                            <div class="col text-center" >
                                Rate Service
                            </div>
                        </li>
                        <li class="list-group-item py-2 px-1 profile-card-mobile" style="border-radius:10px;width: 95%; margin-left:auto;margin-right:auto; ">
                            <div class="row align-items-center ">
                                <div class="col-auto">
                                    <a href="#" class="user-avatar rounded bordered">
                                        <img class="p-1 rounded service-logo2" alt="Image placeholder" src="{{ asset('images/haircut-logo.png') }}" >
                                    </a>
                                </div>
                                <div class="col-auto px-0">
                                    <h4 class="fs-6 mb-0">
                                        Haircut
                                    </h4>
                                    <span class="small text-muted">John Doe</span>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-6 fw-bolder">$58</span><br>
                                    <span class="fs-6 fw-bolder">Completed</span>
                                </div>
                            </div>
                            <div class="col text-center" >
                                Service Rating 
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </li>
                    </div>
                    <div id="NotificationsMobile" class="tabMenu" style="display:none">
                        <li class="list-group-item  py-2 px-1 profile-card-mobile" style="border-radius:10px;width: 95%; margin-left:auto;margin-right:auto; ">
                            <div class="row align-items-center ">
                                <div class="col-auto">
                                    <a href="#" class="user-avatar rounded bordered">
                                        <img class="p-1 rounded service-logo2" alt="Image placeholder" src="{{ asset('images/cleaning-logo.png') }}" >
                                    </a>
                                </div>
                                <div class="col-auto px-0">
                                    <h4 class="fs-6 mb-0">
                                        Cleaning
                                    </h4>
                                    <span class="small text-muted">( Name of Provider )</span>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-6 fw-bolder">$1,834</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <span class="fs-6 fw-bolder"><button class="btn btn-success profile-notif-btn" style="margin-left: -40px">Accept</button><button class="btn btn-danger profile-notif-btn" style="margin-left: 20px">Decline</button></span>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="profile-content-desktop">
                <div class="profile-menu-bar">
                    <button class="profile-buttons" onclick="openMenuDesktop('BookingsDesktop')">Bookings</button>
                    <button class="profile-buttons" onclick="openMenuDesktop('NotificationsDesktop')">Notifications</button>
                </div>
                <div id="BookingsDesktop" class="tabMenuDesktop">
                    <li class="list-group-item bg-transparent py-2 px-1 profile-card" style="border-radius:10px;width: 95%; margin-left:auto;margin-right:auto; ">
                        <div class="row align-items-center ">
                            <div class="col-auto">
                                <a href="#" class="user-avatar rounded bordered">
                                    <img class="p-1 rounded service-logo2" alt="Image placeholder" src="{{ asset('images/cleaning-logo.png') }}" >
                                </a>
                            </div>
                            <div class="col-auto px-0">
                                <h4 class="fs-6 mb-0">
                                    Cleaning
                                </h4>
                                <span class="small text-muted">Maria Jones</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">$40</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">Service Rating</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">Pending</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item bg-transparent py-2 px-1 profile-card" style="border-radius:10px;width: 95%; margin-left:auto;margin-right:auto; ">
                        <div class="row align-items-center ">
                            <div class="col-auto">
                                <a href="#" class="user-avatar rounded bordered">
                                    <img class="p-1 rounded service-logo2" alt="Image placeholder" src="{{ asset('images/haircut-logo.png') }}" >
                                </a>
                            </div>
                            <div class="col-auto px-0">
                                <h4 class="fs-6 mb-0">
                                    Haircut
                                </h4>
                                <span class="small text-muted">John Doe</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">$58</span>
                            </div>
                            <div class="col text-end" >
                                Service Rating<br>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">Completed</span>
                            </div>
                        </div>
                    </li>
                </div>
                <div id="NotificationsDesktop" class="tabMenuDesktop" style="display:none">
                    <li class="list-group-item bg-transparent py-2 px-1 profile-card" style="border-radius:10px;width: 95%; margin-left:auto;margin-right:auto; ">
                        <div class="row align-items-center ">
                            <div class="col-auto">
                                <a href="#" class="user-avatar rounded bordered">
                                    <img class="p-1 rounded service-logo2" alt="Image placeholder" src="{{ asset('images/cleaning-logo.png') }}" >
                                </a>
                            </div>
                            <div class="col-auto px-0">
                                <h4 class="fs-6 mb-0">
                                    Cleaning
                                </h4>
                                <span class="small text-muted">( Name of Provider )</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">$1,834</span>
                            </div>
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder"><button class="btn btn-success" style="margin-left: -40px">Accept</button><button class="btn btn-danger" style="margin-left: 20px">Decline</button></span>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openMenu(tabName) {
        var i;
        var x = document.getElementsByClassName("tabMenu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(tabName).style.display = "block";  
        }
        function openMenuDesktop(tabName) {
        var i;
        var x = document.getElementsByClassName("tabMenuDesktop");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(tabName).style.display = "block";  
        }
    </script>
</x-guest-layout>