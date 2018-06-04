<html>
<head>
	<title>HOTEL</title>
	<link rel="stylesheet" type="text/css"
	media="all" href="style7.css">
</head>
<body>
	<div id="layout">
		<div id="header">
		<img src="a.jpg" class="header">
		</div>
		<div id="menu">
        <ul>
				<li><a href="index.html">RESERVASI</a></li>
				<li><a href="filter.php">DATA TAMU</a></li>
				<li><a href="kontak.html">KONTAK KAMI</a></li>
			</ul>
			</div>
		<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
		Selamat Datang di Hotel Titik Koma
		</marquee>
		</div>
		<div id="sidebar">
		<div class="widged">
		<h1 class="judulwidged">More Info</h1>
		<ul>
				<li> <a href="https://www.facebook.com/">Facebook</a> </li>
				<li> <a href="https://www.instagram.com/">Instagram</a> </li>
			</ul>
		</div>
		</div>
		<div id="isi">
		<?php
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelprpl";

$konek = new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if ($konek->connect_error) {
	die("Koneksi gagal karena : ".$konek->connect_error);
}
if($_POST['submit']){
$nama_cus = $_POST['nama_customer'];
$tgl_msk = $_POST['Tanggal_masuk'];
$tgl_klr = $_POST['Tanggal_keluar'];
$jenis_kamar =$_POST ['jenis_kamar'];
$alamat_cus = $_POST['alamat_customer'];
	if(empty($nama_cus)||empty($tgl_msk)||empty($tgl_klr)||empty($jenis_kamar)||empty($alamat_cus)){
		echo "<strong> Data Harus diisi</strong>";
	}
	else{

	}
}
$sql = "INSERT INTO customer(nama_customer,Tanggal_masuk,Tanggal_keluar,jenis_kamar,alamat_customer) VALUES ('$nama_cus','$tgl_msk','$tgl_klr','$jenis_kamar','$alamat_cus')";
if ($konek->query($sql)) {
	echo "Pemesanan Anda Berhasil!<br/>";
}else{
	echo "Pemesanan anda gagal : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tambah.php'>Tambah Data Customer<a/><br/>";
echo "<a href='index1.php'>Tampilkan Nota Pemesanan<a/>";
?>
</div>
		</div>
		<div id="footer"> &copy 2018, titikkoma </div>
	</div>
</body>
</html>