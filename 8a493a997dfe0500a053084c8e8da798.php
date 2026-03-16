<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Tambah Data</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    
<form method="POST" action="<?php echo e(route('mapel.simpan')); ?>">
    <?php echo csrf_field(); ?> 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Mata Pelajaran</label>
    <br>
    <input type="text" class="form-label" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_mapel" required>
    <br>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Mata Pelajaran</label>
    <br>
    <input type="text" name="nama_mapel" class="form-label" required>
    <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Singkatan</label>
        <br>
    <input type="text" name="singkatan" required>
    <br>
    Kelas:
    <select name="kelas" required>
        <option value="">Pilih</option>
        <option value="A">X</option>
        <option value="B">XI</option>
        <option value="C">XII</option>
    </select>
    <br>
    Pengajar:
    <input type="text" name="pengajar" required>
    <br>
    Prodi:
    <select name="prodi" required>
        <option value="">Pilih</option>
        <option value="TJA">TKA</option>
        <option value="TJK">TJK</option>
        <option value="RPL">RPL</option>
        <option value="DKV">DKV</option>
        <option value="ANIMASI">ANIMASI</option>
    </select>
    <br><br>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="<?php echo e(route('mapel.tampil')); ?>">Kembali</a>
</form>
  </body><?php /**PATH C:\xampp\htdocs\prodi\resources\views/mapel/tambah.blade.php ENDPATH**/ ?>