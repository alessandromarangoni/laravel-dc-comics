@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
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