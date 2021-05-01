<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tour_name' => 'required|string',
            'tour_price' => 'required|numeric',
            'tour_address' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'tour_discount' => 'required|numeric',
            'tour_details' => 'required|string',
            'tour_image' => 'required'
        ];
    }
}
