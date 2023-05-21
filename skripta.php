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
	<section  role="main" class="ispis">
		<div class="row">
			<h1 class="category"><?php
				if(isset($_POST['category'])){
					$category  =  $_POST['category'];
					echo  $category;
				}
			?></h1>
			<h1 class="title"><?php
				if(isset($_POST['title'])){
					$title  =  $_POST['title'];
					echo  $title;
				}
			?></h1>
			<p>AUTOR:</p>
			<p>OBJAVLJENO:</p>
		</div>
		<div class="slika">
		<?php
			if(isset($_POST['pphoto'])){
				$pphoto  =  $_POST['pphoto'];
				echo  "<img src='Slike/$pphoto'";
				echo 'HALOOOOOOOOOOOOOOO';
			}
		?>
		</div>
		<section class="about">
			<p>
				<?php
					if(isset($_POST['about'])){
						$about  =  $_POST['about'];
						echo  nl2br($about);
					}
				?>
			</p>
		</section>
		<section class="sadrzaj">
			<p>
				<?php
					if(isset($_POST['content'])){
						$content  =  $_POST['content'];
						echo  nl2br($content);
					}
				?>
			</p>
		</section>
	</section>
	
	<?php
		/* include 'connect.php'

		$picture = $_FILES['pphoto']['name'];
		$title=$_POST['title'];
		$about=$_POST['about'];
		$content=$_POST['content'];
		$category=$_POST['category'];
		$date=date('d.m.Y.');

		if(isset($_POST['archive'])){
			$archive = 1;
		}else{
			$archive = 0;
		}
		$target_dir = 'img/'.$picture;
		move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);

		$query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES ('$date', '$title', '$about', '$content'. '$picture', '$category', '$archive')";
		$result = mysqli_query($dbc, $query) or die('Error querying database.');
		mysqli_close($dbc); */
	?>

	
</body>
</html>