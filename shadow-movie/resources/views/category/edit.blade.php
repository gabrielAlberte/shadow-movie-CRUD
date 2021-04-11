@extends('base')

@section('content')

    <h1>Editer une categorie</h1>

        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Name:</label><br>
            <input type="text" name="title" value="{{ $category->name}}"><br><br>

            <input type="submit" value="Add category">

        </form> 

    @endsection