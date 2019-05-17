<?php
require("includes/header.php");
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