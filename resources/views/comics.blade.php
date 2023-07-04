@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Products List</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <a class="btn btn-primary" href="{{ route("comics.create") }}">Aggiungi un nuovo prodotto</a>
            </div>
        </div>
        <div>
            <ul>
                @foreach ($comics as $item)
                    <ul>
                        <li>{{$item->title}}</li>
                        <li>{{$item->description}}</li>
                        <li>{{$item->thumb}}</li>
                        <li>{{$item->price}}</li>
                        <li>{{$item->series}}</li>
                        <li>{{$item->sale_date}}</li>
                    </ul>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection