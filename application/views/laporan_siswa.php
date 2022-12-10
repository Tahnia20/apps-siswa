<h2><center>Data Siswa</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No HP</th>
    </tr>
    <?php
    $no = 1;
    foreach($Siswa as $row)
    {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->nama_siswa; ?></td>
            <td><?php echo $row->kelas_siswa; ?></td>
            <td><?php echo $row->alamat_siswa; ?></td>
            <td><?php echo $row->no_telepon; ?></td>
        </tr>
        <?php
    }
    ?>
</table>