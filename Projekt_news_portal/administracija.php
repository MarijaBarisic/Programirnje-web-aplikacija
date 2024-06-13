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
  <?php
  session_start();
  include "connect.php";
  $uspjesna_prijava=false;

  if (isset($_POST['prijava'])) {
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];

    $query = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $query)) {
      mysqli_stmt_bind_param($stmt, 's', $korisnicko_ime);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      mysqli_stmt_bind_result($stmt, $korisnicko_ime_korisnika, $lozinka_korisnika, $razina_korisnika);
      mysqli_stmt_fetch($stmt);

      if (password_verify($lozinka, $lozinka_korisnika) && mysqli_stmt_num_rows($stmt) > 0) {
        $uspjesna_prijava = true;
        if ($razina_korisnika == 1) {
          $admin=true;
        }else{
          $admin=false;
        }
        $_SESSION['korisnicko_ime'] = $korisnicko_ime_korisnika;
        $_SESSION['razina'] = $razina_korisnika;
      }else{
        $uspjesna_prijava=false;
      }
      if (($uspjesna_prijava == true && $admin == true) || (isset($_SESSION['korisnicko_ime'])) && $_SESSION['razina'] == 1) {
          echo "<a href = 'unos.html' class = 'gumb'>Unesite novi članak</a>";
          $query = "SELECT * FROM clanak ORDER BY datum DESC";
          $result = mysqli_query($dbc, $query);
          while ($row = mysqli_fetch_array($result)) {
            echo "<div class='forma'>
                  <form action='skripta.php' method='POST' enctype='multipart/form-data'>
                    <label for='naslov'>Naslov vijesti:</label>
                    <input type='text' name='naslov' id='naslov' value='".$row['naslov_vijesti']."'>
                    <br><br>
                    <label for='kategorija'>Odaberite kategoriju vijesti</label>
                    <select name='kategorija' id='kategorija'>
                      <option value='Muški nogomet' ".($row['kategorija']=='Muški nogomet' ? 'selected' : '').">Muški nogomet</option>
                      <option value='Ženski nogomet' ".($row['kategorija']=='Ženski nogomet' ? 'selected' : '').">Ženski nogomet</option>
                    </select>
                    <br><br>
                    <label for='sazetak'>Kratki sažetak vijesti:</label><br>
                    <textarea name='sazetak' id='sazetak' cols='40' rows='15'>".$row['kratki_sazetak_vijesti']."</textarea>
                    <br><br>
                    <label for='vijesti'>Sadržaj vijesti:</label><br>
                    <textarea name='vijesti' id='vijesti' cols='40' rows='15'>".$row['sadrzaj_vijesti']."</textarea>
                    <br><br>
                    <label for='slika'>Odaberite sliku:</label><br>
                    <input type='file' id='slika' name='slika' accept='image/*'>
                    <br><br>
                    <img src='images/".$row['slika']."' width='200px'>
                    <br><br>
                    <label for='arhiva'>Spremiti u arhivu</label>
                    <input type='checkbox' name='arhiva' id='arhiva' ".($row['arhiva'] == 1 ? 'checked' : '').">
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <br><br>
                    <div class='btn-container'>
                      <input type='submit' value='Pošalji'>
                      <input type='reset' value='Poništi'>
                      <input type='submit' name='izmjeni' value='Izmjeni'>
                      <input type='submit' name='izbrisi' value='Izbriši'>
                    </div>
                    <br><br>
                  </form>
                </div>";
          }
        } else if ($uspjesna_prijava && !$admin) {
          echo "<p class='ispis_poruke'>Dobrodošli " . $_SESSION['korisnicko_ime'] . "!<br>Uspješno ste prijavljeni, ali nemate administratorska prava.</p>";
      } else {
          echo "<p class='ispis_poruke'>Prijava nije uspješna, molimo <a href='registracija.php' class = 'registracija'>registrirajte se</a>.</p>";
      }
    }
  }      
    ?>
  <footer>
    <p>Marija Barišić</p>
    <p>mbarisic2@tvz.hr</p>
    <p>2024</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>