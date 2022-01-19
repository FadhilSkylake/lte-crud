<?php
  foreach ($dataKoperasi as $koperasi) {
    ?>
    <tr>
      <td><?= $koperasi->no; ?></td>
      <td><?= $koperasi->jenis_koperasi; ?></td>
      <td><?= $koperasi->nama_koperasi; ?></td>
      <td><?= $koperasi->desa; ?></td>
      <td><?= $koperasi->kecamatan; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPerusahaan" data-id="<?php echo $koperasi->no; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-perusahaan" data-id="<?php echo $koperasi->no; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>