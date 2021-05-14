<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>{{$movies->title}}</h1>
  <img src="{{$movies->poster}}" alt="">
  <p>{{$movies->plot}}</p>
  <p><a href="{{route('movies.index')}}">Torna alla home</a></p>
</body>
</html>