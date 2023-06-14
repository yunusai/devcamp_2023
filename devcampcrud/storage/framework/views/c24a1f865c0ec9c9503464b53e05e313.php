

<?php $__env->startSection('content'); ?>
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
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo e($datas->id); ?></th>
                            <td><?php echo e($datas->nama); ?></td>
                            <td><?php echo e($datas->umur); ?></td>
                            <td><?php echo e($datas->institusi); ?></td>
                            <td>
                                <a href="/editdata/<?php echo e($datas->id); ?>"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="/deletedata/<?php echo e($datas->id); ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                  <a href="form"><button class="btn btn-info">Tambah</button></a>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester2\ForFun\DevCamp\devcampcrud\resources\views/daftar.blade.php ENDPATH**/ ?>