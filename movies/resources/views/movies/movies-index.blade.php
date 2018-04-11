@extends('layouts.master-layout')

@section('title')
    IMDB clone
@endsection

@section('content')
<ul>
@foreach($movies as $movie)
    <li>
        <h4><a href="{{ route('single-movie', ['id'=> $movie->id]) }}">{{ $movie->title }}</a></h4>
        <p>{{  substr($movie->storyline, 0, 35) . '...' }}
    </li>
@endforeach
</ul>
@endsection