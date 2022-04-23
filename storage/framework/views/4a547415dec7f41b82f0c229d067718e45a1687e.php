

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Halaman Tambah')); ?></div>

                <div class="card-body">
                    <form action="<?php echo e(route('addAlbum')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="mb-2">
                            <label for="nameAlbum">Nama Album</label>
                            <input type="text" name="album_name" class="form-control" id="nameAlbum">
                        </div>
                        <div class="mb-2">
                            <label for="priceAlbum">Harga</label>
                            <input type="text" name="price" class="form-control" id="priceAlbum">
                        </div>
                        <div class="mb-2">
                            <label for="stockAlbum">Stok</label>
                            <input type="text" name="stock" class="form-control" id="stockAlbum">
                        </div>
                        <div class="mb-2">
                            <label for="users">Supplier</label>
                            <select class="form-select" aria-label="Default select example" id="users" name="supplier_id">
                                <option selected>Open this select menu</option>
                                <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=" <?php echo e($sp->id); ?>"><?php echo e($sp->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="users">User yang Membuat</label>
                            <select class="form-select" aria-label="Default select example" id="users" name="user_id">
                                <option selected>Open this select menu</option>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=" <?php echo e($dt->id); ?>"><?php echo e($dt->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button class="btn btn-warning mt-2">Tambah Todo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mvc-qda\resources\views/create.blade.php ENDPATH**/ ?>