<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Završni projekt</title>
        <link rel="stylesheet"  href="style.css">
        <meta name="viewport" content="-scale=1.0;  user-scalable=0;"width=device-width; initial-scale=1.0;  maximum>
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

    <body class="ibody">
        <div class="test">
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
        <main>
        <h2>Sport</h2>
        <section class="sport">
            <?php
                include 'connect.php';
                define('UPLPATH', 'img/');

                $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='sport'LIMIT 4";
                $result = mysqli_query($dbc, $query);
                $i=0;

                while($row = mysqli_fetch_array($result)){
                    echo '<article>';
                    echo '<img src="' . UPLPATH . $row['slika'] . '"/>';
                    echo '<h3 class="naslovi">';
                    echo '<h3>';
                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo $row['naslov'];
                    echo '</a>';
                    echo '</h3>';
                    echo '<p>';
                    echo $row['sazetak'];
                    echo '</p>';
                    echo '<p>';
                    echo $row['datum'];
                    echo '</p>';
                    echo '<span  class="line"></span>';
                    echo '</article>';
                }
            ?>
        </section>
        <h2>Hrana</h2>
        <section class="hrana">
            <?php


                $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='hrana'LIMIT 4";
                $result = mysqli_query($dbc, $query);
                $i=0;

                while($row = mysqli_fetch_array($result)){
                    echo '<article>';
                    echo '<img src="' . UPLPATH . $row['slika'] . '"';
                    echo '<h3 class="naslovi">';
                    echo '<h3>';
                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo $row['naslov'];
                    echo '</a>';
                    echo '</h3>';
                    echo '<p>';
                    echo $row['sazetak'];
                    echo '</p>';
                    echo '<p>';
                    echo $row['datum'];
                    echo '</p>';
                    echo '</article>';
                }
                mysqli_close($dbc);
            ?>
        </section>

        


            <footer>
                <h1>Welt</h1>
            </footer>
        </main>
        </div>
    </body>



</html>