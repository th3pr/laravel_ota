@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('guide.index')}}" class="btn btn-sm btn-neutral">All Guides</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['guide.update', $guide], 'method'=>'put', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Guide information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('name', 'Guide name', ['class' => 'form-control-label']) }}
                                        {{ Form::text('name', $guide->name, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('phone', 'Guide phone', ['class' => 'form-control-label']) }}
                                        {{ Form::text('phone', $guide->phone, ['class' => 'form-control']) }}
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('image', 'Guides image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Guides Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="image">
                                        </div>
                                </div>
                            </div>

                                        <div class="col-md-2">
                                            @if ($guide->image)
                                                <a href="{{ asset($guide->image) }}" target="_blank">
                                                    <img alt="Image placeholder"
                                                    class="avatar avatar-xl  rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{ $guide->name }} Logo"
                                                    src="{{ asset($guide->image) }}">
                                                </a>
                                            @endif
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
