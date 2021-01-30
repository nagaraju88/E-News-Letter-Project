<html>
<head>
   <title>view certificate</title>    
</head>
    
    
    <body>
    <?php
    $db=new PDO("mysql:host=localhost;dbname=nagaraju","root","");
        $id= isset($_GET['id'])? $_GET['id']: " ";
    $stat=$db->prepare("SELECT * FROM raju7 WHERE id=?");
        $stat->bindParam(1,$id);
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