
 
 <?php $__env->startSection('content'); ?>
     <div class="card card-outline card-primary">
         <div class="card-header">
             <h3 class="card-title"><?php echo e($page->title); ?></h3>
             <div class="card-tools">
                 <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('barang/create')); ?>">Tambah</a>
             </div>
         </div>
 
         <div class="card-body">
             <?php if(session('success')): ?>
                 <div class="alert alert-success"><?php echo e(session('success')); ?></div>
             <?php endif; ?>
 
             <?php if(session('error')): ?>
                 <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
             <?php endif; ?>
 
             <div class="row">
                 <div class="col-md-12">
                     <div class="form-group row">
                         <label for="kategori_id" class="col-1 control-label col-form-label">Filter:</label>
                         <div class="col-3">
                             <select name="kategori_id" id="kategori_id" class="form-control" required>
                                 <option value="">- Semua -</option>
                                 <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($item->kategori_id); ?>"><?php echo e($item->kategori_nama); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
 
                             <small class="form-text text-muted">Kategori Barang</small>
                         </div>
                     </div>
                 </div>
             </div>
 
             <table class="table table-bordered table-striped table-hover table-sm" id="table_barang">
                 <thead>
                 <tr>
                     <th>ID</th>
                     <th>Kode Barang</th>
                     <th>Nama Barang</th>
                     <th>Nama Kategori</th>
                     <th>Harga Beli</th>
                     <th>Harga Jual</th>
                     <th>Aksi</th>
                 </tr>
                 </thead>
             </table>
         </div>
     </div>
 <?php $__env->stopSection(); ?>
 
 <?php $__env->startPush('css'); ?>
 <?php $__env->stopPush(); ?>
 
 <?php $__env->startPush('js'); ?>
     <script>
         $(document).ready(function() {
             var dataBarang = $('#table_barang').DataTable({
                 serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
                 ajax: {
                     "url": "<?php echo e(url('barang/list')); ?>",
                     "dataType": "json",
                     "type": "POST",
                     "data": function (d) {
                         d.kategori_id = $('#kategori_id').val();
                     }
                 },
                 columns: [
                     {
                         data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                         className: "text-center",
                         orderable: false,
                         searchable: false
                     },
                     {
                         data: "barang_kode",
                         className: "",
                         orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                     },
                     {
                         data: "barang_nama",
                         className: "",
                         orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                     },
                     {
                         data: "kategori.kategori_nama",
                         className: "",
                         orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                     },
                     {
                         data: "harga_beli",
                         className: "",
                         orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                     },
                     {
                         data: "harga_jual",
                         className: "",
                         orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                     },
                     {
                         data: "aksi",
                         className: "",
                         orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                     }
                 ]
             });
 
             $('#kategori_id').on('change', function() {
                 dataBarang.ajax.reload();
             });
         });
     </script>
 <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_2025\Minggu5.2\Jobsheet5.2\resources\views/barang/index.blade.php ENDPATH**/ ?>