<?php
  //konekcija na bazu podataka
  $servername = "localhost";
  $username = "root";
  $password = "";
  $base_name = "news_portal";

  $dbc = mysqli_connect($servername, $username, $password, $base_name,3325) or
  die('Error connecting to MySQL server: ' . mysqli_connect_error());

?>