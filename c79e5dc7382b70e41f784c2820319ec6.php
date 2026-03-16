
	<?php $__env->startSection('konten'); ?>
Form Tambah Data
<form method="POST" action="<?php echo e(route('prodi.store')); ?>">
    <?php echo csrf_field(); ?>
Kode Prodi :
<input type="text" name="kode_prodi" required>
<br>
Nama Prodi :
<input type="text" name="nama_prodi" required>
<br>
Ketua Prodi :
<input type="text" name="ketua_prodi" required>
<br>
Status Prodi :
<select name="status_prodi" required>
    <option value="">Pilih</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
</select>
<br>
Mulai Aktif :
<input type="date" name="mulai_aktif" required>
<br>
<button type="submit">Simpan Data</button>
<a href="<?php echo e(route('prodi.index')); ?>">Kembali</a>
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prodi\resources\views/prodi/form_tambah.blade.php ENDPATH**/ ?>