<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Industri Read</h2>
        <table class="table">
	    <tr><td>Nama Perusahaan</td><td><?php echo $nama_perusahaan; ?></td></tr>
	    <tr><td>Alamat Perusahaan</td><td><?php echo $alamat_perusahaan; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('industri') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>