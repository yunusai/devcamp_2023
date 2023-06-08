<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Peserta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    </head>
    <body class="bg-success">
        <div class="container mb-4">
            <div class="row">
                <form class="form-control" action="create" method="POST">
                  @csrf
                    <h1 class="text-center">Form Peserta</h1>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Tuliskan Nama...">
                      </div>

                      <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input name="umur"type="number" class="form-control" id="umur" placeholder="Masukkan umur...">
                      </div>

                      <div class="mb-3">
                        <label for="institusi" class="form-label">Institusi</label>
                        <input name="institusi" type="text" class="form-control" id="institusi" placeholder="Masukkan institusi...">
                      </div>
                      <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Tambah Peserta</button>
                      </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
