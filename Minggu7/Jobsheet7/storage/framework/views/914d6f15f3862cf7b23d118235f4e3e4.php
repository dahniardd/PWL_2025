<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <a href="/user/tambah">+ Tambah User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Kode Level</td>
            <td>Nama Level</td>
            <td>Aksi</td>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($d->user_id); ?></td>
            <td><?php echo e($d->username); ?></td>
            <td><?php echo e($d->nama); ?></td>
            <td><?php echo e($d->level_id); ?></td>
            <td><?php echo e($d->level->level_kode); ?></td>
            <td><?php echo e($d->level->level_nama); ?></td>
            <td><a href="/user/ubah/<?php echo e($d->user_id); ?>">Ubah</a> | <a href="/user/hapus/<?php echo e($d->user_id); ?>">Hapus</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\PWL_2025\Minggu5.2\Jobsheet5.2\resources\views/user.blade.php ENDPATH**/ ?>