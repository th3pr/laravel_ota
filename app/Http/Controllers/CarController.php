<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:view-car');
        $this->middleware('permission:create-car', ['only' => ['create','store']]);
        $this->middleware('permission:update-car', ['only' => ['edit','update']]);
        $this->middleware('permission:destroy-car', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::select()->paginate(setting('record_per_page', 15));  // to select datat from database and send to index page

        if ($request->has('search')) {
            $cars = Car::where('car_model', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $cars = Car::paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Cars';
        return view('car.index', compact('cars','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create car';
        return view('car.create', compact( 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {

        $request->merge(['user_id' => Auth::user()->id]);
        $car = $request->except('car_image');
        if ($request->car_image) {
            $car['car_image'] = parse_url($request->car_image, PHP_URL_PATH);
        }
        Car::create($car);
        flash('Car created successfully!')->success();
        return redirect()->route('car.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Car  car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $title = "Car Details";
        $car->with(['user']);
        return view('car.show', compact('title', 'car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $title = "Car Details";
        $car->with(['user']);
        return view('car.edit', compact('title', 'car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $car)
    {
        $cardata = $request->except('car_image');
        if ($request->car_image) {
            $cardata['car_image'] = parse_url($request->car_image, PHP_URL_PATH);
        }
        $car->update($cardata);
        flash('Car updated successfully!')->success();
        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        flash('Car deleted successfully!')->info();
        return back();
    }
}
