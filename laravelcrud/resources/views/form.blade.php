@extends('layouts.layout1')

@section('content')
<div class="card">
    <h5 class="card-header text-center">Form Peserta</h5>
    <div class="card-body">
        <form action="/create" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control"id="nama" name="nama">
            </div>
            <div class="mb-3">
              <label for="kota" class="form-label">Kota Asal</label>
              <input type="text" class="form-control" id="kota" name="kota">
            </div>
            <div class="mb-3">
              <label for="nohp" class="form-label">Nomor HP</label>
              <input type="text" class="form-control" id="nohp" name="nohp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
@endsection