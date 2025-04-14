<?php if(empty($user)): ?>
     <div id="modal-master" class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="alert alert-danger">
                     <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                     Data yang anda cari tidak ditemukan
                 </div>
                 <a href="<?php echo e(url('/user')); ?>" class="btn btn-warning">Kembali</a>
             </div>
         </div>
     </div>
 <?php else: ?>
     <form action="<?php echo e(url('/user/' . $user->user_id . '/update_ajax')); ?>" method="POST" id="form-edit">
         <?php echo csrf_field(); ?>
         <?php echo method_field('PUT'); ?>
 
         <div id="modal-master" class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
 
                 <div class="modal-body">
                     <div class="form-group">
                         <label>Level Pengguna</label>
                         <select name="level_id" id="level_id" class="form-control" required>
                             <option value="">- Pilih Level -</option>
                             <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($l->level_id); ?>" <?php echo e($l->level_id == $user->level_id ? 'selected' : ''); ?>>
                                     <?php echo e($l->level_nama); ?>

                                 </option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                         <small id="error-level_id" class="error-text form-text text-danger"></small>
                     </div>
 
                     <div class="form-group">
                         <label>Username</label>
                         <input value="<?php echo e($user->username); ?>" type="text" name="username" id="username" class="form-control" required>
                         <small id="error-username" class="error-text form-text text-danger"></small>
                     </div>
 
                     <div class="form-group">
                         <label>Nama</label>
                         <input value="<?php echo e($user->nama); ?>" type="text" name="nama" id="nama" class="form-control" required>
                         <small id="error-nama" class="error-text form-text text-danger"></small>
                     </div>
 
                     <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="password" id="password" class="form-control">
                         <small class="form-text text-muted">Abaikan jika tidak ingin mengubah password</small>
                         <small id="error-password" class="error-text form-text text-danger"></small>
                     </div>
                 </div>
 
                 <div class="modal-footer">
                     <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                 </div>
             </div>
         </div>
     </form>
 
     <script>
         $(document).ready(function() {
             $("#form-edit").validate({
                 rules: {
                     level_id: { required: true, number: true },
                     username: { required: true, minlength: 3, maxlength: 20 },
                     nama: { required: true, minlength: 3, maxlength: 100 },
                     password: { minlength: 6, maxlength: 20 }
                 },
                 submitHandler: function(form) {
                     $.ajax({
                         url: form.action,
                         type: form.method,
                         data: $(form).serialize(),
                         success: function(response) {
                             if(response.status) {
                                 $('#myModal').modal('hide');
                                 Swal.fire({
                                     icon: 'success',
                                     title: 'Berhasil',
                                     text: response.message
                                 });
                                 dataUser.ajax.reload();
                             } else {
                                 $('.error-text').text('');
                                 $.each(response.msgField, function(prefix, val) {
                                     $('#error-' + prefix).text(val[0]);
                                 });
                                 Swal.fire({
                                     icon: 'error',
                                     title: 'Terjadi Kesalahan',
                                     text: response.message
                                 });
                             }
                         }
                     });
                     return false;
                 },
                 errorElement: 'span',
                 errorPlacement: function(error, element) {
                     error.addClass('invalid-feedback');
                     element.closest('.form-group').append(error);
                 },
                 highlight: function(element, errorClass, validClass) {
                     $(element).addClass('is-invalid');
                 },
                 unhighlight: function(element, errorClass, validClass) {
                     $(element).removeClass('is-invalid');
                 }
             });
         });
     </script>
 <?php endif; ?><?php /**PATH C:\laragon\www\PWL_2025\Minggu6\Jobsheet 6\resources\views/user/edit_ajax.blade.php ENDPATH**/ ?>