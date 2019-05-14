<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();

if (isset($_GET['editid']) && $_GET['editid'] > 0) {
    $stadiumData = getStadiumData($connection, $_GET['editid']);
}

if (isset($_POST['updateid']) && $_POST['updateid'] > 0) {
    editStadium($connection);
    header("Location: stadium_update.php?editid=".$_POST['updateid']);
}
require("includes/header.php");
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<h1 class="title">Redigera <?php echo $stadiumData['stadiumName']; ?></h1>
<form action="stadium_update.php" method="post">
    <input type="hidden" name="updateid" value="<?php echo $stadiumData['stadiumId']; ?>">
    <div class="field">
    <label class="label">Namn:</label>
    <input type="text" name="stadiumname" value="<?php echo $stadiumData['stadiumName']; ?>">
    </div>
    <input class="button" type="submit" value="Uppdatera">
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