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
                                    <li class="breadcrumb-item">
                                        {{ __('home.travel_package') }}
                                    </li>
                                    <li class="breadcrumb-item active">
                                        {{ __('home.details') }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- About Travel -->
                    <div class="row">
                        <!-- Card Left -->
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>{{ $item->title }}</h1>
                                <p>
                                   {{ $item->location }}
                                </p>
                                @if($item->galleries)
                                    <div class="gallery">
                                        <div class="xzoom-container">
                                            <img
                                                src="{{ Storage::url(json_decode($item->galleries->image)[1]) }}"
                                                class="xzoom"
                                                id="xzoom-default{{ Storage::url(json_decode($item->galleries->image)[1]) }}"
                                                xoriginal="{{ Storage::url(Storage::url(json_decode($item->galleries->image)[1])) }}"
                                            />
                                        </div>
                                        <div class="xzoom-thumbs">
                                            @foreach (json_decode($item->galleries->image) as $index=>$imageChild)
                                                @if ($index !=0)
                                                <a href="{{ Storage::url($imageChild) }}">
                                                    <img
                                                        style="width: 8vmax; height: 6vmax;"
                                                        src="{{ Storage::url($imageChild) }}"
                                                        class="xzoom-gallery"
                                                        xpreview="{{ Storage::url($imageChild) }}"
                                                    />
                                                </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <h2><b>
                                    {{ __('home.about_travel') }}
                                </b></h2>
                                <p>
                                   {!! $item->about !!}
                                </p>
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <h2><b> {{ __('home.whats_include') }}</b> </h2>
                                        <ul class="list-unstyled">
                                        <p>
                                            {{ __('home.private_guide') }}
                                            <br>
                                            {{ __('home.lunch') }}
                                            <br>
                                            {{ __('home.ac_car') }}
                                            <br>
                                            {{ __('home.guest_pick_up_and_drop_off') }}
                                        </p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <h2><b><font color="#F87B1C">{{ __('home.cancellation') }}</font></b></h2>
                                        <ul class="list-unstyled">
                                        <p>
                                            {{ __('home.receive_a_full_refund_for_cancellations_done_7_days_before_the_experience_date') }}
                                            <br>
                                            {{ __('home.your_experience_can_be_canceled_and_fully_refunded_within_24_hours_of_purchase') }}
                                        </p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="features row">
                                    <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/ic_event.png') }}"
                                        alt=""
                                        class="features-image"
                                        />
                                        <h3>Featured Event</h3>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                        <div class="description">
                                            <img src="{{ url('frontend/images/ic_language.png') }}"
                                            alt=""
                                            class="features-image"
                                            />
                                            <div class="description">
                                                <h3>Language</h3>
                                                <p>{{ $item->language }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                        <div class="description">
                                            <img src="{{ url('frontend/images/ic_foods.png') }}"
                                            alt=""
                                            class="features-image"
                                            />
                                            <div class="description">
                                                <h3>Foods</h3>
                                                <p>{{ $item->foods }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Right -->
                        <div class="col-lg-4">
                            <div class="card card-details card-right">

                                <h2>{{ __('home.trip_information') }}</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">{{ __('home.duration') }}</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->duration }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">{{ __('home.type') }}</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">{{ __('home.price') }}</th>
                                        <td width="50%" class="text-right">
                                            ${{ $item->price }},00 / {{ __('home.person') }}
                                        </td>
                                    </tr>
                                </table>
                                <div class="join-container mt-2">
                                    @auth
                                        <form action="{{ route('checkout_process', $item->id) }}" method="post">
                                            @csrf

                                            <div class="input-group mb-2 mr-sm-2">
                                                <input
                                                    type="text"
                                                    class="form-control datepicker"
                                                    name="departure_date"
                                                    id="departure_date"
                                                    placeholder="{{ __('home.select_date') }}"
                                                    required
                                                />
                                            </div>
                                            <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                                {{ __('home.join_now') }}
                                            </button>
                                        </form>
                                    @endauth
                                    @guest
                                    <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                        {{ __('home.login_or_register_to_join') }}
                                    </a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>




                    {{-- REVIEW --}}
                    <div class="row mt-5">
                        <div class="col-md-4 ">
                            <h3><b>{{ __('home.reviews') }}</b></h3>
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                            </div>
                            <div id="rating_div">
                                <div class="star-rating">
                                    <span class="fa fa-star fa-2x star-input" data-index="0" style="font-size:20px;"></span>
                                    <span class="fa fa-star fa-2x star-input" data-index="1" style="font-size:20px;"></span>
                                    <span class="fa fa-star fa-2x star-input" data-index="2" style="font-size:20px;"></span>
                                    <span class="fa fa-star fa-2x star-input" data-index="3" style="font-size:20px;"></span>
                                    <span class="fa fa-star fa-2x star-input" data-index="4" style="font-size:20px;"></span>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email"><br>
                            <textarea class="form-control" rows="5" placeholder="Write your review here ..." name="remark" id="review" required></textarea><br>
                            <button class="btn btn-default btn-sm btn-info" id="btn_rate">Submit</button>
                    </div>
                </div>

                <div class="container" style="max-width: 960px;">
                    <div class="row" id="kolom-ucapan">
                        <div class="col-sm-12" style="margin-top: 50px;"><h2 class="heading-title text-center cmb-3 aos-init aos-animate" data-aos="zoom-out-up"><strong>
                            {{ __('home.rates_and_reviews') }}</strong></h2>
                            <div class="scroll col-md-12 aos-init aos-animate" data-aos="fade-up">
                                @foreach ($item->rates as $rate)
                                    <div class="box_ucapan">
                                        <div class="row_ucapan">
                                            <div class="ucapan">"{{$rate->review}}"</div>
                                            <div class="quote"></div>
                                            <div class="nama">{{$rate->email}}</div>
                                            <div id="rating_div">
                                                <div class="star-rating p-3">
                                                    <?php $sisaStar = 4 - $rate->star   ?>
                                                    @for ($i = 0; $i <= $rate->star; $i++)
                                                        <span class="fa fa-star" style="font-size:15px; color: #ffa600"></span>
                                                    @endfor
                                                    @for ($i = 0; $i < $sisaStar; $i++)
                                                        <span class="fa fa-star" style="font-size:15px; "></span>
                                                    @endfor
                                                    {{-- <input type="hidden" name="whatever3" class="rating-value" value="1"> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

        var ratedIndex = -1;
        var email = '';
        var review ='';
        $(document).ready(function() {


                $('.datepicker').datepicker({
                    format: 'yyyy-mm-dd',
                    uiLibrary: 'bootstrap4',
                    minDate: new Date(),
                    icons: {
                        rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                    },
                });


            resetStartColor();


            $('.star-input').on('click', function(){
                ratedIndex = parseInt($(this).data('index'));

            })

            $('.star-input').mouseover(function (){
                // console.log('here');
                resetStartColor();

                var currentIndex = parseInt($(this).data('index'));

               setStars(currentIndex);
            })

            $('.star-input').mouseleave(function (){
                resetStartColor();
                if(ratedIndex != -1){
                   setStars(ratedIndex);
                }
            })

            function resetStartColor(){
                $('.star-input').css({'color':'rgb(143, 143, 143)'});
            }
            // zoom image
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                zoomHeight: 500,
                title: false,
                tint: '#071C4D',
                Xoffset: 15
            });


            // email

            $('#email').on('change', function(){
                if(ValidateEmail($('#email').val())){
                    email =$('#email').val();
                }
            })
        });

        function setStars(max){
            for (let i = 0; i <= max ; i++) {
                $('.star-input:eq('+i+')').css('color','yellow');
            }
        }

        function ValidateEmail(mail)
        {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
        {
            return (true)
        }
            alert("You have entered an invalid email address!")
            return (false)
        }

        $('#btn_rate').on('click', function (){

            var review = $('#review').val();

            if(ValidateEmail(email)){
                if(ratedIndex != -1 && review != ''){

                    var data = {
                        star : ratedIndex,
                        review : review,
                        email : email,
                        travel_packages_id : {{$item->id}},
                        _token : "{{csrf_token() }}"
                    }

                    $.ajax({
                        url:' {{ url("/detail/rate")}}',
                        type:'post',
                        data:data,
                        success:function(data) {
                            console.log(data);
                            window.location.reload();
                        },
                        error: function(err) {
                           alert('data review insert failed');
                        }
                    });
                }else{
                    alert('please complete your data');
                }
            }
        })
</script>
@endpush
