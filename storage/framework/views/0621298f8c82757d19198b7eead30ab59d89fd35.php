<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Album List - KPop Store')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Album</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Nama Supplier</th>
                                <th scope="col">Pembuat</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <th scope="row"><?php echo e($dt->album_name); ?></th>
                                <th scope="row"><?php echo e($dt->price); ?></th>
                                <th scope="row"><?php echo e($dt->stock); ?></th>
                                <th scope="row"><?php echo e($dt->supplier->name); ?></th>
                                <th scope="row"><?php echo e($dt->user->name); ?></th>
                                <th scope="row"><?php echo e(date('d/m/Y', $dt->created_at)); ?></th>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mvc-qda\resources\views/home.blade.php ENDPATH**/ ?>