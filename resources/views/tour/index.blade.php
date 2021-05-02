@extends('layouts.app')
@push('pg_btn')
    @can('create-tour')
        <a href="{{ route('tour.create') }}" class="btn btn-sm btn-neutral">Create New Tour</a>
    @endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0">All Tours</h3>
                        </div>
                        <div class="col-lg-4">
                            {!! Form::open(['route' => 'tour.index', 'method'=>'get']) !!}
                            <div class="form-group mb-0">
                                {{ Form::text('search', request()->query('search'), ['class' => 'form-control form-control-sm', 'placeholder'=>'Search tour']) }}
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
                                    <th scope="col">Tour name</th>
                                    <th scope="col">Tour price </th>
                                    <th scope="col">Tour discount</th>
                                    <th scope="col">Tour s_date</th>
                                    <th scope="col">Tour e_date</th>
{{--                                    <th scope="col">Tour address</th>--}}
                                    <th scope="col">Tour image</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($tours as $tour)
                                    <tr>
                                        <th scope="row">
                                            <div class="mx-w-440 d-flex flex-wrap">
                                                {{$tour->tour_name }}
                                            </div>
                                        </th>
                                        <td class="budget">
                                            {{$tour->tour_price}}
                                        </td>
                                        <td class="budget">
                                            {{$tour->tour_discount}}
                                        </td>
                                        <td class="budget">
                                            {{$tour->start_date}}
                                        </td>
                                        <td class="budget">
                                            {{$tour->end_date}}
                                        </td>
{{--                                        <td class="budget">--}}
{{--                                            {{$tour->tour_address}}--}}
{{--                                        </td>--}}

                                        <td>
                                            <div class="avatar-group">
                                                @if ($tour->tour_image)
                                                    <img alt="Image placeholder"
                                                         class="avatar avatar-xl rounded-circle"
                                                         data-toggle="tooltip" data-original-title="{{$tour->tour_name}}"
                                                         src="{{ asset($tour->tour_image) }}">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @can('destroy-tour')
                                                {!! Form::open(['route' => ['tour.destroy', $tour],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                            @endcan
                                            @can('view-tour')
                                                <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit tour details" href="{{route('tour.show', $tour)}}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            @endcan
                                            @can('update-tour')
                                                <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit tour details" href="{{route('tour.edit',$tour)}}">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                            @endcan
                                            @can('destroy-tour')
                                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete tour" href="">
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
                                        {{$tours->links()}}
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
