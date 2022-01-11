@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/profile-client.css') }}" type="text/css">
 
@endsection

<x-guest-layout>

    
    <div class="top-page">
        <div class="profile-container">
            <div class="profile-account-content">
                <img class="profile-image" src="{{ asset('images/squid.jpg') }}" alt="">
            </div>
            <div class="profile-content">
                <div class="profile-menu-bar">
                    <button class="profile-buttons" onclick="openMenu('Bookings')">Bookings</button>
                    <button class="profile-buttons" onclick="openMenu('Notifications')">Notifications</button>
                </div>
                <div id="Bookings" class="tabMenu ">
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
                            <div class="col text-end">
                                <span class="fs-6 fw-bolder">Completed</span>
                            </div>
                        </div>
                    </li>
                </div>
                <div id="Notifications" class="tabMenu" style="display:none">
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
    </script>
</x-guest-layout>