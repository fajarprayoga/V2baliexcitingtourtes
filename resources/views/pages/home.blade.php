@extends('layouts.app')

    @section('title')
        BaliExcitingTour
    @endsection

@section('content')

    <!-- Header -->
    <header class="text-center">
        <h1>
            {{ __('home.explore_the_bali_island') }}
            <br>
            {{ __('home.with_bali_friend_esa') }}
        </h1>
        <p class="mt-3">
            {{ __('home.the_most_beautiful_island_in') }}
            <br>
            {{ __('home.bali_you_never_see_before') }}
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            {{ __('home.get_started') }}
        </a>
    </header>

    <!-- Main -->
    <main>
        <!-- Container -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>50+</h2>
                    <p>{{ __('home.hotels') }}</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12+</h2>
                    <p>{{ __('home.mountain') }}</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>100+</h2>
                    <p>{{ __('home.beach') }}</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>50+</h2>
                    <p>{{ __('home.waterfall')}}</p>
                </div>
            </section>
        </div>

        <!-- Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>{{ __('home.popular_destination') }}</h2>
                        <p>
                            {{ __('home.something_that_you_have_to_try') }}
                            <br>
                            {{ __('home.in_this_island_with_esa') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Content -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries ? Storage::url
                                (json_decode($item->galleries->image)[0]) : '' }}');"
                            >
                            <div class="travel-country">{{ $item->location }}</div>
                            <div class="travel-location">{{ $item->title}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    {{ __('home.view_details') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Networks -->
        <section class="section-networks"id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>{{ __('home.our_networks') }}</h2>
                        <p>
                            {{ __('home.companies_are_trusted_us') }}
                            <br>
                            {{ __('home.more_than_just_a_trip') }}
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/partner1.png') }}" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            {{ __('home.they_are_loving_us') }}
                        </h2>
                        <p>
                            {{ __('home.moments_were_giving_them') }}
                            <br>
                            {{ __('home.the_best_experience') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Content -->
        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center d-flex flex-column">
                            <div class="testimonial-content">
                                <img
                                src="{{ url('frontend/images/testimonial1.png') }}"
                                alt="User"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Vinz VN</h3>
                                <p class="testimonial">
                                    "It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    SUKSMA"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Ubud, Bali
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center d-flex flex-column">
                            <div class="testimonial-content">
                                <img
                                src="{{ url('frontend/images/testimonial2.png') }}"
                                alt="User"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Rip Lonergan</h3>
                                <p class="testimonial">
                                    "The trip was amazing and
                                    i saw something beautiful in
                                    that Island that makes me
                                    want to learn more"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Nusa Penida, Bali
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center d-flex flex-column">
                            <div class="testimonial-content">
                                <img
                                src="{{ url('frontend/images/testimonial3.png') }}"
                                alt="User"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Mandie Loh</h3>
                                <p class="testimonial">
                                    "Thank you Bali Friend Esa for 
                                    keeping us SO entertained during 
                                    our long car rides..."<a href="https://tinyurl.com/t2hc6maj" target="_blank">Read More</a>
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Bedugul, Bali
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                            <a href="{{ url('contactus') }}" target="_blank" class="btn btn-need-help px-4 mt-4 mx-1">
                                {{ __('home.need_help_?') }}
                            </a>
                            @if (!Auth::User())
                                <a href="{{ route('register') }}" class="btn btn-register px-4 mt-4 mx-1">
                                    {{ __('home.register') }}
                                </a>
                            @endif
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
