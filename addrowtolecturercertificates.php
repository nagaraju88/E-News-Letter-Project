<?php
$con=mysqli_connect("localhost","root","","swaraj");
$sql="alter table raju7 add column year varchar(50) after username";
if($con->query($sql))
{
    echo "row added";
}
else
{
    echo "error". $con->error;
}
?>