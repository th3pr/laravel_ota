@extends('layouts.app')
@push('pg_btn')
    @can('update-guide')
        <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit Guide details" href="{{route('guide.edit',$guide)}}">
            <i class="fa fa-edit" aria-hidden="true"></i> Edit Guide
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
                            Guide name
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $guide->name }}</strong>
                        </div>
                        <div class="col-sm-4">
                            @if ($guide->image)
                                <a href="{{ asset($guide->image) }}" target="_blank">
                                    <img width="250" height="250" class="img-fluid" src="{{ asset($guide->image) }}" alt="">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Guide phone
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $guide->phone }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Created By
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $guide->user->name }}</strong>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
