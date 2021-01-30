<?php
$con=mysqli_connect("localhost","root","","placementcell");
$sql="create table placementtable(id int auto_increment,username varchar(250),year varchar(60),noofplacem varchar(50),companyname varchar(250),primary key(id))";
if($con->query($sql))
{
    echo "table created";
}
else
{
    echo "error".$con->error;
}
?>