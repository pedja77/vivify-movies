@extends('layouts.master-layout')

@section('title')
    {{  $movie->title }}
@endsection

@section('content')
    <h3>{{ $movie->title  }}</h3>
    Genre: {{ $movie->genre }}<br>
    Director: {{ $movie->director }}<br>
    Year: {{ $movie->year }}<br>
    Story:
    <p>{{ $movie->storyline }}</p>
@endsection