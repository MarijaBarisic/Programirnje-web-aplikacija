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
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
  <div class="forma">
    <form action="" method="post" id="registrationForm">
        <label for="ime">Unesite vaše ime:</label>
        <br>
        <input type="text" name="ime" required>
        <br>
        <label for="prezime">Unesite vaše prezime:</label>
        <br>
        <input type="text" name="prezime" required>
        <br>
        <label for="korisnicko_ime">Unesite korisničko ime:</label>
        <br>
        <span id="korisnicko_ime_poruka"></span>
        <br>
        <input type="text" name="korisnicko_ime" required>
        <br>
        <label for="lozinka">Unesite lozinku:</label>
        <br>
        <input type="password" name="lozinka" required>
        <br>
        <br>
      <div class="btn-container">
        <input type="submit" value="Registracija">
      </div>
    </form>
  </div>

  <?php
    include 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $ime = $_POST['ime'];
      $prezime = $_POST['prezime'];
      $korisnicko_ime = $_POST['korisnicko_ime'];
      $lozinka = $_POST['lozinka'];
      $razina = 0;

      $hashirana_lozinka = password_hash($lozinka, CRYPT_BLOWFISH);

      $stmt = mysqli_stmt_init($dbc);
      $query = "SELECT * FROM korisnik WHERE korisnicko_ime = ?";
      if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $korisnicko_ime);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
      }
      if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "<script>
                document.getElementById('korisnicko_ime_poruka').innerHTML = 'Korisničko ime je zauzeto';
                document.getElementById('korisnicko_ime_poruka').style.color = 'red';
              </script>";
      } else {
        echo"<p class='ispis_poruke'>Registracija uspješna</p>";
        $query_insert = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) VALUES (?, ?, ?, ?, ?)";
        if (mysqli_stmt_prepare($stmt, $query_insert)) {
          mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $korisnicko_ime, $hashirana_lozinka, $razina);
          mysqli_stmt_execute($stmt);
        }
      }
      mysqli_stmt_close($stmt);
    }

    mysqli_close($dbc);
  ?>
  <footer>
    <p>Marija Barišić</p>
    <p>mbarisic2@tvz.hr</p>
    <p>2024</p>
  </footer>
</body>

</html>