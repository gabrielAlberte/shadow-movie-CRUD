@extends('base')

@section('content')

<style>
    .center {
        margin-left: 10%;
        /*margin-right:30%;*/
    }
    table, tr, th, td {
            border: 1px solid black; 
            border-collapse: collapse;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 12px;
            padding-bottom: 12px;
        }">


 
</style>

    <h1>Liste de film en base de donnée</h1>


    <div class="center"> 
        <table>
            <thead>
                <th><a href="{{ route('movie.create') }}">Add movie</a></th>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>author</th>
                    <th>description</th>
                    <th>language</th>
                    <th>url</th>
                    <th>category_id</th>
                    <th>edit</th>
                </tr>
            </thead>
            @foreach($movies as $movie)
            <tbody>
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->author }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->language }}</td>
                    <td>{{ $movie->url }}</td>
                    <td>{{ $movie->category_id }}</td>
                    <td>
                      
                        
                        <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">

                            <a href="{{ route('movie.show', $movie->id) }}" title="show">show</a>

                            <a href="{{ route('movie.edit', $movie->id) }}">update</a>
                            
                            @csrf
                            @method('DELETE')
                            <button type=submit>delete</button>
                        </form>
                        
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>   
@endsection