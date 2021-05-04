<?php

namespace App\Http\Controllers;

use App\Car;
use App\Hotel;
use App\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $tours = Tour::with(['user'])->where('tour_name', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 10));
        } else{
            $tours = Tour::paginate(setting('record_per_page', 4));
        }
        return view('frontend.home',compact('tours'));
    }


    public function indexTour(Request $request)
    {

        if ($request->has('search')) {
            $tours = Tour::with(['user'])->where('tour_name', 'like', '%'.$request->search.'%')
                ->paginate(setting('record_per_page', 10));
        }else{
            $tours = Tour::paginate(setting('record_per_page', 4));
        }
        $title =  'tours';

        return view('frontend.home', compact('tours','title'));
    }
    public function indexcar(Request $request)
    {

        if ($request->has('search')) {
            $cars = Car::with(['user'])->where('car_model', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 10));
        }else{
            $cars = Car::paginate(setting('record_per_page', 4));
        }
        $title =  'cars';

        return view('frontend.home', compact('cars','title'));
    }
}
