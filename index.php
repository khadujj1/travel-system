<?php
include "connection.php";
if(isset($_POST["loginBtn"])){
    $username = $_POST["username"];
    $password = $_POST["Password"];
    $checkquery ="select * from admin where username = '$username' and password = '$password' ";
    $result = $dbconnection->query($checkquery);
    $row =mysqli_num_rows($result);
    if($row < 1){
        echo "username or password incorrect";
    }
    else{
        $_SESSION["username"] =$username;
        header ("Location:dashboard.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM_SYSTEM</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class ="LoginForm">
    <h1>Login Here</h1>
    <form method ="POST">
        <input type="text" placeholder="Enter Username" required name="username" autocomplate="off" autofocus><br><br>
        <input type="Password" placeholder="Enter Password" name="Password"><br><br>
        <input type="Submit" value="LogIn" name="loginBtn" class="loginbtn">

    </form>
</div>


</body>
</html>