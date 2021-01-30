<?php
$con=mysqli_connect("localhost","root","","nagaraju");
$sql="CREATE TABLE raju7(id int(11) AUTO_INCREMENT,username VARCHAR(20),filename VARCHAR(250),filetype VARCHAR(250),filedata LONGBLOB,PRIMARY KEY(id))";
if($con->query($sql))
{
    echo "table created";
    
}
else
{
    echo "error" . $con->error;
}
?>