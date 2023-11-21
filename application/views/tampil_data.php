<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tampil Data</title>

		<!-- My Style -->
		<link
			rel="stylesheet"
			href="<?= base_url('assets/'); ?>css/tampil_data.css"
		/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	</head>
	<body>
    <div class="container">
      <h1>Data Mahasiswa</h1>
			<table border="1" class="table table-striped mx-auto">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Pekerjaan</th>
					<th>Foto</th>
					<th>Action</th>
				</tr>
				<?php 
    $no = 1;
    foreach ($mahasiswa as $u) {  
    ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->nim ?></td>
					<td><?php echo $u->nama ?></td>
					<td><?php echo $u->alamat ?></td>
					<td><?php echo $u->pekerjaan ?></td>
					<td>
						<img
							src="<?php echo base_url(); ?><?php echo $u->foto ?>"
							width="50"
							height="50"
						/>
					</td>
					<td>
            <div class="button">
              
						  <?php echo anchor('kampus/edit/'.$u->id,'<input type="button" value="Edit" class="btn">'); ?>
						  <?php echo anchor('kampus/hapus/'.$u->id,'<input type="button" value="Hapus" class="btn">'); ?>
            </div>
					</td>
				</tr>
				<?php } ?>
			</table>
			<center>
				<?php echo anchor ('kampus/tambah', '<input type=button value=\'Tambah Data\' class="cta"> ');?>
				<?php echo anchor ('login/logout', '<input type=button value=\'Logout\' class="cta"> ');?>
			</center>
		</div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
