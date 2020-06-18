<?php 
include 'function.php';

if (isset($_POST['submit'])) {
		
		if (tambah($_POST) > 0) {
			header("location:index.php?Tambah=Berhasil");
		}else{
			header("location:index.php?Tambah=Gagal");
		}
	}
$id = $_GET ['edit'];
$produk = detail($id);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Slamet Septiawan</title>
</head>
<body>

	<?php if (isset($_GET['edit'])): ?>
	
		<?php 
	if (isset($_POST['update'])) {

		if (update($_POST) > 0) {
		header("location:index.php?id=".$produk['id']);
		
		}else{
		header("location:index.php?Update=Gagal");
	}
}
	 ?>
	<h2>Edit Data Produk</h2>
	<p><a href="index.php"> <-- Kembali</a></p>
	<form method="POST" action="posting.php?edit=<?=$produk['id'];?>">	
		<table>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="namaProduk" value="<?= $produk['namaProduk'] ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="keterangan" value="<?= $produk['keterangan'] ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?= $produk['harga'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?= $produk['jumlah'] ?>"></td>
			</tr>
			<tr align="right">
				<td><input hidden name="id" value="<?= $produk['id'] ?>"></td>
				<td colspan="2"><button name="update">submit</button></td>
			</tr>
		</table>
	</form>
	
	<?php else: ?>

	<h2>Isi Data Produk</h2>
	<p><a href="index.php"> <-- Kembali</a></p>
	<form method="POST" action="">	
		<table>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="namaProduk"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr align="right">
				<td colspan="2"><button name="submit">submit</button></td>
			</tr>
		</table>
	</form>
	<?php endif ?>
</body>
</html>