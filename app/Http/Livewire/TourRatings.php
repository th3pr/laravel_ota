<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rating_Tour;

class TourRatings extends Component
{
    public $rating;
    public $comment;
    public $currentId;
    public $tour;
    public $hideForm;

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
        'comment' => 'required',

    ];

    public function render()
    {
        //return view('livewire.tour-ratings');

        $comments = Rating_Tour::where('tour_id', $this->tour->id)->where('status', 1)->with('user')->get();
        return view('livewire.tour-ratings', compact('comments'));
    }


    public function mount()
    {
        if(auth()->user()){
            $rating = Rating_Tour::where('user_id', auth()->user()->id)->where('tour_id', $this->tour->id)->first();
            if (!empty($rating)) {
                $this->rating  = $rating->rating;
                $this->comment = $rating->comment;
                $this->currentId = $rating->id;
            }
        }
        return view('livewire.tour-ratings');
    }

    public function delete($id)
    {
        $rating = Rating_Tour::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
            $this->comment = '';
        }
    }

    public function rate()
    {
        $rating = Rating_Tour::where('user_id', auth()->user()->id)->where('tour_id', $this->tour->id)->first();
        $this->validate();
        if (!empty($rating)) {
            $rating->user_id = auth()->user()->id;
            $rating->tour_id = $this->tour->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->status = 1;
            try {
                $rating->update();
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('message', 'Success!');
        } else {
            $rating = new Rating_Tour;
            $rating->user_id = auth()->user()->id;
            $rating->tour_id = $this->tour->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->status = 1;
            try {
                $rating->save();
            } catch (\Throwable $th) {
                throw $th;
            }
            $this->hideForm = true;
        }
    }
}

