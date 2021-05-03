@extends('layouts.layout')
@section('tour')
<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="{{asset('img/30.jpg')}}" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <!-- <h2 class="color-white">Mountain Tour</h2> -->
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
                    <h2 class="detail-title color-dark-2">Mountain Tour</h2>
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
            </div>
        </div>
        <div class="row padd-90">
            <div class="col-xs-12 col-md-8">
                <div class="detail-content">
                    <div class="detail-top slider-wth-thumbs style-2">
                        <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1"
                            data-speed="500" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide active" data-val="0">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                            </div>
                            <div class="pagination pagination-hidden"></div>
                        </div>
                        <div class="swiper-container thumbnails" data-autoplay="0" data-loop="0" data-speed="500"
                            data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-sm-slides="5"
                            data-md-slides="5" data-lg-slides="5" data-add-slides="5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide current active" data-val="0">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="{{$tour->tour_image}}" alt="">
                                </div>
                            </div>
                            <div class="pagination hidden"></div>
                        </div>
                    </div>
                    <div class="detail-content-block">
                        <div class="simple-tab color-1 tab-wrapper">
                            <div class="tab-nav-wrapper">
                                <div class="nav-tab  clearfix">
                                    <div class="nav-tab-item active">
                                        Tour Description
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
                                    <h3>General Information About {{$tour->tour_name}}</h3>
                                    <p>{{ $tour->tour_details }} </p>
                                    <img class="right-img" src="{{$tour->tour_image}}" alt="">
                                    <h4>interesting for you</h4>
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
                                    <h3>{{ Str::upper($tour->tour_name) }} Details</h3>
                                    <p>{{ $tour->tour_details }}
                                    </p>
                                    
                                    <ul>
                                        <li>Price : {{$tour->tour_price}} EGP per person </li>
                                        <li>Discount : 10%</li>
                                        <li>Multi-product search</li>
                                        <li>Opportunity to share with friends</li>
                                    </ul>
                                    {{-- <h4>interesting for you</h4>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                    </p>
                                    <h3>you need to know</h3>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                        Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.</p> --}}
                                </div>
                                <div class="tab-info">

                                    @livewire('tour-ratings', ['tour' => $tour], key($tour->id))

                                    {{-- <img class="right-img" src="{{asset('img/detail/tab_img.jpg')}}" alt="">
                                    <h3>General Information About tour</h3>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent
                                        aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.
                                        Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                    <h4>interesting for you</h4>
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
                                        dolore magna aliqua.</p> --}}
                                </div>
                                <div class="tab-info">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                    </div><br />
                                  @endif
                                    <form class="simple-from" 
                                        onsubmit="return validateFormTour()" method="post" action="{{route('booktour.store' ,["id" =>$tour] )}}"  >
                                        {{-- action="{{route('booktour.store' ,["id" =>$tour] )}}"  --}}
                                        @csrf
                                        <div class="simple-group">
                                            <h3 class="small-title color-dr-blue-2 ">Tour Booking</h3>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="form-label color-dark-2">Check In</div>
                                                        <div class="input-style-1 b-50 brd-0 type-2 color-3">
                                                            <input type="date" placeholder="Mm/Dd/Yy" class="" name="book_date">
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="form-label color-dark-2">Number of persons</div>
                                                        <div class="drop-wrap drop-wrap-s-4 color-5">
                                                            {{-- <div class="drop">
                                                                <b id="numPerson">1</b>
                                                                <span id="person"></span>
                                                                <a href="#" class="drop-list"><i
                                                                        class="fa fa-angle-down"></i></a>
                                                                <span>
                                                                    <a href="#" class="tperson">1</a>
                                                                    <a href="#" class="tperson">2</a>
                                                                    <a href="#" class="tperson">3</a>
                                                                    <a href="#" class="tperson">4</a>
                                                                </span>
                                                            </div> --}}
                                                            <div class="input-style-1 b-50 brd-0 type-2 color-3">
                                                                <input type="number"  class="" name="persons">
                                                            </div>
                                                          
                                                              
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               

                                                
                                                {{-- <div class="col-xs-12 col-sm-12">
                                                    <div class="form-block type-2 clearfix">
                                                        <div class="sidebar-text-label bg-dr-blue-2 color-white">
                                                            <span class="h3">Total Price : <span id="totalPrice">
                                                                    500 </span> EGP </span>
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
                        <div class="accordion style-3">
                            <div class="acc-panel">
                                <div class="acc-title"><span class="acc-icon"></span>How can I manage Instant Book
                                    settings?</div>
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
                                <div class="acc-title"><span class="acc-icon"></span>How do I list multiple rooms?
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
                                <div class="acc-title"><span class="acc-icon"></span>How do I use my calendar?</div>
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
            <div class="col-xs-12 col-md-4">
                <div class="right-sidebar">
			<iframe class="padd-40" src="{{$tour->tour_address}}" height="250px" width="100%" allowfullscreen="" loading="lazy"></iframe>
{{--                    <iframe--}}
{{--                        src="{{$tour->tour_address}}"--}}
{{--                        height="250px" width="100%"></iframe><noscript> Full functionality of this site requires--}}
{{--                        JavaScript to--}}
{{--                        be enabled. Learn how to <a href="https://javascriptdownload.org/">Download--}}
{{--                            JavaScript</a> in your browser.</noscript>--}}
                </div>
                <div class="popular-tours bg-grey-2">
                    <h4 class="color-dark-2">popular tours</h4>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('img/tour_list/image/5.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong>/ person</span></h5>
                            <h4>Tona Elgabl</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('img/tour_list/image/9.JPG')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong>/ person</span></h5>
                            <h4>Rose Al-Youssef Gate</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('img/tour_list/image/8.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>$273</strong>/ person</span></h5>
                            <h4> Tona Elgabl</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nights</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-text-label bg-dr-blue-2 color-white">useful information</div>

                <div class="help-contact bg-grey-2">
                    <h4 class="color-dark-2">Need Help?</h4>
                    <p class="color-grey-2">Help Help Help Help Help Help Help Help Help Help Help Help Help
                    </p>
                    <a class="help-phone color-dark-2 link-dr-blue-2" href="tel:0200059600"><img
                            src="img/detail/phone24-dark-2.png" alt="">0882222000</a>
                    <a class="help-mail color-dark-2 link-dr-blue-2" href="mailto:tours@minya.com"><img
                            src="img/detail/letter-dark-2.png" alt="">ota@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>popular tours</h2>
                    <p class="color-grey">popular tours popular tourspopular tourspopular tourspopular tourspopular
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
                        <div class="swiper-slide">
                            <div class="hotel-item">
                                <div class="radius-top">
                                    <img src="{{asset('img/15.jpg')}}" alt="">
                                    <div class="price price-s-1">$273</div>
                                </div>
                                <div class="title clearfix">
                                    <h4><b>Tuna ElGabel</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">Details</a>
                                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                            src="{{asset('img/loc_icon_small_drak.png')}}" alt="">view on map</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item">
                                <div class="radius-top">
                                    <img src="{{asset('img/15.jpg')}}" alt="">
                                    <div class="price price-s-1">$273</div>
                                </div>
                                <div class="title clearfix">
                                    <h4><b>Tuna ElGabel</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <a href="tour_detail.html"
                                        class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                            src="{{asset('img/loc_icon_small_drak.png')}}" alt="">view on map</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item">
                                <div class="radius-top">
                                    <img src="{{asset('img/15.jpg')}}" alt="">
                                    <div class="price price-s-1">$273</div>
                                </div>
                                <div class="title clearfix">
                                    <h4><b>Tuna ElGabel</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <a href="tour_detail.html"
                                        class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">Details</a>
                                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                            src="img/loc_icon_small_drak.png" alt="">view on map</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item">
                                <div class="radius-top">
                                    <img src="{{asset('img/15.jpg')}}" alt="">
                                    <div class="price price-s-1">$273</div>
                                </div>
                                <div class="title clearfix">
                                    <h4><b>Tuna ElGabel</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <a href="tour_detail.html"
                                        class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">Details</a>
                                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                            src="{{asset('img/loc_icon_small_drak.png')}}" alt="">view on map</a>
                                </div>
                            </div>
                        </div>
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