@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row my-5">
        <div class="col-6">

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{route('comics.store')}}" method="post" class="needs-validation">

                @csrf
                


                <label for="title">title</label>
                <input class="form-control @error('title') is-invalid @enderror"  type="text" name="title">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">description</label>
                <input class="form-control  @error('description') is-invalid @enderror" type="text" name="description">
                @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb">

                <label for="name">price</label>
                <input class="form-control  @error('price') is-invalid @enderror" type="text" name="price">
                @error('price')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="name">series</label>
                <input class="form-control  @error('series') is-invalid @enderror" type="text" name="series">
                @error('series')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="name">sale_date</label>
                <input class="form-control  @error('sale_date') is-invalid @enderror" type="text" name="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <input class="form-control mt-4 btn btn-primary" type="submit" value="Crea">
            </form>
        </div>
    </div>

</div>
@endsection