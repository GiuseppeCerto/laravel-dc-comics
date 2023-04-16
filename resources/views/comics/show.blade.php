@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>{{$comic->title}}</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <img src="{{$comic->thumb}}" alt="">
    </div>
</div>

<div class="container">
    <div class="row">
        <p>{{$comic->description}}</p>
    </div>
</div>


@endsection