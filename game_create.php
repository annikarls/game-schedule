<?php
require 'Preferences.php';
require 'PreferencesUser.php';
session_start();
require("includes/conn.php");
require("includes/functions.php");

$connection = dbConnect();
$getUserEmail = getUserEmail($connection);
$preferencesUser  = new PreferencesUser('footer', $getUserEmail);
require("includes/header_loggedin.php");


if (isset($_POST['isnew']) && $_POST['isnew'] == 1) {
    saveGameTeam($connection);
    //header("Location: team_update.php?editid=".$_POST['updateid']);
}
?>
<section class="hero is-fullheight">
<?php $preferencesUser->showFooter(); ?>
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
            $teamId1 = $rows['teamId'];
             $teamName1 = $rows['teamName'];
             echo "<option value='$teamId1'>$teamName1</option>";
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
             $teamId2 = $rows['teamId'];
             echo "<option value='$teamId2'>$teamName2</option>";
         }
         ?>
     </select>
     </div>
     </div>
     
     <label class="label">Datum:</label>
     <p><input type="date" name="gamedate"></p>
     <label class="label">Tid:</label>
     <p><input type="time" name="gametime"></p>
     <div class="field">
     <label class="label">Arena:</label>
         <div class="select">
     <select name="gamestadium">
         <?php
         $query = "SELECT * FROM stadium ORDER BY stadiumName ASC";
         $result = mysqli_query($connection, $query);
             while ($rows = mysqli_fetch_array($result)) {
                 $stadiumName = $rows['stadiumName'];
                 $stadiumId = $rows['stadiumId'];
                 echo "<option value='$stadiumId'>$stadiumName</option>";
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