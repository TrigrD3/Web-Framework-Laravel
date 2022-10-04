@extends('layouts.app')

@section('content')
  <div class="container">
    {{-- display list of books from database --}}
    <div class="row">
      @foreach ($books as $book)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://picsum.photos/300/200?random={{ $book->id }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $book->title }}</h5>
              <p class="card-text">{{ $book->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-outline-secondary">View</a>
                  <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                  <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </form>
                </div>
                <small class="text-muted">{{ $book->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="row">
      <div class="col">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
      </div>
    </div>
  </div>

@endsection