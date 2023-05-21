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
                    <li><a href="kategorija.php?id=sport" class="">Sport</a></li> 
                    <li><a href="kategorija.php?id=hrana" class="">Hrana</a></li> 
                    <li><a href="administracija.php">Administracija</a></li>  
                    <li><a href="unos.php">Unos</a></li>  
                    <li><a href="registracija.php">Registracija</a></li>  
                    <li><a href="prijava.php">Prijava</a></li>  
                </ul>
            </nav>
        </header>
        <main class="umain">
            <div class="alajn">
                
                <form enctype="multipart/form-data" action="" method="POST"  name="unosForma">
                    <div  class="form-item">
                        <label  for="title">Naslov vijesti:</label>
                        <div  class="form-field">
                        <input  type="text"  name  =  "title"  class="form-field-textual" id="title"></br>
                        <span id="porukaTitle" class="bojaPoruke"></span>
                    </div>
                        
                    </div>
                    <div  class="form-item">
                        <label  for="about">Kratki sadržaj vijesti:</label>
                        <div  class="form-field">
                            <textarea  name =  "about"  id="about"  cols  = "60"  rows  =  "15"  class="form-field-textual"></textarea></br>
                            <span id = "porukaAbout" class="bojaPoruke"></span>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="content">Sadržaj  vijesti:</label>
                        <div class="form-field">
                            <textarea  name="content"  id="content"  cols="60"  rows="15"  class="form-field-textual"></textarea></br>
                            <span id = "porukaContent" class="bojaPoruke"></span>
                        </div>
                    </div>
                    <div class="form-item">
                        <label  for="pphoto">Slika: <label>
                        <div  class="form-field">
                            <input type="file" id = "pphoto"  accept="image/jpg,image/gif,image/png,image/jpeg" class="input-text" name="pphoto"/></br>
                            <span id="porukaSlika" class="bojaPoruke"></span>
                        </div>
                    </div>
                    <div class="form-item">
                        <label  for="category">Kategorija vijesti:</label>
                        <div class="form-field">
                            <select  name="category"  id="kat"  class="form-field-textual"></br>
                                <option value="" disabled selected>Odabir kategorije</option>
                                <option value="sport">Sport</option>
                                <option value="hrana">Hrana</option>
                                <option value="kultura">Kultura</option>
                                <option value="politika">Politika</option>
                            </select>
                            <span id="porukaKategorija" class="bojaPoruke"></span>
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
                        <button type="submit"  value="Prihvati" class="btn1" id="slanje">Prihvati</button>
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

    <script type="text/javascript">

    document.getElementById("slanje").onclick = function(event){
        var slanjeForme = true;

        var poljeTitle = document.getElementById("title");
        var title = document.getElementById("title").value;
        if (title.length < 5 || title.length > 30) {
            slanjeForme = false;
            poljeTitle.style.border="2px dashed red";
            document.getElementById("porukaTitle").innerHTML="Naslov vjesti mora imati između 5 i 30 znakova!<br>";
        } 
        else {
            poljeTitle.style.border="2px solid green";
            document.getElementById("porukaAbout").innerHTML="";
        }
        
        var poljeAbout = document.getElementById("about");
        var about = document.getElementById("about").value;
        if (about.length < 10 || about.length > 100) {
            slanjeForme = false;
            poljeAbout.style.border="2px dashed red";
            document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
        }
        else {
            poljeAbout.style.border="2px solid green";
            document.getElementById("porukaAbout").innerHTML="";
        }

        var poljeContent = document.getElementById("content");
        var content = document.getElementById("content").value;
        if (content.length == 0) {
            slanjeForme = false;
            poljeContent.style.border="2px dashed red";
            document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
        }
        else{
            poljeContent.style.border="2px solid green";
            document.getElementById("porukaContent").innerHTML="";
        }

        var poljeSlika = document.getElementById("pphoto");
        var pphoto = document.getElementById("pphoto").value;
        if (pphoto.length == 0) {
            slanjeForme = false;
            poljeSlika.style.border="2px dashed red";
            document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
        }
        else{
            poljeSlika.style.border="2px solid green";
            document.getElementById("porukaSlika").innerHTML="";
        }
        

        var poljeCategory = document.getElementById("kat");
        if(document.getElementById("kat").selectedIndex == 0) {
            slanjeForme = false;
            poljeCategory.style.border="2px dashed red";
            document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
        }
        else{
            poljeCategory.style.border="2px solid green";
            document.getElementById("porukaKategorija").innerHTML="";
        }

        if (slanjeForme != true) {
            event.preventDefault();
        }
        
    };
    </script>

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