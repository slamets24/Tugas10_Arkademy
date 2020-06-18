<?php 
$conn = mysqli_connect("localhost", "root", "", "arkademy");

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

function query($query){
	global $conn;

	$dt = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($dt)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data){
	global $conn;

	$id = $data['id'];
	$namaProduk = $data['namaProduk'];
	$keterangan = $data['keterangan'];
	$harga = $data['harga'];
	$jumlah = $data['jumlah'];

	$query = "INSERT INTO produk VALUES ('', '$namaProduk', '$keterangan', $harga, '$jumlah')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function update($update){
	global $conn;

	$id = $update['id'];
	$namaProduk = $update['namaProduk'];
	$keterangan = $update['keterangan'];
	$harga = $update['harga'];
	$jumlah = $update['jumlah'];

	$query = "UPDATE produk SET namaProduk='$namaProduk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id' ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function detail($id){
	global $conn;

	$tampil = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id' ");
	$rows = mysqli_fetch_assoc($tampil);

	return $rows;
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM produk WHERE id ='$id'");

	return mysqli_affected_rows($conn);
}

 ?>