@extends('layouts.app')

@section('content')
<h1>I Miei Film</h1>
<div class="container my-3">
    @foreach ($movies as $movie)
    <div class="cardsContainer">
        <div class="carde">
            <div class="infoContainer ">
                <h5 class="name">{{$movie->title}}</h5>
                <h6 class="type">{{$movie->original_title}}</h6>
                <p class="type">{{$movie->nationality}}</p>
                <div class="stars">
                    <span>Rated: {{$movie->vote}}</span>
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach


</div>
@endsection