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
        $stmt = $conn -> prepare("SELECT username, password FROM users WHERE username = ? AND password = ?");
        $stmt-> bindValue(1, $user, PDO::PARAM_STR);
        $stmt-> bindValue(2, $password, PDO::PARAM_STR);
        var_export($stmt);
        $stmt -> execute();
        
       // $stmt -> fetchAll();
        $arr = $stmt->fetchAll();
        if(!$arr) exit('No rows');
        var_export($arr);
        $stmt = null;
    }
    /*
        To inject use: ' or '1'='1 
        in each blank space.
    */
?>
</body>
</html>
