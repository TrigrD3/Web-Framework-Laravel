@extends('layouts.app')

@section('content')

<div class="container">
  <section class="">

    <div class="row">
      <div class="col">
        <div class="card mb-2">
          <div class="card-body">
            <h5 class="card-title">Mata Kuliah</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <a href="{{ url('/MataKuliah') }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>


        <div class="col">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Jadwal</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
              <a href="{{ url('/Jadwal') }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title">Mahasiswa</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
              <a href="{{ url('/Mahasiswa') }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

          <div class="col">
            <div class="card mb-2">
              <div class="card-body">
                <h5 class="card-title">Dosen</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                <a href="{{ url('/Dosen') }}" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

    </div>
</section>
</div>


@endsection