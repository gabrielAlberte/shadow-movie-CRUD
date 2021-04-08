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
            <input type="text" name="description" value="{{ $movie->description }}"><br>

            <label for="language">language:</label><br>
            <input type="text"  name="language" value="{{ $movie->language }}"><br>

            <label for="url">url:</label><br>
            <input type="text" name="url" value="{{ $movie->url }}"><br>

            <label for="category_id">category id:</label><br>
            <input type="text" name="category_id" value="{{ $movie->category_id}}"><br>


            <input type="submit" value="create">
        </form> 

    @endsection