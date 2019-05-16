<?php
require 'Preferences.php';
require 'PreferencesUser.php';
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
//$preferencesUser  = new Preferences('footer', 'email');
require("includes/header.php");
$allGames = getGames($connection);
?>
<section class="hero is-fullheight">
<?php //$preferencesUser->showFooter(); ?>
<div class="hero-body">
<div class="container has-text-centered">

<?php
while ($row = mysqli_fetch_array($allGames)) {
    ?>
    <p class="is-size-4"><i class="fas fa-calendar"></i> <?php echo $row['gameDate']; ?> 
    <?php echo $row['gameTime']; ?></p>
    <?php
    $gameId = $row['gameId'];
    $allTeamGames = getGameTeam($connection, $gameId);

    while ($rowt = mysqli_fetch_array($allTeamGames)) {
        ?>
        <p class="is-size-5"><?php echo $rowt['teamName']; ?></p>
        <?php
    }
}
?>
</div>
</div>
</section>
    <?php
   dbDisconnect($connection);
   ?>
</body>
</html>