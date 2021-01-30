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
            max-width: 1400px;
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
           <a href="#" class="logo">E - News Letter</a>
    <div class="toggle"></div>
    <nav>
      <ul>
     <li><a href="lecturerhome.php">Home</a></li>
     <li><a class="active" href="achievements.php">Achievements</a>
          
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
        $m=test_input($_POST["dot"]);
        $d=test_input($_POST["designat"]);
        $pw=test_input($_POST["passw"]);
        $un=test_input($_POST["uname"]);
        $q=test_input($_POST["qualific"]);
        $em=test_input($_POST["email"]);
        if(!filter_var($em,FILTER_VALIDATE_EMAIL))
        {
            echo "enter correctly";
        }
        $c=$_POST["tel"];
        $we=$_POST["wexperien"];
        $s=$_POST["opt"];
        $st=$_POST["taught"];
        $mage=addslashes(file_get_contents($_FILES["filen"]["tmp_name"]));
        
$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="INSERT INTO harshini34(image,month,username,password,designation,qualification,email,telnumber,workexperience,specialization,subjectstaug) VALUES('$mage','$m','$un','$pw','$d','$q','$em','$c','$we','$s','$st')";
        
if($conn->query($sql))
{
    header("Location:http://localhost/major/lecturersignup.php");
}
else
{
    echo "error" .$conn->error;
}
    }
    function test_input($data)
    {
        $data=stripslashes($data);
        $data=trim($data);
        return $data;
    }
    ?>
        <div id="main">
        <fieldset>
        <legend>Add Lecturer Profile</legend>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data">
        <label class="lft">Year of Joining:</label>
        <input type="month" autofocus name="dot"><br><br>
        <label class="lft">username:</label>
        <input type="text" name="uname" placeholder="user name"><br><br>
        <label class="lft">Password :</label>
        <input type="password" name="passw" id="myInput" placeholder="Password" required><br><br>
        <input type="checkbox" onclick="myFunction()">show password<br><br>
        <label>designation:</label>
        <input type="text" name="designat" placeholder="designation"><br><br>
        <label>qualification:</label>
        <input type="text" name="qualific" placeholder="Qualification"><br><br>
        <label>e-mail id:</label>
        <input type="email" name="email" placeholder="email id"><br><br>
        <label>contact NO:</label>
        <input type="tel" name="tel" placeholder="contact number"><br><br>
        <label>workexperience:</label>
        <input type="text" name="wexperien" placeholder="work experience"><br><br>
        <label class="lft2">branch:</label>
        <select name="opt" >
            <option >select an option</option>
        <option value="cse">cse</option>
        <option value="ece">ece</option>
        <option value="eee">eee</option>
            <option value="mech">mech</option>
            <option value="civil">civil</option>
        </select><br><br>
        <label>subjects taught:</label>
        <input type="text" name="taught" placeholder="subjects taught"><br><br>
        <label>select an image:</label>
        <input type="file" name="filen"><br><br>
        <input type="submit" value="signup">
    </form>
      </fieldset>
            </div>
      
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
      
        </script>  
    </body>
    <style>
        #myInput{
                width: 230px;
                height: 37px;
                text-align: center;
            }
        input[type="checkbox"]
        {
            margin-left: 50px;
            margin-right: 10px;
        }
         .links{
            text-decoration: none;
            color: #000;
            font-size: 30px;
        }
        section{
            margin: 40px 650px;
        }
        .lft2{
            margin-right: 60px;
            margin-left: 20px;
        }
        .lft1{
            margin-left: -7px;
        }
        .rgt{
            margin-left: 20px;
            margin-right: 60px;
        }
        .lft{
            margin-left: 18px;
            margin-right: 30px;
        }
        .account{
            margin-left: 110px;
            font-size: 22px;
        }
        select{
            width: 230px;
            height: 37px;
            margin-left: 55px;
            text-align-last: right;
            padding-right: 86px;
            direction: rtl;
        }
        select .opt {
            font-size: 18px;
            text-align-last: center;
        }
        select .opt1{
            font-size: 19px;
        }
        #main{
            margin :60px 400px;
        }
        fieldset{
         max-width: 800px;
         margin: auto;
            
        }
        label{
            margin-right: 25px;
            color:#000;
            font-size: 20px;
        }
        legend{
            color: #000;
            font-size: 20px;
            text-align: center;
        }
        form{
            padding: 10px;
            text-align: center;
        }
        .border{
            margin-left: 60px;
            max-width: 350px;
            border:1px solid #fff;
        }
        .border label{
            color:#fff;
            font-size: 
        }
        input[type="text"]{
            width : 230px;
            opacity : 0.7;
            height : 37px;
            font-weight: 600;
            text-align : center;
            margin-left: 30px;
        }
         input[type="password"]{
            width : 230px;
            opacity : 0.7;
            height : 37px;
            font-weight: 600;
            text-align : center;
            margin-left: 30px;
        }
        input[type="month"]{
            width : 230px;
            opacity : 0.7;
            height : 37px;
            font-weight: 600;
            text-align : center;
            margin-left: -10px;
        }
        input[type="email"]{
            width : 230px;
            height: 34px;
            opacity: 0.7;
            text-align: center;
            margin-left: 75px;
        }
        input[type="date"]{
            width:auto;
            opacity: 0.7;
            height: 30px;
            text-align: center;
        }
        input[type="tel"]{
            width : 230px;
            opacity: 0.7;
            height: 34px;
            text-align: center;
            margin-left: 55px;
        }
        input[type="submit"]{
            width : 90px;
            height: 35px;
            cursor: pointer;
            font-weight: 600;
            font-size: 18px;
            text-align: center;
            text-transform: uppercase;
        }
        .left{
            margin-left: 65px;
        }
        .right{
            margin-left: 0px;
        }
      
    </style>
</html>