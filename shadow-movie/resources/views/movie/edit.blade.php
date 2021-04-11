@extends('base')

@section('content')

    <h1>Modifier un film</h1>

        <form action="{{ route('movie.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">title:</label><br>
            <input type="text" name="title" value="{{ $movie->title}}"><br>

            <label for="author">author:</label><br>
            <input type="text" name="author" value="{{ $movie->author }}"><br>

            <label for="description">description:</label><br>
            <textarea type="text" name="description" cols="100">{{ $movie->description }}</textarea><br>

            <label for="language">language:</label><br>
            <input type="text"  name="language" value="{{ $movie->language }}"><br>

            <label for="url">url:</label><br>
            <input type="text" name="url" value="{{ $movie->url }}"><br>

            <label for="category_id">category id:</label><br>
            <select name="category_id">
                @foreach($categoryMovie as $category)
                    <option value="{{ $category->id  }}">  {{ $category->name  }}</option>
                @endforeach
            </select><br><br>
            
            

            <input type="submit" value="Add movie">

        </form> 

    @endsection