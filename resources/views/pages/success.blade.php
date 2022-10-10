@extends('layouts.success')

@section('title','Checkout Success')

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
                <h1>Yay! {{ __('home.success') }}</h1>
                <p>
                    {{ __('home.we_have_sent_you_email_for_trip_instruction') }}
                    <br>
                    {{ __('home.please_check_and_read_it_as_well') }}
                </p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                    {{ __('home.home_page') }}
                </a>
            </div>
        </div>
    </main>
@endsection
