@extends('layouts.app')

@section('content')
<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode_mk</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Semester</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($mk as $mk)
    <tr>
      <th scope="row"><a href="MataKuliah/{{ $mk->nama_mk }}">{{ $mk->id }}</a></th>
      <td>{{ $mk->kode_mk }}</td>
      <td>{{ $mk->nama_mk }}</td>
      <td>{{ $mk->semester }}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection