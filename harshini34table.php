<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="ALTER TABLE harshini3410 ADD COLUMN password VARCHAR(20) AFTER studentname";

if($conn->query($sql))
{
    echo "COLUMN ADDED";
}
else{
    echo "EXISTS".$conn->error;
}
?>
