
	<?php $__env->startSection('konten'); ?>
Form Tambah Data
<form method="POST" action="<?php echo e(route('siswa.update',$siswa->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
NIS :
<input type="text" name="nis" required value="<?php echo e(old('nis', $siswa->nis)); ?>">
<?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<br>
Nama Siswa :
<input type="text" name="nama" required value="<?php echo e(old('nama', $siswa->nama)); ?>">
<br>
Alamat :
<textarea name="alamat"><?php echo e(old('alamat', $siswa->alamat)); ?></textarea>
<br>
Tanggal_lahir :
<input type="date" name="tanggal_lahir"required value="<?php echo e(old('tanggal_lahir', $siswa->tanggal_lahir)); ?>">
<br>
Jenis_kelamin :
<select name="jk" required>
    <option value="">Pilih</option>
    <option value="Laki-laki" <?php echo e($siswa->jk == 'Laki-laki' ? 'selected' :''); ?>>Laki-laki</option>
    <option value="Perempuan"<?php echo e($siswa->jk == 'Perempuan' ? 'selected' :''); ?>>Perempuan</option>
    Prodi :
    <select name="prodi">
        <option value=""></option>

        <option value="<?php echo e($siswa->kode_prodi); ?>" <?php echo e($siswa->kode_prodi ==  $siswa->prodi ? 'selected' : ''); ?>>
        </option>

    </select>
    <br /><br />
<button type="submit">Simpan Data</button>
<a href="<?php echo e(route('siswa.index')); ?>">Kembali</a>
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prodi\resources\views/siswa/ubah.blade.php ENDPATH**/ ?>