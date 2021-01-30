<?php
$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$raju=new mysqli($servername,$username,$password,$dbname);
$sql="create table harshini34(image longblob,month varchar(100),username varchar(150) unique,password varchar(150),designation varchar(150),qualification varchar(150),email varchar(250) unique,telnumber varchar(150) unique,workexperience varchar(100),specialization varchar(150),subjectstaug varchar(150))";

if($raju->query($sql))
{
    echo "table created";
}
else
{
    echo "error" .$raju->error;
}
?>