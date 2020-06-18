<?php 
include 'function.php';

$datab = query("SELECT * FROM produk");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Slamet Septiawan</title>
</head>
<body>
	<h1>Data Lengkap Produk</h1>
	<p><a href="posting.php" style="text-decoration: none; color: black;">+ Tambah Produk</a></p>
	<table border="1">
		<tr align="center">
			<td>No</td>
			<td>Nama Produk</td>
			<td>Deskripsi</td>
			<td>Harga</td>
			<td>Jumlah</td>
			<td>Action</td>
		</tr>

		<?php 
			$i=1;
			foreach ( $datab as $dt ) : ?>
		
		<tr>
			<td><?= $i++; ?></td>
			<td><?= $dt['namaProduk']; ?></td>
			<td><?= $dt['keterangan']; ?></td>
			<td>Rp. <?= $dt['harga']; ?></td>
			<td><?= $dt['jumlah']; ?></td>
			<td>
				<a href="posting.php?edit=<?= $dt['id']; ?>">Edit</a>|
				<a href="hapus.php?hapus=<?= $dt['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>