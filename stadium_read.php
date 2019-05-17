<?php
require("includes/header_loggedin.php");

$connection = dbConnect();
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
    <a class="button" href="stadium_update.php?editid=<?php echo $row['stadiumId'];?>">Uppdatera</a>
    <a class="button" href="stadium_delete.php?deleteid=<?php echo $row['stadiumId'];?>">Ta bort</a>
</li>
    <?php
}
?>
</ul>
<p><a href="loggedin_start.php">Tillbaka</a></p>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>