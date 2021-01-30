<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="ALTER TABLE harshini3410 ADD COLUMN filename VARCHAR(250) AFTER filetype";

if($conn->query($sql))
{
    echo "COLUMN ADDED";
}
else{
    echo "EXISTS".$conn->error;
}
?>
