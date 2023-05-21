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

    <body class="ubody">
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
                    <li><a href="kategorija.php?id=sport">Sport</a></li> 
                    <li><a href="kategorija.php?id=hrana">Hrana</a></li> 
                    <li><a href="administracija.php">Administracija</a></li>  
                    <li><a href="unos.php">Unos</a></li>  
                </ul>
            </nav>
        </header>
        <main class="umain">
            <div class="alajn">
                
                <form enctype="multipart/form-data" action="" method="POST"  name="unosForma">
                    <div  class="form-item">
                        <label  for="title">Naslov vijesti:</label>
                        <div  class="form-field">
                        <input  type="text"  name  =  "title"  class="form-field-textual">
                        </div>
                    </div>
                    <div  class="form-item">
                        <label  for="about">Kratki sadržaj vijesti:</label>
                        <div  class="form-field">
                            <textarea  name =  "about"  id=""  cols  = "60"  rows  =  "15"  class="form-field-textual"></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="content">Sadržaj  vijesti:</label>
                        <div class="form-field">
                            <textarea  name="content"  id=""  cols="60"  rows="15"  class="form-field-textual"></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <label  for="pphoto">Slika: <label>
                        <div  class="form-field">
                            <input type="file"  accept="image/jpg,image/gif,image/png,image/jpeg" class="input-text" name="pphoto"/>
                        </div>
                    </div>
                    <div class="form-item">
                        <label  for="category">Kategorija vijesti:</label>
                        <div class="form-field">
                            <select  name="category"  id="kat"  class="form-field-textual">
                                <option value="sport">Sport</option>
                                <option value="hrana">Hrana</option>
                                <option value="kultura">Kultura</option>
                                <option value="politika">Politika</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-item">
                        <label>Spremiti u arhivu:
                            <div class="form-field">
                                <input  type="checkbox"  name="archive">
                            </div>
                        </label>
                    </div>
                    <div class="form-item">
                        <button type="submit"  value="Prihvati" class="btn1">Prihvati</button>
                        <button  type="reset"  value="Poništi" class="btn2">Poništi</button>
                    </div>
                </form>
            </div>
        
            <footer>
                <h1>Welt</h1>
            </footer>
        </main>
        

        </div>
    </body>

    <?php
		include 'connect.php';

        if(isset($_POST['category']) && isset($_POST['title']) && isset($_FILES['pphoto']['name']) && isset($_POST['about']) && isset($_POST['content'])){
            $category  =  $_POST['category'];
            $date = date('d.m.Y.'); 
            $title = $_POST['title'];
            $picture = $_FILES['pphoto']['name'];
            $about = $_POST['about'];
            $content = $_POST['content'];
            

		if(isset($_POST['archive'])){
			$archive = 1;
		}else{
			$archive = 0;
		}

		$target_dir = 'img/'.$picture;
		move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
        
        //$query = "INSERT INTO testiranje(naslov, kategorija, kratki, slika) VALUES ('$title', '$category', '$about', $picture)";
		$query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$archive')";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');
        }

		mysqli_close($dbc);
	?>


</html>