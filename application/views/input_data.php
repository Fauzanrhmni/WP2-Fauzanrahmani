<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Input Data Mahasiswa</title>

		<!-- My Style -->
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/input_data.css" />
	</head>
	<body>
		<div class="container">
			<center>
				<h1>Input Data Mahasiswa</h1>
				<label style="color: #ff0000"><?php echo validation_errors(); ?></label>
			</center>
			<form
				action="<?php echo base_url(). 'index.php/kampus/tambah_aksi'; ?>"
				method="post"
				enctype="multipart/form-data"
			>
				<table style="margin: 20px auto">
					<tr>
						<td>NIM</td>
						<td><input type="text" name="nim" class="inp" /></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" class="inp" /></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" class="inp" /></td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td><input type="text" name="pekerjaan" class="inp" /></td>
					</tr>
					<tr>
						<td>Upload Foto</td>
						<td><input type="file" name="foto" class="inp-img"/></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="button">
								<input type="submit" value="Tambah" class="btn" />
								<input type="reset" value="Batal" class="btn" />
								<?php echo anchor('kampus/index', '<input type="button" value="Kembali" class="btn">');
								?>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
