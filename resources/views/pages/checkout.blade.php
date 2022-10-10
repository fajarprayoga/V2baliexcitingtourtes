@extends('layouts.checkout')

@section('title','Checkout')

@section('content')
    <main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    {{ __('home.travel_package') }}
                                </li>
                                <li class="breadcrumb-item">
                                    {{ __('home.details') }}
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ __('home.checkout') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Card Left -->
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h1>{{ __('home.who_is_going') }}</h1>
                            <p>
                                {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
                            </p>
                            <div class="anttendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>{{ __('home.picture') }}</td>
                                            <td>{{ __('home.name') }}</td>
                                            <td>{{ __('home.nationality') }}</td>
                                            <td>VISA</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($item->details as $detail)
                                            <tr>
                                                <td>
                                                    <img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                                                    height="60" class="rounded-circle"
                                                    />
                                                </td>
                                                <td class="align-middle">
                                                    {{ $detail->username }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $detail->nationality }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ \Carbon\Carbon::createFromDate($detail->doe_passport) >
                                                    \Carbon\Carbon::now() ? 'Active' : 'Inactive'}}
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ route('checkout-remove', $detail->id) }}">
                                                        <img src="{{ url('frontend/images/ic_remove.png') }}" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    No Visitor
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <! -- Add Member-- >
                            <div class="member mt-3">
                                <h2>{{ __('home.add_member') }}</h2>
                                <form class="form-inline" method="post" action="{{ route ('checkout-create', $item->id) }}">
                                    @csrf
                                    <label for="username" class="sr-only">Name</label>
                                    <input
                                        type="text"
                                        name="username"
                                        class="form-control mb-2 mr-sm-2"
                                        id="username"
                                        placeholder="Username"
                                    />

                                    <label for="nationality" class="sr-only">Nationality</label>
                                    <input
                                        type="text"
                                        name="nationality"
                                        class="form-control mb-2 mr-sm-2"
                                        style="width: 50px"
                                        id="nationality"
                                        required
                                        placeholder="{{ __('home.nationality') }}"
                                    />

                                    <label for="is_visa" class="sr-only">Visa</label>
                                    <select
                                        name="is_visa"
                                        id="is_visa"
                                        required
                                        class="custom-select mb-2 mr-sm-2"
                                    >
                                        <option value="VISA" selected>VISA</option>
                                        @if ($item->travel_package->type_travel =='more')
                                        <option value="1">30 Days</option>
                                        @endif
                                        <option value="0">{{ $item->travel_package->type_travel =='bookperday' ? '1 Days' : 'N/A' }}</option>
                                    </select>

                                    <label for="doe_passport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input
                                            type="text"
                                            class="form-control datepicker"
                                            name="doe_passport"
                                            id="doe_passport"
                                            placeholder="DOE Passport"
                                        />
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-3">
                                        {{ __('home.add_now') }}
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    {{ __('home.you_are_only_able_to_invite_member_that_has_registered_in_bali_exciting_tour') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card Right -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>{{ __('home.checkout_information') }}</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">{{ __('home.members') }}</th>
                                    <td width="50%" class="text-right">
                                        {{ $item->details->count() }} {{ __('home.person') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">{{ __('home.departure_date') }}</th>
                                    <td width="50%" class="text-right">
                                        {{ $item->details[0]->departure_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">{{ __('home.additional_visa') }}</th>
                                    <td width="50%" class="text-right">
                                        $ {{ $item->additional_visa }},00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">{{ __('home.trip_price') }}</th>
                                    <td width="50%" class="text-right">
                                        $ {{ $item->travel_package->price }},00 / {{ __('home.person') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">{{ __('home.total_price') }}</th>
                                    <td width="50%" class="text-right">
                                        $ {{ $item->transaction_total }},00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Uniquie)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">$ {{ $item->transaction_total }},</span>
                                        <span class="text-orange">{{ $mtrand = mt_rand(0,99) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (IDR)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">Rp {{ number_format(($item->transaction_total.".".$mtrand) * 14312, 2,".", ",") }} </span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>{{ __('home.payments_instructions') }}</h2>
                            <p class="payment-instructions">
                                {{ __('home.you_will_be_redirected_to_another_page_to_pay_using_midtrans_method') }}
                            </p>
                            <center><img src="{{ url('frontend/images/midtrans-logo.png') }}" class="w-50"></center>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                                {{ __('home.process_payment') }}
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">
                                {{ __('home.cancel_booking') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}"/>
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(Document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                }
            });
        });
    </script>
@endpush
