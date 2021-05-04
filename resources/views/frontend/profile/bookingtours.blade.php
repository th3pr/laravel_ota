@extends('layouts.layout')
@section('mybooking')

<div class="inner-banner">
    <img class="center-image" src="{{asset('img/SLIDE_28e18275b27230c3e83f2f654919f5e1.jpg')}}" alt="">
    <div class="vertical-align">
        <div class="container">
  
            <h2 class="color-white">Hotel Reservations</h2>
        </div>
    </div>
</div>
<div class="main-wraper padd-90 mt-2">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2 underline">Your Tour Reservation</h4>
					<h2></h2>
				</div>
			</div>
		</div>  	
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
			
			</div>
			<div class="col-mob-12 col-xs-12 col-sm-6 col-lg-4">
				<img class="img-responsive img-full radius-5" src="img/inner/about_2.jpg" alt="">
			</div>					
		
		</div>
    </div>
</div>


<div class="container">

   <div class="row">
       <div class="col-md-12">
           
        <div class="col-xs-12 col-sm-8 col-md-12">
            <div class="list-header clearfix">
                
            
                <div class="list-view-change">
                    <div class="change-grid color-4 fr"><i class="fa fa-th"></i></div>
                    <div class="change-list color-4 fr active"><i class="fa fa-bars"></i></div>
                    <div class="change-to-label fr color-grey-8">View:</div>
                </div>
            </div>
              <div class="list-content clearfix">
                @foreach ($tours as $item)
                <div class="list-item-entry">
                    <div class="hotel-item style-8 bg-white">
                        <div class="table-view">
                            <div class="radius-top cell-view">
                                <img src="{{$item->tour_image}}" alt="">
                                @if ($item->tour_discount != 0)
                                    <div class="price price-s-3 red tt">-{{$item->tour_discount}}%</div>
                                @endif
                            </div>
                            <div class="title hotel-middle clearfix cell-view">
                                @if ($item->tour_discount != 0)
                                    <div class="hotel-person color-dark-2 list-hidden">from <del>{{$item->tour_price}} EGP</del></div>
                                @endif

                                <div class="hotel-person color-dark-2 list-hidden"> <span>{{$item->tour_price-($item->tour_price*$item->tour_discount/100)}} EGP</span> </div>
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
                                <h4><b><a href="{{route('tours.show' , $item)}}">{{$item->tour_name}}</a></b></h4>
                                <p class="f-14">{!! Str::limit($item->tour_details, 150) !!} </p>
                                <div class="hotel-icons-block grid-hidden">
                                    <img class="hotel-icon" src="{{asset('img/tour_list/hotel_icon_1.png')}}" alt="">
                                    <img class="hotel-icon" src="{{asset('img/tour_list/hotel_icon_2.png')}}" alt="">
                                    <img class="hotel-icon" src="{{asset('img/tour_list/hotel_icon_3.png')}}" alt="">
                                    <img class="hotel-icon" src="{{asset('img/tour_list/hotel_icon_4.png')}}" alt="">
                                    <img class="hotel-icon" src="{{asset('img/tour_list/hotel_icon_5.png')}}" alt="">
                                </div>
                                <a href="tour_list.html" class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
                                <a href="tour_list.html" class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src="" alt="">view on map</a>
                            </div>
                            <div class="title hotel-right bg-dr-blue clearfix cell-view">
                                @if ($item->tour_discount != 0)
                                    <div class="hotel-person color-white">from <del>{{$item->tour_price}} EGP</del></div>
                                @endif
                                <div class="hotel-person color-white">{{$item->tour_price-($item->tour_price*$item->tour_discount/100)}} EGP</div>

                                <a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden" href="{{route('tours.show' , $item)}}">BOOK</a>
                            </div>
                        </div>
                    </div>


                </div>

            @endforeach

                </div>
        </div>
       </div>
   </div>
</div>

     
@endsection