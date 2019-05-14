<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
$allTeams = getTeams($connection);
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<ul>
<?php
while ($row = mysqli_fetch_array($allTeams)) {
    ?>
    <li class="is-size-3"><?php echo $row['teamName']; ?> <a href="team_update.php?editid=<?php echo $row['teamId'];?>">Uppdatera</a></li>
    <?php
}
?>
</ul>
<p><a href="index.php.php">Tillbaka</a></p>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>