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
    <li> <a href="nama.php"><font color="ffffff">Cari Nama</a></li></font>
                <li> <a href="filter.php"><font color="ffffff">Cari Kamar</a></li></font>
                <li> <a href="tanggal.php"><font color="ffffff">Cari Tanggal</a></li></font>
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
                $host="localhost";
                $username="root";
                $password = "";
                $db_name = "hotelprpl";
                
                $konek = new mysqli($host,$username,$password,$db_name);
                
                //mengecek koneksi
                if ($konek->connect_error) {
                    die("Koneksi gagal karena : ".$konek->connect_error);
                }
                
                $sql="select * from customer";
                $data=$konek->query($sql);
                
                echo "<a href='tambah.php'>Kembali ke menu</a>";
                
                echo "<h1>Daftar Pengunjung</h1>";
                echo "<table border='1'>";
                echo "<tr>
                        <td>No</td>
                        <td>Nama Pengunjung</td>
                        <td>Tanggal Masuk</td>
                        <td>Tanggal Keluar</td>
                        <td>Jenis Kamar</td>
                        <td>Alamat Pengunjung</td>
                     </tr>";
                     
                if($data->num_rows>0){
                    $no=1;
                    while($row=$data->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$row['nama_customer']."</td>";
                        echo "<td>".$row['Tanggal_masuk']."</td>";
                        echo "<td>".$row['Tanggal_keluar']."</td>";
                        echo "<td>".$row['jenis_kamar']."</td>";
                        echo "<td>".$row['alamat_customer']."</td>";
                  
                        echo "</tr>";
                    }
                }else{
                    echo "Data Kosong!";
                }
                echo "</table>";
                
                $konek->close();
                
                ?>
			</div>

		</div>
		<div id="footer"> &copy 2018, titikkoma </div>
	</div>
</body>
</html>