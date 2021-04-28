<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            Hotel
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $hotel->hot_name }}</strong>
                        </div>
                        <div class="col-sm-4">
                            @if ($hotel->hot_image)
                                <a href="{{ asset($hotel->hot_image) }}" target="_blank">
                                    <img width="250" height="250" class="img-fluid" src="{{ asset($hotel->hot_image) }}" alt="">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Category
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $hotel->hot_price }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Created By
                        </div>
                        <div class="col-sm-4">
                            <strong>{{ $hotel->user->name }}</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Body
                        </div>
                        <div class="col-sm-4">
                            <strong>{!! $hotel->hot_details !!}</strong>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>


