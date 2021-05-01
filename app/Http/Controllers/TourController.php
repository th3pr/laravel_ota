<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
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

        if ($request->has('search')) {
            $tours = Tour::where('tour_name', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $tours = Tour::paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Tours';
        return view('tour.index', compact('tours','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('tour.create');
        $title = 'Create tour';
        return view('tour.create', compact( 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {

        $request->merge(['user_id' => Auth::user()->id]);
        $tour = $request->except('tour_image');
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
     * @param  \App\Tour  tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        $title = "Tour Details";
        $tour->with(['user']);
        return view('tour.show', compact('title', 'tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $title = "Tour Details";
        $tour->with(['user']);
        return view('tour.edit', compact('title', 'tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(TourRequest $request, Tour $tour)
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
