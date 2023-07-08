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

            <form action="{{route('comics.update',$comic->id)}}" method="post" class="needs-validation">
                @csrf

                @method("PUT")
                
                <label for="title">title</label>
                <input class="form-control @error('title') is-invalid @enderror"  type="text" name="title" value="{{ old('title') ?? $comic->title}}">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="descriprion">description</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{ old('description') ?? $comic->description}}" >
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="thumb">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb}}">
                @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="price">price</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ old('price') ?? $comic->price}}">
                @error('price')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="series">series</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ old('series') ?? $comic->series}}">
                @error('series')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="sale_date ">sale_date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}">
                @error('sale_date')
                <div class="valid-feedback">{{$message}}</div>
                @enderror
                <label for="artist">artists</label>
                <input class="form-control @error('artist') is-invalid @enderror" type="text" name="artist" value="{{ json_decode($comic->artist)}}">
                @error('artist')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <label for="writers">writers</label>
                <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{ json_decode($comic->writers)}}">
                @error('writers')
                <div class="invalid-feedback ">{{$message}}</div>
                @enderror
                <input class="form-control mt-4 btn btn-primary" type="submit" value="Crea">
            </form>
        </div>
    </div>

</div>
@endsection