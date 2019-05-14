<?php
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
require("includes/header.php");
?>
 <h1>Lägg till match</h1>   
 <form action="game_create.php" method="post">
     <input type="hidden" name="isnew" value="1">
     <label>Lag:</label>
     <p><select name="team1">
         <?php        
        $query = "SELECT * FROM team ORDER BY teamName ASC";
        $result = mysqli_query($connection, $query);
         while ($rows = mysqli_fetch_array($result)) {
             $teamName1 = $rows['teamName'];
             echo "<option value='$teamName1'>$teamName1</option>";
         }
         ?>
     </select>
     -
     <select name="team2">
     <?php
     $query = "SELECT * FROM team ORDER BY teamName ASC";
     $result = mysqli_query($connection, $query);
         while ($rows = mysqli_fetch_array($result)) {
             $teamName2 = $rows['teamName'];
             echo "<option value='$teamName2'>$teamName2</option>";
         }
         ?>
     </select></p>
     <label>Datum:</label>
     <p><input type="date" name="date"></p>
     <label>Tid:</label>
     <p><input type="time" name="time"></p>
     <label>Arena:</label>
     <p><select name="stadium">
         <option value="chooseStadium">Exampelarena</option>
     </select></p>
     <p><input type="submit" value="Lägg till"></p>
 </form>
</body>
</html>