<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:3|max:250",
            "description" => "required|min:10|max:2550",
            "thumb"=> "max:2550",
            "price" => "required",
            "series" => "required|max:250",
            "sale_date" => "required",
            "artist" => "required",
            "writers" => "required",
        ];
    }

    public function messages(){
        return[
            'title' =>'must be at least three characters and not more than twenty five hundred',
            'description' =>'must have minimum of ten words and maximum two thousand fifty.',
            'thumb'=>'must be max 2550 char',
            'price' =>'should contain only numeric values with no special character or space allowed.',
            'series' =>'maximum length is limited to one hundered fiftieth word.',
            'sale_date'=>'sale date should follow the format yyyy/mm/dd.',
            'artist'=>'artist names must be separated by commas.',
            'writers'=>'artist names must be separated by commas.'
        ];
    }

}
