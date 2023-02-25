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
    <div class = "main">
        <form method = "post">
            <input type = "number" placeholder = "Enter number id" required name = "search" class ="searchinput"><br>
            <input type = "submit" value ="search" name ="btnsearch">
        </form>

        <table>
        <?php
    include "connection.php";
    
    
if(isset($_POST["btnsearch"])){
    $id=$_POST["search"];
    $sqlquery = "select * from employee where ID = '$id'";
    $result = $dbconnection->query($sqlquery);

    $table ="";
}
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
        echo $dbconnection->connect_error;
    }

    ?>
      
   
</table>
</div>
    
</body>
</html>
 