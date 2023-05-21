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
<body class="sbody">
	
	<?php
		include 'connect.php';
		define('UPLPATH', 'img/');
		$id = $_GET['id'];
		$query = "SELECT * FROM vijesti WHERE arhiva=0 AND id=$id LIMIT 1";
        $result = mysqli_query($dbc, $query);
        $i=0;

		while($row = mysqli_fetch_array($result)){
			echo '<section  role="main" class="ispis">';
			echo '<div class="row">';
			echo '<h1 class="category">';
			echo $row['kategorija'];
			echo '</h1>';
			echo '<h1 class="title">';
			echo $row['naslov'];
			echo '</h1>';
			echo "<p>".'AUTOR: '."<p>";
			echo "<p>".'OBJAVLJENO: '."<p>";
			echo "<span>".$row['datum']."</span>";
			echo '</div>';
			echo '<div class="slika">';
			echo '<img src="' . UPLPATH . $row['slika'] . '"';
			echo '</div>';
			echo '<section class="about">';
			echo '<p>';
			echo nl2br($row['sazetak']);
			echo '</p>';
			echo '</section>';
			echo '<section class="sadrzaj">';
			echo '<p>';
			echo nl2br($row['tekst']);
			echo '</p>';
			echo '</section>';
			echo '</section>';
		}
		mysqli_close($dbc);
	?>
	
</body>
</html>