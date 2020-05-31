<?php echo back_button(); ?>
<h3> Hasil Pengajuan DUPAK </h3>
<style type="text/css">
  th {
    text-align: center;
  }
</style>
<?php
  $stepan = $data['tahapan'];
?>
<div class="col-md-6">
<table class="table table-striped">
    <tr>
<td> NIP  </td>  <td> :</td><td> <?php echo $data['pegawai']->nip ?></td>
    </tr>
    <tr>
        <td>
Nama Karyawan  </td> <td> : </td> <td> <?php echo $data['pegawai']->nama_lengkap ?> </td>
    </tr>
        <tr>
        <td>
Tanggal Pengajuan </td>
<td> : </td>
<td> <?php echo tgl_indo($data['penilaian']->tanggal_pengajuan) ?> </td>
    </tr>
    <tr>
        <td>
Golongan/Pangkat  </td>
<td> : </td>
<td> <?php echo $data->golongan." ".$data['pegawai']->golongan ?> </td>
    </tr>
    <tr>
        <td>
Fungsional / Jabatan </td><td> : </td><td> <?php echo $data['pegawai']->tipe_fungsional." / ".$data['pegawai']->nama_jenjang ?> </td>
    </tr>
    <tr>
<td>
Instansi </td> <td>  : </td> <td> <?php echo $data['pegawai']->nama_instansi ?> </td>
    </tr>
  </table>
</div>

<div>
    <?php echo @$this->session->flashdata('item') ?>
</div>

<table class="table table-striped table-bordered">
<thead>
<tr>
    <th rowspan="3" valign="middle"> NO <br>&nbsp;<br>&nbsp;</th>
    <th > NAMA </th>
    <th > PANGKAT / TMT </th>
    <th > A.K. </th>
    <th colspan="2" > A.K. YANG </th>

    <th colspan="2" > A.K. PERIODE- </th>
    <th colspan="2" > DIUSULKAN </th>
    <th colspan="2" > PENILAIAN  </th>
    <th colspan="2" > JUMLAH  </th>
    <th colspan="2" > JUMLAH  </th>
    <th rowspan="2" valign="middle"> KUMULATIF  </th>
    <th > A.K. </th>
    <th> TAB. <br>&nbsp;<br>&nbsp;</th>
    <th rowspan="3"> KETERANGAN <br>&nbsp;<br>&nbsp;</th>
</tr>

<tr>
    <th>NIP / KARPEG</th>
    <th>JABATAN / TMT</th>
    <th>AWAL</th>
    <th colspan="2">DIPERLUKAN</th>
    <th colspan="2" > PERIODE </th>
    <th colspan="2" > WIDYAISWARA </th>
    <th colspan="2">TIM PENILAI</th>
    <th colspan="2">PEROLEHAN</th>
    <th colspan="2">PEROLEHAN</th>
    <th>HARUS</th>
</tr>

<tr>
    <th>TEMPAT & TGL. LAHIR</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    
    <th colspan="2">&nbsp;</th>
    <th colspan="2">SEBELUMNYA  </th>
    <th colspan="2">&nbsp;</th>
    <th colspan="2">PUSAT</th>
    <th colspan="2">(6+8)</th>
    <th colspan="2">YG DIPERTIMBANGKAN  </th>
    <th>(4+10)</th>
    <th>DICAPAI</th>
</tr>

<tr>
  <th>1</th>
  <th>2</th>
  <th>3</th>
  <th>4</th>
  <th colspan="2">5</th>
  <th colspan="2">6</th>
  <th colspan="2">7</th>
  <th colspan="2">8</th>
  <th colspan="2">9</th>
  <th colspan="2">10</th>
  <th>11</th>
  <th>12</th>
  <th>13</th>
  <th>14</th>
</tr>
</thead>

<tbody> 
  <!-- total -->
  <tr>
    <td align="center">1</td>
    <td><?php echo $data['pegawai']->nama_lengkap; ?></td>
    <td><?php echo $data['pegawai']->nama_jenjang." (".$data['pegawai']->golongan.")"; ?></td>

    <td align="center"><?php echo $stepan['min_pak']['pak_lama']; ?></td>
    <td align="center">T</td>
    <td align="center"><?php echo $stepan['min_pak']['ak_diperlukan']; ?></td>

    <td align="center">T</td>
    <td align="center"><?php echo $stepan['min_pak']['pak_prev']; ?></td>

    <td align="center">T</td>
    <td align="center"> ??? </td>

    <td align="center">T</td>
    <td align="center"><?php echo $stepan['min_pak']['pak_new']; ?></td>

    <td align="center">T</td>
    <td align="center"><?php echo ($stepan['min_pak']['pak_prev'] + $stepan['min_pak']['pak_new']); ?></td>

    <td align="center">T</td>
    <td align="center"> ??? </td>
    <td align="center"> ??? </td>
    <td align="center"><?php echo $stepan['min_pak']['pak_min']; ?></td>

    <td align="center"> ??? </td>
    <td align="center"> &nbsp; </td>
  </tr>

  <!-- utama -->
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $data['pegawai']->nip; ?></td>
    <td><?php echo "TMT ".$data['pegawai']->masa_kerja_lama; ?></td>
    <td>&nbsp;</td>
    <td align="center">U</td>
    <td align="center"><?php echo $stepan['min_80']['ak_diperlukan']; ?></td>

    <td align="center">U</td>
    <td align="center"><?php echo $stepan['min_80']['pak_utama_prev']; ?></td>

    <td align="center">U</td>
    <td align="center">xxxx</td>

    <td align="center">U</td>
    <td align="center"><?php echo $stepan['min_80']['pak_utama_new']; ?></td>

    <td align="center">U</td>
    <td align="center"><?php echo ($stepan['min_80']['pak_utama_prev']+$stepan['min_80']['pak_utama_new']); ?></td>

    <td align="center">U</td>
    <td align="center"><?php echo ($stepan['min_80']['pak_utama_prev']+$stepan['min_80']['pak_utama_new']); ?></td>

    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
  </tr>

  <!-- A1 -->
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $data['pegawai']->no_seri_karpeg; ?></td>
    <td><?php echo $data['pegawai']->tipe_fungsional." ".$data['pegawai']->nama_jenjang; ?></td>
    <td>&nbsp;</td>
    <td align="center">A1</td>
    <td align="center">0</td>

    <td align="center">A1</td>
    <td align="center">0</td>

    <td align="center">A1</td>
    <td align="center">0</td>

    <td align="center">A1</td>
    <td align="center">0</td>

    <td align="center">A1</td>
    <td align="center">0</td>

    <td align="center">A1</td>
    <td align="center">0</td>
    
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
  </tr>

  <!-- A2 -->
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $data['pegawai']->tempat_lahir.", ".$data['pegawai']->tanggal_lahir; ?></td>
    <td><?php echo "TMT ".$data['pegawai']->masa_kerja_baru; ?></td>
    <td>&nbsp;</td>
    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>
    
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
  </tr>

  <!-- B -->
  <tr>
    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    <td align="center">B</td>
    <td align="center">&#8805;0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>

    <td align="center">A2</td>
    <td align="center">0</td>
    
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td><td align="center">&nbsp;</td>
  </tr>


</tbody>


</table>
<?php
var_dump($data);
?>




