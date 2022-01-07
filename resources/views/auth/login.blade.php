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
                <input type="button" onclick="location.href='{{ route('signup-client') }}'" name="log" id="log" value="Sign Up" style="width: 150px;font-family:roboto; border-radius:10px;color:white;background-color:#FEC128;box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
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
</x-guest-layout>
