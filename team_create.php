<?php
require 'Preferences.php';
require 'PreferencesUser.php';
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
$getUserEmail = getUserEmail($connection);
$preferencesUser  = new PreferencesUser('footer', $getUserEmail);
if (isset($_POST['isnew']) && $_POST['isnew'] ==1 ) {
    $addTeam = addTeam($connection);
}
require("includes/header_loggedin.php");
?>
<section class="hero is-fullheight">
<?php $preferencesUser->showFooter(); ?>
<div class="hero-body">
<div class="container has-text-centered">
<h1 class="title">Lägg till lag</h1>
<form action="team_create.php" method="post">
    <input type="hidden" name="isnew" value="1">
    <div class="field">
    <label class="label">Namn:</label>
    <input type="text" name="teamname">
    </div>
    <input class="button" type="submit" value="Lägg till">
</form>
<a href="loggedin_start.php">Tillbaka</a>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>