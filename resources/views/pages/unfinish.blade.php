@extends('layouts.success')

@section('title','Checkout Success')

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <h1>Oops! Sorry</h1>
                <p>
                    {{ __('home.your_transaction_is_unfinished') }}
                </p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                    {{ __('home.home_page') }}
                </a>
            </div>
        </div>
    </main>
@endsection
