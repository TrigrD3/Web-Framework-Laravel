@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Jadwal Mata Kuliah</h1>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($JadwalDosen->jadwal as $ds)
    <tr>
      <th scope="row">{{ $ds->id_jadwal }}</th>
      <td>{{ $ds->dosen->nama_dosen }}</td>
      <td>{{ $ds->mataKuliah->nama_mk }}</td>
      <td>{{ $ds->hari }}</td>
      <td>{{ $ds->jam }}</td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>
@endsection