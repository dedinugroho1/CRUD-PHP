<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana</title>
</head>
<body>

	<h1>CRUD Sederhana</h1>

	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Alamat</th>
			</tr>
		</thead>
		
		<?php 
		include "koneksi.php";
		$nomor = 1;
		$data = mysqli_query($koneksi, "select * from tbl_mahasiswa");
		while ($dedi = mysqli_fetch_array($data)) {
		
		?>

		<tbody>
			<tr>
				<td><?= $nomor++;?></td>
				<td><?= $dedi['nama'];?></td>
				<td><?= $dedi['nim'];?></td>
				<td><?= $dedi['alamat'];?></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>

</body>
</html>