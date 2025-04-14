

<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <?php if(empty($user)): ?>
                <div class="alert alert-danger alert-dismissible">
                    <div class="icon fas fa-ban"></div> Kesalahan!
                    <h5>Data yang Anda cari tidak ditemukan.</h5>
                </div>
            <?php else: ?>
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($user->user_id); ?></td>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <td><?php echo e($user->level->level_nama); ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?php echo e($user->username); ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo e($user->nama); ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>********</td>
                    </tr>
                </table>
            <?php endif; ?>
            <a href="<?php echo e(url('user')); ?>" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_2025\Minggu5.2\Jobsheet5.2\resources\views/user/show.blade.php ENDPATH**/ ?>