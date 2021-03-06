<?php
require 'Preferences.php';
require 'PreferencesUser.php';
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
$getUserEmail = getUserEmail($connection);
$preferencesUser  = new PreferencesUser('footer', $getUserEmail);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Labb2 spelschema</title>
</head>
<body>
<section class="hero is-medium">
  <div class="hero-head">
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
  <p class="navbar-item"><?php $preferencesUser->showFooter(); ?></p>

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
    <a class="navbar-item" href="logout.php">Logga ut</a>
    </div>
  </div>
</nav>
