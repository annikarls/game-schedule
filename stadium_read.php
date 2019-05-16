<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
$allStadiums = getStadiums($connection);
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<ul>
<?php
while ($row = mysqli_fetch_array($allStadiums)) {
    ?>
    <li class="is-size-3"><?php echo $row['stadiumName']; ?> 
    <a href="stadium_update.php?editid=<?php echo $row['stadiumId'];?>">Uppdatera</a>
    <a href="stadium_delete.php?deleteid=<?php echo $row['stadiumId'];?>">Ta bort</a>
</li>
    <?php
}
?>
</ul>
<p><a href="index.php">Tillbaka</a></p>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>