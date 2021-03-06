<?php
$servername = "chad";
$username = "root";
$password = "Ariadne_16";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, wcn, date FROM coin_test";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Wilcox Number: " . $row["wcn"]. " " . $row["date"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wilcox Collection&mdash;0003</title>

		<meta name="description" content="Wilcox Collection - RD"/>
		<meta name="keywords" content=""/>
		<meta name="author" content="Chad Uhl"/>

		<link rel="shortcut icon" href="">

		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="background-color: white;">

  <div class="title">
    <h1>Coins of the Wilcox Collection</h1>
    <h2>[ Under Construction ]</h2>
    <ul class="list-inline">
      <li><a href="../wilcox">Home</a></li>
      <li><a href="../about">About</a></li>
      <li><a href="../contact">Contact</a></li>
    </ul>

    <br></br>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-5">
        <div class="coin-text">
          <h3>WC 0003</h3>
          <dl>
            <dt>Date</dt><dd>83 BCE</dd>
            <dt>Manufacture</dt><dd>Struck</dd>
            <dt>Material</dt>
            <dd>AR</dd>
            <dt>Denomination</dt>
            <dd>Denarius</dd>
            <dt>Mint</dt>
            <dd>N/A</dd>
            <dt>Region</dt>
            <dd>N/A</dd>
            <dt>Obverse</dt>
            <dd>Diadem Head of Venus</dd>
            <dt>Obverse Inscription</dt>
            <dd>C.NORBANVS , CIIII</dd>
            <dt>Reverse</dt>
            <dd>Prow-stem, fasces with ax, caduceus</dd>
            <dt>Reverse Inscription</dt>
            <dd>N/A</dd>
            <dt>Bibliographic Information</dt>
            <dd>Bab. 8</dd>
            <dt>Notes</dt>
            <dd>Serrated; 14 (duplicate 13?); A. Postumius Albinus moneyer; Scarce; apparently there was once a duplicate, old #13</dd>
          </dl>
        </div>
      </div>

      <div class="col-md-7">
        <a href="../img/WC_0003_both.png"><img src="../img/WC_0003_both.png" class="img-responsive"></a>
      </div>

    </div>

  </div>

  <div id="map"></div>

  <script>
      function initMap() {
        var uluru = {lat: 41.9028, lng: 12.4964};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&callback=initMap">
  </script>
-->
	<!-- Scripts -->

	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.10.4.min.js" type="text/javascript"></script> <!-- jQuery -->
	<script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
	<script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->
	<script src="js/script.js"></script> <!-- All script -->
<!--
</body>

</html> -->
