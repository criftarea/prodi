<form method="POST" action="<?php echo e(route('mapel.simpan_edit', $mapel->kode_mapel)); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
        Kode Mapel:
        <input type="text" name="kode_mapel" required value="<?php echo e(old('kode_mapel', $mapel->kode_mapel)); ?>">
        <?php $__errorArgs = ['kode_mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        Nama Mapel:
        <input type="text" name="nama_mapel" required value="<?php echo e(old('nama_mapel', $mapel->nama_mapel)); ?>">
        <br>
        Singkatan:
        <input type="text" name="singkatan" required value="<?php echo e(old('singkatan', $mapel->singkatan)); ?>">
        <br>
        Kelas:
        <select name="kelas" required>
            <option value="">Pilih</option>
            <option value="X" <?php echo e($mapel->kelas == 'Tetap' ? 'selected' : ''); ?>>X</option>
            <option value="XI" <?php echo e($mapel->kelas == 'Tetap' ? 'selected' : ''); ?>>XI</option>
            <option value="XII" <?php echo e($mapel->kelas == 'Tetap' ? 'selected' : ''); ?>>XII</option>
        </select>
        <br>
        Pengajar:
        <input type="text" name="pengajar" required value="<?php echo e(old('pengajar', $mapel->pengajar)); ?>">
        <br>
        Prodi:
        <select name="prodi" required>
            <option value="">Pilih</option>
            <option value="TJA" <?php echo e($mapel->prodi == 'Tetap' ? 'selected' : ''); ?>>TJA</option>
            <option value="TKJ" <?php echo e($mapel->prodi == 'Tetap' ? 'selected' : ''); ?>>TKJ</option>
            <option value="RPL" <?php echo e($mapel->prodi == 'Tetap' ? 'selected' : ''); ?>>RPL</option>
            <option value="DKV" <?php echo e($mapel->prodi == 'Tetap' ? 'selected' : ''); ?>>DKV</option>
            <option value="ANM" <?php echo e($mapel->prodi == 'Tetap' ? 'selected' : ''); ?>>ANM</option>
        </select>
        <br> <br>
      <button type="submit">Simpan</button>
      <a href="<?php echo e(route('mapel.tampil')); ?>">Kembali</a>
    </form><?php /**PATH C:\xampp\htdocs\prodi\resources\views/mapel/edit.blade.php ENDPATH**/ ?>