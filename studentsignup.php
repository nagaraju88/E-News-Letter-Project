<?php ob_start(); ?>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home page</title>  
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
       <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
      </script>
      <script type="text/javascript">
         $(function() {
            $( "#date" ).datepicker({dateFormat: 'yy'});
         });
      </script>
  </head>
    <style>
         *{
            margin:0px;
            padding: 0px;
             
        }
        body{
            
        }
        header{
            position: relative;
            width: 1000px;
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
             width: 200px;
            background: #a7a7a7;
            display: none;
        }
        nav ul li ul li{
            width: auto;
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
           <a href="#" class="logo">E- News letter</a>
    <div class="toggle"></div>
     <nav>
              <ul>
                 <li><a class="active" href="studenthome.php">Home</a></li>
                  <li><a  href="achievements.php">Achievements</a>
                   
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
    
       session_start();
    if($_SERVER["REQUEST_METHOD"] ==  "POST")
    {   
        $id=test_input($_POST["stdid"]);
        $m=test_input($_POST["dot"]);
        $sn=test_input($_POST["stdname"]);
        $psw=test_input($_POST["passw"]);
        $q=test_input($_POST["qualific"]);
        $em=test_input($_POST["email"]);
        if(!filter_var($em,FILTER_VALIDATE_EMAIL))
        {
            echo "enter correctly";
        }
        $c=$_POST["tel"];
        $s=$_POST["opt"];
        $en=$_POST["evntn"];
$mage=addslashes(file_get_contents($_FILES["filen"]["tmp_name"]));

$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn=new mysqli($servername,$username,$password,$dbname);
        $sql="SELECT studentname FROM harshini3410";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                if($row["studentname"] == $sn)
                {
                    echo '<script>alert("studentname already exists")</script>';
                }
                else
                {
    $sql1="INSERT INTO harshini3410(image,month,hallticket,studentname,password,qualification,email,telnumber,specialization,eventname) VALUES('$mage','$m','$id','$sn','$psw','$q','$em','$c','$s','$en')";
    $result = $conn->query($sql1);
if($result)
{
    $_SESSION['stud']=$sn;
    $_SESSION['passw']=$psw;
header("Location:http://localhost/major/studenthome.php" , true, 301);
                }
                    else {
                        echo "error" . $conn->error;
                    }
            }
        }


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
        <legend>Add student profile</legend>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label class="lft">Year of Joining:</label>
        <input type="month" autofocus name="dot" required><br><br>
        <label class="lft">Student ID:</label>
        <input type="text" name="stdid" placeholder="Enter id number" required><br><br>
        <label class="lft">Student Name:</label>
        <input type="text" name="stdname" placeholder="user name" required><br><br>
        <label class="lft">Password :</label>
        <input type="password" name="passw" id="myInput" placeholder="Password" required><br><br>
        <input type="checkbox" onclick="myFunction()">show password<br><br>
        <label>Qualification:</label>
        <input type="text" name="qualific" placeholder="Qualification" required><br><br>
        <label>e-mail id:</label>
        <input type="email" name="email" placeholder="email id" required><br><br>
        <label>contact NO:</label>
        <input type="tel" name="tel" placeholder="contact number" required><br><br>
        <label class="lft2">Branch :</label>
        <select name="opt"  required>
            <option >select an option</option>
        <option value="cse">cse</option>
        <option value="ece">ece</option>
        <option value="eee">eee</option>
            <option value="mech">mech</option>
            <option value="civil">civil</option>
        </select><br><br>
        <label>Event Name</label>
        <input type="text" name="evntn" placeholder="Event Name"><br><br>
        <label>select an image:</label>
        <input type="file" name="filen" required><br><br>
        
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
            margin-left: 60px;
            margin-right: 10px;
        }
        .links{
            text-decoration: none;
            color: #000;
            font-size: 30px;
        }
        section{
            margin: 30px 650px;
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