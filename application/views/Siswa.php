<?php echo $this->session->flashdata('pesan'); ?>
<div class="card">
              <div class="card-header">
               <a href="<?php echo base_url('siswa/tambah');?>"class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
               <a href="<?php echo base_url('siswa/pdf');?>"class="btn btn-success"><i class="fa fa-print">PDF</i></a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">-
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>nomer</th>
                    <th>nama</th>
                    <th>kelas</th>
                    <th>alamat</th>
                    <th>no hp</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <?php $no=1;
                  foreach($Siswa as $ssw):
                    ?>
                  <tbody>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $ssw->nama_siswa?>
                  </td>
                    <td><?= $ssw->kelas_siswa?></td>
                    <td> <?= $ssw->alamat_siswa?></td>
                    <td><?= $ssw->no_telepon?></td>
                    <td>

                     <button data-toggle="modal" data-target="#edit<?= $ssw->id_siswa?>"
                     class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                     <a href="<?= base_url('siswa/delete/'.$ssw->id_siswa)?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach?>
                </table>
              </div>
              </div>
          

<!-- Modal -->
<?php foreach($Siswa as $ssw){?>
<div class="modal fade" id="edit<?= $ssw->id_siswa?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="<?= base_url('siswa/edit/'.$ssw->id_siswa); ?>" method="POST">
    <div class="form-group">
        <label for="Nama"> Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" value="<?= $ssw->nama_siswa?>">
        <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama">Kelas Siswa</label>
        <input type="text" name="kelas_siswa" class="form-control" value="<?= $ssw->kelas_siswa?>">
        <?= form_error('kelas_siswa', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Alamat Siswa</label>
        <textarea class="form-control" name="alamat_siswa" cols="30" rows="5" ><?=$ssw->alamat_siswa?></textarea>
        <?= form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nomor telepon </label>
        <input type="number" name="no_telepon" class="form-control" value="<?= $ssw->no_telepon?>">
        <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-save"> Reset</i></button>
</div>
</form>
      </div>
      </div>
    </div>
  </div>
<?php }?>