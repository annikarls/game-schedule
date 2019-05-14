<?php
require("includes/header.php");
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
    <h1 class="title">Logga in</h1>
<form action="checklogin.php" method="post">
    <div class="field">
    <label class="label">Email:</label>
    <input type="email" name="email">
    </div>
    <div class="field">
    <label class="label">Lösenord:</label>
    <input type="password" name="password">
    </div>
    <div class="field">
    <input class="button" type="submit" value="Logga in">
    </div>
</form>
</div>
</div>
</section>
</body>
</html>