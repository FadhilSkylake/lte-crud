<?php
  foreach ($dataUmkm as $umkm) {
    ?>
    <tr>
      <td><?= $umkm->id_profil; ?></td>
      <td><?= $umkm->nama_pemilik; ?></td>
      <td><?= $umkm->nama_umkm; ?></td>
      <td><?= $umkm->kampung; ?></td>
      <td><?= $umkm->rt; ?></td>
      <td><?= $umkm->rw; ?></td>
      <td><?= $umkm->desa; ?></td>
      <td><?= $umkm->kecamatan; ?></td>
      <td><?= $umkm->jenis_usaha; ?></td>
      <td><?= $umkm->tahun_berdiri; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPerusahaan" data-id="<?php echo $umkm->profil; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-perusahaan" data-id="<?php echo $umkm->profil; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>