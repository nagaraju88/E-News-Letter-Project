<?php
  $con = new mysqli("localhost","root","","nagaraju");
$query = "create table nagaraju(username varchar(25), password varchar(50),address varchar(50))";
if($con->query($query))
{
    echo "table created";
}
else{
    echo "error". $con->error;
}
?>