@extends('layouts.app')
@push('pg_btn')
    @can('update-hotel')
        <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit hotel details" href="{{route('hotel.edit',$hotel)}}">
            <i class="fa fa-edit" aria-hidden="true"></i> Edit Hotel
        </a>
    @endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            Hotel
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $hotel->hot_name }}</strong>
                        </div>
                        <div class="col-sm-4">
                            @if ($hotel->hot_image)
                                <a href="{{ asset($hotel->hot_image) }}" target="_blank">
                                    <img width="250" height="250" class="img-fluid" src="{{ asset($hotel->hot_image) }}" alt="">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Category
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $hotel->hot_price }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Created By
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $hotel->user->name }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Body
                        </div>
                        <div class="col-sm-4">
                            <strong>{!! $hotel->hot_details !!}</strong>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
