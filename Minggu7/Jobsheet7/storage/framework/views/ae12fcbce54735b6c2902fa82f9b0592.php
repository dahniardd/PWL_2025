<form action="<?php echo e(url('/barang/ajax')); ?>" method="POST" id="form-tambah">
     <?php echo csrf_field(); ?>
     <div id="modal-master" class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <div class="form-group">
                     <label>Kategori Barang</label>
                     <select name="kategori_id" id="kategori_id" class="form-control" required>
                         <option value="">- Pilih Kategori -</option>
                         <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($l->kategori_id); ?>"><?php echo e($l->kategori_nama); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     <small id="error-kategori_id" class="error-text form-text text-danger"></small>
                 </div>
                 <div class="form-group">
                     <label>Barang Kode</label>
                     <input value="" type="text" name="barang_kode" id="barang_kode" class="form-control" required>
 
                     <small id="error-barang_kode" class="error-text form-text text-danger"></small>
                 </div>
                 <div class="form-group">
                     <label>Barang Nama</label>
                     <input value="" type="text" name="barang_nama" id="barang_nama" class="form-control" required>
 
                     <small id="error-barang_nama" class="error-text form-text text-danger"></small>
                 </div>
                 <div class="form-group">
                     <label>Harga Beli</label>
                     <input value="" type="number" name="harga_beli" id="harga_beli" class="form-control" required>
 
                     <small id="error-harga_beli" class="error-text form-text text-danger"></small>
                 </div>
                 <div class="form-group">
                     <label>Harga Jual</label>
                     <input value="" type="number" name="harga_jual" id="harga_jual" class="form-control" required>
 
                     <small id="error-harga_jual" class="error-text form-text text-danger"></small>
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
         $("#form-tambah").validate({
             rules: {
                 kategori_id: {
                     required: true,
                     number: true
                 },
                 barang_kode: {
                     required: true,
                     minlength: 3,
                     maxlength: 20
                 },
                 barang_nama: {
                     required: true,
                     minlength: 3,
                     maxlength: 100
                 },
                 harga_beli: {
                     required: true,
                     minlength: 3,
                     maxlength: 100
                 },
                 harga_jual: {
                     required: true,
                     minlength: 3,
                     maxlength: 100
                 },
             },
             submitHandler: function(form) {
                 $.ajax({
                     url: form.action,
                     type: form.method,
                     data: $(form).serialize(),
                     success: function(response) {
                         if (response.status) {
                             $('#myModal').modal('hide');
                             Swal.fire({
                                 icon: 'success',
                                 title: 'Berhasil',
                                 text: response.message
                             });
                             dataBarang.ajax.reload();
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
 </script><?php /**PATH C:\laragon\www\PWL_2025\Minggu6\Jobsheet 6\resources\views/barang/create_ajax.blade.php ENDPATH**/ ?>