<?php
include "connection.php";
if(isset($_POST["submit"])){
    $id=$_POST["Id"];
    $fname = $_POST["Firstname"];
    $lname = $_POST["Lastname"];
    $age = $_POST["Age"];
    $salary = $_POST["Salary"];
    $depart =$_POST["Department"];
    $address = $_POST["Address"];


    $sqlcommand = "INSERT into employee(ID, Firstname, Lastname,Age, salary, Department, Address)
    values('$id','$fname','$lname','$age','$salary','$depart','$address')";
    $result =$dbconnection->query($sqlcommand);
    if($result){
        echo "one user has been registered";
    }
    else{
        echo $dbconnection->connetion_error;
    }
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shaqale</title>
    <link rel ="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel ="stylesheet" href="style.css">
   
 
</head>
<body>
    <div class="nav_side">
        <ul>
            <li><a href="dashboard.php"><iconify-icon icon="material-symbols:dashboard"></iconify-icon> Dashboard</a></li>
            <li><a href="list.php"><iconify-icon icon="material-symbols:person"></iconify-icon>Employee</a></li>
            <li><a href="#"><iconify-icon icon="ri:money-dollar-circle-line"></iconify-icon> Salary</a></li>
            <li><a href="#"><iconify-icon icon="material-symbols:format-align-left"></iconify-icon> Leave</a></li>
            <li><a href="#"><iconify-icon icon="ri:bank-line"></iconify-icon>Department</a></li>
            <li><a href="logout.php.0"><iconify-icon icon="ic:baseline-log-out"></iconify-icon> Logout</a></li>
        </ul>

</div>
<div class="main">
    <h1>This is form for employee</h1>
    <form method ="POST">
    <input type="number" placeholder ="Enter ID" required name = "Id"><br><br>
    <input type="text" placeholder ="Enter Firstname" required name = "Firstname"><br><br>
    <input type="text" placeholder ="Enter Lastname"  required name = "Lastname"><br><br>
    <input type="number" placeholder ="Enter Age" required name = "Age" ><br><br>
    <input type="number" placeholder ="Enter Salary" required name = "Salary"><br><br>
    <input type="text" placeholder ="Enter Departement" required name = "Department"><br><br>
    <input type="text" placeholder ="Enter Address" required name = "Address"><br><br>
    <input type="submit"  value = "save"class= "btn"  required name = "submit" >
</form>
</div>
    
</body>
</html>