<h2><center>Data Kelas</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </tr>
    <?php
    $no = 1;
    foreach($Kelas as $row)
    {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->kode_kelas; ?></td>
            <td><?php echo $row->kelas; ?></td>
            <td><?php echo $row->jurusan; ?></td>
        </tr>
        <?php
    }
    ?>
</table>