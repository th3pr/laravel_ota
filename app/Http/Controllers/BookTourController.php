<?php

namespace App\Http\Controllers;

use App\BookTour;
use App\Tour;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookTourController extends Controller
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
        
        $tours = $user -> booktours;

        return view('frontend.profile.bookingtours', compact('tours'));

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
            'book_date' => 'required | date',
            'persons' => 'required | numeric',

        ]);
        $input = $request->all();
        $input['tour_id'] = (int)$input['id'];
        $input['user_id'] = auth()->user()->id;
        //  dd($input);
        // BookTour::create($input);
        // return redirect()->route('tours.index');

    $bookTour = BookTour::where('user_id' , auth()->user()->id)->where('tour_id' , $input['tour_id'] )->first();
        if(!empty($bookTour))
        {    
            return redirect()->route('tours.show' ,  $input['tour_id']);
        }
        else{
            BookTour::create($input);
            $user = User::find(auth()->user()->id);
            $tours = $user -> booktours;

           return view('frontend.profile.bookingtours', compact('tours'));

        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function show(BookTour $bookTour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function edit(BookTour $bookTour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookTour $bookTour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookTour $bookTour)
    {
        //
    }
}
