<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
?>
<section class="hero is-fullheight">
<div class="hero-body">
  <div class="container has-text-centered">
    <h1 class="title">Spelschema</h1>
  </div>
  <div class="container has-text-centered">
    <h1 class="title"><a href="team_read.php">Lag</a></h1>
  </div>
</div>
</section>
    <?php
   dbDisconnect($connection);
   ?>
</body>
</html>