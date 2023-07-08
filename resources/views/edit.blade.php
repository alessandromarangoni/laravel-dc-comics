@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row my-5">
        <div class="col-6">
            <form action="{{route('comics.update',$comic->id)}}" method="post">
                @csrf
                
                @method("PUT")
                
                <label for="name">title</label>
                <input class="form-control" type="text" name="title" value="{{ old('title') ?? $comic->title}}">

                <label for="name">description</label>
                <input class="form-control" type="text" name="description" value="{{ old('description') ?? $comic->description}}">

                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb}}">

                <label for="name">price</label>
                <input class="form-control" type="text" name="price" value="{{ old('price') ?? $comic->price}}">

                <label for="name">series</label>
                <input class="form-control" type="text" name="series" value="{{ old('series') ?? $comic->series}}">

                <label for="name">sale_date</label>
                <input class="form-control" type="text" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}">

                <label for="name">artists</label>
                <input class="form-control" type="text" name="title" value="{{ json_decode($comic->artist)}}">

                <label for="name">writers:</label>
                <input class="form-control" type="text" name="description" value="{{ json_decode($comic->writers)}}">





                <input class="form-control mt-4 btn btn-primary" type="submit" value="Crea">
            </form>
        </div>
    </div>

</div>
@endsection