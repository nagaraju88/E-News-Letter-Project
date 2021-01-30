<?php
$con=mysqli_connect("localhost","root","","nagaraju");
$sql="alter table raju7 add column mail varchar(100) after year";
if($con->query($sql))
{
    echo "row added";
}
else
{
    echo "error". $con->error;
}
?>