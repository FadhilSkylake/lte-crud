<?php
  foreach ($dataPasar as $pasar) {
    ?>
    <tr>
      <td><?= $pasar->no; ?></td>
      <td><?= $pasar->nama_pasar; ?></td>
      <td><?= $pasar->jenis_pasar; ?></td>
      <td><?= $pasar->alamat; ?></td>
      <td><?= $pasar->ket; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPerusahaan" data-id="<?php echo $pasar->no; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-perusahaan" data-id="<?php echo $pasar->no; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>