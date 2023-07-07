@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ route("comics.edit", $comic) }}">modifica comic</a>
            <form action="{{route('comics.destroy', $comic )}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-warning" value="cancella">
            </form>
            <div class="card">
                <h1>{{$comic->title}}</h1>
                <h5>description:</h5> <span>{{$comic->description}}</span>
                <h5>{{$comic->price}}</h5>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                <h5>{{$comic->sale_date}}</h5>
                <h5> artists: </h5><span> {{$comic->artist}}</span>
                <h5>Writers: </h5> <span> {{$comic->writers}}</span>
            </div>
        </div>
    </div>
</div>
@endsection