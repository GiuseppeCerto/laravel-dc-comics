@extends('layouts.app')

@section('content')


  <div class="container">
    <h1>Comic to edit:: {{ $comic->title }}</h1>
  </div>

    <div class="container">
        <form action="{{ route('comics.update',$comic) }}" method="POST">

            @csrf
            @method('PUT')

            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$comic->title) ?? '' }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" value="{{ old('description',$comic->description) ?? '' }}">
                        {{ $comic->description }}
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immage (url)</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb',$comic->thumb) ?? '' }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price',$comic->price) ?? '' }}" >
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series',$comic->series) ?? '' }}" >
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date',$comic->sale_date) ?? '' }}" >
                </div>


                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type',$comic->type) ?? '' }}" >
                </div>

                <button type="submit" class="btn btn-primary">Save</button>


        </form>
    </div>
    
@endsection