<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h3>Comments:</h3>
    @foreach($post->comments as $comment)
        <div>
            <strong>{{ $comment->commenter_name }}</strong>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach

    <h3>Add a Comment:</h3>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ url('/posts/'.$post->id.'/comments') }}">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="commenter_name" required>
        </div>
        <div>
            <label>Comment:</label>
            <textarea name="comment" required></textarea>
        </div>
        <div>
            <button type="submit">Add Comment</button>
        </div>
    </form>
</body>
</html>
