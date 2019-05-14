<?php
session_start();
unset($_SESSION['status']);
session_destroy();
require("includes/header.php");
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
    <h1 class="title">Du är nu utloggad</h1>
    <p><a href="login_page.php">Logga in</a></p>
    <p><a href="index.php">Startsida</a></p>
    </div>
</div>
</section>
</body>
</html>