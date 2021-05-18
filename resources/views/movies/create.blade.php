@extends('layouts.base')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    
    <h2 class="mb-5">Aggiungi un film</h2>
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
          <label for="title">Generi</label>
          <input type="text" class="form-control" id="genre" name="genre" placeholder="Generi">
        </div>
        <label for="plot">Trama</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="plot" rows="3"></textarea>
        <button type="submit" class="btn btn-primary mt-5" value="salva">Salva</button>
  </form>
@endsection