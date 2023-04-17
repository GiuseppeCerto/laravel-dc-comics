@extends('layouts.app')

@section('content')

<section class="main_section">
    <div class="main_jumbo"></div>
    <div class="bg_color">
        <div class="main_container">
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
                        <a class="btn btn-secondary btn-sm" href="{{ route('comics.edit',$comic) }}">Edit</a>
                    </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection