<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Tutti i film</h1>
    @foreach ($movies as $movie)
      <h3>{{$movie->title}}</h3>
      <h4>{{$movie->author}}</h4>
      <p>{{$movie->genre}}</p>
      <img src="{{$movie->poster}}" alt="">
      <a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettaglio</a>
    @endforeach
</body>
</html>