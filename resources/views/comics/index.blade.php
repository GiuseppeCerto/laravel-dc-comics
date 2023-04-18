@extends('layouts.app')

@section('content')

<section class="main_section">
    <div class="main_jumbo"></div>
    <div class="bg_color">
        <div class="main_container">
            <div class="container mt-4">
                <div class="row">
                  <div class="col-12">
                    <a class="btn btn-primary" href="{{ route('comics.create') }}">
                      Create new Comic
                    </a>
                  </div>
                </div>
              </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descriprion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>
                            <img src="{{ $comic->thumb }}" alt="" height="140">
                        </td>
                        <th scope="row">
                            {{ $comic->price }}
                        </th>
                        <td>
                            <a href="{{ route('comics.show',$comic->id) }}">
                            {{ $comic->title }}
                            </a>
                        </td>

                        <th scope="row">
                            {{ $comic->description }}
                        </th>
                        <td>
                            <div class="d-flex">
                            <a class="btn btn-secondary btn-sm" href="{{ route('comics.edit',$comic) }}">Edit</a>
                            <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            </form>
                            </div>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection