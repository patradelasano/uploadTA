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
    <html>
        <head>
            <title>Aplikasi Penjualan</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.css">
        </head>
        <body>
            <div id="container">
            <header>
              <center>  <h1>Data Transaksi</h1></center>
            </header>
            <!--menu -->
            <br>
            <div class="container">
                    <?php
                    include "db/koneksi.php";
                    $p=isset($_GET['page'])?$_GET['page']:null;
                    switch($p){
                        default:
                                          include "transaksi.php";
                            break;
                    }
                    ?>
            </div>
            </body>
        </div>
        </div>
        <div id="footer"> &copy 2018, titikkoma </div>
    </div>
</body>
</html>
