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

    <div class="services-wrapper">
        <a href="#" class="card education covid-card">
            <div class="overlay-service"></div>
            <div class="circle">
                <img src="{{ asset('images/covid-logo.png') }}" class="service-logo" alt="">
            </div>
            <p class="bookNameCovid">Covid Test Available</p>
            <button class="book" onclick="location.href='{{ route('booking-covid-test') }}'">RT-PCR</button>
            <button class="book" onclick="location.href='{{ route('booking-covid-test2') }}'">Antigen</button>
            <button class="book" onclick="location.href='{{ route('booking-covid-test3') }}'">Rapid Antibody</button>
            <p>Covid Test<br></p>
            <p class="p-text-covid">
                The service providers offers home service testing in partnership with PMP Diagnostic Center, Inc.
            </p>
        </a>

        @foreach($services as $service)
            @if($service->name === 'Cleaning (House)' || $service->name === 'Haircut')
                @php $class = 'wallet' @endphp
            @elseif($service->name === 'Aircon cleaning and Repairs' || $service->name === 'Pet Grooming')
                @php $class = 'credentialing' @endphp
            @elseif($service->name === 'Laundry' || $service->name === 'Manicure/Pedicure')
                @php $class = 'human-resources' @endphp
            @else
                @php $class = 'education' @endphp
            @endif

            @switch($service->name)
                @case('Cleaning (House)')
                    @php $image = 'cleaning-logo.png' @endphp
                    @break
                @case('Laundry')
                    @php $image = 'laundry-logo.png' @endphp
                    @break
                @case('Aircon cleaning and Repairs')
                    @php $image = 'aircon-logo.png' @endphp
                    @break
                @case('Haircut')
                    @php $image = 'haircut-logo.png' @endphp
                    @break
                @case('Pet Grooming')
                    @php $image = 'petcare-logo.png' @endphp
                    @break
                @case('Manicure/Pedicure')
                    @php $image = 'mani-logo.png' @endphp
                    @break
                @default
                    @php $image = 'massage-logo.png' @endphp
                    @break
            @endswitch

            @if($service->name === 'Pet Grooming' || $service->name === 'Laundry'|| $service->name === 'Manicure/Pedicure'|| $service->name === 'Massage')
            @php $logo = 'service-logo2' @endphp
            @else
            @php $logo = 'service-logo' @endphp
            @endif
            
            <a href="#" class="card {{ $class }}">
                <div class="overlay-service"></div>
                <div class="circle">
                    <img src="{{ asset('images/'.$image) }}" class="{{$logo}}" alt="">
                </div>
                <p class="bookName">{{ $service->name }}</p>

                <button class="book" onclick="location.href='{{ route('booking-hour') }}'">Book Now</button>

                <p class="mobile-service-title">{{ $service->name }}</p>

                @switch($service->name)
                @case('Cleaning (House)')
                    @php $description = 'The service provider performs regular cleaning and organizing
                    of all the rooms inside the house.' @endphp
                    @break
                @case('Laundry')
                    @php $description = 'The service includes wash, dry, fold clothes.' @endphp
                    @break
                @case('Aircon cleaning and Repairs')
                    @php $description = 'The service provider repairs or replaces defective or
                    damaged aircon components upon approval from costumers.' @endphp
                    @break
                @case('Haircut')
                    @php $description = 'The service provider offers haircuts for both adults and children.' @endphp
                    @break
                @case('Pet Grooming')
                    @php $description = "The service includes nail clipping, bathing, hair removal and even
                    creative grooming services such as coloring the pet's fur and painting the pet's nails." @endphp
                    @break
                @case('Manicure/Pedicure')
                    @php $description = 'The service includes cleaning, shaping, polishing, and applying acrylic or get nail polish.' @endphp
                    @break
                @default
                    @php $description = 'The service provider does therapeutic massage on client to improve blood circulation, promote relaxation, and relieve stress, pain and injuries.' @endphp
                    @break
            @endswitch

                
                <p class="p-text-covid">{{ $description }}</p>
            </a>
        @endforeach

{{--        <a href="#" class="card wallet">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/cleaning-logo.png') }}" class="service-logo" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Cleaning</p>--}}

{{--            <button class="book" onclick="location.href='{{ route('booking-hour') }}'">Book Now</button>--}}

{{--            <p class="mobile-service-title" style="font-size: 14px">Cleaning</p>--}}
{{--            <p class="p-text-covid">The service provider performs regular cleaning and organizing--}}
{{--                of all the rooms inside the house.--}}
{{--            </p>--}}
{{--        </a>--}}

{{--        <a href="#" class="card credentialing">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/aircon-logo.png') }}" class="service-logo" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Aircon Cleaning</p>--}}

{{--            <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>--}}
{{--            <p>Aircon</p>--}}
{{--            <p class="p-text-covid1">The service provider repairs or replaces defective or--}}
{{--                damaged aircon components upon approval from costumers.--}}
{{--            </p>--}}
{{--        </a>--}}


{{--        <a href="#" class="card human-resources">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/petcare-logo.png') }}" class="service-logo2" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Pet Grooming</p>--}}
{{--            <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>--}}
{{--            <p>Pet grooming</p>--}}
{{--            <p class="p-text-covid2">The service includes nail clipping, bathing, hair removal and even--}}
{{--                creative grooming services such as coloring the pet's fur and painting the pet's nails.--}}
{{--            </p>--}}
{{--        </a>--}}

{{--        <a href="#" class="card wallet">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/laundry-logo.png') }}" class="service-logo2" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Laundry</p>--}}
{{--            <button class="book" onclick="location.href='{{ route('booking-day-range') }}'">Book Now</button>--}}
{{--            <p>Laundry</p>--}}
{{--            <p class="p-text-covid">--}}
{{--                The service includes wash, dry, fold clothes.--}}
{{--            </p>--}}
{{--        </a>--}}
{{--        <a href="#" class="card education">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/massage-logo.png') }}" class="service-logo" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Massage</p>--}}
{{--            <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>--}}
{{--            <p>Massage</p>--}}
{{--            <p class="p-text-covid2">The service provider does therapeutic massage on client to improve blood circulation, promote relaxation, and relieve stress, pain and injuries.--}}
{{--            </p>--}}
{{--        </a>--}}

{{--        <a href="#" class="card credentialing">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/haircut-logo.png') }}" class="service-logo" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Haircut</p>--}}
{{--            <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>--}}
{{--            <p>Haircut</p>--}}
{{--            <p class="p-text-covid">The service provider offers haircuts for both adults and children.--}}
{{--            </p>--}}
{{--        </a>--}}

{{--        <a href="#" class="card human-resources">--}}
{{--            <div class="overlay-service"></div>--}}
{{--            <div class="circle">--}}
{{--                <img src="{{ asset('images/mani-logo.png') }}" class="service-logo2" alt="">--}}
{{--            </div>--}}
{{--            <p class="book" style="font-size: 14px">Manicure/Pedicure</p>--}}
{{--            <button class="book" onclick="location.href='{{ route('booking-fixed') }}'">Book Now</button>--}}
{{--            <p>Manicure/Pedicure</p>--}}
{{--            <p class="p-text-covid">--}}
{{--                The service includes cleaning, shaping, polishing, and applying acrylic or get nail polish.--}}
{{--            </p>--}}
{{--        </a>--}}
    </div>
</x-guest-layout>
