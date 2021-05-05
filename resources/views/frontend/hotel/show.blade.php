@extends('layouts.layout')
@section('hotel')
@php
    $related_hotels = DB::table('hotels')->limit(6)->get();
    // dd($related_cars); 
@endphp
<!-- INNER-BANNER slider -->
<div class="inner-banner style-2">
    <img class="center-image" src="{{ $hotel->hot_image }}">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">

                    <h2 class="color-white">{{$hotel->hot_name}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DETAIL WRAPPER -->
<div class="detail-wrapper">
    <div class="container">
        <div class="detail-header">
            <div class="row">
                <div class="col-xs-12 col-sm-8">

                    <h2 class="detail-title color-dark-2"> {{$hotel->hot_name}}</h2>
                    <div class="detail-rate rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Rewies</i>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="detail-price color-dark-2">price from <span class="color-dr-blue"> $50</span>
                        /person</div>
                </div>
            </div>
        </div>
        <div class="row padd-90">
            <div class="col-xs-12 col-md-8">
                <div class="detail-content color-1">
                    <div class="detail-top slider-wth-thumbs style-2">
                        <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1"
                            data-speed="500" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                {{-- @foreach(json_decode($hotel->hot_image, true) as $images)
                                @endforeach --}}
                                <div class="swiper-slide active" data-val="0">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}"alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                            </div>
                            <div class="pagination pagination-hidden"></div>
                        </div>
                        <div class="swiper-container thumbnails" data-autoplay="0" data-loop="0" data-speed="500"
                            data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-sm-slides="5"
                            data-md-slides="5" data-lg-slides="5" data-add-slides="5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide current active" data-val="0">
                                    <img class="img-responsive img-full"src="{{$hotel->hot_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="{{$hotel->hot_image}}" alt="">
                                </div>
                            </div>
                            <div class="pagination hidden"></div>
                        </div>
                    </div>

                    <!------------------------------------------tabs ---------------------------->
                    <div class="detail-content-block">
                        <div class="simple-tab color-1 tab-wrapper">
                            <div class="tab-nav-wrapper">
                                <div class="nav-tab  clearfix">
                                    <div class="nav-tab-item active">
                                        Hotel Description
                                    </div>
                                    <div class="nav-tab-item">
                                        Details
                                    </div>
                                    <div class="nav-tab-item">
                                        Reviews
                                    </div>
                                    <div class="nav-tab-item">
                                        Booking
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content clearfix">
                                <div class="tab-info active ">
                                    <h3>General Information About {{$hotel->hot_name}}</h3>
                                    <p> {!! $hotel->hot_details !!}
                                    </p>
                                    <img class="right-img" src="{{$hotel->hot_image}}" alt="">
                                    <h4>interesting for you </h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                    </p>
                                    <ul>
                                        <li>Shopping history</li>
                                        <li>Hot offers according your settings</li>
                                        <li>Multi-product search</li>
                                        <li>Opportunity to share with friends</li>
                                    </ul>
                                    <h3>you need to know</h3>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                        Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p>
                                </div>
                                <div class="tab-info">
                                    <h3>General Information About tour</h3>
                                    <p>{!! $hotel->hot_details !!}
                                    </p>
                                    <ul>
                                        <li>Hotel Price : {{$hotel->hot_price}}EGP</li>
                                        @if ($hotel->discount !=0)
                                        <li>Discount : {{$hotel->discount}}%</li>
                                        <li>Hotel price after discount : {{$hotel->hot_price-($hotel->hot_price*$hotel->discount/100)}}EGP</li>

                                        @endif
                                    </ul>
                                    <h4>interesting for you</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                    </p>
                                    <h3>you need to know</h3>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                        Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p>
                                </div>
                                <div class="tab-info">

                                    @livewire('hotel-ratings', ['hotel' => $hotel], key($hotel->id))
                                </div>
                                <div class="tab-info">
                                    <form class="simple-from" name="information"
                                        onsubmit="return validateFormTour()" method="post" action="{{route('bookhotel.store' ,["id" =>$hotel] )}}"  >
                                        {{-- action="{{route('bookhotel.store' ,["id" =>$hotel] )}}" --}}
                                        @csrf

                                        <div class="simple-group">
                                            <h3 class="small-title color-dr-blue-2 ">Hotel Selection</h3>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="form-label color-dark-2">Check In</div>
                                                        <div class="input-style-1 b-50 brd-0 type-2 color-3">
                                                            <input type="date" placeholder="Mm/Dd/Yy" class="" name="check_in_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="form-label color-dark-2">Check Out</div>
                                                        <div class="input-style-1 b-50 brd-0 type-2 color-3">
                                                            <input type="date" placeholder="Mm/Dd/Yy" name="check_out_date" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                               {{-- <div class="col-xs-12 col-sm-6">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="form-label color-dark-2">Number of persons</div>
                                                        <div class="drop-wrap drop-wrap-s-4 color-5">
                                                            <div class="drop">
                                                                <b id="numPerson">1</b>
                                                                <span id="person"></span>
                                                                <a href="#" class="drop-list"><i
                                                                        class="fa fa-angle-down"></i></a>
                                                                <span>
                                                                    <a href="#" class="numPersonHotel" >1</a>
                                                                    <a href="#" class="numPersonHotel" >2</a>
                                                                    <a href="#" class="numPersonHotel" >3</a>
                                                                    <a href="#" class="numPersonHotel" >4</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  --}}
                                                {{-- <div class="col-xs-12 col-sm-6">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="form-label color-dark-2">Number Of Rooms</div>
                                                        <div class="drop-wrap drop-wrap-s-4 color-5">
                                                            <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <select class=" drop">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1" class="numPersonHotel">One</option>
                                                            <option value="2" class="numPersonHotel">Two</option>
                                                            <option value="3" class="numPersonHotel">Three</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div> --}}


                                                {{-- <div class="col-xs-12 col-sm-12">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="sidebar-text-label bg-dr-blue-2 color-white">
                                                            <span class="h3">Total Price : <span id="totalPrice">
                                                                </span> EGP </span>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <hr>
                                        </div>
                                        <input type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"
                                            value="confirm booking">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="detail-content-block">
                        <h3>If You Have Any Questions</h3>
                        <div class="accordion style-2">
                            <div class="acc-panel">
                                <div class="acc-title"><span class="acc-icon"></span>How can I manage Book tours?
                                </div>
                                <div class="acc-body">
                                    <h5>metus Aenean eget massa</h5>
                                    <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta
                                        mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.
                                        Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum
                                        tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis
                                        dignissim.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <ul>
                                                <li>Shopping history</li>
                                                <li>Hot offers according your settings</li>
                                                <li>Multi-product search</li>
                                                <li>Opportunity to share with friends</li>
                                                <li>User-friendly interface</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <ul>
                                                <li>Shopping history</li>
                                                <li>Hot offers according your settings</li>
                                                <li>Multi-product search</li>
                                                <li>Opportunity to share with friends</li>
                                                <li>User-friendly interface</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acc-panel">
                                <div class="acc-title"><span class="acc-icon"></span>How to book rooms ?</div>
                                <div class="acc-body">
                                    <h5>metus Aenean eget massa</h5>
                                    <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta
                                        mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.
                                        Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum
                                        tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis
                                        dignissim.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <ul>
                                                <li>Shopping history</li>
                                                <li>Hot offers according your settings</li>
                                                <li>Multi-product search</li>
                                                <li>Opportunity to share with friends</li>
                                                <li>User-friendly interface</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <ul>
                                                <li>Shopping history</li>
                                                <li>Hot offers according your settings</li>
                                                <li>Multi-product search</li>
                                                <li>Opportunity to share with friends</li>
                                                <li>User-friendly interface</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acc-panel">
                                <div class="acc-title"><span class="acc-icon"></span>How do I use my credt card?
                                </div>
                                <div class="acc-body">
                                    <h5>metus Aenean eget massa</h5>
                                    <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta
                                        mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.
                                        Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum
                                        tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis
                                        dignissim.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <ul>
                                                <li>Shopping history</li>
                                                <li>Hot offers according your settings</li>
                                                <li>Multi-product search</li>
                                                <li>Opportunity to share with friends</li>
                                                <li>User-friendly interface</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <ul>
                                                <li>Shopping history</li>
                                                <li>Hot offers according your settings</li>
                                                <li>Multi-product search</li>
                                                <li>Opportunity to share with friends</li>
                                                <li>User-friendly interface</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--block detalis-->
            <div class="col-xs-12 col-md-4">
                <div class="right-sidebar">
                    <iframe class="padd-40" src="{{$hotel->hot_address}}" height="250px" width="100%" allowfullscreen="" loading="lazy"></iframe>

                    <div class="help-contact bg-grey-2">
                        <h4 class="color-dark-2">Need Help?</h4>
                        <p class="color-grey">If you want any help, questions or inquiries, please call us on our
                            numbers or contact technical support </p>
                        <a class="help-phone color-dark-2 link-dr-blue" href="tel:0200059600"><img
                                src="img/detail/phone24-dark.png" alt=""> 01148603669</a>
                        <a class="help-mail color-dark-2 link-dr-blue" href="mailto:tours@minya.com"><img
                                src="img/detail/letter-dark.png" alt="">OTA_Travalagency@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!--block hotels-->

    </div>
</div>
</div>
<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>popular Hotels</h2>
                    <p class="color-grey">popular Hotels popular tourspopular tourspopular tourspopular tourspopular
                        tours</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="arrows">
                <div class="swiper-container hotel-slider" data-autoplay="5000" data-loop="1" data-speed="1000"
                    data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                    data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        @foreach ($related_hotels as $hotels)
                        <div class="swiper-slide">
                            <div class="hotel-item">
                                <div class="radius-top">
                                    <img src="{{$hotels->hot_image}}" alt="">
                                    <div class="price price-s-1">$27</div>
                                </div>
                                <div class="title clearfix">
                                    <h4><b>{{$hotels->hot_name}}</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>48 rewies</i>
                                    </div>
                                    <a href="{{route('hotels.show' , $hotels->id)}}" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination"></div>
                    <div class="swiper-arrow-left arrows-travel"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right arrows-travel"><span class="fa fa-angle-right"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
