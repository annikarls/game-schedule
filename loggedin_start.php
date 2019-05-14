<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
?>
    <p><a href="team_create.php"><button>Lägg till lag</button></a></p>
    <p><a href="game_create.php"><button>Lägg till match</button></a></p>
    <p><a href="arena_create.php"><button>Lägg till arena</button></a></p>
<?php
dbDisconnect($connection);
?>
</body>
</html>