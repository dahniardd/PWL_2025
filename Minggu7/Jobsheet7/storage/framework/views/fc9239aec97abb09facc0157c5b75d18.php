<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><h1><?php echo e($breadcrumb->title); ?></h1></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <?php $__currentLoopData = $breadcrumb->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == count($breadcrumb->list) - 1): ?>
                            <li class="breadcrumb-item active"><?php echo e($value); ?></li>
                        <?php else: ?>
                            <li class="breadcrumb-item"><?php echo e($value); ?></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\PWL_2025\Minggu5.2\Jobsheet5.2\resources\views/layouts/breadcrumb.blade.php ENDPATH**/ ?>