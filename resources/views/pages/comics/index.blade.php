@extends('layouts.app')

@section('title', 'DC Comics | Read Index')

@section('content')
    <main class="p-5">
        <h1>Tutti i fumetti</h1>

        <div class="table-responsive">

            <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea fumetto</a>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    {{ $comic->title }}
                                </a>
                            </td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->thumb }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Cancella
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection