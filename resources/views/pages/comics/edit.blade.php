@extends('layouts.app')

@section('title', 'DC Comics | Read Edit')

@section('content')
    <main>
        <h2>Modifica il fumetto</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{ old('title') ?? $comic->title }}" name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
      
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3">
                    {{ old('description') ?? $comic->description }}
                </textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Image URL</label>
                <input value="{{ old('thumb') ?? $comic->thumb }}" name="thumb" type="text" class="form-control" id="thumb">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value="{{ old('price') ?? $comic->price }}" name="price" type="number" class="form-control" id="price">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input value="{{ old('series') ?? $comic->series }}" name="series" type="text" class="form-control" id="series">
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date</label>
                <input value="{{ old('sale_date') ?? $comic->sale_date}}" name="sales_date" type="date" class="form-control" id="sale_date">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input value="{{ old('type') ?? $comic->type }}" name="type" type="text" class="form-control" id="Type">
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </main>
@endsection