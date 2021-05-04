<?php

namespace App\Http\Controllers;

use App\BookCar;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $user = User::find(auth()->user()->id);
        $cars = $user -> bookcars;

        return view('frontend.profile.bookingcars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'day_recieve' => 'required | date',
            'days' => 'required | numeric',
        ]);
        $input = $request->all();
        $input['car_id'] = (int)$input['id'];
        $input['user_id'] = auth()->user()->id;
        //  dd($input);
        // BookTour::create($input);
        // return redirect()->route('tours.index');

        $bookCar = BookCar::where('user_id' , auth()->user()->id)->where('car_id' , $input['car_id'] )->first();
        if(!empty($bookCar))
        {    
            return redirect()->route('cars.show' ,  $input['car_id']);
        }
        else{
            BookCar::create($input);
            $user = User::find(auth()->user()->id);
            $cars = $user -> bookcars;
    
            return view('frontend.profile.bookingcars', compact('cars'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function show(BookCar $bookCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function edit(BookCar $bookCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookCar $bookCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookCar $bookCar)
    {
        //
    }
}
