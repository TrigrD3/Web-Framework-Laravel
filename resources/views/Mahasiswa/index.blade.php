@extends('layouts.app')

@section('content')
<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($mahasiswa as $mk)
    <tr>
      
      <th scope="row">{{ $mk->id }}</th>
      <td><a href="Mahasiswa/{{ $mk->nama }}">{{ $mk->nama }}</a></td>
      <td>{{ $mk->nim }}</td>
    </tr>
    @endforeach



  </tbody>
</table>
</div>
@endsection