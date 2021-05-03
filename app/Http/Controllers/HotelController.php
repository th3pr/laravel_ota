<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:view-hotel');
        $this->middleware('permission:create-hotel', ['only' => ['create','store']]);
        $this->middleware('permission:update-hotel', ['only' => ['edit','update']]);
        $this->middleware('permission:destroy-hotel', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hotels = Hotel::select()->paginate(setting('record_per_page', 15));  // to select datat from database and send to index page

        if ($request->has('search')) {
            $hotels = Hotel::where('hot_name', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $hotels = Hotel::paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Hotels';
        return view('hotel.index', compact('hotels','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create hotel';
        return view('hotel.create', compact( 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {

        $request->merge(['user_id' => Auth::user()->id]);
        $hotel = $request->except('hot_image');
        if ($request->hot_image) {
            $hotel['hot_image'] = parse_url($request->hot_image, PHP_URL_PATH);
        }
        Hotel::create($hotel);
        flash('Hotel created successfully!')->success();
        return redirect()->route('hotel.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        $title = "Hotel Details";
        $hotel->with(['user']);
        return view('hotel.show', compact('title', 'hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        $title = "Hotel Details";
        $hotel->with(['user']);
//        $categories = Category::pluck('category_name', 'id');
        return view('hotel.edit', compact('title', 'hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(HotelRequest $request, Hotel $hotel)
    {
        $hoteldata = $request->except('hot_image');
        if ($request->hot_image) {
            $hoteldata['hot_image'] = parse_url($request->hot_image, PHP_URL_PATH);
        }
        $hotel->update($hoteldata);
        flash('Hotel updated successfully!')->success();
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        flash('Hotel deleted successfully!')->info();
        return back();
    }
}
