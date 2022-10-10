@extends('layouts.app')

@section('title','Detail Travel')

@section('content')
    <header class="text-center">
        <h1>
            {{ __('home.the_most_beautiful_island_in') }}
            <br>
            {{ __('home.bali_you_never_see_before') }}
        </h1>
        <p class="mt-3">
            {{ __('home.we_will_giving_you') }}
            <br>
            {{ __('home.the_best_experience_with_esa') }}
        </p>

        @auth
            <form action="{{ route('checkout_process', $bookperday->id) }}" method="post">
                @csrf
                <div class="row m-0 p-0 col-12">
                    <div class="offset-md-5"></div>
                    <div class="col-md-2 input-group mb-2 mr-sm-2n">
                        <input
                            type="text"
                            class="form-control datepicker"
                            name="departure_date"
                            id="departure_date"
                            placeholder="{{ __('home.select_date') }}"
                            required
                        />
                    </div>
                    <div class="offset-md-5"></div>
                </div>
                <button class="btn btn-get-started px-4 mt-4" type="submit">
                    {{ __('home.start_booking_now') }}
                </button>
            </form>
        @endauth
        @guest
        <a href="{{ route('login') }}" class="btn btn-get-started px-4 mt-4">
            {{ __('home.login_or_register_to_join_for_booking') }}
        </a>
        @endguest
    </header>

    <main>
         <div class=" bookperday">
            <section class="section-bookperday row justify-content-center">
                <h1>{{ __('home.tour_gallery') }}</h1>
            </section>
            <h5><center>{{ __('home.the_moment_we_will_give_you_nice_tour_in_bali') }}.</center></h5>

                <div class=" row m-0  " >
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Kuta<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/kuta1.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Pandawa<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/pandawa.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Bali Safari Park<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/image4.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Mount Batur<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/batur.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Double Six<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/66.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Sanur<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/sanur.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Rock Bar<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/rockbar.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Uluwatu<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/uluwatu.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Tirta Empul<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/tirtaempul.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Kecak Dance<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/kecak.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Bali ATV<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/baliatv.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>GWK<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/gwk.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Tegenungan Waterfall<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/gianyar.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Sukasada<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/sukasada.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Paragliding<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/paralayang.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Penglipuran Village<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/penglipuran.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Lovina<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/lovina.jpg') }}" alt="Logo Partner" class="img-galery">
                    </div>
                    <div class="item-galery col-6 col-md-2 ">
                        <div class="title-image">
                            <p>Bali Surfing<p>
                        </div>
                        <img src="{{ url('frontend/images/BookPerDay/surf.jpg') }}" alt="Logo Partner" class="img-galery">
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
            {{-- </div> --}}
         </div>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}"/>
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}"/>
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                minDate: new Date(),    
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                },
            });

            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
