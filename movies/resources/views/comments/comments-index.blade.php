@if(count($movie->comments))
        <hr>
        <h4>Comments</h4>
        <ul class="list-unstyled">
            @foreach($movie->comments as $comment)
                <li>
                <p>
                Created at: {{  $comment->created_at }}<br> 
                {{  $comment->content }} 
                </p>
                </li>
            @endforeach
        </ul>
@endif