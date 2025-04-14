<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/<?php echo e($data->user_id); ?>">>

        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>


        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" value="<?php echo e($data->username); ?>">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo e($data->nama); ?>">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" value="<?php echo e($data->password); ?>">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level" value="<?php echo e($data->level_id); ?>">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
<body>
</html><?php /**PATH C:\laragon\www\PWL_2025\Minggu4\Jobsheet4\resources\views/user_ubah.blade.php ENDPATH**/ ?>