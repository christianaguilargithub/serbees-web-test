@section('preload')
    <link rel="preload" as="style" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}" type="text/css">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open+Sans">

    <link rel="preload" as="image" href="{{ asset('images/cleaning-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/covid-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/aircon-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/petcare-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/laundry-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/massage-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/haircut-logo.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/mani-logo.png') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}" type="text/css">
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
@endsection

<x-guest-layout>


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
</x-guest-layout>
