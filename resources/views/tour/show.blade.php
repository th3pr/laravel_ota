@extends('layouts.app')
@push('pg_btn')
    @can('update-tour')
        <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit tour details" href="{{route('tour.edit',$tour)}}">
            <i class="fa fa-edit" aria-hidden="true"></i> Edit Tour
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
                            Tour name
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $tour->tour_name }}</strong>
                        </div>
                        <div class="col-sm-4">
                            @if ($tour->tour_image)
                                <a href="{{ asset($tour->tour_image) }}" target="_blank">
                                    <img width="250" height="250" class="img-fluid" src="{{ asset($tour->tour_image) }}" alt="">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Tour price
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $tour->tour_price }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Tour discount
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $tour->tour_discount }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Created By
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $tour->user->name }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Tour details
                        </div>
                        <div class="col-sm-4">
                            <strong>{!! $tour->tour_details !!}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
