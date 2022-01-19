<?php
  foreach ($dataPenting as $perdagangan_penting) {
    ?>
    <tr>
      <td><?= $perdagangan_penting->no; ?></td>
      <td><?= $perdagangan_penting->komoditi; ?></td>
      <td><?= $perdagangan_penting->satuan; ?></td>
      <td><?= $perdagangan_penting->harga; ?></td>
      <td><?= $perdagangan_penting->ket; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPerusahaan" data-id="<?php echo $perdagangan_penting->no; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-perusahaan" data-id="<?php echo $perdagangan_penting->no; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>