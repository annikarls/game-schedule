<?php
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();

if (isset($_POST['isnew']) && $_POST['isnew'] == 1) {
    $saveUser = addUser($connection);
    header("Location: login_page.php");
}
require("includes/header.php");
?>
   <form action="user_create.php" method="post">
        <input type="hidden" name="isnew" id="isnew" value="1">
        <label>Email:</label>
        <p><input type="email" name="email"></p>
        <label>Lösenord:</label>
        <p><input type="password" name="password"></p>
        <p><input type="submit" value="Registrera"></p>
   </form>
   <?php
   dbDisconnect($connection);
   ?>
</body>
</html>