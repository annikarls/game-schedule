<?php
//Registrera användare
function addUser($conn) {
    $email = escapeInsert($conn, $_POST['email']);
    $password = escapeInsert($conn, $_POST['password']);
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(userEmail, userPassword) VALUES('$email', '$passwordHash')";
    $result = mysqli_query($conn, $query) or die("Query failed: $query");
    $insId = mysqli_insert_id($conn);
    return $insId;
}

//Ta bort oönskade html-tecken samt mysqli_real_escape_string motverkar SQLInjection
function escapeInsert($conn, $insert) {
    $insert = htmlspecialchars($insert);
    $insert = mysqli_real_escape_string($conn, $insert);
    return $insert;
}

//Kontrollera inloggning
function checkUser($connection) {
    $checkUser = mysqli_real_escape_string($connection, $_POST['email']);
    $checkPassword = mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT * FROM users WHERE userEmail = '$checkUser'";
    $result = mysqli_query($connection, $query) or die("Query failed: $query");
    $row =mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        if (password_verify($checkPassword, $row["userPassword"])) {
            $_SESSION['status'] = "ok";
            //$_SESSION['userid'] = $row['userId'];
            header("Location: loggedin_start.php");
        }       
    }else {
            echo '<p>Fel lösenord och/eller email!</p>';
            echo '<p><a href="login_page.php">Försök igen</a></p>';
    }
}

//Lägga till lag
function addTeam($conn) {
    $teamName = escapeInsert($conn, $_POST['teamname']);
    $query = "INSERT INTO team (teamName) VALUES('$teamName')";
    $result = mysqli_query($conn, $query) or die("Query failed: $query");
    $insId = mysqli_insert_id($conn);
    return $insId;
}

//Visa alla lag
function getTeams($conn) {
    $query = "SELECT * FROM team ORDER BY teamName ASC";
    $result = mysqli_query($conn, $query) or die("Query failed: $query");
    return $result;
}

//Hämtar ett lag
function getTeamData($conn,$teamId){
    $query = "SELECT * FROM team
			WHERE teamId=".$teamId;

    $result = mysqli_query($conn,$query) or die("Query failed: $query");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

//Redigera lag
function editTeam($conn) {
    $teamName = escapeInsert($conn, $_POST['teamname']);
    $editid = $_POST['updateid'];
    $query = "UPDATE team SET teamName='$teamName' WHERE teamId=". $editid;
    $result = mysqli_query($conn, $query) or die("Query failed: $query");
}
?>