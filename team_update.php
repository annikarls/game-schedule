<?php
require("includes/header_loggedin.php");

if (isset($_GET['editid']) && $_GET['editid'] > 0) {
    $teamData = getTeamData($connection, $_GET['editid']);
}

if (isset($_POST['updateid']) && $_POST['updateid'] > 0) {
    editTeam($connection);
    header("Location: team_update.php?editid=".$_POST['updateid']);
}

?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<h1 class="title">Redigera <?php echo $teamData['teamName']; ?></h1>
<form action="team_update.php" method="post">
    <input type="hidden" name="updateid" value="<?php echo $teamData['teamId']; ?>">
    <div class="field">
    <label class="label">Namn:</label>
    <input type="text" name="teamname" value="<?php echo $teamData['teamName']; ?>">
    </div>
    <input class="button" type="submit" value="Uppdatera">
</form>
<a href="team_read.php">Tillbaka</a>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>