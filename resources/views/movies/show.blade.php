<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="container show-movies">
    <div class="movie__card">
      <h2>{{$movies->title}}</h2>
      <div class="movie__poster">
        <img src="{{$movies->poster}}" alt="">
        <button class="btn btn__primary">Acquista</button>
        <button class="btn btn__secondary">Noleggia</button>
      </div>
      <h4> Regia: {{$movies->author}}</h4>
      <p>{{$movies->plot}}</p>
      <a href="{{route('movies.index')}}"><span class="arrow"><i class="fas fa-arrow-left"></i></a>
    </div>
  </div>
</body>
</html>