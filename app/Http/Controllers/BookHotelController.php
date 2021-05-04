<?php

namespace App\Http\Controllers;

use App\BookHotel;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookHotelController extends Controller
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
        $user = User::find(auth()->user()->id);
        $hotels = $user -> bookhotels;

        return view('frontend.profile.bookinghotels', compact('hotels'));
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
        $request->validate([
            'check_in_date' => 'required | date',
            'check_out_date' => 'required | date',
        ]);
        $input = $request->all();
        $input['hotel_id'] = (int)$input['id'];
        $input['user_id'] = auth()->user()->id;
        //  dd($input);
        // BookTour::create($input);
        // return redirect()->route('tours.index');

        $bookHotel = BookHotel::where('user_id' , auth()->user()->id)->where('hotel_id' , $input['hotel_id'] )->first();
        if(!empty($bookHotel))
        {    
            return redirect()->route('hotels.show' ,  $input['hotel_id']);
        }
        else{
            BookHotel::create($input);
            $user = User::find(auth()->user()->id);
            $hotels = $user -> bookhotels;

           return view('frontend.profile.bookinghotels', compact('hotels'));

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function show(BookHotel $bookHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(BookHotel $bookHotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookHotel $bookHotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookHotel $bookHotel)
    {
        //
    }
}
