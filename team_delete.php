<?php
require("includes/header_loggedin.php");

if (isset($_GET['deleteid']) && $_GET['deleteid'] > 0 ) {
    $isDeleteid = $_GET['deleteid'];
}

if (isset($_POST['isdeleteid']) && $_POST['isdeleteid'] > 0 ) {
    deleteTeam($connection, $_POST['isdeleteid']);
    header("Location: team_read.php");
}

?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<h1 class="title">Ta bort</h1>
<form action="team_delete.php" method="post">
    <input type="hidden" name="isdeleteid" value="<?php echo $isDeleteid; ?>">
    <label class="label">Vill du verkligen ta bort detta lag?</label>
    <input class="button" type="submit" value="OK">
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