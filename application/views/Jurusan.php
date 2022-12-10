<?php echo $this->session->flashdata('pesan'); ?>
<div class="card">
              <div class="card-header">
               <a href="<?php echo base_url('jurusan/tambah');?>"class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
               <a href="<?php echo base_url('jurusan/pdf');?>"class="btn btn-success"><i class="fa fa-print">PDF</i></a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">-
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>nomer</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <?php $no=1;
                  foreach($Jurusan as $jrs):
                    ?>
                  <tbody>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $jrs->kode_jurusan?>
                  </td>
                    <td> <?= $jrs->nama_jurusan?></td>
                    <td>
                     
                    <button data-toggle="modal" data-target="#edit<?= $jrs->id_jurusan?>"
                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                     <a href="<?= base_url('jurusan/delete/'.$jrs->id_jurusan)?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach?>
                </table>
              </div>
              </div>

<!-- Modal -->
<?php foreach($Jurusan as $jrs){?>
<div class="modal fade" id="edit<?= $jrs->id_jurusan?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="<?= base_url('jurusan/edit/'.$jrs->id_jurusan); ?>" method="POST">
    <div class="form-group">
        <label for="Nama"> Kode Jurusan</label>
        <input type="text" name="kode_jurusan" class="form-control" value="<?= $jrs->kode_jurusan?>">
        <?= form_error('kode_jurusan', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="Nama"> Nama Jurusan </label>
        <input type="text" name="nama_jurusan" class="form-control" value="<?= $jrs->nama_jurusan?>">
        <?= form_error('nama_jurusan', '<div class="text-small text-danger">', '</div>'); ?>
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
           