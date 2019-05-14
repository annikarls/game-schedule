<?php
session_start();
unset($_SESSION['status']);
session_destroy();
require("includes/header.php");
?>
    <h1>Du är nu utloggad</h1>
    <p><a href="login_page.php">Logga in</a></p>
    <p><a href="index.php">Startsida</a></p>
</body>
</html>