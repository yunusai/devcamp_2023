@extends('layouts.layout1')

@section('content')
<div class="card">
    <h5 class="card-header text-center">Form Peserta</h5>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Kota Asal</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach ($data as $datas)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $datas -> nama }}</td>
            <td>{{ $datas -> kota }}</td>
            <td>{{ $datas -> nohp }}</td>
            <td>
              <a href="/editdata/{{ $datas -> id }}" class="btn btn-info">Edit</a>
              <a href="/delete/{{ $datas -> id }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="container">
        <a class="btn btn-warning" href="form">Tambah</a>
      </div>
    </div>
  </div>
@endsection