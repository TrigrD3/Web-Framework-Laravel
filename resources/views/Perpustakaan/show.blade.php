@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{ $books->title }}</h1>
        <p>{{ $books->description }}</p>
      </div>
    </div>
  </div>
  
@endsection