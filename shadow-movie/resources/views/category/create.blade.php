@extends('base')

@section('content')

    <h1>Crée une categorie</h1>

        <form action="{{ route('category.store')}}" method="POST">
            @csrf
           

            <label for="title">Name:</label><br>
            <input type="text" name="name" value=""><br><br>

            <input type="submit" value="Add category">

        </form> 

    @endsection