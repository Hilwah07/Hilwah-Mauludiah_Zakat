<h1>LIST DATA ZAKAT</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>
            <tr>
            <th>nik</th>
                <th>Nama</th>
                <th>no_telpon</th>
                <th>jenis_zakat</th>
                <th>jumlah_jiwa</th>
                <th>nominal</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($hasil as $row) {

            
        
        ?>
        <tr>
        <td><?php echo $row->nik; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->no_telpon; ?></td>
            <td><?php echo $row->jenis_zakat; ?></td>
            <td><?php echo $row->jumlah_jiwa; ?></td>
            <td><?php echo $row->nominal; ?></td>
            
            
        </tr>
        <?php
            }
        ?>
</tbody>
</table>