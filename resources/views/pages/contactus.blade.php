@extends('layouts.app')

@section('title','Detail Travel')

@section('content')
    <main>
        <section class="section-details-header"></section>
            <section class="section-details-content">
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">
                                        {{ __('home.CONTACT_US') }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- About Travel -->
                    <div class="row">
                        <!-- Card Left -->
                        <div class="offset-lg-2"></div>
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>{{ __('home.please_fill_out_the_contact_form_below') }}</h1>
                                <p>{{ __('home.have_any_question_or_feedback') }}</p>
                                <form action="{{route('contactUs.send')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="name" class="form-label">{{ __('home.name') }}</label>
                                      <input required type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('home.email_address') }}</label>
                                        <input required type="email" class="form-control" id="email" name="email" aria-describedby="email">
                                        <div id="email" class="form-text">
                                            <p>{{ __('home.we_never_share_your_email_with_anyone_else') }}.</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Phone" class="form-label">{{ __('home.phone') }}</label>
                                        <input required type="number" class="form-control" name="phone" id="Phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">{{ __('home.subject') }}</label>
                                        <input required type="text" class="form-control" name="subject" id="subject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">{{ __('home.message') }}</label>
                                       <textarea required name="message" class="form-control" id="message" cols="30" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('home.send') }}</button>
                                  </form>
                            </div>
                        </div>
                        <div class="offset-lg-2"></div>
                </div>
            </section>
    </main>
@endsection
