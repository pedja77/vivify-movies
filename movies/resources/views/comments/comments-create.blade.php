

<form method="POST" action="{{route('add-comment', ['movie_id'=> $movie->id])}}">

    {{ csrf_field() }}

  
  
  <label for="content">Leave a comment:</label>
  <textarea class="form-control" id="content" name="content"></textarea>
  @include('partials.error-message', ['fieldTitle' => 'content'])
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>