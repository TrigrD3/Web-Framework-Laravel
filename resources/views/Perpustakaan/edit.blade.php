@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Edit Buku</h1>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <form action="{{ route('Perpustakaan.update', $book) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $book->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  
@endsection