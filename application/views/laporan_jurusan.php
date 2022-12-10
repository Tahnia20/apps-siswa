<h2><center>Data Kelas</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Kode Jurusan</th>
        <th>Nama Jurusan</th>
    </tr>
    <?php
    $no = 1;
    foreach($Jurusan as $row)
    {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->kode_jurusan; ?></td>
            <td><?php echo $row->nama_jurusan; ?></td>
        </tr>
        <?php
    }
    ?>
</table>