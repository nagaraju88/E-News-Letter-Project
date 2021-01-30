<?php
$con=mysqli_connect("localhost","root","");
$sql="create database placementcell";
if($con->query($sql))
{
    echo "created";
    
}
else
{
    echo "error".$con->error;
}
?>