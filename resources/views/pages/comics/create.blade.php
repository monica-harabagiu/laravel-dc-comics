@extends('layouts.app')

@section('title', 'DC Comics | Read Create')

@section('content')

<main>

    <h2>Aggiungi un nuovo fumetto</h2>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Image URL</label>
          <input name="thumb" type="text" class="form-control" id="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="number" class="form-control" id="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input name="series" type="text" class="form-control" id="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Date</label>
            <input name="sales_date" type="date" class="form-control" id="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input name="type" type="text" class="form-control" id="Type">
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</main>

@endsection