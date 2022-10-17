@extends('layouts.app')

@section('content')
  <div class="container">
    <section>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Buku</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
              <a href="{{ url('/Buku') }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Layanan Medis</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                <a href="{{ url('/LayananMedis') }}" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Layanan Koperasi</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                  <a href="{{ url('/LayananKoperasi') }}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection