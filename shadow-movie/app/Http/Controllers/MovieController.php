<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        /*
        return view('movie/manageMovie', [
            'movies' => $movies,
        ]);
        */
        return view('movie.index', compact('movies'));
    }
  
    public function create()
    {
        return view('movie.create');
        //return view('movie.createMovie');
        //return redirect()->route('movie/addMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'language' => 'required',
            'url' => 'required',
            'category_id' => 'required',
        ]);

        Movie::create($request->all());
        
        return redirect()->route('movie.index')
            ->with('success', 'Movie created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Movie $movie)
    {
        return view('movie.edit', compact('movie'));
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
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'language' => 'required',
            'url' => 'required',
            'category_id' => 'required',
        ]);
        
        $movie->update($request->all());
        
        return redirect()->route('movie.index')
            ->with('success', 'Movie update successfully');
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

        return redirect()->route('movie.index')
            ->with('success', 'Movie created successfully');
    }
}
