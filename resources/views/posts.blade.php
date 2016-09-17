<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    </head>
    <body>
                @foreach($posts as $post)
					<h1>{{ $post->title }}</h1>
					<p>{{ $post->body }}</p>
				@endforeach
    </body>
</html>
