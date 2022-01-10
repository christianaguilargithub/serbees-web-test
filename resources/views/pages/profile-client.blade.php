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
                <div id="Bookings" class="tabMenu">
                    <h2>London</h2>
                    <p>London is the capital city of England.</p>
                </div>
                <div id="Notifications" class="tabMenu" style="display:none">
                    <h2>Paris</h2>
                    <p>Paris is the capital of France.</p> 
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