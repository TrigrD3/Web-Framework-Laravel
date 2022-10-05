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
        <form action="{{ route('Perpustakaan.update', $books) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $books->title }}">
          </div>

          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $books->author }}">
          </div>

          <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" id="publisher" class="form-control" value="{{ $books->publisher }}">
          </div>

          <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" id="year" class="form-control" value="{{ $books->year }}">
          </div>

          <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $books->isbn }}">
          </div>

          <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ $books->category }}">
          </div>

          <div class="form-group">
            <label for="language">Language</label>
            <input type="text" name="language" id="language" class="form-control" value="{{ $books->language }}">
          </div>

          <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" name="edition" id="edition" class="form-control" value="{{ $books->edition }}">
          </div>

          <div class="form-group">
            <label for="pages">Pages</label>
            <input type="number" name="pages" id="pages" class="form-control" value="{{ $books->pages }}">
          </div>

          <div class="form-group">
            <label for="cover">Cover</label>
            <input type="text" name="cover" id="cover" class="form-control" value="{{ $books->cover }}">
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $books->status }}">
          </div>

          



          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $books->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  
@endsection