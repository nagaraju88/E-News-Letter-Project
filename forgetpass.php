<html>
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Forget password</title>
   </head>
    <body>
    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST")
  {
     $em=$_POST["email"];
     if(empty($em))
      {
        echo "enter an email address";
     }
      else
      {
        if(!filter_var($em,FILTER_VALIDATE_EMAIL))
        {
         echo "Invalid username and password";
        }
        else
        {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="majproject";
        $raju=new mysqli($servername,$username,$password,$dbname);
        $sql="SELECT email FROM nagaraju";
        $result=$raju->query($sql);
        
            if($result -> num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {    
               if($row["email"]===$em)
               {
                header("Location:http://localhost/major/updatepassword.php");
                }
                else
                {
                 $message = "email not found";
echo "<script type='text/javascript'>alert('$message');</script>";
                 }
             }
           }
          }
      }
   
    }
    ?>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" >
          <div class="box">
       <label>Enter the previous E-mial address :<br><br>E-mail :</label>
        <input type="email" name="email" placeholder="E-mail address" ><br><br>
        <input type="submit" value="submit">
    </div>
     </form>
    </body>
    <style>
        body{
            background: #e8e8e8;
        }
        form{
            max-width: 400px;
            height: 300px;
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            margin: 120px auto;
        }
        .box{
         font-size: 20px;
            margin: 85px 0px;
        }
        input[type="email"]
        {
            width: 200px;
            height: 30px;
            margin-left: 20px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</html>