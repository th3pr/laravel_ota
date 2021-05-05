@php
    // Hotels
    $hotels = DB::table('hotels')->limit(6)->get();
@endphp

@extends('layouts.layout')

@section('home')
    <div class="full-height">
        <div class="video-wrapper">
            <video loop autoplay muted poster="img/259633153.jpg" class="bgvid" id="bgvid">
                <source type="video/mp4" src="{{ asset('video/3.mp4') }}">
                <!-- <source type="video/ogv" src="video/This is Egypt.ogv"> -->
                <!-- <source type="video/webm" src="video/video.webm"> -->
            </video>
            <div class="vertical-align">
                <div class="container">
                    {{-- <div class="tabs-slider">
                        <div class="baner-tabs">
                            <div class="text-center">
                                <div class="drop-tabs">
                                    <b>hotels</b>
                                    <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
                                    <ul class="nav-tabs tpl-tabs tabs-style-1">
                                        <li class="active click-tabs"><a href="#one" data-toggle="tab"
                                                aria-expanded="false">Hotels</a>
                                        </li>
                                        <li class="click-tabs"><a href="#two" data-toggle="tab"
                                                aria-expanded="false">Cars</a></li>
                                        <li class="click-tabs"><a href="#three" data-toggle="tab"
                                                aria-expanded="false">Tours</a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
                                <form action="" method="get" id="one" class="tab-pane active in col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="tabs-block">
                                                        <h5>Your Hotels</h5>
                                                        <div class="input-style">
                                                            <img src="{{ asset('img/loc_icon_small.png') }}" alt="">
                                                            <input type="text" name="search"
                                                                value="{{ request()->query('search') }}"
                                                                placeholder="Enter a destination or hotel name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="tabs-block">
                                                        <h5>hot_type</h5>
                                                        <div class="input-style">
                                                            <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                            <input type="text" placeholder="Hotel Type" class="datepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="tabs-block">
                                                        <h5>Check Out</h5>
                                                        <div class="input-style">
                                                            <img src="{{ asset('img/calendar_icon.png') }}" alt="">
                                                            <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="tabs-block">
                                                        <h5>Adults</h5>
                                                        <div class="drop-wrap">
                                                            <div class="drop">
                                                                <b>01 adult</b>
                                                                <a href="#" class="drop-list"><i
                                                                        class="fa fa-angle-down"></i></a>
                                                                <span>
                                                                    <a href="#">01 adult</a>
                                                                    <a href="#">02 adult</a>
                                                                    <a href="#">03 adult</a>
                                                                    <a href="#">04 adult</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                    <div class="tabs-block">
                                                        <h5>Rooms</h5>
                                                        <div class="drop-wrap">
                                                            <div class="drop">
                                                                <b>01 room</b>
                                                                <a href="#" class="drop-list"><i
                                                                        class="fa fa-angle-down"></i></a>
                                                                <span>
                                                                    <a href="#">01 room</a>
                                                                    <a href="#">02 room</a>
                                                                    <a href="#">03 room</a>
                                                                    <a href="#">04 room</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="c-button b-60 bg-aqua hv-transparent">search
                                                    now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="{{route('searchTour')}}" method="get" id="two" class=" tab-pane col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                    <div>
                                        <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                <div class="tabs-block">
                                                    <h5>Your Cars</h5>
                                                    <div class="input-style">
                                                        <img src="{{ asset('img/loc_icon_small.png') }}" alt="">
                                                        <input type="text"  name="search" value="{{ request()->query('search') }}" placeholder="Enter a destination or flight name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                                <div class="tabs-block">
                                                    <h5>Check In</h5>
                                                    <div class="input-style">
                                                        <img src="{{ asset('img/calendar_icon.png') }}" alt="">
                                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                                <div class="tabs-block">
                                                    <h5>Check Out</h5>
                                                    <div class="input-style">
                                                        <img src="{{ asset('img/calendar_icon.png') }}" alt="">
                                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                <div class="tabs-block">
                                                    <h5>Kids</h5>
                                                    <div class="drop-wrap">
                                                        <div class="drop">
                                                            <b>01 kids</b>
                                                            <a href="#" class="drop-list"><i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <span>
                                                                <a href="#">01 kids</a>
                                                                <a href="#">02 kids</a>
                                                                <a href="#">03 kids</a>
                                                                <a href="#">04 kids</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                <div class="tabs-block">
                                                    <h5>Adults</h5>
                                                    <div class="drop-wrap">
                                                        <div class="drop">
                                                            <b>01 adult</b>
                                                            <a href="#" class="drop-list"><i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <span>
                                                                <a href="#">01 adult</a>
                                                                <a href="#">02 adult</a>
                                                                <a href="#">03 adult</a>
                                                                <a href="#">04 adult</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                <div class="tabs-block">
                                                    <h5>Rooms</h5>
                                                    <div class="drop-wrap">
                                                        <div class="drop">
                                                            <b>01 room</b>
                                                            <a href="#" class="drop-list"><i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <span>
                                                                <a href="#">01 room</a>
                                                                <a href="#">02 room</a>
                                                                <a href="#">03 room</a>
                                                                <a href="#">04 room</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                                <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i
                                                        class="fa fa-search"></i><span>search now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                <form action="" method="get" id="three" class="tab-pane col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                    <div >
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                <div class="tabs-block">
                                                    <h5>Your Tours</h5>
                                                    <div class="input-style">
                                                        <img src="{{ asset('img/loc_icon_small.png') }}" alt="">
                                                        <input type="text"   name="search" value="{{ request()->query('search') }}" placeholder="Enter a destination or car name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                                <div class="tabs-block">
                                                    <h5>Check In</h5>
                                                    <div class="input-style">
                                                        <img src="{{ asset('img/calendar_icon.png') }}" alt="">
                                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                                <div class="tabs-block">
                                                    <h5>Check Out</h5>
                                                    <div class="input-style">
                                                        <img src="{{ asset('img/calendar_icon.png') }}" alt="">
                                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                <div class="tabs-block">
                                                    <h5>Kids</h5>
                                                    <div class="drop-wrap">
                                                        <div class="drop">
                                                            <b>01 kids</b>
                                                            <a href="#" class="drop-list"><i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <span>
                                                                <a href="#">01 kids</a>
                                                                <a href="#">02 kids</a>
                                                                <a href="#">03 kids</a>
                                                                <a href="#">04 kids</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                <div class="tabs-block">
                                                    <h5>Adults</h5>
                                                    <div class="drop-wrap">
                                                        <div class="drop">
                                                            <b>01 adult</b>
                                                            <a href="#" class="drop-list"><i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <span>
                                                                <a href="#">01 adult</a>
                                                                <a href="#">02 adult</a>
                                                                <a href="#">03 adult</a>
                                                                <a href="#">04 adult</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                <div class="tabs-block">
                                                    <h5>Rooms</h5>
                                                    <div class="drop-wrap">
                                                        <div class="drop">
                                                            <b>01 room</b>
                                                            <a href="#" class="drop-list"><i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <span>
                                                                <a href="#">01 room</a>
                                                                <a href="#">02 room</a>
                                                                <a href="#">03 room</a>
                                                                <a href="#">04 room</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                                <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i
                                                        class="fa fa-search"></i><span>search now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="main-wraper bg-grey-2 padd-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>Minya's Best destinations</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                            Suspendisse id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count2 = 0; ?>
                @foreach ($tours as $tour)
                    <?php if ($count2 == 6) {
                    break;
                    } ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="radius-mask tour-block hover-aqua">
                            <div class="clip">
                                <div class="bg bg-bg-chrome act" style="background-image:url({{ $tour->tour_image }})">
                                </div>
                            </div>
                            <div class="tour-layer delay-1"></div>
                            <div class="tour-caption">
                                <div class="vertical-align">
                                    <a href="{{ route('tours.show', $tour) }}">
                                        <h3 class="hover-it">{{ $tour->tour_name }}</h3>
                                    </a>
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <h4>from <b>$ {{ $tour->tour_price }}</b></h4>
                                </div>
                                <div class="vertical-bottom">
                                    <div class="fl">
                                        <div class="tour-info">
                                            <img src="img/people_icon.png" alt="">
                                            <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                                adults, <strong class="color-white">1</strong> kids</span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="img/calendar_icon.png" alt="">
                                            <span class="font-style-2 color-grey-4">{{ $tour->start_date }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('tours.show', $tour) }}"
                                        class="c-button b-50 bg-aqua hv-transparent fr"><span>view more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count2++; ?>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Section -->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h2>we are the best</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                    <div class="icon-block style-5">
                        <img class="icon-img" src="img/inner/m_icon_1.png" alt="">
                        <h5 class="icon-title color-dark-2">happy clients</h5>
                        <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                            pretium. Donec fermentum, ex non placerat.</div>
                    </div>
                </div>
                <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                    <div class="icon-block style-5">
                        <img class="icon-img" src="img/inner/m_icon_2.png" alt="">
                        <h5 class="icon-title color-dark-2">amazing tour</h5>
                        <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                            pretium. Donec fermentum, ex non placerat.</div>
                    </div>
                </div>
                <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                    <div class="icon-block style-5">
                        <img class="icon-img" src="img/inner/m_icon_3.png" alt="">
                        <h5 class="icon-title color-dark-2">support cases</h5>
                        <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                            pretium. Donec fermentum, ex non placerat.</div>
                    </div>
                </div>
                <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                    <div class="icon-block style-5">
                        <img class="icon-img" src="img/inner/m_icon_4.png" alt="">
                        <h5 class="icon-title color-dark-2">in bussines</h5>
                        <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                            pretium. Donec fermentum, ex non placerat.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section -->
    <div class="main-wraper">
        <div class="clip">

            <div class="bg bg-bg-chrome" style="background-image:url(img/11.jpg)">
            </div>
        </div>
        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1"
            id="tour-slide">
            <div class="swiper-wrapper">
                <?php $count2 = 0; ?>
                @foreach ($hotels as $hotel)
                    <?php if ($count2 == 6) {
                    break;
                    } ?>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-tour padd-90-90">
                                        <h3>from {{ $hotel->hot_price }} EGP</h3>
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <a href="{{route('hotels.show' , $hotel->id)}}"><h2>{{ $hotel->hot_name }}</h2></a>
                                        <h5>{{ $hotel->hot_type }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count2++; ?>
                @endforeach
            </div>
            <div class="pagination poin-style-1"></div>
        </div>
    </div>

    <div class="main-wraper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>Beautiful Nile Trips</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla</p>
                    </div>
                </div>
            </div>
            <div class="row col-no-padd">
                @foreach ($hotels as $hotel)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="photo-block hover-aqua">
                            <div class="tour-layer delay-1"></div>
                            <img src="{{ $hotel->hot_image }}" alt="">
                            <div class="vertical-align">
                                <div class="photo-title">
                                    <h4 class="delay-1"><b>Only <span class="color-aqua">$
                                                {{ $hotel->hot_price }}</span></b></h4>
                                    <a class="hover-it" href="{{route('hotels.show' , $hotel->id)}}">
                                        <h3>{{ $hotel->hot_name }}</h3>
                                    </a>
                                    <p>Discount</p>
                                    <h4 class="delay-1">{{ $hotel->discount }}%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count2++; ?>
                @endforeach

            </div>
        </div>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>Special Offers</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-baner arrows">
                    <div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500"
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                        data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                        <div class="swiper-wrapper">
                            <?php $count_tours = 0; ?>
                            @foreach ($tours as $tour)
                                <?php if ($count_tours == 6) {
                                break;
                                } ?>
                                <div class="swiper-slide" data-val="0">
                                    <div class="offers-block radius-mask">
                                        <div class="clip">
                                            <div class="bg bg-bg-chrome act"
                                                style="background-image:url({{ $tour->tour_image }})">
                                            </div>
                                        </div>
                                        <div class="tour-layer delay-1"></div>
                                        <div class="vertical-top">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <h3>{{ $tour->tour_name }}</h3>
                                        </div>
                                        <div class="vertical-bottom">
                                            <ul class="offers-info">
                                                <li><b>{{ App\Tour::count() }}</b>tours</li>
                                                <li><b>{{ App\Hotel::count() }}</b>hotels</li>
                                            </ul>
                                            <p>{!! Str::limit($tour->tour_details, 100) !!}</p>
                                            <a href="{{ route('tours.show', $tour) }}"
                                                class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
                                        </div>
                                    </div>
                                </div>
                                <?php $count_tours++; ?>
                            @endforeach
                        </div>
                        <div class="pagination  poin-style-1 pagination-hidden"></div>
                    </div>
                    <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
                </div>
            </div>
        </div>
    </div>
@endsection
