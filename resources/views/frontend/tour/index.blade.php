@extends('layouts.layout')
@section('tours')

<div class="top-baner arrows">
    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0"
        data-slides-per-view="1" id="tour-slide-2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="inner-banner style-3">
                    <img class="center-image" src="{{asset('img/30.jpg')}}" alt="">
                    <div class="vertical-align">
                        <div class="container">
                            <h4 class="color-white">hot propose</h4>
                            <div class="rate-wrap clearfix">
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <i>485 Rewies</i>
                            </div>
                            <h2 class="color-white">Tall Elamarna</h2>
                            <h3 class="color-white"><span>from $960 /</span> person</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inner-banner style-3">
                    <img class="center-image" src="{{asset('img/tour_list/image/6.jpg')}}" alt="">
                    <div class="vertical-align">
                        <div class="container">
                            <h4 class="color-white">hot propose</h4>
                            <div class="rate-wrap clearfix">
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <i>485 Rewies</i>
                            </div>
                            <h2 class="color-white">Tuna Elgabel</h2>
                            <h3 class="color-white"><span>from $960 /</span> person</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inner-banner style-3">
                    <img class="center-image" src="{{asset('img/1.jpg')}}" alt="">
                    <div class="vertical-align">
                        <div class="container">
                            <h4 class="color-white">hot propose</h4>
                            <div class="rate-wrap clearfix">
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <i>485 Rewies</i>
                            </div>
                            <h2 class="color-white">Tall Elamarna</h2>
                            <h3 class="color-white"><span>from $960 /</span> person</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination pagination-hidden poin-style-1"></div>
    </div>
    <div class="arrow-wrapp arr-s-6">
        <div class="cont-1170">
            <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
            <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
        </div>
    </div>
</div>

<!-- Tour Body -->

