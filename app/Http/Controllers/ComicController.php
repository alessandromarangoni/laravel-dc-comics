<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view("comics", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics-form');
    }

    private function validateComic($data)
    {
        return $validator = validator::make($data, [

            "title" => "required|min:3|max:250",
            "description" => "required|min:10|max:2550",
            "thumb"=> "max:2550",
            "price" => "required",
            "series" => "required|max:250",
            "sale_date" => "required",
            "artist" => "required",
            "writers" => "required",
        ],
        [
            'title' =>'must be at least three characters and not more than twenty five hundred',
            'description' =>'must have minimum of ten words and maximum two thousand fifty.',
            'thumb'=>'must be max 2550 char',
            'price' =>'should contain only numeric values with no special character or space allowed.',
            'series' =>'maximum length is limited to one hundered fiftieth word.',
            'sale_date'=>'sale date should follow the format yyyy/mm/dd.',
            'artist'=>'artist names must be separated by commas.',
            'writers'=>'artist names must be separated by commas.'
        ]
        )->validate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    $data = $this->validateComic($request->all());

    $newComic = new Comic;
    foreach ($data as $key => $value) {
        
        $newComic->$key = $value;
        if ($newComic->$key === 'artist'|| 'writers') {
            $newComic->artist = json_encode($value);
            $newComic->writers = json_encode($value);
        }
    }
    $newComic->save();

    /*$newComic->title = $data['title'];
    $newComic->description = $data['description'];
    $newComic->thumb = $data['thumb'];
    $newComic->price = $data['price'];
    $newComic->series = $data['series'];
    $newComic->sale_date = $data['sale_date'];
    $newComic->artist = json_encode($data['artist']);
    $newComic->writers = json_encode($data['writers']);
    $newComic->save();
    */
    return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view("comic-show", compact("comic") );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view ('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validateComic($request->all()) ;

        $comic->fill($data);
        $comic->artist = json_encode($data['artist']);
        $comic->writers = json_encode($data['writers']);
        $comic->update();
    
    /*  $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->artist = json_encode($data['artist']);
        $comic->writers = json_encode($data['writers']);
        $comic->update();
        */
        return view("comic-show", compact("comic") );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('home');
    }
}
