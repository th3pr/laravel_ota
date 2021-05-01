@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('tour.index')}}" class="btn btn-sm btn-neutral">All Tours</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'tour.store', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Tour information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('tour_name', 'Tour name', ['class' => 'form-control-label']) }}
                                        {{ Form::text('tour_name', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('tour_price', 'Tour price', ['class' => 'form-control-label']) }}
                                        {{ Form::text('tour_price', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('tour_discount', 'Tour discount', ['class' => 'form-control-label']) }}
                                        {{ Form::text('tour_discount', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('start_date', 'Tour start date', ['class' => 'form-control-label']) }}
                                        {{ Form::date('start_date', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('end_date', 'Tour end date', ['class' => 'form-control-label']) }}
                                        {{ Form::date('end_date', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('tour_address', 'Tour address', ['class' => 'form-control-label']) }}
                                        {{ Form::text('tour_address', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('tour_details', 'Tour Details', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('tour_details',null, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('tour_image', 'Tour Image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Tour Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="tour_image">
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
