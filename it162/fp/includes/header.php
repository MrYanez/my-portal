<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <title>CarlosBeauty Maquillista</title>
     <title><?=$title?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">This is Boostrap and added after I created my php pages, rename index.html to index.php-->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
        <div class="header"><h1><strong>CarlosBeauty Maquillista</strong></h1>
            <!--<img src="images/header_logo.jpg" alt="">-->
            <div class="header_icons">
                <!-- Add font awesome icons -->
                    <a href="https://www.facebook.com/share/1GHHDUiW1p/?mibextid=LQQJ4d" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-snapchat-ghost"></a>
                    <a href="https://www.instagram.com/ccarlosbeauty/?igsh=MTdwMXhmbGlnaTFqcw%3D%3D" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="https://nahyan.dreamhosters.com/it162/fp/index.php">
                        <p><img src="./images/header_logo.jpg" a href="https://nahyan.dreamhosters.com/it162/fp/index.php" alt="Clickable Image">
                        </p>
                    </a>
            </div>
        </div>

     <header>
        <h2><i class="logo fa <?=$logo?>"></i></h2>
        <nav class="topnav" id="myTopnav">
      
            <a href="https://nahyan.dreamhosters.com/it162/fp/index.php" class="active">Inicio</a>
            <a href="https://nahyan.dreamhosters.com/it162/fp/about.php" target="blank">Acerca</a>
            <a href="https://nahyan.dreamhosters.com/it162/fp/gallery.php" target="_blank">Galería</a>
            <a href="https://nahyan.dreamhosters.com/it162/fp/services.php" target="_blank">Servicios</a>
            <a href="https://nahyan.dreamhosters.com/it162/fp/contact.php" target="_blank">Contacto</a>
            
            <?=makeLinks($nav1)?> <!-- this is linked to the functions.php file, which created additional nav boxes for additional pages-->
            <!--<a href="index.php" class="active">Home</a>-->

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>


   <main class="wrapper">

    <!--<h2 class="subheader"><?=$title?></h2>-->
    <!--<h2 class="subheader"><?=$PageID?></h2>-->
    <!--header ends here-->
