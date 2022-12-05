@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <img class="card-img-top" src="https://picsum.photos/300/200?random={{ $books->id }}" alt="Card image cap">
        <h1>{{ $books->title }}</h1>
        <h1>{{ $books->author }}</h1>
        <h1>{{ $books->publisher }}</h1>
        <h1>{{ $books->year }}</h1>
        <h1>{{ $books->isbn }}</h1>
        <h1>{{ $books->category }}</h1>
        <p>{{ $books->description }}</p>
      </div>
    </div>
  </div>
  
@endsection