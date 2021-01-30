<html>
<head>
   <title>view certificate</title>    
</head>
    <?php
    session_start();
   if($_SESSION['user34'])
    {
        $user=$_SESSION['user34'];
        
    }
    else
    {
        echo "you are not a authorised user";
    }
    ?>
    <body>
    <?php
    $db=new PDO("mysql:host=localhost;dbname=nagaraju","root","");
        $usern= isset($_GET['username'])? $_GET['username']: " ";
    $stat=$db->prepare("SELECT * FROM taj1 WHERE username=?");
        $stat->bindParam(1,$usern);
    $stat->execute();
     $row= $stat->fetch(); 
        $type=$row['filetype'];
        if($type=="application/pdf")
        {
           header('content-type:'.$row['filetype']);
        header('accept-ranges: bytes');
    header('content-transfer-encoding: binary');
        echo $row['filedata']; 
        }
        elseif($type=="image/jpeg")
        {
            echo "<div class='box'>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['filedata'] ).'" height="425" width="650"/>';
            echo "</div>";
        }
        
    ?>
    </body>
    <style>
        .box{
            text-align: center;
        }
    </style>
</html>