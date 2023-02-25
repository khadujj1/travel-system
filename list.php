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
            <li class="current"><a href="dashboard.php"><iconify-icon icon="material-symbols:dashboard"></iconify-icon> Dashboard</a></li>
            <li class="current"><a href="list.php"><iconify-icon icon="material-symbols:person"></iconify-icon>Addemployee</a></li>
            <li class = "current"><a href="#"><iconify-icon icon="ri:money-dollar-circle-line"></iconify-icon> Salary</a></li>
            <li class = "current"><a href="#"><iconify-icon icon="material-symbols:format-align-left"></iconify-icon> Leave</a></li>
            <li class = "current"><a href="#"><iconify-icon icon="ri:bank-line"></iconify-icon>Department</a></li>
            <li class = "current" ><a href="logout.php"><iconify-icon icon="ic:baseline-log-out"></iconify-icon> Logout</a></li>
        </ul>

</div>
<div class="main">
    <div class ="button"> 
    <button class="button1"><a href="add_employee.php">Add NEW EMPLOPYEE </a></button>

    <button class="button2"><a href= "search.php">Search </a></button>
    </div>

    <table>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Department</th>
        <th>Address</th>
        <th>Action</th>
        <th>Update</th>

    <?php
    include "connection.php";
    $sqlquery = "select * from employee";
    $result = $dbconnection->query($sqlquery);
    $table = "";
    if($result){
        while($row = $result->fetch_assoc()){
            $table .="<tr>";
            $table .="<td>" . $row["ID"]."</td>";
            $table .="<td>" . $row["Firstname"]."</td>";
            $table .="<td>" . $row["Lastname"]."</td>";
            $table .="<td>" . $row["Age"]."</td>";
            $table .="<td>" . $row["Salary"]."</td>";
            $table .="<td>" . $row["Department"]."</td>";
            $table .="<td>" . $row["Address"]."</td>";
            $deletelink = "delete.php?"."&Id=".$row["ID"];
            $updatelink = "update.php?"."&Id=".$row["ID"]."&Firstname=".$row["Firstname"]."&Lastname=".$row["Lastname"]."&Age=".$row["Age"]."&Salary=".$row["Salary"]."&Department=".$row["Department"]."&Address=".$row["Address"];

            $table.= "<td>" . '<a href ="'.$deletelink.'" class = "deletebtn">delete</a>' . "</td>";
            $table.= "<td>" . '<a href ="'.$updatelink.'" class = "updatebtn">update</a>' . "</td>";
            
            $table .= "</tr>";

            $table .= "";
          
            
        }
        echo $table;

    }
    else{
        echo $dbconnection->qaladwaaye;
    }
    ?>
      
   
</table>


</div>
    
</body>
</html>