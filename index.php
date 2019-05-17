<?php
require("includes/header.php");
$allGames = getGames($connection);
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">

<?php
while ($row = mysqli_fetch_array($allGames)) {
    ?>
    <p class="is-size-4"><i class="fas fa-calendar"></i> 
    <?php echo $row['gameDate']; ?> 
    <?php echo $row['gameTime']; ?>
    <?php echo $row['stadiumName']; ?>
    </p>
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