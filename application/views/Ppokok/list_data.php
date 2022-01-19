<?php
  foreach ($dataPokok as $perdagangan_pokok) {
    ?>
    <tr>
      <td><?= $perdagangan_pokok->no; ?></td>
      <td><?= $perdagangan_pokok->nama_bahan_pokok; ?></td>
      <td><?= $perdagangan_pokok->volume; ?></td>
      <td><?= $perdagangan_pokok->harga_kemarin; ?></td>
      <td><?= $perdagangan_pokok->harga_hari_ini; ?></td>
      <td><?= $perdagangan_pokok->perubahan; ?></td>
      <td><?= $perdagangan_pokok->ket; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPerusahaan" data-id="<?php echo $perdagangan_pokok->no; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-perusahaan" data-id="<?php echo $perdagangan_pokok->no; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>