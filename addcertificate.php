<html>
    <head>
      <title>add certificates</title>
    </head>
    <?php
    session_start();
    if($_SESSION['stud'])
    {
       $user=$_SESSION['stud']; 
        $branch= $_SESSION['branch'];
    }
    else
    {
      print "<script>window.location.assign('studenthome.php')</script>";    
    }
    ?>
<body>
    <?php
     $db=new PDO("mysql:host=localhost;dbname=nagaraju","root","");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $year=$_POST["year"];
        $maila=test_input($_POST['email']);
    $fname=$_FILES['filen']['name'];
    $ftype=$_FILES['filen']['type'];
    $fdata=file_get_contents($_FILES["filen"]["tmp_name"]);
     
  $sql=$db->prepare("INSERT INTO raju7(id,username,year,mail,filename,filetype,filedata) VALUES('',?,?,?,?,?,?)");
   $sql->bindParam(1,$user);
   $sql->bindParam(2,$year);
   $sql->bindParam(3,$maila);
   $sql->bindParam(4,$fname);
    $sql->bindParam(5,$ftype);
    $sql->bindParam(6,$fdata);
    $sql->execute();
        
    }
     function test_input($data)
    {
        $data=stripslashes($data);
        $data=trim($data);
        return $data;
    }
    
    
    ?>
  <form method="post"  enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
      <label>Select Year:-</label>
   <input type="date" name="year" placeholder="select year with month" required>
      <br><br>
      <label>E-mail Address :</label>
<input type="email" name="email" placeholder="email id" required><br><br>
     <label>select a certificate to add:</label><br><br>
      <input type="file" name="filen"><br><br>
      <input type="submit" value="add" name="submit">
  </form><br><br>

    <p></p>
    
    <ol>
     <?php
     $db=new PDO("mysql:host=localhost;dbname=nagaraju","root","");
    $stat=$db->prepare("SELECT * FROM raju7 WHERE username='$user'");
    $stat->execute();
        while($row= $stat->fetch())
        {
            echo "<li>".$row['year']."</li>";
            echo "<li>".$row['mail']."</li>";
            echo "<li><a target='_blank' href='viewcertificate.php?id=".$row['id']."'>" .$row['filename']."</a></li>";
           
        }
        ?>
    </ol><br><br>
    <div class="box40">
    <a href="studentviewprofile.php" class="link"><button>back</button></a>
        </div>
</body>
    <style>
        .box40{
            width: 150px;
            margin: 5px auto;
        }
        input[type="email"]
        {
         width: 200px;
            height: 30px;
            text-align: center;
        }
        input[type="date"]
        {
         width: 200px;
            height: 30px;
            margin-left: 10px;
            text-align: center;
        }
        #year{
            width: 200px;
            height: 30px;
        }
        
        label{
            font-size: 18px;
        }
        form{
            width: 450px;
            margin: 50px auto;
            text-align: center;
            padding: 40px;
            border: 1px solid #333;
        }
        input[type="submit"]
        {
            width: 80px;
            padding: 7px;
            font-size: 17px;
            background: green;
            color: #fff;
        }
        input[type="file"]
        {
            margin-left: 68px;
        }
        button{
            font-size: 18px;
            width: 100px;
            text-transform: uppercase;
            background: green;
            color: #fff;
            padding: 10px;
            cursor: pointer;
        }
        ol{
            border: 1px solid #333;
            width: 500px;
            margin: auto;
            padding-left: 90px;
            padding-bottom: 30px;
            padding-top: 30px;
            line-height: 35px;
        }
    </style>
</html>