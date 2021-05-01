<?php

namespace App\Http\Controllers;

use App\Guide;
use App\Http\Controllers\Controller;
use App\Http\Requests\GuideRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    public function __construct()
    {

        $this->middleware('permission:view-guide');
        $this->middleware('permission:create-guide', ['only' => ['create','store']]);
        $this->middleware('permission:update-guide', ['only' => ['edit','update']]);
        $this->middleware('permission:destroy-guide', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guides = Guide::select()->paginate(setting('record_per_page', 15));  // to select datat from database and send to index page

        if ($request->has('search')) {
            $guides = Guide::where('name', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $guides = Guide::paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Guides';
        return view('guide.index', compact('guides','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create guide';
        return view('guide.create', compact( 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuideRequest $request)
    {

        $request->merge(['user_id' => Auth::user()->id]);
        $guide = $request->except('image');
        if ($request->image) {
            $guide['image'] = parse_url($request->image, PHP_URL_PATH);
        }
        Guide::create($guide);
        flash('Guide created successfully!')->success();
        return redirect()->route('guide.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Car  car
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        $title = "Guide Details";
        $guide->with(['user']);
        return view('guide.show', compact('title', 'guide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        $title = "Guide Details";
        $guide->with(['user']);
        return view('guide.edit', compact('title', 'guide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(GuideRequest $request, Guide $guide)
    {
        $guidedata = $request->except('image');
        if ($request->image) {
            $guidedata['image'] = parse_url($request->image, PHP_URL_PATH);
        }
        $guide->update($guidedata);
        flash('Guide updated successfully!')->success();
        return redirect()->route('guide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        $guide->delete();
        flash('Guide deleted successfully!')->info();
        return back();
    }
}
