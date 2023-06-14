<?php $__env->startSection('content'); ?>
        <div class="container mb-4">
            <div class="row">
                <form class="form-control" action="create" method="POST">
                  <?php echo csrf_field(); ?>
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
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester2\ForFun\DevCamp\devcampcrud\resources\views/form.blade.php ENDPATH**/ ?>