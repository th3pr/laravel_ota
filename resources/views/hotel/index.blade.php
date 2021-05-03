@extends('layouts.app')
@push('pg_btn')
@can('create-hotel')
    <a href="{{ route('hotel.create') }}" class="btn btn-sm btn-neutral">Create New Hotel</a>
@endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0">All Hotels</h3>
                        </div>
                        <div class="col-lg-4">
                    {!! Form::open(['route' => 'hotel.index', 'method'=>'get']) !!}
                        <div class="form-group mb-0">
                        {{ Form::text('search', request()->query('search'), ['class' => 'form-control form-control-sm', 'placeholder'=>'Search hotel']) }}
                    </div>

                    {!! Form::close() !!}
                </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Hotel Name</th>
                                    <th scope="col">Hotel Price </th>
                                    <th scope="col">Hotel discount</th>
                                    <th scope="col">Hotel Type</th>
                                    <th scope="col">Hotel Image</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($hotels as $hotel)
                                    <tr>
                                        <th scope="row">
                                            <div class="mx-w-440 d-flex flex-wrap">
                                                {{$hotel->hot_name }}
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="mx-w-440 d-flex flex-wrap">
                                                {{$hotel->hot_price }}
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="mx-w-440 d-flex flex-wrap">
                                                {{$hotel->discount }}
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="mx-w-440 d-flex flex-wrap">
                                                {{$hotel->hot_type }}
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="mx-w-440 d-flex flex-wrap">
                                                <div class="avatar-group">
                                                    @if ($hotel->hot_image)
                                                    <img alt="Image placeholder"
                                                        class="avatar avatar-xl rounded-circle"
                                                        data-toggle="tooltip" data-original-title="{{$hotel->hot_name}}"
                                                        src="{{ asset($hotel->hot_image) }}">
                                                    @endif
                                                </div>
                                            </div>
                                        </th>
                                        <td class="text-center">
                                            @can('destroy-hotel')
                                            {!! Form::open(['route' => ['hotel.destroy', $hotel],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                            @endcan
                                            @can('view-hotel')
                                            <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit hotel details" href="{{route('hotel.show', $hotel)}}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('update-hotel')
                                            <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit post details" href="{{route('hotel.edit',$hotel)}}">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('destroy-hotel')
                                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete post" href="">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot >
                                <tr>
                                    <td colspan="6">
                                        {{$hotels->links()}}
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        jQuery(document).ready(function(){
            $('.delete').on('click', function(e){
                e.preventDefault();
                let that = jQuery(this);
                jQuery.confirm({
                    icon: 'fas fa-wind-warning',
                    closeIcon: true,
                    title: 'Are you sure!',
                    content: 'You can not undo this action.!',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        confirm: function () {
                            that.parent('form').submit();
                            //$.alert('Confirmed!');
                        },
                        cancel: function () {
                            //$.alert('Canceled!');
                        }
                    }
                });
            })
        })

    </script>
@endpush
