<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Peserta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    </head>
    <body class="bg-success">
        <div class="container mb-4">
            <div class="row">
                <form class="form-control" action="" method="POST">
                    <h1 class="text-center">Form Peserta</h1>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Tuliskan Nama...">
                      </div>

                      <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" placeholder="Masukkan umur...">
                      </div>

                      <div class="mb-3">
                        <label for="institusi" class="form-label">Institusi</label>
                        <input type="text" class="form-control" id="institusi" placeholder="Masukkan institusi...">
                      </div>
                      <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Tambah Peserta</button>
                      </div>
                </form>
            </div>
        </div>

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
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH E:\Semester2\ForFun\DevCamp\devcampcrud\resources\views/index.blade.php ENDPATH**/ ?>