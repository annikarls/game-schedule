<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();

if (isset($_POST['isnew']) && $_POST['isnew'] ==1 ) {
    $addTeam = addTeam($connection);
}
require("includes/header.php");
?>
<h1>Lägg till lag</h1>
<form action="team_create.php" method="post">
    <input type="hidden" name="isnew" value="1">
    <label>Namn:</label>
    <p><input type="text" name="teamname"></p>
    <p><input type="submit" value="Lägg till"></p>
</form>
<p><a href="loggedin_start.php">Tillbaka</a></p>
<?php
dbDisconnect($connection);
?>
</body>
</html>