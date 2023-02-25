<?php
$dbconnection = new mysqli("localhost","root", "","tamarat_hrm");
if($dbconnection){
    // echo "database has been coonected";

}
else{
    echo $dbconnection->connect_error;
}
?>