@extends('layouts.app')

@section('content')
<div class="container">
    
<h1>Mahasiswa yang mengambil mata kuliah {{ $matakuliah->nama_mk }}:</h1>

@foreach ($matakuliah->mahasiswa as $mk)
  <li>{{ $mk}}</li>
  
@endforeach

{{-- @dd($matakuliah->mhs) --}}
{{-- <li>{{ $matakuliah->mahasiswa }}</li> --}}

  


  




</div>
@endsection