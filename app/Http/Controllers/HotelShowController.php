<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelShowController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $hotels = Hotel::with(['user'])->where('hot_name', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 10));
        } else{
            $hotels = Hotel::paginate(setting('record_per_page', 4));
        }
        $title =  'Hotels';
        return view('frontend.hotel.index', compact('hotels','title'));
    }
    public function show(Hotel $hotel)
    {
        $title = "Hotel Details";
        return view('frontend.hotel.show', compact('title', 'hotel'));

    }
}
