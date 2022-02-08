@section('preload')
    <link rel="preload" as="style" href="{{ asset('css/login.css') }}">
    <link rel="preload" as="style" href="{{ asset('css/homepage.css') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
@endsection
<x-guest-layout>
    <div class="top-page">
        <form action="{{ route('client.auth') }}" method="POST" class="login-form-container">
            @csrf

            <div class="login-form-content">
                <br>
                <label style="font-family: cocogoose; font-weight:600; color:white; font-size:30px">LOGIN & <br>BOOK NOW!</label>
                <br>
                <label style="font-family: Roboto; font-weight:700">User Name
                </label>
                <input type="text" name="user_name" id="Uname" placeholder="Username" class="login-input">
                <br>
                <label style="font-family: Roboto; font-weight:700">Password
                </label>
                <input type="password" name="password" id="myInput" placeholder="Password" class="login-input" >
                <br>
                <span style="font-family: Roboto; font-weight:700;padding-bottom: 20px;margin-top:-20px;"><input style="margin-bottom:3px;margin-right:5px; border-radius:4px;cursor:pointer;"type="checkbox" onclick="myFunction()">Show Password</span>
                <input type="submit" name="log" id="log" value="Log In" style="width: 150px;font-family:roboto; border-radius:10px;color:white;background-color:#1E90FF;box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 4px );
                -webkit-backdrop-filter: blur( 4px ); margin-left:auto;margin-right:auto;">
                <br>
                <input onclick="location.href='{{ route('signup-client') }}'" type="button" name="log" id="log" value="Sign Up" style="width: 150px;font-family:roboto; border-radius:10px;color:white;background-color:#FEC128;box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 4px );
                -webkit-backdrop-filter: blur( 4px ); margin-left:auto;margin-right:auto;">
                <br>
                <span style="font-family: Roboto; font-weight:700"><input type="checkbox" id="check" style="margin-bottom:3px;margin-right:5px; border-radius:4px;cursor:pointer;">Remember me</span>
                <br>
                <span style="font-family: Roboto; font-weight:700">Forgot <a href="#">Password</a></span>
                <br>
            </div>
        </form>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</x-guest-layout>
