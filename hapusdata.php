<?php
	include "koneksi.php";

		if(isset($_POST['hapus'])){
		$dari=$_POST['dari'];
		$sampai=$_POST['sampai'];

		$sql = "DELETE FROM atapotomatis  WHERE tanggal BETWEEN '$dari' AND '$sampai'";
		$result = mysqli_query($conn, $sql);
		if(!$result){
		  // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		echo '<script>alert("Data Gagal Dihapus!");location="home.php";</script>';
		}else{
		echo '<script>alert("Data Berhasil Dihapus!");location="home.php";</script>';
		}
	}
?>