@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('hotel.index')}}" class="btn btn-sm btn-neutral">All Hotels</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['hotel.update', $hotel], 'method'=>'put', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Hotel information</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('hot_image', 'Hotel image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="hot_image">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    @if ($hotel->hot_image)
                                        <a href="{{ asset($hotel->hot_image) }}" target="_blank">
                                            <img alt="Image placeholder"
                                                 class="avatar avatar-xl  rounded-circle"
                                                 data-toggle="tooltip" data-original-title="{{ $hotel->hot_name }} Logo"
                                                 src="{{ asset($hotel->hot_image) }}">
                                        </a>
                                    @endif
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_name', 'Hotel name', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_name', $hotel->hot_name, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_price', 'Hotel price', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_price', $hotel->hot_price, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('discount', 'Hotel discount', ['class' => 'form-control-label']) }}
                                        {{ Form::text('discount', $hotel->discount, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_address', 'Hotel address', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_address', $hotel->hot_address, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                        <div class="form-group">
                                            {{ Form::label('hot_details', 'Hotel Details', ['class' => 'form-control-label']) }}
                                           {!! Form::textarea('hot_details', $hotel->hot_details, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                        </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_type', 'Hotel Type', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_type', $hotel->hot_type, ['class' => 'form-control']) }}
                                    </div>
                                </div>

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        {{ Form::label('hot_image', 'Hotel Image', ['class' => 'form-control-label d-block']) }}--}}
{{--                                        <div class="input-group">--}}
{{--                                            <span class="input-group-btn">--}}
{{--                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">--}}
{{--                                                <i class="fa fa-picture-o"></i> Choose Hotel Image--}}
{{--                                              </a>--}}
{{--                                            </span>--}}
{{--                                            <input id="thumbnail" class="form-control d-none" type="text" name="hot_image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        {{ Form::label('category_id', 'Select Category', ['class' => 'form-control-label']) }}--}}
{{--                                        {{ Form::select('category_id', $categories, $post->category_id, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select category...']) }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        {{ Form::label('hot_image', 'Hotel image', ['class' => 'form-control-label d-block']) }}--}}
{{--                                        <div class="input-group">--}}
{{--                                            <span class="input-group-btn">--}}
{{--                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">--}}
{{--                                                <i class="fa fa-picture-o"></i> Choose Image--}}
{{--                                              </a>--}}
{{--                                            </span>--}}
{{--                                            <input id="thumbnail" class="form-control d-none" type="text" name="hot_image">--}}
{{--                                        </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                                        <div class="col-md-2">--}}
{{--                                            @if ($hotel->hot_image)--}}
{{--                                                <a href="{{ asset($hotel->hot_image) }}" target="_blank">--}}
{{--                                                    <img alt="Image placeholder"--}}
{{--                                                    class="avatar avatar-xl  rounded-circle"--}}
{{--                                                    data-toggle="tooltip" data-original-title="{{ $hotel->hot_name }} Logo"--}}
{{--                                                    src="{{ asset($hotel->hot_image) }}">--}}
{{--                                                </a>--}}
{{--                                            @endif--}}
{{--                                    </div>--}}

{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        {{ Form::label('hotel_body', 'Hotel Body', ['class' => 'form-control-label']) }}--}}
{{--                                        {!! Form::textarea('hotel_body', $hotel->hotel_body, ['id'=>"summernote", 'class'=> 'form-control',]) !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                        </div>

                        <hr class="my-4" />
{{--                        <div class="pl-lg-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" name="status" value="1" {{ $hotel->status ? 'checked' : ''}}  class="custom-control-input" id="status">--}}
{{--                                        {{ Form::label('status', 'Status', ['class' => 'custom-control-label']) }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-12">
                                    {{ Form::submit('Submit', ['class'=> 'mt-5 btn btn-primary']) }}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs4.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#summernote').summernote({
            height: 150,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
              ]

        });
        jQuery('#uploadFile').filemanager('file');
    });
  </script>
@endpush
