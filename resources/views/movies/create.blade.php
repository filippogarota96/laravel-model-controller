@extends('layouts.base')

@section('content')
    <h2>Aggiungi un film</h2>
      <form action="{{route('movies.store')}}" method="POST">
      @csrf
      @method('POST')
        <div class="form-group">
          <label for="poster">Locandina</label>
          <input type="text" class="form-control" id="poster" name="poster" placeholder="Locandina">
        </div>
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
        </div>
        <div class="form-group">
          <label for="author">Autore</label>
          <input type="text" class="form-control" id="author" name="author" placeholder="Autore">
        </div>
        <div class="form-group">
          <label for="title">Genere</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
        </div>
        <label for="plot">Trama</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <button type="submit" class="btn btn-primary">Salva</button>
  </form>
@endsection