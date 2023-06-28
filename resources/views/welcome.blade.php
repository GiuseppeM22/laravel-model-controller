@extends('layouts.app')

@section('content')
<div class="container my-3">
 <ul>
    @foreach ($movies as $movie)
        <li>{{$movie->title}}</li>
    @endforeach
 </ul>

</div>
@endsection