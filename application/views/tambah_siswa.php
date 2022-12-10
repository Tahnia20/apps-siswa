<form action="<?= base_url("siswa/tambah_aksi"); ?>"
 method="POST">
    <div class="form-group">
        <label for="Nama"> Nama Siswa</label>
        <input type="text" name="nama_siswa"
        class="form-control" required>
        <?= form_error('nama_siswa', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Kelas Siswa</label>
        <input type="text" name="kelas_siswa"
        class="form-control">
        <?= form_error('kelas_siswa', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Alamat Siswa</label>
        <textarea class="form-control"
        name="alamat_siswa" cols="30" rows="5"
       ></textarea>
        <?= form_error('alamat_siswa', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nomor Telepon</label>
        <input type="number" name="no_telepon"
        class="form-control">
        <?= form_error('no_telepon', '<div
        class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary 
    btn-sm"><i class="fa fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger 
    btn-sm"><i class="fa fa-save"> Reset</i></button>
</form>
