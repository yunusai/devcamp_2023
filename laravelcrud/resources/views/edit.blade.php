@extends('layouts.layout1')

@section('content')
<div class="card">
    <h5 class="card-header text-center">Update Data Peserta</h5>
    <div class="card-body">
        <form action="/update/{{ $data -> id }}" method="GET">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control"id="nama" name="nama" value="{{ $data -> nama }}">
            </div>
            <div class="mb-3">
              <label for="kota" class="form-label">Kota Asal</label>
              <input type="text" class="form-control" id="kota" name="kota" value="{{ $data -> kota }}">
            </div>
            <div class="mb-3">
              <label for="nohp" class="form-label">Nomor HP</label>
              <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $data -> nohp }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
@endsection