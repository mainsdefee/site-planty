<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>planty</title>
    <!--indiquer  la feuille css/theme.css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/css/theme.css"; ?> ">
  </head>
  <body>
    <!--En tête de la page avec le logo et la barre de navigation-->
    <header>
      <nav>
        <div>
        <img src="<?= get_stylesheet_directory_uri()."/images/logo.png";?>">
        </div>
        <ul>
          <li>
            <a href="#">Nous rencontrer</a>
          </li>
          <li>
            <a href="#">Admin</a>
          </li>
          <div class="commander">
          <li>
            <a  href="#">Commander</a>
          </li>
          </div>
        </ul>
       
      </nav>