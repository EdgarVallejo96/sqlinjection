<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Insecure Page</h1>
<?php require("conn.php"); ?>
<form action="" method="post">
    <label>Username</label>
    <input type="text" name="username"><br>
    <label>Password</label>
    <input type="text" name="password"><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $sqlQuery = "SELECT username, password FROM users WHERE username='$user' AND password='$password'";
        foreach($conn->query($sqlQuery) as $row){
            echo $row['username'] . "<br>" . $row['password'] . "<br>";
        }
    }
    /*
        To inject use: ' or '1'='1 
        in each blank space.
    */
?>
</body>
</html>
