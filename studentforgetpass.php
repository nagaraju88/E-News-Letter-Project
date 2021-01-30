<?php  ob_start(); ?>
<html>
  <head>
<meta http-equiv="refresh" content="http://localhost/major/lecturerviewprofile.php/">
     <title>Home page</title>       
  </head>
    <style>
         *{
            margin:0px;
            padding: 0px;
             
        }
        
        header{
            position: relative;
            max-width: 1100px;
            background: #a7a7a7;
            margin: 15px auto;
            align-content: center;
        }
        .logo{
            position: relative;
            text-decoration: none;
            font-size: 16px;
            text-transform: capitalize;
            padding: 14px 15px;
            color: #fff;
            margin-left: 20px;
            font-weight: 600;
            float:left;
        }
        nav{
            float: right;
        }
        nav ul{
            display: flex;
        }
        nav ul li{
            list-style: none;
        }
        nav ul li a{
            position:relative;
            display: block;
            text-transform: capitalize;
            text-decoration:none;
            font-size: 14px;
            line-height: 19px;
            border-left: 1px solid #fff;
            transition:0.1s;
            color: #fff;
            font-weight: 600;
            padding: 16px 13px;
        }
        nav ul li a:hover{
            background: #000;
            color:#fff;
        }
        nav ul li .active{
            background: #000;
        }
         nav ul li ul{
            position: absolute;
            margin-left: 0px;
            background: #a7a7a7;
            display: none;
        }
        nav ul li ul li{
            width: 200px;
            text-align: center;
            height: auto;
            display: block;
        }
        nav ul li ul li a{
            border-bottom: 1px solid #fff;
        }
        nav ul li:hover ul{
            display: block;
            color: #fff;
            opacity: 1;
        }
        .clear{
            clear: both;
        }
        @media(max-width:800px){
            .toggle{
                width: 30px;
                height: 30px;
                display:block;
                float:right;
                margin:10px;
                cursor: pointer;
            }
            .toggle:before{
                content: "\f0c9";
                font-family:fontAwesome;
                font-size: 24px;
                text-align: center;
                padding: 0px 5px;
                line-height: 30px;
            }
            nav{
                display: none;
            }
            nav.active{
                width:100%;
                display:block;
            }
            nav ul{
                display:block;
            }
            nav.active ul li
            {
                text-align: center;
                width:100%;
                opacity: 1;
            }
            nav ul li.active ul{
                position: relative;
                opacity: 1;
            }
        }
       
    </style>
    <body>
     <header>
           <a href="#" class="logo">My College Year book</a>
    <div class="toggle"></div>
    <nav>
      <ul>
     <li><a href="lecturerhome.php">Home</a></li>
     <li><a class="active" href="#">Achievements</a>
          <ul>
            <li><a href="#">Lecturer Achievements</a></li>
              <li><a href="#">Student Achievements</a></li>
         </ul>
          </li>     
      </ul>
    </nav>
           <div class="clear"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
            
        })
        </script>
    <?php
       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
           $mail=$_POST["mail"];
           $pas=$_POST["pass"];
           $rpas=$_POST["rpass"];
          
          
           $server="localhost";
           $user="root";
           $pass="";
           $db="nagaraju";
           $con=new mysqli($server,$user,$pass,$db);
           $sql="SELECT email FROM harshini3410";
           $result=$con->query($sql);
           if($result->num_rows>0)
           {
               while($row=$result->fetch_assoc())
               {
                 if($row["email"]==$mail)
                 {
          if($pas==$rpas)
           {
$sql1="UPDATE harshini3410 SET password='$rpas' WHERE email='$mail'";
                     if($con->query($sql1))
                     {
                      
                      header("Location:http://localhost/major/studenthome.php",true, 301);
                      echo "<script>alert('updated successfully')</script>";
                         ob_end_flush();
                          exit;
                         
                     }
               
           }
                    
                     else
                     {
                         echo "<script>alert('password not matched')</script>";
                     }
                 }
                   else
                     {
                         echo "<script>alert('email not found')</script>";
                     }
               }
           }
       }
    ?>

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >   
     <label class="mail">E-mail :</label>
     <input type="email" name="mail" required autofocus placeholder="your mail address"><br><br>
     <label class="pass">New password :</label>
     <input type="password" name="pass" id="myInput" required placeholder="new password"><br><br>  
     <input type="checkbox" onclick="myFunction()"> show password<br><br>
     <label class="rpass">Re-enter password :</label>
     <input type="password" name="rpass" id="myinput" required placeholder="re-enter password"><br><br>
     <input type="checkbox" onclick="myFunction1()"> show password<br><br>
     <input type="submit" value="submit">
    </form>
        <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
      <script type="text/javascript">
          function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
          function myFunction1() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        </script>  
</body>
    <style>
             #myInput{
                width: 250px;
                height: 28px;
                text-align: center;
            }
        form{
            width: 600px;
            margin: 150px auto;
            border: 1px solid #333;
            text-align: center;
            padding: 30px;
        }
        .mail{
            margin-right: 90px;
        }
        .pass
        {
            margin-right: 40px;
        }
        .rpass
        {
            margin-right: 20px;
        }
        input[type="submit"]
        {
            width: 80px;
            cursor: pointer;
            background: green;
            color: #fff;
            text-align: center;
            margin-left: 40px;
            padding: 5px;
            font-size: 16px;
        }
        input[type="email"]
        {
            width: 250px;
            text-align: center;
            height: 28px;
            
        }
         input[type="password"]
        {
            width: 250px;
            text-align: center;
            height: 28px;
            
        }
    </style>
</html>