<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History Daftar</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">USM</a></li>
    </ol>
  </div>

 <?php echo anchor('user/add_user','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm"></i> pilih jenis USM</button>') ?>

  <table class="table table-hover table-striped table-bordered">
    <tr>
      <th>No</th>
      <th>NIK</th>
      <th>Nama Lengkap</th>
      <th>Jenis USM</th>
      <th>Detail</th>
    </tr>

    <?php
      $no = 1;
    ?>

    <tr>
      <td width="40px"><?php echo $no++?></td>
      <td width="250px">123456</td>
      <td width="300px">jon doe</td>
      <td width="200px">usm-pk</td>
      <td width="20px"><?php echo anchor('jadwal_penting/ubah_jadwal/', '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>')?></td>
    </tr>

  </table>
