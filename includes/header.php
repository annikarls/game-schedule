<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Work+Sans|Open+Sans" rel="stylesheet"> 
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Damallsvenskan</title>
</head>
<body>
<section class="hero is-medium">
  <div class="hero-head">
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">Hem</a>
    <a class="navbar-item" href="login_page.php">Logga in</a>

    
    <a role="button" class="navbar-burger burger" 
              onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    </div>

    <div class="navbar-end">
    <a class="navbar-item" href="game_read.php">Spelschema</a>
    <a class="navbar-item" href="team_read.php">Lag</a>
    <a class="navbar-item" href="stadium_read.php">Arenor</a>
    </div>
  </div>
</nav>