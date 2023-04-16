@extends('layouts.app')

@section('content')

<section class="main_section">
    <div class="main_jumbo"></div>
    <div class="bg_color">
        <div class="main_container">
            @foreach ($comics as $comic)
                <div class="container">
                    <div class="row">
                        <div class='card_comic col-4'>
                            <a href="{{ route ('comics.show',[ 'comic' => $comic->id ]) }}">
                                <img src="{{ $comic ['thumb']}}" alt="">
                                <div class="card_title">{{ $comic ['series'] }}</div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection