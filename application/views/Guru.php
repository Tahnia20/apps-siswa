<?php echo $this->session->flashdata('pesan'); ?>
<div class="card-header">
               <a href="<?php echo base_url('guru/tambah');?>"class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
               <a href="<?php echo base_url('guru/pdf');?>"class="btn btn-success"><i class="fa fa-print">PDF</i></a>
<div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">-
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>nomer</th>
                    <th>nama Guru</th>
                    <th>alamat</th>
                    <th>no hp</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <?php $no=1;
                  foreach($Guru as $gr):
                    ?>
                  <tbody>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $gr->nama_guru?>
                  </td>
                    <td> <?= $gr->alamat?></td>
                    <td><?= $gr->no_telepon?></td>
                    <td>

                    <button data-toggle="modal" data-target="#edit<?= $gr->id_guru?>"
                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                     <a href="<?= base_url('guru/delete/'.$gr->id_guru)?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach?>
                </table>
              </div>
              </div>
          
<!-- Modal -->
<?php foreach($Guru as $gr){?>
<div class="modal fade" id="edit<?= $gr->id_guru?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="<?= base_url('guru/edit/'.$gr->id_guru); ?>" method="POST">
    <div class="form-group">
        <label for="Nama"> Nama Guru</label>
        <input type="text" name="nama_guru" class="form-control" value="<?= $gr->nama_guru?>">
        <?= form_error('nama_guru', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Alamat Guru</label>
        <textarea class="form-control" name="alamat" cols="30" rows="5" ><?=$gr->alamat?></textarea>
        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nomor telepon </label>
        <input type="number" name="no_telepon" class="form-control" value="<?= $gr->no_telepon?>">
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