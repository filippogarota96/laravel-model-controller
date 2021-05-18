 
@extends('layouts.base')
  @section('movie_pub')
      The Movie Pub
  @endsection
  @section('content')
    <div class="add-movie mb-5 text-right ">
     <a href="{{route('movies.create')}}"><button type="button" class="btn btn-primary $header_color">Aggiungi un film</button></a>
    </div>
    <div class="movies">
      @foreach ($movies as $movie)
              <div class="card">
                <img src="{{$movie->poster}}" alt="">
                <div class="card__title">
                  <h3>{{$movie->title}}</h3>
                  <p>{{$movie->genre}}</p>
                  <a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettagli <span class="arrow"><i class="fas fa-arrow-right"></i></span></a>
                </div> 
              </div>
      @endforeach
    </div>  
  @endsection
  