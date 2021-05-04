<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class searchController extends Controller
{

    public function  indexHotel(Request $request) {
        if ($request->has('search')) {
            $hotels = Hotel::with(['user'])->where('hot_name', 'like', '%'.$request->search.'%')
                ->paginate(setting('record_per_page', 10));
        }else{
            $hotels = Hotel::paginate(setting('record_per_page', 4));
        }

        return view('search.searchHotels',compact('hotels'));
    }
}
