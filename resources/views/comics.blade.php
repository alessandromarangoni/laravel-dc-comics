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
        <div class="d-flex flex-wrap justify-content-between">
            @foreach ($comics as $item)
                <div class="card m-1 w-25 mt-5">
                    <ul class="list-unstyled">
                        <li class="p-2">{{$item->title}}</li>
                        <li class="p-2">{{$item->description}}</li>
                        <li class="p-2">{{$item->thumb}}</li>
                        <li class="p-2">{{$item->price}}</li>
                        <li class="p-2">{{$item->series}}</li>
                        <li class="p-2">{{$item->sale_date}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection