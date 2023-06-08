<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daftar Peserta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    </head>
    <body class="bg-success">
        <h1 class="text-center">Daftar Peserta</h1>
        <div class="container mt-4">
            <div class="row">
                <table class="table table-striped">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Institut</th>
                        <th scope="col">Edit/Delete</th>
                      </tr>
                    </thead>
                    @foreach ($data as $datas)   
                    <tbody>
                        <tr>
                            <th scope="row">{{ $datas->id }}</th>
                            <td>{{ $datas->nama }}</td>
                            <td>{{ $datas->umur }}</td>
                            <td>{{ $datas->institusi }}</td>
                            <td>
                                <a href="/editdata/{{ $datas->id }}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="/deletedata/{{ $datas->id }}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                  </table>
                  <a href="form"><button class="btn btn-info">Tambah</button></a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
