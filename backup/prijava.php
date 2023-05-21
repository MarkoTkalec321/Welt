<!DOCTYPE html>
<html lang="en">
<head>
        <title>Završni projekt</title>
        <link rel="stylesheet"  href="style.css">
        <meta name="viewport" content="width=device-width; initial-scale=1.0;  maximum-scale=1.0;  user-scalable=0;">
        <meta  http-equiv="content-type"  content="text/html;  charset=utf-8">
        <meta name="description"  content="Ovo je  završni  projekt  iz predmeta Programiranje  web  aplikacija">
        <meta name="keywords" content="html, css, web tehnologije, php, web aplikacija, sql, HTML forma, MySql, JavaScript validacija, sigurnost  web aplikacija,  WELT">
        <meta name="author" content="Marko Tkalec">
        <meta http-equiv="Cache-control" content="no-cache">

        <meta property="og:title" content="Portal-vijesti">
        <meta property="og:type" content="Portal">
        <meta property="og:url" content="https://welt.org/facebook">
        <meta property="og:image" content="https://welt.org/facebook.jpg">
        <meta property="og:description" content="Portal, vijesti, hrana, biznis, kultura">

        <link rel="icon"  href="slike/favicon.ico"  type="image/x-icon"/>
        

        <script src="https://kit.fontawesome.com/0bbd2487f3.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    </head>

	
<body class="sbody">
	<header>
		<div class="naslov">
			<h1>
				WELT
			</h1>
		</div>
		<nav>
			
			<div class="line2"></div>
			<ul>
				<li><a href="index.php">Početna</a></li>
				<li><a href="kategorija.php?id=sport" class="">Sport</a></li> 
				<li><a href="kategorija.php?id=hrana" class="">Hrana</a></li> 
				<li><a href="administracija.php">Administracija</a></li>  
				<li><a href="unos.php">Unos</a></li>  
				<li><a href="registracija.php">Registracija</a></li>  
				<li><a href="prijava.php">Prijava</a></li>  
			</ul>
			
		</nav>
    </header>
	
	<form method="POST" action ="">
        <label for="user">Korisničko ime</label>
        <br />
        <input name="username" type="text" required />
        <br />
        <label for="password">Lozinka</label>
        <br />
        <input name="lozinka" type="password" required />
        <br />
        <input name="submit" type="submit" value="Pošalji" />
    </form>

	<footer>
        <h1>Welt</h1>
    </footer>

</body>

	<?php
	
		include 'connect.php';
		session_start();
		if (isset($_POST['submit'])) {
			$prijavaImeKorisnika = $_POST['username'];
			$prijavaLozinkaKorisnika = $_POST['lozinka'];

			$sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?;";
			$stmt = mysqli_stmt_init($dbc);
			if (mysqli_stmt_prepare($stmt, $sql)) {
				mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
			}
			mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $levelKorisnika);
			mysqli_stmt_fetch($stmt);

			if (password_verify($_POST['lozinka'], $lozinkaKorisnika) && mysqli_stmt_num_rows($stmt) > 0 && $_POST['username']==$imeKorisnika){
				$uspjesnaPrijava = true;
				

				if($levelKorisnika == 1) {
					$admin = true;
				}
				else{
					$admin = false;
				}
				$_SESSION['$username'] = $imeKorisnika;
				$_SESSION['$razina'] = $levelKorisnika;
			}
			else{
				$uspjesnaPrijava = false;
		   }
		  	//$_SESSION['$username'] = $imeKorisnika;
			//$_SESSION['$razina'] = $levelKorisnika;

			echo $_SESSION['$username'];
			echo '</br>';
			echo $_SESSION['$razina'];

			if ($uspjesnaPrijava == true && $admin == true) {
				echo '<p>Vaš korisničko ime je ' . $imeKorisnika . ', imate admin privilegije.</p>';
			}
	
			else if ($uspjesnaPrijava == true && $admin == false) {
				echo '<p>Bok ' . $imeKorisnika . '! Uspješno ste prijavljeni, ali niste administrator.</p>';
			}
			else if ($uspjesnaPrijava == false) {
				echo '<p>Krivi username ili lozinka. Ako niste registrirani, ovdje se možete registrirati: </p>';
				echo '<a href="registracija.php">Registracija</a>';
			}
		}
		
	?>

</html>