@php
// Settings
$settings = DB::table('settings')
    ->get()
    ->pluck('value');
$page_title = $settings[0];
$email = $settings[1];
$phone_number = $settings[2];
$description = $settings[3];
$location = $settings[4];
$logo = $settings[5];
// Posts
$posts = DB::table('posts')
    ->latest()
    ->limit(3)
    ->get();
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />

    <link rel="shortcut icon" href="favicon.ico" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/frontend/jquery-ui.structure.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/frontend/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/css/frontend/style.min.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
    <title>{{ $page_title }}</title>
</head>

<body data-color="mainColor">
    <!-- Start The Scroll To Top -->
    <div id="scroll-top">
        <i class="fa fa-chevron-up fa-2x"></i>
    </div>
    <!-- End The Scroll To Top -->

    <div class="loading">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_four"></div>
                <div class="object object_three"></div>
                <div class="object object_two"></div>
                <div class="object object_one"></div>
            </div>
        </div>
    </div>
    <header class="menu-3 type-5 bgtransparent">
        <div class="top-header-bar">
            <div class="container">
                <div class="left-col">
                    <a href="#"><i class="fa fa-phone"></i>{{ $phone_number }}</a>
                    <a href="#"><i class="fa  fa-map-marker"></i>{{ $location }}</a>

                </div>
                <div class="right-col">
                    <div class="folow   ">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                    <form action="" method="get" class="serach-item">
                        <button type="submit" class="fa fa-search"></button>
                        <input type="text" name="search" value="{{ request()->query('search') }}"
                            placeholder="Search...">
                    </form>

                </div>
            </div>
        </div>

        <div class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ $logo }}" alt="{{ $page_title }}">
                        </a>
                        <div class="nav-menu-icon">
                            <a href="#"><i></i></a>
                        </div>
                        <nav class="menu">
                            <ul>
                                <li class="type-1 active">
                                    <a href="{{ route('home') }}">home<span class="fa fa-angle-down"></span></a>
                                </li>
                                <li class="type-1"><a href="{{ route('hotels.index') }}">Hotels<span
                                            class="fa fa-angle-down"></span></a>
                                </li>
                                <li class="type-1"><a href="{{ route('cars.index') }}">Cars<span
                                            class="fa fa-angle-down"></span></a>
                                </li>
                                <li class="type-1"><a href="{{ route('tours.index') }}">Tours<span
                                            class="fa fa-angle-down"></span></a>
                                </li>
                                @if (Auth::guest())
                                    <li class="type-1"><a href="{{ route('login') }}">Login<span
                                                class="fa fa-angle-down"></span></a>
                                    </li>
                                @else
                                    <li class="type-1"><a href="#">Account<span class="fa fa-angle-down"></span></a>
                                        <ul class="dropmenu">
                                            <li><a href="{{ route('profile.edit', auth()->user()) }}">Profile</a>
                                            </li>
                                            <li><a href="#">My Bookings <span class="fa fa-chevron-right"></span></a>
                                                <ul class="dropmenu">
                                                    <li><a href="{{ route('bookhotel.index') }}">Hotels
                                                            Reservation</a>
                                                    </li>
                                                    <li><a href="{{ route('booktour.index') }}">Tours Reservation</a>
                                                    </li>
                                                    <li><a href="{{ route('bookcar.index') }}">Cars Reservation</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">

                                                    Logout
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>

                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('home')
    @yield('hotels')
    @yield('searchHotels')
    @yield('searchTours')
    @yield('searchCars')
    @yield('hotel')
    @yield('mybooking')
    @yield('mybookingcars')
    @yield('mybookinghotels')
    @yield('tours')
    @yield('tour')
    @yield('cars')
    @yield('car')
    @yield('posts')
    @yield('showpost')
    @yield('signup')
    @yield('login')
    <footer class="bg-dark type-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <img src="{{ $logo }}" alt="" class="logo-footer">
                        <div class="f_text color-grey-7">{!! $description !!}</div>
                        <div class="footer-share">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-pinterest"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                    <div class="footer-block">
                        <h6>Travel News</h6>
                        @foreach ($posts as $post)
                            <div class="f_news clearfix">
                                <a class="f_news-img black-hover" href="#">
                                    <img class="img-responsive" src="{{ $post->featured_image }}" alt="">
                                    <div class="tour-layer delay-1"></div>
                                </a>
                                <div class="f_news-content">
                                    <a class="f_news-tilte color-white link-red" href="#">{{ $post->post_title }}</a>
                                    <span class="date-f">{{ $post->created_at }}</span>
                                    <a href="{{ route('post.show', $post->user_id) }}" class="r-more">read more</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <h6>Subscribe</h6>
                        <form action="#" class="footer-form">
                            <div class="form-input">
                                <input type="email" placeholder="Enter your email" required>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <input type="submit" value="submit" class="bg-aqua">
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <h6>Contact Info</h6>
                        <div class="contact-info">
                            <div class="contact-line color-grey-3"><i
                                    class="fa fa-map-marker"></i><span>{{ $location }}</span>
                            </div>
                            <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a
                                    href="tel:201065165640">{{ $phone_number }}</a></div>
                            <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a
                                    href="mailto:{{ $email }}">{{ $email }}</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-link bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <span>&copy; 2021 All rights reserved By ITI</span>
                        </div>
                        <ul>
                            <li><a class="link-aqua" href="#">Privacy Policy </a></li>
                            <li><a class="link-aqua" href="#">About Us</a></li>
                            <li><a class="link-aqua" href="#">Support </a></li>
                            <li><a class="link-aqua" href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/frontend/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/idangerous.swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/jquery.viewportchecker.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/all.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/jquery.circliful.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend/myJquery.js') }}"></script>

    @livewireScripts
</body>

</html>
