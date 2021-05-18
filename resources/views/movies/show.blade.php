
    @extends('layouts.base')
   
   
    @section('content')
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
    @endsection
  