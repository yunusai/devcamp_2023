

<?php $__env->startSection('content'); ?>
        <div class="container mb-4">
            <div class="row">
                <form class="form-control" action="/updatedata/<?php echo e($data->id); ?>" method="GET">
                  <?php echo csrf_field(); ?>
                    <h1 class="text-center">Edit Peserta</h1>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama"
                        placeholder="Tuliskan Nama..." value="<?php echo e($data->nama); ?>">
                      </div>

                      <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input name="umur"type="number" class="form-control" id="umur"
                        placeholder="Masukkan umur..." value="<?php echo e($data->umur); ?>">
                      </div>

                      <div class="mb-3">
                        <label for="institusi" class="form-label">Institusi</label>
                        <input name="institusi" type="text" class="form-control" id="institusi"
                        placeholder="Masukkan institusi..." value="<?php echo e($data->institusi); ?>">
                      </div>
                      <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Ubah</button>
                      </div>
                </form>
            </div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester2\ForFun\DevCamp\devcampcrud\resources\views/edit.blade.php ENDPATH**/ ?>