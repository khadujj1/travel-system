 
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
<?php
if(isset($_GET["Id"])){
    $id=$_GET["Id"];
    $fname = $_GET["Firstname"];
    $lname = $_GET["Lastname"];
    $age = $_GET["Age"];
    $salary = $_GET["Salary"];
    $depart =$_GET["Department"];
    $address = $_GET["Address"];
}
?>
    <div class="nav_side">
        <ul>
            <li><a href="dashboard.php"><iconify-icon icon="material-symbols:dashboard"></iconify-icon> Dashboard</a></li>
            <li><a href="list.php"><iconify-icon icon="material-symbols:person"></iconify-icon>Employee</a></li>
            <li><a href="#"><iconify-icon icon="ri:money-dollar-circle-line"></iconify-icon> Salary</a></li>
            <li><a href="#"><iconify-icon icon="material-symbols:format-align-left"></iconify-icon> Leave</a></li>
            <li><a href="#"><iconify-icon icon="ri:bank-line"></iconify-icon>Department</a></li>
            <li><a href="#"><iconify-icon icon="ic:baseline-log-out"></iconify-icon> Logout</a></li>
        </ul>

</div>
<div class="main">
    <h1>Update for employee</h1>
    <form method ="POST">
    <input type="text" placeholder ="Enter ID"  name ="Id" value="<?php echo $id ?> "><br><br>
    <input type="text" placeholder ="Enter Firstname"  name = "Firstname"value="<?php echo $fname ?> "><br><br>
    <input type="text" placeholder ="Enter Lastname"   name = "Lastname"value="<?php echo $lname ?> "><br><br>
    <input type="text" placeholder ="Enter Age"  name = "Age"value="<?php echo $age ?> "> <br><br>
    <input type="text" placeholder ="Enter Salary"  name = "Salary"value="<?php echo $salary ?> "><br><br>
    <input type="text" placeholder ="Enter Departement"  name = "Department"value="<?php echo $depart ?> ">><br><br>
    <input type="text" placeholder ="Enter Address"  name = "Address"value="<?php echo $address ?> "><br><br>
    <input type="submit"  value = "update"class= "btn"   name = "update" >
</form>
<?php
include "connection.php";
if(isset($_POST["update"])){
    $id=$_POST["Id"];
    $fname = $_POST["Firstname"];
    $lname = $_POST["Lastname"];
    $age = $_POST["Age"];
    $salary = $_POST["Salary"];
    $depart =$_POST["Department"];
    $address = $_POST["Address"];

    $updatequery = "update employee set firstname = '$fname', lastname = '$lname', age = '$age',salary = '$salary',Department = '$depart',address = '$address' where Id = '$id'";


    $result=$dbconnection->query($updatequery);
    if($result){
        header("location:list.php");
        echo "user person has been updated successfully";

    }
    else {
        echo $dbconnection->connect_error;
    }
}
?>
</div>
    
</body>
</html>