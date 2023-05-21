<!DOCTYPE html>
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

	
<body class="rbody">
<div class="test1">
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
	<div class="alajn">
	<section>
		<form enctype="multipart/form-data" action="" method="POST" name="reg" id="reg">
			<div class="form-item">	
				<label for="title">Ime: </label>
				<div class="form-field">
				<input type="text" name="ime" id="ime" class="form-field-textual">
				<span id="porukaIme" class="bojaPoruke"></span>
			</div>
			</div>

			<div class="form-item">
				<label for="about">Prezime: </label>
				<div class="form-field">
				<input type="text" name="prezime" id="prezime" class="form-field-textual">
				<span id="porukaPrezime" class="bojaPoruke"></span>
			</div>
			</div>
			<div class="form-item">
				<label for="content">Korisničko ime:</label>
				<div class="form-field">
				<input type="text" name="username" id="username" class="form-field-textual">
				<span id="porukaUsername" class="bojaPoruke"></span>
			</div>
			</div>
				<div class="form-item">
				<label for="pphoto">Lozinka: </label>
				<div class="form-field">
				<input type="password" name="pass" id="pass" class="form-field-textual">
				<span id="porukaPass" class="bojaPoruke"></span>
			</div>
			</div>
			<div class="form-item">
				<label for="pphoto">Ponovite lozinku: </label>
				<div class="form-field">
				<input type="password" name="passRep" id="passRep" class="form-field-textual">
				<span id="porukaPassRep" class="bojaPoruke"></span>
			</div>
			</div>

			<div class="form-item">
				<button type="submit" value="registracija" id="slanje" name="submit" class="btn3">Registracija</button>
			</div>

		</form>

	</section>
</div>

	<?php
		include 'connect.php';

		if(isset($_POST['submit'])){

			$ime = $_POST['ime'];
			$prezime = $_POST['prezime'];
			$username = $_POST['username'];
			$lozinka = $_POST['pass'];
			$hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
			$razina = 0;
			$registriranKorisnik = '';

			$sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
			$stmt = mysqli_stmt_init($dbc);
			if (mysqli_stmt_prepare($stmt, $sql)) {
				mysqli_stmt_bind_param($stmt, 's', $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
			}
			if(mysqli_stmt_num_rows($stmt) > 0){
				$msg='Korisničko ime već postoji!';
				echo $msg;
			}

			else{
				$sql = "INSERT INTO korisnik (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($dbc);
				if (mysqli_stmt_prepare($stmt, $sql)) {
					mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina);
					mysqli_stmt_execute($stmt);
					$registriranKorisnik = true;
					echo '<p>Korisnik je uspješno registriran!</p>';
				}
			}
		}
		mysqli_close($dbc);
	?>

	


	<script type="text/javascript">

	document.getElementById("slanje").onclick = function(event) {

		var slanjeForme = true;

		var poljeIme = document.getElementById("ime");
		var ime = document.getElementById("ime").value;
		if (ime.length == 0) {
			slanjeForme = false;
			poljeIme.style.border="2px dashed red";
			document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
		}
		else{
			poljeIme.style.border="2px solid green";
			document.getElementById("porukaIme").innerHTML="";
		}

		var poljePrezime = document.getElementById("prezime");
		var prezime = document.getElementById("prezime").value;
		if (prezime.length == 0) {
			slanjeForme = false;
			poljePrezime.style.border="2px dashed red";
			document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>";
		}
		else{
			poljePrezime.style.border="2px solid green";
			document.getElementById("porukaPrezime").innerHTML="";
		}


		// Korisničko ime mora biti uneseno
		var poljeUsername = document.getElementById("username");
		var username = document.getElementById("username").value;
		if (username.length == 0) {
			slanjeForme = false;
			poljeUsername.style.border="2px dashed red";
			document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
		}
		else{
			poljeUsername.style.border="2px solid green";
			document.getElementById("porukaUsername").innerHTML="";
		}

		// Provjera podudaranja lozinki
		var poljePass = document.getElementById("pass");
		var pass = document.getElementById("pass").value;
		var poljePassRep = document.getElementById("passRep");
		var passRep = document.getElementById("passRep").value;
		if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
			slanjeForme = false;
			poljePass.style.border="2px dashed red";
			poljePassRep.style.border="2px dashed red";
			document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
			document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
		}
		else{
			poljePass.style.border="2px solid green";
			poljePassRep.style.border="2px solid green";
			document.getElementById("porukaPass").innerHTML="";
			document.getElementById("porukaPassRep").innerHTML="";
		}

		if (slanjeForme != true) {
			event.preventDefault();
		}
	};

	</script>




	<footer>
        <h1>Welt</h1>
    </footer>
</div>
</body>
</html>