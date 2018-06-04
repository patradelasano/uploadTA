<?php
// Kredensial database
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hotelprpl';
// menghubungkan ke db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// mendapatkan data dari db
$result = $db->query("SELECT COUNT(*) FROM customer WHERE jenis_kamar='Deluxe Room (DLX)';");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<title>Membuat Diagram Lingkaran di PHP dengan Google Charts - Codingan.com</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Language', 'jenis_kamar'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['jenis_kamar']."'";
          }
      }
      ?>
    ]);
    var options = {
        title: 'Bahasa Pemrograman yang paling populer',
        width: 900,
        height: 500,
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Menampilkan diagram lingkaran -->
    <div id="piechart"></div>
</body>
</html>