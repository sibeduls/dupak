<?php echo $this->session->flashdata('message') ?>
<a class="btn btn-primary pull-left" href="<?php echo base_url() ?>backend/user/add"> Tambah Data </a>

<table class="table table-striped">
<thead>
<tr>
    <th> No </th>
    <th> NIP </th>
    <th> NIK </th>
    <th> Nama Lengkap </th>
    <th> Tipe Fungsional </th>
    <th> Golongan </th>
    <th> Jabatan </th>
    <th> Action </th>
</tr>

</thead>
<tbody>
<?php 
    $no = 1;
    if($this->uri->segment(4) != ''){
        $no = $no * 10;
        $no = $no + 1;
    }


foreach($data as $k => $v): ?>
<tr>
    <td> <?php echo $no; ?> </td>
    <td> <?php echo $v->nip ?></td>
    <td> <?php echo $v->nik ?></td>
    <td> <?php echo $v->nama_lengkap ?></td>
    <td> <?php echo $v->tipe_fungsional ?></td>
    <td> <?php echo $v->golongan ?></td>
    <td> <?php echo $v->nama_jenjang ?> </td>
    <td>
    <a href="<?php echo base_url() ?>backend/user/edit/<?php echo $v->nip ?>" class="btn btn-primary"> Edit </a>    
    <a href="<?php echo base_url() ?>backend/user/delete/<?php echo $v->id_karyawan ?>" class="btn btn-danger"> Hapus </a>    
    </td>
</tr>

<?php
$no = $no+1;
endforeach ?>

</tbody>

</table>
<?php 
echo $pagination;
?>