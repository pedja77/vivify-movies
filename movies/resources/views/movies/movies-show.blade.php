@extends('layouts.master-layout')

@section('title')
    {{  $movie->title }}
@endsection

@section('content')
    <h3>{{ $movie->title  }}</h3>
    Director: {{ $movie->director }}
    Year: {{ $movie->year }}
    Story:
    <p>{{ $movie->storyline }}</p>
@endsection