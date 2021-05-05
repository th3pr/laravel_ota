@extends('layouts.layout')
@section('cars')
    <div class="inner-banner">
        <img class="center-image" src="{{ asset('img/slider-1.jpg') }}" alt="">
        <div class="vertical-align">
            <div class="container">

                <h2 class="color-white">all Cars for you</h2>

            </div>
        </div>
    </div>

    <div class="main-wraper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>Types Of Cars</h2>
                        <p class="color-grey">Car</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-baner arrows">
                    <div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500"
                        data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                        data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                        <div class="swiper-wrapper">
                            <?php $count = 0; ?>
                            @foreach ($cars as $item)
                                <?php if ($count == 8) {
                                break;
                                } ?>

                                <div class="swiper-slide" data-val="<?php echo $count; ?>">
                                    <div class="offers-block radius-mask">
                                        <div class="clip">
                                            <div class="bg bg-bg-chrome act"
                                                style="background-image:url({{ $item->car_image }})">
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
                                            <h3>{{ $item->car_model }}</h3>
                                        </div>
                                        <div class="vertical-bottom">
                                            {{-- <ul class="offers-info">
                                                <li><b>35</b>tours</li>
                                                <li><b>24</b>cities</li>
                                                <li><b>90</b>hotels</li>
                                            </ul> --}}
                                            <p>Rose Al-Youssef Gate</p>
                                            <a href="{{ route('cars.show', $item) }}"
                                                class="c-button bg-aqua hv-aqua-o b-40"><span>Book
                                                    Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <?php $count++; ?>
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

    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>The Best Car</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                            Suspendisse id tor.</p>
                    </div>
                </div>
            </div>
            {{-- Start --}}
        </div>
    </div>


    <!-- TOP PREVIEW-->
    <div class="top-preview row no-margin">
        <?php $count = 0; ?>
        @foreach ($cars as $item)
            <?php if ($count == 8) {
            break;
            } ?>
            <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
                <div class="tp_entry style-2">
                    <div class="tp_image">
                        <img class="center-image" src="{{ $item->car_image }}" alt="">
                    </div>
                    <div class="tp_content">
                        <div class="rate-wrap clearfix">
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <i>485 rewies</i>
                            <div class="tp_price">{{ $item->car_price }} EGP</div>
                        </div>
                        <h4><b><a href="{{ route('cars.show', $item) }}">{{ $item->car_model }}</a></b></h4>
                        <div class="tour-info-line clearfix">
                            <div class="tour-info fl">
                                <img src="{{ asset('img/calendar_icon_grey.png') }}" alt="">
                                <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                            </div>
                            <div class="tour-info fl">
                                <img src="{{ asset('img/loc_icon_small_grey.png') }}" alt="">
                                <span class="font-style-2 color-grey-3">Adnan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $count++; ?>
        @endforeach
    </div>

    <!------------------------------------------------------cars-------------------------------->
    <div class="list-wrapper bg-grey-2">
        <div class="container">
            <ul class="list-breadcrumb clearfix">

            </ul>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="sidebar style-2 clearfix">
                        <div class="sidebar-block">
                            <h4 class="sidebar-title color-dark-2">search</h4>
                            <div class="search-inputs">
                                <div class="form-block clearfix">
                                    <div class="input-style-1 b-50 color-4">
                                        <img src="{{ asset('img/loc_icon_small_grey.png') }}" alt="">
                                        <input type="text" placeholder="Where do you want to go?">
                                    </div>
                                </div>
                                <div class="form-block clearfix">
                                    <div class="input-style-1 b-50 color-4">
                                        <img src="{{ asset('img/calendar_icon_grey.png') }}" alt="">
                                        <input type="text" placeholder="Check In" class="datepicker">
                                    </div>
                                </div>
                                <div class="form-block clearfix">
                                    <div class="input-style-1 b-50 color-4">
                                        <img src="{{ asset('img/calendar_icon_grey.png') }}" alt="">
                                        <input type="text" placeholder="Check Out" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="c-button b-40 bg-dr-blue hv-dr-blue-o" value="search">
                        </div>
                        <!-------------------------------range------------------------------------------------------>

                        <div class="sidebar-block">
                            <h4 class="sidebar-title color-dark-2">price range</h4>
                            <div class="slider-range color-2 clearfix" data-counter="$" data-position="start" data-from="0"
                                data-to="1500" data-min="0" data-max="2000">
                                <div class="range"></div>
                                <input type="text" class="amount-start" readonly value="$0">
                                <input type="text" class="amount-end" readonly value="$1500">
                            </div>
                            <input type="submit" class="c-button b-40 bg-dr-blue hv-dr-blue-o" value="search">
                        </div>
                        <!-------------------------rating------------------------------------------------------------>

                        <div class="sidebar-block">
                            <h4 class="sidebar-title color-dark-2">star rating</h4>
                            <div class="sidebar-rating">
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="star-5" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="star-5">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="star-4" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="star-4">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="star-3" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="star-3">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="star-2" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="star-2">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="star-1" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="star-1">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!---------------------------review---------------------------------------------------------->


                        <!---------------------------------area---------------------------------------------------->

                        <div class="sidebar-block" style="visibility:hidden;">
                            <h4 class="sidebar-title color-dark-2">Area</h4>
                            <div class="sidebar-rating">
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-1" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-1">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Earls Court</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-2" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-2">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Victoria and Westminster</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-3" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-3">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Bloomsbury - Fitzrovia</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-4" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-4">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">West End -Soho</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-5" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-5">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Chelsea - Kensington</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-6" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-6">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Heathrow & Nearby</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-7" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-7">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Gatwick Airport & Nearby</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-8" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-8">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Heathrow & Nearby</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-9" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-9">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">The City</span>
                                    </label>
                                </div>
                                <div class="input-entry color-3">
                                    <input class="checkbox-form" id="area-10" type="checkbox" name="checkbox"
                                        value="climat control">
                                    <label class="clearfix" for="area-10">
                                        <span class="sp-check"><i class="fa fa-check"></i></span>
                                        <span class="checkbox-text">Greenwich</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----------------------sort-------------------------------------------------->
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="list-header clearfix">
                        <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                            <div class="drop">
                                <b>Sort by price</b>
                                <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                <span>
                                    <a href="#">ASC</a>
                                    <a href="#">DESC</a>
                                </span>
                            </div>
                        </div>
                        <!-----------------------sort-------------------------------------------------->
                        <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                            <div class="drop">
                                <b>Sort by ranking</b>
                                <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                <span>
                                    <a href="#">ASC</a>
                                    <a href="#">DESC</a>
                                </span>
                            </div>
                        </div>
                        <!--------------------------------list--------------------------------------------->
                        <div class="list-view-change">
                            <div class="change-grid color-2 fr"><i class="fa fa-th"></i></div>
                            <div class="change-list color-2 fr active"><i class="fa fa-bars"></i></div>
                            <div class="change-to-label fr color-grey-8">View:</div>
                        </div>
                    </div>
                    <div class="list-content clearfix">
                        @foreach ($cars as $item)
                            <div class="list-item-entry">
                                <div class="hotel-item style-8 bg-white">
                                    <div class="table-view">
                                        <div class="radius-top cell-view">
                                            <img src="{{ $item->car_image }}" alt="">
                                            @if ($item->discount != 0)
                                                <div class="price price-s-3 red tt">-{{ $item->discount }}%</div>
                                            @endif
                                        </div>
                                        <div class="title hotel-middle clearfix cell-view">
                                            @if ($item->discount != 0)
                                                <div class="hotel-person color-dark-2 list-hidden">from
                                                    <del>{{ $item->car_price }} EGP</del></div>
                                            @endif

                                            <div class="hotel-person color-dark-2 list-hidden">
                                                <span>{{ $item->car_price - ($item->car_price * $item->discount) / 100 }}
                                                    EGP</span> </div>
                                            <div class="rate-wrap">
                                                <div class="rate">
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                </div>
                                                <i>44 rewies</i>
                                            </div>
                                            <h4><b><a
                                                        href="{{ route('hotels.show', $item) }}">{{ $item->car_model }}</a></b>
                                            </h4>
                                            <p class="f-14">{!! Str::limit($item->car_details, 150) !!} </p>
                                            <div class="hotel-icons-block grid-hidden">
                                                <img class="hotel-icon" src="{{ asset('img/tour_list/hotel_icon_1.png') }}"
                                                    alt="">
                                                <img class="hotel-icon" src="{{ asset('img/tour_list/hotel_icon_2.png') }}"
                                                    alt="">
                                                <img class="hotel-icon" src="{{ asset('img/tour_list/hotel_icon_3.png') }}"
                                                    alt="">
                                                <img class="hotel-icon" src="{{ asset('img/tour_list/hotel_icon_4.png') }}"
                                                    alt="">
                                                <img class="hotel-icon" src="{{ asset('img/tour_list/hotel_icon_5.png') }}"
                                                    alt="">
                                            </div>
                                            <a href="hotel_list.html"
                                                class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
                                            <a href="hotel_list.html"
                                                class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src=""
                                                    alt="">view on map</a>
                                        </div>
                                        <div class="title hotel-right bg-dr-blue clearfix cell-view">
                                            @if ($item->discount != 0)
                                                <div class="hotel-person color-white">from <del>{{ $item->car_price }}
                                                        EGP</del></div>
                                            @endif
                                            <div class="hotel-person color-white">
                                                {{ $item->car_price - ($item->car_price * $item->discount) / 100 }} EGP</div>

                                            <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
                                                href="{{ route('cars.show', $item) }}">BOOK</a>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        @endforeach
                    </div>
                </div>
            </div>


            <div class="c_pagination clearfix padd-120">
                {{-- <a href="#" class="c-button b-40 bg-dr-blue hv-dr-blue-o fl">prev page</a>
            <a href="#" class="c-button b-40 bg-dr-blue hv-dr-blue-o fr">next page</a> --}}
                <ul class="cp_content color-2">

                    {{ $cars->links() }}
                    {{-- {{ $hotels->onEachSide(5)->links() }} --}}

                    <li class="active"><a href="#">1</a></li>


                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">..........</a></li>
                    <li><a href="#">10</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>



@endsection
