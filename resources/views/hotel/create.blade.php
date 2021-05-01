@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('hotel.index')}}" class="btn btn-sm btn-neutral">All Hotels</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'hotel.store', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Hotel information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_name', 'Hotel Name', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_name', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('hot_price', 'Hotel Price', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_price', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('discount', 'Hotel discount', ['class' => 'form-control-label']) }}
                                        {{ Form::text('discount', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_address', 'Hotel Address', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_address', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_details', 'Hotel details', ['class' => 'form-control-label']) }}
{{--                                        <textarea name="hot_details" class="form-control"></textarea>--}}
                                        {!! Form::textarea('hot_details', null, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('hot_type', 'Hotel Type', ['class' => 'form-control-label']) }}
                                        {{ Form::text('hot_type', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('hot_image', 'Hotel Image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Hotel Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="hot_image">
                                        </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
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
