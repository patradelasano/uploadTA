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
        <!DOCTYPE html>
<html>
<head>
<style>
		input{width: 80%;  ;padding-bottom: 10px;padding-top: 10px; margin: 8px 0;padding-left: 15px;  display: inline-block; border: 1px solid #ccc;  box-sizing: border-box;}
	</style>
	<title>HOTEL</title>
</head>
<body>
	<a href="index.html">kembali ke menu</a>
	<h1>Tambah Pengunjung</h1>
	<form action="simpan.php" method="post">
		<table>
			<tr>
				<td>Nama Pengunjung</td>
				<td>:</td>
				<td><input type="text" name="nama_customer"required></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td><input type="date" name="Tanggal_masuk"required></td>
			</tr>
			<tr>
				<td>Tanggal Keluar</td>
				<td>:</td>
				<td><input type="date" name="Tanggal_keluar"required></td>
			</tr>
			<tr>
			<td> Jenis Kamar</td>
			<td>:</td>
                <td> <select name="jenis_kamar" style=" width: 80%;  ;padding-bottom: 10px;padding-top: 10px; margin: 8px 0;padding-left: 15px;  display: inline-block; border: 1px soli-d #ccc;  box-sizing: border-box;"required>
                 <option value="Standard Room (STD)">Standard Room (STD)</option>
                 <option value="Superior Room (SUP)">Superior Room (SUP)</option>
                 <option value="Deluxe Room (DLX)">Deluxe Room (DLX)</option>
				 </select><br></td>
				</tr>
				<td>Alamat Pengujung</td>
				<td>:</td>
				<td><textarea name="alamat_customer" rows="8" cols="50"required></textarea></td>
			</tr>
			
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	<?php
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
	?>
</body>
</html>

		</div>
		<div id="footer"> &copy 2018, titikkoma </div>
	</div>
</body>
</html>