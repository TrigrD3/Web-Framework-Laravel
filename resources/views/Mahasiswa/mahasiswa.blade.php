@extends('layouts.app')

@section('content')
<div class="container">
    
  <h1> Nama: {{ $mahasiswa->nama}}</h1>
  <h1> NIM: {{ $mahasiswa->nim}}</h1>
  <h1> Club: {{ $mahasiswa->Club->nama_club}}</h1>

  {{-- {{ $mahasiswa->mataKuliah->nama_mk }} --}}
  <h2>Matkul yang diambil:</h2>
  
  {{-- <li>{{ $mahasiswa->mataKuliah }}</li> --}}
  
@foreach ($mahasiswa->mataKuliah as $mk)
  <li>{{ $mk->nama_mk}}</li>
  
@endforeach



  


  




</div>
@endsection