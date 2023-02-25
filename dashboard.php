<?php
session_start();

if(isset($_SESSION["username"])){

}
else{
    // header("Location: index.php");
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shaqale</title>
    <!-- <link rel ="stylesheet" href="style.css"> -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="style.css">
 
</head>
<body>
<div class="nav_side">
        <ul>
            <li class="current"><a href="dashboard.php"><iconify-icon icon="material-symbols:dashboard"></iconify-icon> Dashboard</a></li>
            <li class="current"><a href="list.php"><iconify-icon icon="material-symbols:person"></iconify-icon>Employee</a></li>
            <li class = "current"><a href="#"><iconify-icon icon="ri:money-dollar-circle-line"></iconify-icon> Salary</a></li>
            <li class = "current"><a href="#"><iconify-icon icon="material-symbols:format-align-left"></iconify-icon> Leave</a></li>
            <li class = "current"><a href="#"><iconify-icon icon="ri:bank-line"></iconify-icon>Department</a></li>
            <li class = "current" ><a href="logout.php"><iconify-icon icon="ic:baseline-log-out"></iconify-icon> Logout</a></li>
        </ul>

</div>
    
<div class = "main">

    <div class = "boxes">


        <div class = "box1">
        <iconify-icon icon="material-symbols:person"></iconify-icon>
 
            <h2> Total Employee</h2>
            <?php
               include "connection.php";
                $sqlcommands = "select count(*) as count from employee";
               $result = $dbconnection->query($sqlcommands);
               $data = "";
               if($result){
               while($row = $result->fetch_assoc()){
               $data .= "<h2>" . $row["count"]."</h2>";
                 }
                echo $data;
    
           }


              ?>
            
            

        </div>
        
        
        <div class = "box2">
        <iconify-icon icon="ri:money-dollar-circle-line"></iconify-icon>
            <h2> Total Salary</h2>
            
<?php
include "connection.php";
$salaryquery = "select sum(Salary) as sum from employee";
$result = $dbconnection->query($salaryquery);
$sumdata = "";
if($result){
    while($row = $result->fetch_assoc()){
    $sumdata .= "<h2>" . $row["sum"]."</h2>";
      }
     echo $sumdata;

}

?>
            

        </div>


        <div class = "box3">
        <iconify-icon icon="material-symbols:format-align-left"></iconify-icon>
            <h3> Total Of Left</h3>
            

        </div>

    </div>

</div>