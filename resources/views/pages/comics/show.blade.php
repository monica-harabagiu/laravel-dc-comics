@extends('layouts.app')

@section('title', 'DC Comics | Read Show')

@section('content')
    <main>
        <h2>{{ $comic->title }}</h2>

        <p>{{ $comic->description }}</p>
    </main>
@endsection