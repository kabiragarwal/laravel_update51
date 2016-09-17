<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    </head>
    <body>
        <h1>{{ $article->title }}</h1>
        @can('update', $article)
            <a href='#'>Update this Article</a>
        @endcan
    </body>
</html>
