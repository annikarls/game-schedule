<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
$allGames = getGames($connection);
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">

<?php
while ($row = mysqli_fetch_array($allGames)) {
    ?>
    <p class="is-size-3"><?php echo $row['gameDate']; ?> <?php echo $row['gameTime']; ?></p>
    <?php
    $gameId = $row['gameId'];
    $allTeamGames = getGameTeam($connection, $gameId);
    while ($rowt = mysqli_fetch_array($allTeamGames)) {
        ?>
        <?php echo $rowt['teamName']; ?>
        <?php
    }
}
?>

<p><a href="index.php">Tillbaka</a></p>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>