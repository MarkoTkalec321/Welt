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

    <body class="abody">
    <!-- <div class="atest"> -->
    <header class="aheader">
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
                    <li><a href="registracija.php">Registracija</a></li>  
                    <li><a href="prijava.php">Prijava</a></li>  
                </ul>
               
            </nav>
        </header>

    <?php
        
        include 'connect.php';
        define('UPLPATH', 'img/');
        
        $query = "SELECT * FROM vijesti";
        $result = mysqli_query($dbc, $query);

        session_start();
        $admin1 = 0;
        $name = "defaultNULL";

        if (isset($_SESSION['username'])){
            $name = $_SESSION["username"];
        }
        if (isset($_SESSION['razina'])){
            $admin1 = $_SESSION["razina"];
        }

        echo $admin1;
        if($admin1 == 1){
            while($row = mysqli_fetch_array($result)) {
                echo '<div class="aform">
                <form enctype="multipart/form-data" action="" method="POST" name="aform">
                <div class="aform-item">
                    <label for="title">Naslov vjesti:</label>
                <div class="form-field">
                    <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'">
                </div>
                </div>
                <div class="aform-item">
                    <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label>
                <div class="form-field">
                    <textarea name="about" id="" cols="30" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea>
                    </div>
                    </div>
                <div class="aform-item">
                    <label for="content">Sadržaj vijesti:</label>
                <div class="form-field">
                <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea>
                </div>
                </div>
                <div class="aform-item">
                    <label for="pphoto">Slika:</label>
                <div class="form-field">
                <input type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto"/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px>
                </div>
                </div>
                <div class="aform-item">
                    <label for="category">Kategorija vijesti:</label>
                <div class="form-field">
                    <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
                    <option value="sport">Sport</option>
                    <option value="hrana">Hrana</option>
                    <option value="kultura">Kultura</option>
                    <option value="politika">Politika</option>
                </select>
                </div>
                </div>
                <div class="aform-item">
                    <label>Spremiti u arhivu:
                <div class="form-field">';
                    if($row['arhiva'] == 0) {
                        echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';
                    }else {
                        echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
                    }

                    echo '</div>
                    </label>
                    <div class="aaform-item">
                    <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
                    <button type="reset" value="Poništi" class="btn3">Poništi</button>
                    <button type="submit" name="update" value="Prihvati" class="btn3">Izmjeni</button>
                    <button type="submit" name="delete" value="Izbriši" class="btn3"> Izbriši</button>
                </div>
                </div>
                
                
                </form>
                </div>';
            }
        }
        else if (isset($_SESSION['username'])!=1) {
            echo '<br>';
            echo '<div class="">';
            echo "Nemate dovoljno prava za pristup ovoj stranici";
            echo '</div>';	
        }
        else {
            echo '<br>';
            echo '<div class="">';
            echo "$name, nemate dovoljno prava za pristup ovoj stranici";
            echo '</div>';
        }
    ?>
        
    </body>

    <?php
    include 'connect.php';

        if(isset($_POST['delete'])){
            $id=$_POST['id'];
            $query = "DELETE FROM vijesti WHERE id=$id ";
            $result = mysqli_query($dbc, $query);
        }
        if(isset($_POST['update'])){
            $picture = $_FILES['pphoto']['name'];
            $title=$_POST['title'];
            $about=$_POST['about'];
            $content=$_POST['content'];
            $category=$_POST['category'];
            if(isset($_POST['archive'])){
                $archive=1;
            }else{
                $archive=0;
            }
            $target_dir = 'img/'.$picture;
            move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
            $id=$_POST['id'];
            $query = "UPDATE vijesti SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
            $result = mysqli_query($dbc, $query);
        }
        mysqli_close($dbc);
    ?>

    <footer class="afooter">
        <h1>Welt</h1>
    </footer>


</html>