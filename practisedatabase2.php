<?php
$servername="localhost";
$username="root";
$password="";
$conn= new mysqli($servername,$username,$password);
if(!$conn)
{
    echo "connection failed";
}
else
{
    echo "connected";
}
$sql="CREATE DATABASE harshini";
if($conn->query($sql))
{
    echo "database created";
}
else
{
    echo "error" .$conn->error;
}
?>