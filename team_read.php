<?php
require("includes/header_loggedin.php");
$allTeams = getTeams($connection);
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<ul>
<?php
while ($row = mysqli_fetch_array($allTeams)) {
    ?>
    <li class="is-size-3"><?php echo $row['teamName']; ?> 
    <a href="team_update.php?editid=<?php echo $row['teamId'];?>">Uppdatera</a>
    <a href="team_delete.php?deleteid=<?php echo $row['teamId'];?>">Ta bort</a>
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