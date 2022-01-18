<?php
  foreach ($dataPerusahaan as $industri) {
    ?>
    <tr>
      <td><?= $industri->id_perusahaan; ?></td>
      <td><?= $industri->nama_perusahaan; ?></td>
      <td><?= $industri->alamat_perusahaan; ?></td>
      <td><?= $industri->ket; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPerusahaan" data-id="<?php echo $industri->id_perusahaan; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-perusahaan" data-id="<?php echo $industri->id_perusahaan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>