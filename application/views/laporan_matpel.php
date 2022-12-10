<h2><center>Data Mata Pelajaran</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Kode Matpel</th>
        <th>Nama Matpel</th>
    </tr>
    <?php
    $no = 1;
    foreach($Matpel as $row)
    {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->kode_matpel; ?></td>
            <td><?php echo $row->nama_matpel; ?></td>
        </tr>
        <?php
    }
    ?>
</table>