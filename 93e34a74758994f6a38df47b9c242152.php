
	<?php $__env->startSection('konten'); ?>
<form method="POST" action="<?php echo e(route('prodi.update', $prodi->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    kode prodi :
    <input type="text" name="kode_prodi" readonly value="<?php echo e(old('kode_prodi', $prodi->kode_prodi)); ?>">
    <?php $__errorArgs = ['kode_prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br />
    nama prodi :
    <input type="text" name="nama_prodi" required value="<?php echo e(old('nama_prodi', $prodi->nama_prodi)); ?>">
    <br />
    ketua prodi :
    <input type="text" name="ketua_prodi" required value="<?php echo e(old('ketua_prodi', $prodi->ketua_prodi)); ?>">
    <br />
    status prodi :
    <select name="status_prodi" required>
    <option value="">Pilih</option>
    <option value="A" <?php echo e($prodi->status_prodi == 'A' ? 'selected' : ''); ?>>A</option>
    <option value="B" <?php echo e($prodi->status_prodi == 'B' ? 'selected' : ''); ?>>B</option>
    <option value="B" <?php echo e($prodi->status_prodi == 'C' ? 'selected' : ''); ?>>C</option>
    </select>
    <br />
    Mulai Aktif :
    <input type="date" name="mulai_aktif" required value="<?php echo e(old('mulai_aktif', $prodi->mulai_aktif)); ?>">
    <br /><br />
    <button type="submit">Simpan</button>
    <a href="<?php echo e(route('prodi.index')); ?>">Kembali</a>
   </form>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prodi\resources\views/prodi/edit.blade.php ENDPATH**/ ?>