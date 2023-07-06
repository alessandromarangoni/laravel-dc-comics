@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ route("comics.edit", $comic) }}">Modifica questo prodotto</a>
            <div class="card">
                <h1>{{$comic->title}}</h1>
                <h5>{{$comic->description}}</h5>
                <h5>{{$comic->price}}</h5>
                <h5>{{$comic->thumb}}</h5>
                <h5>{{$comic->sale_date}}</h5>
            </div>
        </div>
    </div>
</div>
@endsection