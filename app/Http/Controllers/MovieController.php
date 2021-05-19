<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //prendo dal database
        $movies = Movie::all();
        //spedisco alla view
        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
      //prendo i dati e li salvo in una variabile data
      $data = $request->all();
      
      $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'genre' => 'required|string|max: 100',
        'plot' => 'required|string',
        'poster' => 'required|string'
      ]);

    //   $movieNew = Movie::create($request->all());
      
      $movieNew = new Movie();
        $movieNew->title = $data['title'];
        $movieNew->author = $data['author'];
        $movieNew->genre = $data['genre'];
        $movieNew->plot = $data['plot'];
        $movieNew->poster = $data['poster'];
        $movieNew->save();

        return redirect()->route('movies.show', $movieNew);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movie::find($id);
        return view('movies.show', ['movies' => $movies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //prendiamo i dati modificati
      $data = $request->all();
        //li validiamo
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max: 100',
            'plot' => 'required|string',
            'poster' => 'required|string'
        ]);

      //facciamo l'update  
      $movie ->update($request->all());
        //rispediamo alla view
        return redirect()->route('movies.show', $movie);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('message', 'Il film è stato eliminato');
    }
}
