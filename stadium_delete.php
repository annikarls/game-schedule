<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();

if (isset($_GET['deleteid']) && $_GET['deleteid'] > 0 ) {
    $isDeleteid = $_GET['deleteid'];
}

if (isset($_POST['isdeleteid']) && $_POST['isdeleteid'] > 0 ) {
    deleteStadium($connection, $_POST['isdeleteid']);
    header("Location: stadium_read.php");
}
require("includes/header.php");
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
<h1 class="title">Ta bort</h1>
<form action="stadium_delete.php" method="post">
    <input type="hidden" name="isdeleteid" value="<?php echo $isDeleteid; ?>">
    <label class="label">Vill du verkligen ta bort denna arena?</label>
    <input class="button" type="submit" value="JA">
</form>
<a href="stadium_read.php">Tillbaka</a>
</div>
</div>
</section>
<?php
dbDisconnect($connection);
?>
</body>
</html>