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
        <h2 style="margin-top:0px">Industri <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Perusahaan <?php echo form_error('nama_perusahaan') ?></label>
            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $nama_perusahaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Perusahaan <?php echo form_error('alamat_perusahaan') ?></label>
            <input type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan" value="<?php echo $alamat_perusahaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ket <?php echo form_error('ket') ?></label>
            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" />
        </div>
	    <input type="hidden" name="id_perusahaan" value="<?php echo $id_perusahaan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('industri') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>