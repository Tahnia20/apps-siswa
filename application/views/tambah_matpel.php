<form action="<?= base_url("matpel/tambah_aksi"); ?>"
 method="POST">
    <div class="form-group">
        <label for="Nama"> Kode Matpel</label>
        <input type="text" name="kode_matpel"
        class="form-control" required>
        <?= form_error('kode_matpel', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nama Matpel</label>
        <input type="text" name="nama_matpel"
        class="form-control">
        <?= form_error('nama_matpel', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary 
    btn-sm"><i class="fa fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger 
    btn-sm"><i class="fa fa-save"> Reset</i></button>
</form>
