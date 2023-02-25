<?php
include "connection.php";
if(isset($_GET["Id"])){
    $id = $_GET["Id"];
    $delerequery = "delete from employee where ID = '$id' ";
    $result = $dbconnection->query($delerequery);
    if($result){
        header("location:index.php");


    }
    else{
        echo $dbconnection->connect_error;
    }
}
?>