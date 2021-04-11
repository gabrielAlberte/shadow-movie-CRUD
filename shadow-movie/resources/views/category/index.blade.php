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
        }
</style>

    <h1>Liste de category</h1>

    <div class="center"> 
        <table>
            <thead>
                <th><a href="{{ route('category.create') }}">Add movie</a></th>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>edit</th>
                </tr>
            </thead>
            @foreach($categories as $category)
            <tbody>
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">

                            <a href="{{ route('category.edit', $category->id) }}" title="edit">update</a>
                            
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