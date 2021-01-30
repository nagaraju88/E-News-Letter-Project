<?php

$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="create table harshini34(image longblob,month varchar(100),username varchar(150),password varchar(150),designation varchar(150),qualification varchar(150),email varchar(250),telnumber varchar(150),workexperience varchar(100),specialization varchar(150),subjectstaug varchar(150))";
if($conn->query($sql))
{
    echo "created";
}
else
{
    echo "error" .$conn->error;
}
    ?>