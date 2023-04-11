<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"
></script>
</head>
<body>
    <?php
    foreach($data as $row)
    ?>
<form action="<?php echo base_url('data/saveeditData/'.$row->nik.'')?>" method="post">
    <table> 
    <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" value="<?php echo $row->nik; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $row->nama; ?>"></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><input type="text" name="no_telpon" value="<?php echo $row->no_telpon; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Zakat</td>
            <td><input type="text" name="jenis_zakat" value="<?php echo $row->jenis_zakat; ?>"></td>
        <tr>
        <tr>
            <td>Jumlah Jiwa</td>
            <td><input type="text" name="jumlah_jiwa" value="<?php echo $row->jumlah_jiwa; ?>"></td>
        <tr>
        <tr>
            <td>Nominal</td>
            <td><input type="text" name="nominal" value="<?php echo $row->nominal; ?>"></td>
        <tr>

            <td><input type="submit" values="submit" name="submit"></td>
            <td><input type="reset" values="reset" ></td>
        </tr>

    </table>
    </form>
</body>
</html>