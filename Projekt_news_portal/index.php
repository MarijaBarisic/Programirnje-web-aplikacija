<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="news portal,sports,football">
  <meta name="description" content="sports news">
  <meta name="author" content="Marija Barišić">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News portal</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
  <nav>
      <img src="images/logo.png" alt="">
      <ul>
        <li><a href="index.php">Početna</a></li>
        <li><a href="kategorija.php?id=Muški nogomet">Muški nogomet</a></li>
        <li><a href="kategorija.php?id=Ženski nogomet">Ženski nogomet</a></li>
        <li class="dropdown">
          <a href="prijava.html">Administracija</a>
          <ul class="dropdown_content">
            <li><a href="prijava.html">Prijava</a></li>
            <li><a href="registracija.php">Registracija</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <div class="clanci">
    <div class="container">
      <section class="row">
        <h1>Muški nogomet</h1>
        <?php
        include 'connect.php';
        if($dbc){
            $query_muski_nogomet = "SELECT * FROM clanak WHERE kategorija = 'Muški nogomet' AND arhiva = 0 ORDER BY datum DESC LIMIT 4";
            $result_muski_nogomet = mysqli_query($dbc, $query_muski_nogomet) or die('Error querying database');
            
            if(mysqli_num_rows($result_muski_nogomet) > 0) {
                while($row = mysqli_fetch_array($result_muski_nogomet)){
                    $slika = $row['slika'];
                    $naslov = $row['naslov_vijesti'];
                    $sazetak  = $row['kratki_sazetak_vijesti'];
                    $vrijeme  = $row['datum'];
        
                    echo "<a href='clanak.php?id={$row['id']}' class='col-lg-3 col-md-6 col-sm-12'>";
                    echo "<article class='article'>";
                      echo "<img class='img-fluid mb-2' src='images/$slika' alt=''>";
                      echo "<h2 class='fs-5'>$naslov</h2>";
                      echo "<p>$sazetak</p>";
                      echo "<time>$vrijeme</time>";
                    echo "</article>";
                    echo "</a>";
                }
            } else {
                echo "Nema dostupnih članaka.";
            }
            
            mysqli_close($dbc);
        } else {
            echo "Ne može se pristupiti podacima: " . mysqli_error($dbc);
        }
      ?>
      </section>
      <section class="row">
        <h1>Ženski nogomet</h1>
        <?php
        include 'connect.php';
        if($dbc){
            $query_zenski_nogomet = "SELECT * FROM clanak WHERE kategorija = 'Ženski nogomet' AND arhiva = 0 ORDER BY datum DESC LIMIT 4";
            $result_zenski_nogomet = mysqli_query($dbc, $query_zenski_nogomet) or die('Error querying database');
            
            if(mysqli_num_rows($result_zenski_nogomet) > 0) {
                while($row = mysqli_fetch_array($result_zenski_nogomet)){
                    $slika = $row['slika'];
                    $naslov = $row['naslov_vijesti'];
                    $sazetak  = $row['kratki_sazetak_vijesti'];
                    $vrijeme  = $row['datum'];
        
                    echo "<a href='clanak.php?id={$row['id']}' class='col-lg-3 col-md-6 col-sm-12'>";
                    echo "<article class='article'>";
                      echo "<img class='img-fluid' src='images/$slika' alt=''>";
                      echo "<h2 class='fs-5'>$naslov</h2>";
                      echo "<p>$sazetak</p>";
                      echo "<time>$vrijeme</time>";
                    echo "</article>";
                    echo "</a>";
                }
            } else {
                echo "Nema dostupnih članaka.";
            }
            
            mysqli_close($dbc);
        } else {
            echo "Ne može se pristupiti podacima: " . mysqli_error($dbc);
        }
      ?>
      </section>
    </div>
  </div>
  <footer>
    <p>Marija Barišić</p>
    <p>mbarisic2@tvz.hr</p>
    <p>2024</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>