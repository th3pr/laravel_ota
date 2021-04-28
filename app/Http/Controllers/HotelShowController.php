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
            $hotels = Hotel::with(['user'])->where('hotel_title', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 10));
        }else{
            $hotels = Hotel::with(['user'])->paginate(setting('record_per_page', 10));
        }
        $title =  'Hotels';
        return view('frontend.hotel.index', compact('hotels','title'));
    }
    public function show(Hotel $hotel)
    {
        $title = "Hotel Details";
        $hotel->with(['user']);
        return view('frontend.hotel.show', compact('title', 'hotel'));
    }
}
