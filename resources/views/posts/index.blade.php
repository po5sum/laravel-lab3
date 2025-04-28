<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    @foreach($posts as $post)
        <div>
            <h2><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></h2>
            <p>Author: {{ $post->author->name }}</p>
        </div>
    @endforeach
</body>
</html>

