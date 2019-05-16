<?php
require 'Preferences.php';
require 'PreferencesUser.php';
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
$getUserEmail = getUserEmail($connection);
$preferencesUser  = new PreferencesUser('footer', $getUserEmail);
require("includes/header_loggedin.php");
?>
<section class="hero is-fullheight">
<?php $preferencesUser->showFooter(); ?>
<div class="hero-body">
<div class="container has-text-centered">
    <div class="field">
    <a class="button" href="team_create.php">Lägg till lag</a>
    </div>
    <div class="field">
    <a class="button" href="game_create.php">Lägg till match</a>
    </div>
    <div class="field">
    <a class="button" href="stadium_create.php">Lägg till arena</a>
    </div>
    </div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>