@extends('layouts.layout')
@section('showpost')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-1">
                            Title
                        </div>
                        <div class="col-sm-3">
                            <strong>{{ $post->post_title }}</strong>
                        </div>
                        <div class="col-sm-4">
                            @if ($post->featured_image)
                                <a href="{{ asset('storage/'.$post->featured_image) }}" target="_blank">
                                    <img width="150" height="150" class="img-fluid" src="{{ asset('storage/'.$post->featured_image) }}" alt="">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            Category
                        </div>
                        <div class="col-sm-3">
                            <strong>{{ $post->category->category_name }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            Created By
                        </div>
                        <div class="col-sm-3">
                            <strong>{{ $post->user->name }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            Body
                        </div>
                        <div class="col-sm-3">
                            <strong>{!! $post->post_body !!}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
