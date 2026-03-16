
	<?php $__env->startSection('konten2'); ?>

<br>
<a href="<?php echo e(route('prodi.create')); ?>" class="btn btn-primary btn-sm" title="Tambah Data Prodi">Tambah Data</a>
<br><br>
<table class="table table-bordered table-hover"> 
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Ketua Prodi</th>
            <th>Status Prodi</th>
            <th>Mulai Aktif</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($p->kode_prodi); ?></td>
            <td><?php echo e($p->nama_prodi); ?></td>
            <td><?php echo e($p->ketua_prodi); ?></td>
            <td><?php echo e($p->status_prodi); ?></td>
            <td><?php echo e($p->mulai_aktif); ?></td>
            <td>
                <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="<?php echo e(route('prodi.destroy', $p->id)); ?>">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('DELETE'); ?>
                     <a href="<?php echo e(route('prodi.edit', $p->id)); ?>" class="btn btn-success btn-sm">Edit</a>
                     <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prodi\resources\views/prodi/index.blade.php ENDPATH**/ ?>