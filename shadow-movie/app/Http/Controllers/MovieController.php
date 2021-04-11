<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;

class MovieController extends Controller
{
    
    public function index()
    {
        //SELECT * FROM Movie
        $movies = Movie::all();
        
        //compact crée un tableau associatif, la variable est envoyé a ma vue
        return view('movie.index', compact('movies'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('movie.create', compact('categories'));    
    }

   
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

    
    public function edit(Movie $movie)
    {
        $categoryMovie = Category::all();
        return view('movie.edit', compact('movie', 'categoryMovie'));
    }

    
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

    
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movie.index')
            ->with('success', 'Movie created successfully');
    }


}
