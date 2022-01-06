@section('preload')
    <link rel="preload" as="style" href="{{ asset('css/registration.css') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/signup-client.css') }}" type="text/css">
@endsection

<x-guest-layout>
    <div class="signup-client-form-container">
        <form action="" class="signup-client-form-body">
            <div class="signup-client-form-content">
                <div class="signup-client-title-container">
                    <p class="signup-client-title">Client Registration Form</p>
                    <p class="signup-client-title-desc">After Submission, please wait for an email to confirm if your account has been approved.</p>
                </div>
                <div class="separator"></div>
                <div class="name-container">
                    <div class="name-label">
                        Enter your name
                    </div>
                    <div class="name-inputs-containers">
                        <input type="text" id="firstName" placeholder="  First Name" class="name-inputs input-border">
                        <input type="text" id="lastName" placeholder="  Last Name" class="name-inputs input-border">
                    </div>
                    <div class="name-label">
                        Enter your date of birth and gender
                    </div>
                    <div class="name-inputs-containers">
                        <!-- <input type="date" id="dateOfBirth" placeholder="  Date of Birth" class="date-input input-border" autocomplete="off"> -->
                        <input type="text" placeholder=" Date of birth" onfocus="(this.type='date')" class="date-input input-border">
                        <input type="text" id="gender" placeholder="  Gender" class="gender-input input-border">
                    </div>
                    <div class="name-label">
                        Account Information
                    </div>
                    <div class="name-inputs-containers">
                        <input type="text" id="email" data-toggle="datepicker" placeholder="  Email Address" class="date-input input-border" autocomplete="off">
                        <input type="text" id="mobile" placeholder="  Mobile Number" class="gender-input input-border">
                    </div>
                    <div class="name-inputs-containers">
                        <input type="text" id="password" data-toggle="datepicker" placeholder="  Password" class="date-input input-border" autocomplete="off">
                        <input type="text" id="passwordConfirm" placeholder="  Confirm Password" class="gender-input input-border">
                    </div>
                    <label class="terms-and-conditions" for="agreement">
                    <input type="checkbox" name="agreement" id="agreement">
                        By signing in, you agree and accept our <a class="terms-and-conditions-link" href="#    " target="_blank">terms and conditions</a>
                    </label>
                    <div>
                    <button class="submitButton">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
