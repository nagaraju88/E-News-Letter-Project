<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home page</title>  
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
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
            font-size: 18px;
            text-transform: capitalize;
            padding: 14px 15px;
            color: #fff;
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
            font-size: 15px;
            line-height: 19px;
            transition:0.1s;
            color: #fff;
            border-left: 1px solid #fff;
            font-weight: 500;
            padding: 16px 13px;
        }
        nav ul li a:hover{
            background: #000;
            color:#fff;
        }
        nav ul li a.active{
            background: #333;
        }
        nav ul li .active{
            background: #000;
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
    </head>
    <?php
		session_start();
		if($_SESSION['admin'])
		{
            
        }
		else
		{
			header("Location:http://localhost/major/practise1.php");
		}
		$user=$_SESSION['admin'];
		?>
<body>
    
<header>
    <a href="#" class="logo">E-News Letter</a>
    <div class="toggle"></div>
    <nav>
      <ul>
     <li><a href="admin1.php">Home</a></li>
     <li><a class="active" href="mails%20to%20faculty.php">mails to faculty</a></li>
     <li><a href="admin2%20teacher.php">Teacher Achievements</a></li>
     <li><a href="admin6%20student.php">Student Achievements</a></li>
          <li><a href="placements.php">placement cell</a></li>
     <li><a href="logout.php">LogOut</a></li>
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
    <article>
       <section>
           
           
     <?php 
		 if($_SERVER["REQUEST_METHOD"]=="POST")
        {
           
            $con=mysqli_connect("localhost","root","","swaraj");
             $sql="select * from harshini34";
             $result=$con->query($sql);
            
			require 'PHPMailer-master/PHPMailerAutoload.php';

			$mail = new PHPMailer();
            //$mail->SMTPDebug = 1;                              
			$mail->isSmtp();  
            $mail ->Debugoutput = 'html';
			$mail->Host = 'smtp.gmail.com';  
			$mail->SMTPAuth = true; 
            $mail ->SMTPOptions = array(
                  'ssl' => array(
                  'verify_peer' =>false,
                  'verify_peer_name' =>false,
                  'allow_self_signed' =>true
                  )
             );
			$mail->Username = "nagarajugovindhula@gmail.com";     
			$mail->Password = "@gmail3410";
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587; 
			$mail->SetFrom("nagarajugovindhula@gmail.com");
			
			$mail->addReplyTo("nagarajugovindhula@gmail.com");
             
             
            
               
             
			for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) 
            { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]); 
			}
			$mail->IsHTML(true);   
			$mail->Subject = $_POST['subject'];
			$mail->Body    = $_POST['message'];
			$mail->AltBody = $_POST['message'];

             
			 while($row=$result->fetch_array())
             {
            $mail->AddAddress($row["email"],$row["username"]);
                 
             }
             if($mail->send())
                 {
                     header("Location:http://localhost/major/admin1.php");
                 }
                 else
                 {
                     echo "not sent" . $mail->ErrorInfo;
                 }
		}
	 ?>
        <form role="form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        	<br><br>
                    
            
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject"  placeholder="enter your subject here" maxlength="50">
               
            <br><br>
            
                    <label for="name">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4" cols="29"></textarea>
               <br><br>
           
                    <label for="name">File:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                
             <br><br>
                    <input type="submit" value="submit">
                
        </form>
              
        </section>
    </article>
  
    </body>
    
    <style>
         form{
            width: 450px;
            margin: 150px auto;
            border: 1px solid #333;
            padding: 20px;
            font-size: 18px;
        }
        label{
            margin-left: 28px;
            margin-right: 28px;
        }
        input[type="email"]
        {
            width: 250px;
            height: 30px;
            text-align: center;
        }
        input[type="text"]
        {
            width: 250px;
            height: 30px;
            text-align: center;
            margin-left: 11px;
        }
        input[type="file"]
        {
            width: 250px;
            height: 30px;
            border: 1px solid #333;
            text-align: center;
            margin-left: 32px;
            padding: 3px;
            cursor: pointer;
        }
       input[type="submit"]
        {
            width: 70px;
            height: 28px;
            font-size: 18px;
            background: green;
            color: #fff;
            border: 3px solid #333;
            text-align: center;
            margin-left: 175px;
            cursor: pointer;
        }
    </style>
</html>