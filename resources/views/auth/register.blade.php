@section('preload')
    <link rel="preload" as="style" href="{{ asset('css/registration.css') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}" type="text/css">
@endsection

<x-guest-layout>
    <div class="registration-form-container">
        <form action="" class="registration-form-body">
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
                    <button class="submitButton">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
