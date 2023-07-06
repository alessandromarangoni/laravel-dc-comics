@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row my-5">
        <div class="col-6">
            <form action="{{route('comics.update',$comic->id)}}" method="post">
                @csrf
                
                @method("PUT")
                
                <label for="name">title</label>
                <input class="form-control" type="text" name="title">

                <label for="name">description</label>
                <input class="form-control" type="text" name="description">

                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb">

                <label for="name">price</label>
                <input class="form-control" type="text" name="price">

                <label for="name">series</label>
                <input class="form-control" type="text" name="series">

                <label for="name">sale_date</label>
                <input class="form-control" type="text" name="sale_date">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Crea">
            </form>
        </div>
    </div>

</div>
@endsection