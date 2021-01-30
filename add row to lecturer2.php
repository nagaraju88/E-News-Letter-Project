<?php
$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="ALTER TABLE harshini34 ADD COLUMN certificates longblob AFTER events";

if($conn->query($sql))
{
    echo "COLUMN ADDED";
}
else{
    echo "EXISTS".$conn->error;
}
?>
