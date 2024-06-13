<!DOCTYPE html>
<html lang="hr">
<?php

include "connect.php";

$slika = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['posalji'])) {
  if(isset($_POST['naslov'])){
    $naslov=$_POST['naslov'];
  }
  if(isset($_POST['kategorija'])){
    $kategorija = $_POST['kategorija'];
  }
  if(isset($_POST['sazetak'])){
    $sazetak=$_POST['sazetak'];
  }
  if(isset($_POST['vijesti'])){
    $vijesti=$_POST['vijesti'];
  }
  if (isset($_FILES['slika'])) {
    $slika = basename($_FILES['slika']['name']);
    $target_dir = 'images/'.$slika;
    move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);
  }
  $datum_vrijeme = date("Y-m-d H:i:s", time());

  if(isset($_POST['arhiva'])){
     $arhiva=1; 
    }else{ 
      $arhiva=0; 
    }
}
if(isset($_POST['posalji'])){
  $query_insert = "INSERT INTO clanak(kategorija,naslov_vijesti,kratki_sazetak_vijesti,datum,slika,sadrzaj_vijesti,arhiva) 
  VALUES ('$kategorija','$naslov','$sazetak','$datum_vrijeme','$slika','$vijesti','$arhiva')";

  $result_insert = mysqli_query($dbc, $query_insert) or die('Error querying databese.');
}

if(isset($_POST['izmjeni'])){ 
  if(isset($_POST['naslov'])){
    $naslov=$_POST['naslov'];
  }
  if(isset($_POST['kategorija'])){
    $kategorija = $_POST['kategorija'];
  }
  if(isset($_POST['sazetak'])){
    $sazetak=$_POST['sazetak'];
  }
  if(isset($_POST['vijesti'])){
    $vijesti=$_POST['vijesti'];
  }
  if (isset($_FILES['slika'])) {
    $slika = basename($_FILES['slika']['name']);
    $target_dir = 'images/'.$slika;
    move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);
  }else{
    $query_old_image = "SELECT slika FROM clanak WHERE id={$_POST['id']}";
    $result_old_image = mysqli_query($dbc, $query_old_image);
    $row = mysqli_fetch_assoc($result_old_image);
    $slika = $row['slika'];
  }
  $datum_vrijeme = date("Y-m-d H:i:s", time());

  if(isset($_POST['arhiva'])){
     $arhiva=1; 
    }else{ 
      $arhiva=0; 
    }
  $id_uredi=$_POST['id']; 
  $query_update = "UPDATE clanak SET kategorija='$kategorija',	naslov_vijesti='$naslov', kratki_sazetak_vijesti = '$sazetak', datum='$datum_vrijeme', slika = '$slika', 	sadrzaj_vijesti = '$vijesti', arhiva='$arhiva'
   WHERE id=$id_uredi"; 
  $result_update = mysqli_query($dbc, $query_update); 
}

if(isset($_POST['izbrisi'])){
  $id = $_POST['id'];
  $query_delete = "DELETE FROM clanak WHERE id=$id";
  $result_delete =mysqli_query($dbc,$query_delete) or die('Error querying databese.');
}
mysqli_close($dbc);
?>

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
  <?php if(isset($_POST['posalji'])||isset($_POST['izmjeni'])){?>
  <div class = "container m-10 py-10">
    <article id="clanak_forma">
      <p>
        <?php echo $kategorija; ?>
      </p>
      <br>
      <h1>
        <?php echo $naslov; ?>
      </h1>
      <br>
      <h2>
        <?php echo $sazetak; ?>
      </h2>
      <br>
      <time>
        <?php echo $datum_vrijeme; ?>
      </time>
      <br>
      <?php echo "<img src='images/$slika'"; ?>
      <br><br><br>
      <p>
        <?php echo $vijesti; ?>
      </p>
    </article>
  </div>
  <?php }else{
    echo "<p class='ispis_poruke'>Uspješno ste obrisali članak</p>";
  }
  ?>
  <footer>
    <p>Marija Barišić</p>
    <p>mbarisic2@tvz.hr</p>
    <p>2024</p>
  </footer>
</body>

</html>