@extends('layouts.app')
@push('pg_btn')
    @can('update-car')
        <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit car details" href="{{route('car.edit',$car)}}">
            <i class="fa fa-edit" aria-hidden="true"></i> Edit Car
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
                            Car model
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $car->car_model }}</strong>
                        </div>
                        <div class="col-sm-4">
                            @if ($car->car_image)
                                <a href="{{ asset($car->car_image) }}" target="_blank">
                                    <img width="250" height="250" class="img-fluid" src="{{ asset($car->car_image) }}" alt="">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Car price
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $car->car_price }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Car discount
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $car->discount }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Created By
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $car->user->name }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Car details
                        </div>
                        <div class="col-sm-4">
                            <strong>{!! $car->car_details !!}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
