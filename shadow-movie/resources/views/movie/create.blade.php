@extends('base')

@section('content')

    <h1>Ajout d'un nouveau film</h1>

        <form action="{{ route('movie.store')}}" method="POST">
            @csrf
            
            <label for="title">title:</label><br>
            <input type="text" name="title" value="John"><br>

            <label for="author">author:</label><br>
            <input type="text" name="author" value="Doe"><br>

            <label for="description">description:</label><br>
            <input type="text" name="description" value="Doe"><br>

            <label for="language">language:</label><br>
            <input type="text"  name="language" value="Doe"><br>

            <label for="url">url:</label><br>
            <input type="text" name="url" value="Doe"><br>

            <label for="category_id">category id:</label><br>
            <input type="text" name="category_id" value="1"><br>

            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id  }}">  {{ $category->name  }}</option>
                @endforeach
            </select><br><br>


            <input type="submit" value="create">
        </form> 

    @endsection
