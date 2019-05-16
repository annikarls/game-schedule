<?php
session_start();
require("includes/header.php");
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();

?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
    <?php checkUser($connection); ?>
    </div>
</div>
</section>
<?php
   dbDisconnect($connection);
   ?>
</body>
</html>