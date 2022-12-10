<h2><center>Data Guru</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telepon</th>
    </tr>
    <?php
    $no = 1;
    foreach($Guru as $row)
    {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->nama_guru; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><?php echo $row->no_telepon; ?></td>
        </tr>
        <?php
    }
    ?>
</table>