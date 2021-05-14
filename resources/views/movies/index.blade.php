<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="logo">
      <img src="{{asset('images/hotpopcornmovie.svg')}}" alt="">
    </div>
    <div class="brand-wrapper">
      <h2>The Movie Pub</h2>
    </div>
    <nav class="main-nav">
      <ul>
        <li><a href="#">link</a></li>
        <li><a href="#">link</a></li>
        <li><a href="#">link</a></li>
      </ul>
    </nav>
  </header>
    <div class="title">
      <h1>Tutti i film</h1>
    </div>
    @foreach ($movies as $movie)
      <div class="card">
        <h3>{{$movie->title}}</h3>
        <h4>{{$movie->author}}</h4>
        <p>{{$movie->genre}}</p>
        <img src="{{$movie->poster}}" alt="">
        <a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettaglio</a>
      </div>
    @endforeach
</body>
</html>