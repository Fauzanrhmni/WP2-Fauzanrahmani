<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>

  <!-- My Style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/input_data.css" />
</head>
<body>
  <div class="container">
  <center>
    <h1>Edit Data Mahasiswa</h1>
  </center>
  <?php foreach ($mahasiswa as $u) { ?>
  <form action="<?php echo base_url(). 'kampus/update'; ?>" method="post" enctype="multipart/form-data">
    <table style="margin:20px auto;">
      <tr>
        <td>NIM</td>
        <td>
          <input type="hidden" name="id" value="<?php echo $u->id ?>" class="inp">
          <input type="text" name="nim" value="<?php echo $u->nim ?>" class="inp">
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" name="nama" value="<?php echo $u->nama ?>" class="inp">
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>
          <input type="text" name="alamat" value="<?php echo $u->alamat ?>" class="inp">
        </td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>
          <input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>" class="inp">
        </td>
      </tr>
      <tr>
        <td><img src="<?php echo base_url(); ?><?php echo $u->foto ?>" width="50" height="50"></td>
      </tr>
      <tr>
        <td>Upload Foto</td>
        <td><input type="file" name="foto"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <div class="button">
            <input type="submit" value="Update" class="btn">
            <?php echo anchor('kampus', '<input type=button value="Kembali" class="btn">'); ?>
          </div>
        </td>
      </tr>
    </table>
  </form>  
  <?php } ?>

  </div>
</body>
</html>