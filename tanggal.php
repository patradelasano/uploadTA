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
                <li><a href="tampil.php">DATA TAMU</a></li>
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
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
}          
?> 
<table>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelprpl";

$konek = new mysqli($host, $username, $password, $db_name);
?>
<br><br>
<form method="get" action="tanggal.php">
   <div> 
  <input type="date"  placeholder="masukan tanggal..."  name="cari">
  <input type="submit" value="cari" class="btn btn-info" ></div>
</form><br>
      
 
                    <thead>
                        <b><tr><td>No.</td><td>Nama Customer</td><td>Alamat Customer</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td><td>Jenis Kamar</td></tr>
                    </thead>
                     <?php


if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $queri = "select * from customer where Tanggal_masuk like '%".$cari."%'";       
  }else{
    $queri = "select * from customer";   
  }
$hasil=mysqli_query ($konek,$queri);   
$no=1;
while ($data = mysqli_fetch_array ($hasil)){  
      
        echo "<tr>   
          <td>".$no++."</td>             
          <td>".$data[0]."</td>  
          <td>".$data[1]."</td>
          <td>".$data[2]."</td>
          <td>".$data[3]."</td>
          <td>".$data[4]."</td>
          </tr>";      
      
}
 ?>  
</table><br><br><br><br><br>

        </form>     
    </body>    
</html>
                <br>
            <br>
            <br>
            <br></div>
            

        <div id="footer"> &copy 2018, titikkoma </div>
    </div>
</body>
</html>