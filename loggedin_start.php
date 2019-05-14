<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header_loggedin.php");
?>
<section class="hero is-fullheight">
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