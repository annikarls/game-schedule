<?php
require("includes/header.php");
?>
    <h1>Logga in</h1>
<form action="checklogin.php" method="post">
    <label>Email:</label>
    <p><input type="email" name="email"></p>
    <label>Lösenord:</label>
    <p><input type="password" name="password"></p>
    <p><input type="submit" value="Logga in"></p>
</form>
</body>
</html>