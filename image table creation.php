<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="create table harshini3410(image longblob,month varchar(100),hallticket varchar(100) unique,studentname varchar(100) unique,password varchar(100),qualification varchar(100),email varchar(200) unique,telnumber varchar(100) unique,specialization varchar(100),eventname varchar(100))";
$result = $conn->query($sql); 

if($result)
{ 
    echo "table created";
}
else{
    echo "error".$conn->error;
}
?>
