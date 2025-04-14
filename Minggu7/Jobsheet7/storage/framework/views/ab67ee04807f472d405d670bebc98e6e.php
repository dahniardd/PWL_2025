
 
 <?php $__env->startSection('content'); ?>
     <div class="card card-outline card-primary">
         <div class="card-header">
             <h3 class="card-title"><?php echo e($page->title); ?></h3>
             <div class="card-tools">
                 <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('kategori/create')); ?>">Tambah</a>
             </div>
         </div>
 
         <div class="card-body">
             <?php if(session('success')): ?>
                 <div class="alert alert-success"><?php echo e(session('success')); ?></div>
             <?php endif; ?>
 
             <?php if(session('error')): ?>
                 <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
             <?php endif; ?>
 
             <table class="table table-bordered table-striped table-hover table-sm" id="table_kategori">
                 <thead>
                 <tr>
                     <th>ID</th>
                     <th>Kode Kategori</th>
                     <th>Nama Kategori</th>
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
             var dataKategori = $('#table_kategori').DataTable({
                 serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
                 ajax: {
                     "url": "<?php echo e(url('kategori/list')); ?>",
                     "dataType": "json",
                     "type": "POST"
                 },
                 columns: [
                     {
                         data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                         className: "text-center",
                         orderable: false,
                         searchable: false
                     },
                     {
                         data: "kategori_kode",
                         className: "",
                         orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                         searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                     },
                     {
                         data: "kategori_nama",
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
         });
     </script>
 <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_2025\Minggu5.2\Jobsheet5.2\resources\views/kategori/index.blade.php ENDPATH**/ ?>