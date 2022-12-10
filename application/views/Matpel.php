<?php echo $this->session->flashdata('pesan'); ?>
<div class="card">
              <div class="card-header">
               <a href="<?php echo base_url('matpel/tambah');?>"class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
               <a href="<?php echo base_url('matpel/pdf');?>"class="btn btn-success"><i class="fa fa-print">PDF</i></a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">-
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>nomer</th>
                    <th>Kode Matpel</th>
                    <th>Nama Matpel</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <?php $no=1;
                  foreach($Matpel as $mtp):
                    ?>
                  <tbody>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $mtp->kode_matpel?>
                  </td>
                    <td><?= $mtp->nama_matpel?></td>
                    <td>
                    <button data-toggle="modal" data-target="#edit<?= $mtp->id_matpel?>"
                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                     <a href="<?= base_url('matpel/delete/'.$mtp->id_matpel)?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach?>
                </table>
              </div>
              </div>
          
<!-- Modal -->
<?php foreach($Matpel as $mtp){?>
<div class="modal fade" id="edit<?= $mtp->id_matpel?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="<?= base_url('matpel/edit/'.$mtp->id_matpel); ?>" method="POST">
    <div class="form-group">
        <label for="Nama"> Kode Matpel</label>
        <input type="text" name="kode_matpel" class="form-control" value="<?= $mtp->kode_matpel?>">
        <?= form_error('kode_matpel', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nama Matpel </label>
        <textarea class="form-control" name="nama_matpel" cols="30" rows="5" ><?=$mtp->nama_matpel?></textarea>
        <?= form_error('nama_matpel', '<div class="text-small text-danger">', '</div>'); ?>
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