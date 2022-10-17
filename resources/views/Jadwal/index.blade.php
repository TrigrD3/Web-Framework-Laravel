@extends('layouts.app')

@section('content')
<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">id_dosen</th>
      <th scope="col">id_mk</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($jadwals as $jadwal)
    <tr>
      <th scope="row">{{ $jadwal->id_jadwal }}</th>
      <td>{{ $jadwal->id_dosen }}</td>
      <td>{{ $jadwal->id_mk }}</td>
      <td>{{ $jadwal->hari }}</td>
      <td>{{ $jadwal->jam }}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection