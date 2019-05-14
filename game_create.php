<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
?>
<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">
 <h1 class="title">Lägg till match</h1>   
 <form action="game_create.php" method="post">
     <input type="hidden" name="isnew" value="1">
     <div class="field">
     <label class="label">Lag:</label>
     <div class="select">
     <select name="team1">
         <?php        
        $query = "SELECT * FROM team ORDER BY teamName ASC";
        $result = mysqli_query($connection, $query);
         while ($rows = mysqli_fetch_array($result)) {
             $teamName1 = $rows['teamName'];
             echo "<option value='$teamName1'>$teamName1</option>";
         }
         ?>
     </select>
     </div>
     -
     <div class="select">
     <select name="team2">
     <?php
     $query = "SELECT * FROM team ORDER BY teamName ASC";
     $result = mysqli_query($connection, $query);
         while ($rows = mysqli_fetch_array($result)) {
             $teamName2 = $rows['teamName'];
             echo "<option value='$teamName2'>$teamName2</option>";
         }
         ?>
     </select>
     </div>
     </div>
     <div class="field">
     <label class="label">Datum:</label>
     <div class="control">
     <p><input class="input" type="date" name="date"></p>
     </div>
     </div>
     <div class="field">
     <label class="label">Tid:</label>
     <div class="control">
     <p><input class="input" type="time" name="time"></p>
     </div>
     </div>
     <div class="field">
     <label class="label">Arena:</label>
         <div class="select">
     <select name="stadium">
         <?php
         $query = "SELECT * FROM stadium ORDER BY stadiumName ASC";
         $result = mysqli_query($connection, $query);
             while ($rows = mysqli_fetch_array($result)) {
                 $stadiumName = $rows['stadiumName'];
                 echo "<option value='$stadiumName'>$stadiumName</option>";
             }
            ?>
     </select>
     </div>
     </div>
     <p><input class="button" type="submit" value="Lägg till"></p>
 </form>
 <p>
     <a href="loggedin_start.php">Tillbaka</a></p>
</div>
</div>
</section>
</body>
</html>