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

    <body class="kbody">
        <div class="test2">
			<header>
				<div class="naslov">
					<h1>
						WELT
					</h1>
				</div>
				<nav>
					<div class="kline2"></div>
					<ul>
					<li><a href="index.php">Početna</a></li>
                    <li><a href="kategorija.php?id=sport">Sport</a></li> 
                    <li><a href="kategorija.php?id=hrana">Hrana</a></li> 
                    <li><a href="administracija.php">Administracija</a></li>  
                    <li><a href="unos.php">Unos</a></li>  
					</ul>
				
				</nav>
			</header>

			<main class="kmain">
				<h2>Beruf & karriere</h2>
				<div class="line3"></div>
				<h1 class="h1kat">
				Für Fußball-Fans soll sich der Abo-Dschungel lichten
				</h1>
				<p>Stand: 16.05.2019</p>
				<img src="slike/bundesliga.jpg" alt="bundesliga"/>

				<article>
					<p>
						Signifikante Neuerungen sollen demnachst in der Ersten und Zweiten Bundesliga greifen: Demnach werden die Montagsspiele abgeschafft.
						Stattdessen wird samstags und sonntags gespielt. 
						Fans konnten zudem bald wieder alle Spiele bei einem Sender empfangen. 
					</p>
				</article>

				<article>
					<p>
						Von der Saison zon an soil es wieder moglich sein, dass ein Pay-TV-Sender alle Spiele der FuBball-Bundesliga im Angebot hat.
						Das sieht ein Entwurf der Deutschen FuBball Liga (DFL) far die Ausschreibung der Medienrechte vor, Uber den das Fachmagazin „Sponsors" berichtet.
						Die DFL wollte den Bericht am Donnerstag nicht kommentieren. 
						Derzeit benotigen FuBballfans Abonnements von Sky und Eurosport, urn alle Live-libertragungen schauen zu konnen. 
						Dies gilt noch ftir die zwei kommenden Spielzeiten. 
					</p>
				</article>

				<article>
					<p>
					Die DFL muss such die neue Ausschreibung mit dem Bundeskartellamt abstimmen. 
					Dicscr Prozess lauft dcrzeit.
					 Dic Vorgabcn dcr Bchtirdc batten es beim bishcr letzten Verkauf der Rechte unmoglich gemacht, 
					 dass tin Pay-Anbieter die Live-Rechte komplett erwerben konnte. Diese Klausel, 
					 No-Single-Buyer-Rule genannt, machte die DFL kippen. 
					</p>
				</aricle>

				<article>
					<p>
					„Hier steht der Wunsch des Bundeskartellamts nach mehr Konkurrenz unserem Wunsch nach hoher Kundenzufriedenheit entgegen", 
					hate DFL-Geschaftsfiihrer Christian Seifert dazu vor ein paar Wochen in der „Stkldeutschen Zeitung" gesagt: „Ich setze ein groBes Fragezeichen dahinter, 
					ob wir wieder eine No-Single-Buyer-Bagel brauchen." 
					</p>
				</article>

				<footer>
					<h1>Welt</h1>
				</footer>
			</main>
    </div>
    </body>

	<?php
        include 'connect.php';
        define('UPLPATH', 'img/');
    ?>
    <section class="sport">
    <?php

	
        $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='sport' LIMIT 4";
        $result = mysqli_query($dbc, $query);
            $i=0;
            while($row = mysqli_fetch_array($result)){
                echo '<article>';
                    echo '<div class="article">';
                    echo '<div class="sport_img">';
                    echo '<img src="' . UPLPATH . $row['slika'] . '"';
                    echo '</div>';
                    echo '<div class="media_body">';
                    echo '<h4 class="title">';
                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo $row['naslov'];
                    echo '</a></h4>';
                    echo '</div></div>';
                    echo '</article>';
            }
    ?>
    </section>
    <section class="hrana">
    <?php
        $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='hrana' LIMIT 4";
        $result = mysqli_query($dbc, $query);
            $i=0;
            while($row = mysqli_fetch_array($result)){
                echo '<article>';
                    echo '<div class="article">';
                    echo '<div class="sport_img">';
                    echo '<img src="' . UPLPATH . $row['slika'] . '"';
                    echo '</div>';
                    echo '<div class="media_body">';
                    echo '<h4 class="title">';
                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo $row['naslov'];
                    echo '</a></h4>';
                    echo '</div></div>';
                    echo '</article>';
            }
    ?>
    </section>

</html>