<?php
$servername="localhost";
$username="root";
$password="";
$raju=new mysqli($servername,$username,$password);
$sql="CREATE DATABASE swaraj";
if($raju->query($sql))
{
    echo "created";
}
else
{
    echo "error" .$raju->error;
}
?>