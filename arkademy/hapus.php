<?php 
include 'function.php';
$id = $_GET['hapus'];

if (hapus($id) > 0) {
	header("location:index.php?Hapus=Berhasil");
}else{
	header("location:index.php?Hapus=Gagal");
}



 ?>