<?php
session_start();
require("includes/header.php");
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();

checkUser($connection);

   dbDisconnect($connection);
   ?>
</body>
</html>