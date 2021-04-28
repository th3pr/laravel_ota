<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:view-tour');
        $this->middleware('permission:create-tour', ['only' => ['create','store']]);
        $this->middleware('permission:update-tour', ['only' => ['edit','update']]);
        $this->middleware('permission:destroy-tour', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tours = Tour::select()->paginate(setting('record_per_page', 15));  // to select datat from database and send to index page
//        return view('admin.hotels.index',compact('hotels'));

        if ($request->has('search')) {
            $tours = Tour::where('hot_name', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $tours = Tour::paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Hotels';
        return view('hotel.index', compact('tours','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tour.create');
//        $title = 'Create hotel';
//        return view('hotel.create', compact( 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        try {
//            $filePath = "";
//            if ($request->has('hot_image')) {
//                $filePath = $this->saveImages($request->hot_image,'Images/Hotels/');
//            }
//
//            Hotel::create([
//                'hot_image' => $filePath,
//                'hot_name' => $request ->hot_name,
//                'hot_price' => $request ->hot_price,
//                'hot_details' => $request ->hot_details,
//                'hot_type' =>$request ->hot_type,
//                'hot_address' => $request ->hot_address,
////                'latitude'=>$request->latitude,  // هنا بقوله مكانك هذا علي الخريطه عايز تعدله ام لا
////                'longitude'=>$request->longitude,
//            ]);
//
//            return redirect()->route('admin.hotels')->with(['success' => 'Hotels Added Successfully']);
//
//        } catch(\Exception $ex) {
////            dd($ex);
//            return redirect()->route('admin.hotels')->with(['error' => 'Entering data wrong, try again later']);
//        }
//        dd($request);

        $request->merge(['user_id' => Auth::user()->id]);
        $hotel = $request->except('tour_image');
        if ($request->tour_image) {
            $tour['tour_image'] = parse_url($request->tour_image, PHP_URL_PATH);
        }
        Tour::create($tour);
        flash('Tour created successfully!')->success();
        return redirect()->route('tour.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        $title = "Tour Details";
        $tour->with(['user']);
        return view('hotel.show', compact('title', 'tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $title = "Tour Details";
        $tour->with(['user']);
//        $categories = Category::pluck('category_name', 'id');
        return view('hotel.edit', compact('title', 'tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        $tourdata = $request->except('tour_image');
        if ($request->tour_image) {
            $tourdata['tour_image'] = parse_url($request->tour_image, PHP_URL_PATH);
        }
        $tour->update($tourdata);
        flash('Tour updated successfully!')->success();
        return redirect()->route('tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        flash('Tour deleted successfully!')->info();
        return back();
    }
}