<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h2>best tour for you </h2>
                    <p class="color-grey">we introduce to you the best offer of tours , take care these offers will
                        be ended at any time</p>
                </div>
            </div>
        </div>
        <div class="row isotope-container">
            <div class="grid-sizer col-xs-12 col-sm-3"></div>
            <div class="item col-xs-12 col-md-6">
                <div class="row">
                    <div class="top-baner arrows">
                        <div class="swiper-container offers-slider" data-autoplay="0" data-loop="1" data-speed="500"
                            data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-val="0">
                                    <div class="tour-block tour-block-s-6 radius-5 underline-block hover-blue">
                                        <div class="tour-layer delay-1"></div>
                                        <img class="center-image" src="{{asset('img/tour_list/image/2.jpg')}}" alt="">
                                        <div class="tour-caption">
                                            <div class="vertical-align">
                                                <h4>best offer</h4>
                                                <h3 class="underline hover-it">Tuna El Gabel</h3>
                                                <p class="color-blue">-15% off</p>
                                                <a href=""
                                                    class="c-button b-50 bg-white"><span>view more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <div class="tour-block tour-block-s-6 radius-5 underline-block hover-blue">
                                        <div class="tour-layer delay-1"></div>
                                        <img class="center-image" src="{{asset('img/tour_list/image/5.jpg')}}" alt="">
                                        <div class="tour-caption">
                                            <div class="vertical-align">
                                                <h4>best offer</h4>
                                                <h3 class="underline hover-it">Tuna El Gabel</h3>
                                                <p class="color-blue">-15% off</p>
                                                <a href="tours_detail.html"
                                                    class="c-button b-50 bg-white"><span>view more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination  poin-style-1 pagination-hidden"></div>
                        </div>
                        <div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span>
                        </div>
                        <div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xs-12 col-md-6">
                <div class="tour-block tour-block-s-7 radius-5 underline-block hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="{{asset('img/tour_list/image/5.jpg')}}" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h4>sale <span class="color-blue">-20%</span></h4>
                            <h3 class="underline hover-it">Tuna ElGabel</h3>
                            <p class="color-white-light">Cursus libero purus ac cursus ut sed.Nunc cursus libero
                                purus ac<br> congue arcu cursus ut sed vitae pulvinar.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xs-12 col-md-6">
                <div class="tour-block tour-block-s-8 radius-5 hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="{{asset('img/tour_list/image/7.JPG')}}" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <div class="tb_category">hot sale</div>
                            <h3 class="hover-it">Tuna ElGabel</h3>
                            <h4>only from <span class="color-blue">$860</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="list-wrapper bg-grey-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="sidebar bg-white clearfix">
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">search</h4>
                        <div class="search-inputs">
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                                    <input type="text" placeholder="Where do you want to go?">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                                    <input type="text" placeholder="Check In" class="datepicker">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                                    <input type="text" placeholder="Check Out" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">categories</h4>
                        <ul class="sidebar-category color-3">
                            <li class="active">
                                <a class="cat-drop" href="#">tours <span class="fr">(68)</span></a>
                                <ul>
                                    <li><a href="#">sea tours (785)</a></li>
                                    <li><a href="#">food tours (85)</a></li>
                                    <li><a href="#">romantic tours (125)</a></li>
                                    <li><a href="#">honeymoon tours (70)</a></li>
                                    <li><a href="#">mountain tours (159)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">price range</h4>
                        <div class="slider-range color-3 clearfix" data-counter="$" data-position="start"
                            data-from="0" data-to="1500" data-min="0" data-max="2000">
                            <div class="range"></div>
                            <input type="text" class="amount-start" readonly value="$0">
                            <input type="text" class="amount-end" readonly value="$1500">
                        </div>
                        <input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Tour length</h4>
                        <div class="slider-range color-3 clearfix" data-counter=" NIGNT" data-position="end"
                            data-from="0" data-to="7" data-min="0" data-max="9">
                            <div class="range"></div>
                            <input type="text" class="amount-start" readonly value="0 NIGNT">
                            <input type="text" class="amount-end" readonly value="7 NIGNT">
                        </div>
                        <input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="list-header clearfix">
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Sort by price</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
                                {{-- <a href="{{route('tours.asc',$data)}}">ASC</a> --}}
                                <a href="#">DESC</a>
                            </span>
                        </div>
                    </div>
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Sort by ranking</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
                                <a href="">ASC</a>
                                <a href="#">DESC</a>
                            </span>
                        </div>
                    </div>
                    <div class="list-view-change">
                        <div class="change-grid color-3 fr"><i class="fa fa-th"></i></div>
                        <div class="change-list color-3 fr active"><i class="fa fa-bars"></i></div>
                        <div class="change-to-label fr color-grey-8">View:</div>
                    </div>
                </div>
                <div class="list-content clearfix">
                    @foreach ($tours as $item)
                        <div class="list-item-entry">
                            <div class="hotel-item style-9 bg-white">
                                <div class="table-view">
                                    <div class="radius-top cell-view">
                                        <img src="{{$item->tour_image}}" alt="">
                                        <div class="price price-s-3 red tt">-{{$item->tour_discount}}%</div>
                                    </div>
                                    <div class="title hotel-middle cell-view">
                                        <div class="tour-info-line clearfix">
                                            <div class="tour-info fl">
                                                <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                                                <span class="font-style-2 color-grey-5">July <strong>19th
                                                        2021</strong></span>
                                            </div>
                                            <div class="tour-info fl">
                                                <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                                                <span class="font-style-2 color-grey-5">Minya</span>
                                            </div>
                                        </div>
                                        <h4><b>{{ Str::upper($item->tour_name) }}</b></h4>
                                        <div class="rate-wrap list-hidden">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i>
                                        </div>
                                        <p class="f-14 color-grey-3">{!! $item->tour_details !!}</p>
                                        <div class="buttons-block bg-dr-blue-2">
                                            <a href="{{route('tours.show' , $item)}}"
                                                class="c-button b-40 bg-grey-6-t hv-grey-3-t b-1">detail</a>
                                            <a href="tours_detail.html"
                                                class="c-button b-40 bg-white hv-transparent fr">book now</a>
                                        </div>
                                    </div>
                                    <div class="title hotel-right clearfix cell-view grid-hidden">
                                        <div class="rate-wrap">
                                            <i>485 rewies</i>
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                        </div>
                                        @if ($item->tour_discount != 0)
                                        <div class="hotel-person color-dark-2">from <del>{{$item->tour_price}} EGP</del></div>                                                                                            
                                        @endif
                                        <div class="hotel-person color-dark-2">{{$item->tour_price-($item->tour_price*$item->tour_discount/100)}} EGP</div>


                                        {{-- @if ($item->tour_discount != 0)
                                        <div class="hotel-person color-white">{{$item->tour_price-($item->tour_price*$item->tour_discount/100)}} EGP</div>

                                        @endif
                                        <div class="hotel-person color-dark-2"> <span class="color-blue">{{$item->tour_price}} EGP <br></span>
                                           per person</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                   
                    {{-- <div class="list-item-entry">
                        <div class="hotel-item style-9 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/tour_list/image/2.jpg')}}" alt="">
                                    <div class="price price-s-4">$500</div>
                                </div>
                                <div class="title hotel-middle cell-view">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-5">July <strong>19th
                                                    2021</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-5">Minya</span>
                                        </div>
                                    </div>
                                    <h4><b>Rose Al-Youssef Gate</b></h4>
                                    <div class="rate-wrap list-hidden">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <div class="buttons-block bg-dr-blue-2">
                                        <a href="tours_detail.html"
                                            class="c-button b-40 bg-grey-6-t hv-grey-3-t b-1">detail</a>
                                        <a href="tours_detail.html"
                                            class="c-button b-40 bg-white hv-transparent fr">book now</a>
                                    </div>
                                </div>
                                <div class="title hotel-right clearfix cell-view grid-hidden">
                                    <div class="rate-wrap">
                                        <i>485 rewies</i>
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                    </div>
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$500</span>
                                        person</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                   
                </div>

                <div class="c_pagination clearfix padd-120">
                    <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>
                    <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>
                    <ul class="cp_content color-3">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection