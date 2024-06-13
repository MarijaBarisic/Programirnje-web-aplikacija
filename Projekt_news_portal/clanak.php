<!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="news portal,sports,football">
  <meta name="description" content="sports news">
  <meta name="author" content="Marija Barišić">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News portal</title>
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
  <div class = "container">
  <?php
      include "connect.php";
      if(isset($_GET['id'])){
        $article_id = $_GET['id'];

        if($dbc){
          $query_article = "SELECT * FROM clanak WHERE id = $article_id";
          $result = mysqli_query($dbc,$query_article);
          if($result){
            while($row = mysqli_fetch_array($result)){
              $kategorija = $row['kategorija'];
              $naslov  = $row['naslov_vijesti'];
              $sazetak = $row['kratki_sazetak_vijesti'];
              $vrijeme = $row['datum'];
              $slika = $row['slika'];
              $vijest = $row['sadrzaj_vijesti'];
              echo "<article class ='single_article'>";
                echo "<p>$kategorija</p>";
                echo "<h1>$naslov</h1>";
                echo "<br><br>";
                echo "<h2 class='fs-5'>$sazetak</h2>";
                echo "<br><br>";
                echo "<time>$vrijeme</time>";
                echo "<br><br>";
                echo "<img class='img-fluid mb-2' src=images/$slika>";
                echo "<br><br>";
                echo "<p>$vijest</p>";
              echo "</article>";
            }
          }
        }
      }
    ?>
  </div>
  <footer>
    <p>Marija Barišić</p>
    <p>mbarisic2@tvz.hr</p>
    <p>2024</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>