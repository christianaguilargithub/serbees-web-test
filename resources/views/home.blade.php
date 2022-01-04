@section('preload')
    <link rel="preload" as="style" href="{{ asset('css/homepage.css') }}">
    <link rel="preload" as="style" href="{{ asset('css/faq.css') }}">

    <link rel="preload" as="image" href="{{ asset('images/cellphone.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/how-it-works.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/how-it-works2.png') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}" type="text/css">
@endsection
<x-guest-layout>
    <div class="search-service">
        Book a service now!
        <form>
            <input placeholder="  Do you need a service?" id="search-service"/>
            <button class="book">Book Now</button>
        </form>
    </div>
    <div class="top-page">
        <div class="top-page-left">
            <div class="top-page-text">
                Offer & Avail Services <br>Instantly Any Kind, <br>Anywhere
                <p class="words">Serbees is the best service marketplace that connects clients to fully-vetted service providers. If you’re looking for affordable and quality service, Serbees is an all-in-one mobile app which can help you find the most suitable provider anytime</p>

            </div>
        </div>
        <div class="cell-image">
            <img class="cp" src="{{asset('images/cellphone.png')}}" alt="">
        </div>
    </div>
    <section id="how">
        <div class="bottom-page">
            <img class="how" src="{{asset('images/how-it-works.png')}}" alt="">
            <img class="how2" src="{{asset('images/how-it-works2.png')}}" alt="">
        </div>
    </section>
    <section id="faq">
        <div class="body-faq-desktop-container">
            <div class="faq-container">
                <div class="faq">
                    <p id="dl">Frequently Asked Questions</p>
                    <h1 class="faq-h1" style="margin-top: 40px;">How Does Serbees Works?</h1>
                    <p class="faq-p">SERBEES is an all-in-one platform for services na bukas sa provider ng LAHAT
                        ng serbisyo mapa
                        <br>
                        delivery guy, driver, cleaner, tutor, make-up artist, barbero,
                        manikurista, fitness instructor,
                        <br>
                        masahahista, sports instructor o professional.
                    </p>
                    <p class="faq-p">
                        Gamit ang App, ikaw ay awtomatikong makakatanggap ng notifications sa tuwing may
                        <br>
                        maghahanap ng serbisyong iyong ini-register at di tulad ng iba, sa SERBEES walang
                        commission
                        <br>
                        charges. Buong makukuha ang perang pinaghirapan. <a href="#" class="faq-terms">Download the App Now</a>
                    </p>
                    <hr class="thin-hr" style="margin-bottom: 40px;margin-top:40px;" >
                    <h1 class="faq-h1">How do I register as a Service Provider?</h1>
                    <p class="faq-p">To register as a service provider, please fill up the form in the
                        <a href="#" class="faq-terms">Registration Page</a>  of our website or
                        <br>
                        download the app and register from there.</p>
                    <hr class="thin-hr" style="margin-bottom: 40px">
                    <h1 class="faq-h1">How do I earn cash incentives?</h1>
                    <p class="faq-p">Ang Serbees ay isang social enterprise na nagnanais bigyang oportunidad ang
                        lahat na mapabilis
                        <br>
                        kumita gamit ang App.
                        <br><br>
                        Dahil dito magbibigay ng P250 cash incentive ang Serbees sa tuwing makakapagimbita
                        ng ibang
                        <br>
                        Serbees Providers na mag register sa App. Kailangang i-type ng inimbitahan
                        ang iyong Serbees ID
                        <br>
                        sa sign-up page.
                        <br><br>
                        Ang incentives ay makikita sa iyong profile at ma-eencash gamit ang App
                        thru our payment
                        <br>
                        channels.
                    </p>
                    <!-- <h1 class="faq-h1">What are the services included in Serbees?</h1>
                    <p class="faq-p">Here are is the <a href="#" class="faq-terms">List of Services</a> that you can provide with the Serbees Provider App         </p>
                    <hr class="thin-hr" style="margin-bottom: 60px">     -->
                </div>
            </div>
        </div>
    </section>

    <div class="newsletter-container">
        <div class="newsletter-label">
            Stay up to date with Serbees
        </div>
        <div class="newsletter-content">
            <input class="newsletter-input" type="text" placeholder="  Enter Email">
            <button class="newsletter-btn">Subscribe</button>
        </div>
    </div>
</x-guest-layout>
