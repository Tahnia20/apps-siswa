<form action="<?= base_url("jurusan/tambah_aksi"); ?>"
 method="POST">
    <div class="form-group">
        <label for="Nama"> Kode Jurusan</label>
        <input type="text" name="kode_jurusan"
        class="form-control" required>
        <?= form_error('kode_jurusan', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nama Jurusan</label>
        <input type="text" name="nama_jurusan"
        class="form-control" required>
        <?= form_error('nama_jurusan', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary 
    btn-sm"><i class="fa fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger 
    btn-sm"><i class="fa fa-save"> Reset</i></button>
</form>
