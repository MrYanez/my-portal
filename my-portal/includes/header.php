<?php include 'portal-config.php';?>
<!--This is myportal header.html-->
<!DOCTYPE html>
<html lang="en">
 <head>
     <title><?=$title?>Nahum Yanez</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"></i>Nahum Yanez</h1>
        <nav class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
            <a href="" target="_blank">Case Study</a>
            <a href="contact.php" target="_blank">Contact</a>
            <a href="" target="_blank">GitHub</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
    <!--header ends here, applied by nahum-->
    
    <!--<picture class="profile">
            <source media="(min-width: 1200px)" srcset="images/img_desktop.png">
            <source media="(min-width: 501px)" srcset="images/img_desktop.png">
            <img src="images/img_desktop.png" alt="">
        </picture>  -->
        <h2 class="subheader"><?=$PageID?></h2> 