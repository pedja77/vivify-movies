@extends('layouts.master-layout')

@section('title')
    Add movie
@endsection

@section('content')
<form method="POST" action="/movies">

    {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Movie title:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter movie title">
    @include('partials.error-message', ['fieldTitle' => 'title'])
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter movies genre">
    @include('partials.error-message', ['fieldTitle' => 'genre'])
  </div>
  <div class="form-group">
    <label for="director">Director:</label>
    <input type="text" class="form-control" id="director" name="director" placeholder="Enter movies director">
  </div>
  <div class="form-group">
    <label for="year">Release year:</label>
    <input type="text" class="form-control" id="year" name="year" placeholder="Enter release year">
    @include('partials.error-message', ['fieldTitle' => 'year'])
  </div>
  <label for="storyline">Synopsis</label>
  <textarea class="form-control" id="storyline" name="storyline"></textarea>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection