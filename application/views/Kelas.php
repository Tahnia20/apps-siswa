<?php echo $this->session->flashdata('pesan'); ?>
<div class="card">
              <div class="card-header">
               <a href="<?php echo base_url('kelas/tambah');?>"class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
               <a href="<?php echo base_url('kelas/pdf');?>"class="btn btn-success"><i class="fa fa-print">PDF</i></a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">-
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>nomer</th>
                    <th>Kode Kelas</th>
                    <th>kelas</th>
                    <th>Jurusan</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <?php $no=1;
                  foreach($Kelas as $kls):
                    ?>
                  <tbody>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $kls->kode_kelas?>
                  </td>
                    <td> <?= $kls->kelas?></td>
                    <td><?= $kls->jurusan?></td>
                    <td>
                     
                    <button data-toggle="modal" data-target="#edit<?= $kls->id_kelas?>"
                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                     <a href="<?= base_url('kelas/delete/'.$kls->id_kelas)?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach?>
                </table>
              </div>
              </div>

<!-- Modal -->
<?php foreach($Kelas as $kls){?>
<div class="modal fade" id="edit<?= $kls->id_kelas?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="<?= base_url('kelas/edit/'.$kls->id_kelas); ?>" method="POST">
    <div class="form-group">
        <label for="Nama"> Kode Kelas</label>
        <input type="text" name="kode_kelas" class="form-control" value="<?= $kls->kode_kelas?>">
        <?= form_error('kode_kelas', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Kelas</label>
        <input type="text" name="kelas" class="form-control" value="<?= $kls->kelas?>">
        <?= form_error('kelas', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Jurusan </label>
        <input type="text" name="jurusan" class="form-control" value="<?= $kls->jurusan?>">
        <?= form_error('jurusan', '<div class="text-small text-danger">', '</div>'); ?>
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
           