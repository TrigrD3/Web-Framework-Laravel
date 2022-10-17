@extends('layouts.app')

@section('content')
<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">NIP</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($dosens as $dosen)
    <tr>
      <th scope="row">{{ $dosen->id_dosen }}</th>
      <td>{{ $dosen->nama_dosen }}</td>
      <td>{{ $dosen->nip }}</td>
      <td>{{ $dosen->alamat }}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection