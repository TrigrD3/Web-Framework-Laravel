@extends('layouts.app')

@section('content')


    

  <div class="container">
    @foreach ($books as $book)
    <div class="row">
      <div class="col">
        <h1>{{ $book->title }}</h1>
        <p>{{ $book->description }}</p>
        {{-- <p>{{ $book->created_at->diffForHumans() }}</p> --}}
      </div>
    </div>
    @endforeach
  </div>
  
@endsection