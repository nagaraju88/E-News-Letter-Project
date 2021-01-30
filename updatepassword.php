<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error site</title>
</head>
    <style>
 
    </style>

    <body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
              if(empty($_POST["passw"]))
              {
              echo "please enter a password";
                  echo "<br><br>";
               }        
            else{
                  $passw=test_input($_POST["passw"]);

              if(strlen($passw)<5)
                {
                echo "please check your password strength";
                echo "<br><br>";
                }
               else{
               if(!preg_match("/^[a-zA-Z0-9]*$/",$passw))
               {
                   echo "please enter correctly";
                   echo "<br><br>";
                }
           
                }
                }
        
               if(empty($_POST["cpassw"]))
                  {
                  echo "please conform your password";
                  echo "<br><br>";
                 }        
              else{
                  $cpasw=test_input($_POST["cpassw"]);
                    if($cpasw === $passw)
                    {
                         $email=test_input($_POST["em"]);
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $dbname="majproject";
                        $raju=new mysqli($servername,$username,$password,$dbname);
                        $sql="UPDATE nagaraju SET cpword='$cpasw' WHERE email='$email' " ;
                        if($raju->query($sql))
                         {
                          header("Location:http://localhost/major/login.php");
                          }  
                        else{
                            echo "error";
                        }
                     }
                  else
                  {
                  $message = "password mismatched";
echo "<script type='text/javascript'>alert('$message');</script>";    
                  }
               
                  }
               
         
        }
        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            return $data;
        }
        ?>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="box">
          <label>E-mail :</label>
          <input type="email" name="em" placeholder="E-mail Address"><br><br>
          <label>Password :</label>
          <input type="password" name="passw" placeholder="Password" ><br><br>
          <label>Conform Password :</label>
          <input type="password" name="cpassw" placeholder="Conform Password" ><br><br>
          <input type="submit" value="submit" >
            </div>
     </form>
    </body>
    <style>
        form{
            max-width: 400px;
            height: 300px;
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            margin: 120px auto;
        }
        .box{
            margin: 75px 0px;
        }
        input[type="email"]{
            text-align: center;
            width: 230px;
            height: 30px;
            margin-left: 50px;
        }
        input[type="password"]{
            text-align: center;
            width: 210px;
            height: 30px;
            margin-left: 20px;
        }
    </style>
</html>