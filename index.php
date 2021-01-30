<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="refresh" content="">
     <title>My college book</title>  
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="indexStyles.css">
  </head>
  <style>
    *{
            margin:0px;
            padding: 0px;
        }
        body{
            background: #fff;
            background-size: cover;
        }
        header{
            position: relative;
            max-width: 1200px;
            background: #a7a7a7;
            margin: 15px auto;
            border: 1px solid #333;
            align-content: center;
        }
        nav ul{
            list-style: none;
        }
        nav ul li{
            position: relative;
            float: left;
        }
        nav ul li ul{
            position: absolute;
            left: 0;
            top: 102%;
            background: #a7a7a7;
            display: none;
        }
        nav ul li ul li{
            width: 150px;
            border-bottom: 1px dotted #fff;
            position: relative;
        }
        nav ul li:hover > ul{
            display: block;
            color: #fff;
        }
        nav ul ul ul{
            top: 0;
            left: 100%;
        }
        
        nav ul li a{
            display: block;
            text-transform: capitalize;
            text-decoration:none;
            font-size: 12px;
            line-height: 12px;
            transition:0.1s;
             color: #fff;
            text-align: center;
            padding: 15px 12px;
        }
        nav ul li a:hover{
            background: #000;
            color:#fff;
        }
        .clear{
            clear: both;
        }
        
        img
        {
            width: 70px;
            margin-left: 30px;
        }
        .al
        {
            width: 500px;
        float: right;
            margin: 10px auto;
        }
        .al a
        {
           text-decoration: none;
            color: #fff;
            padding: 5px;
            margin-left: 1px;
            font-size: 12px;
            background: #333;
        }
        #logo
        {
            width: 300px;
            
        }
          .box40
          {
              width: 1200px;
              margin: 5px auto;
              
          }
            #lert{
            max-width: 1400px;
            position: relative;
            display: block;
            margin: 5px auto;
            z-index: -1;
        }
        #lert .imgnm{
            position: relative;
            float: left;
            z-index: -1;
            width: 600px;
            margin-left: 30px;
        }
        #lert .news{
            display: block;
            float: right;
            width: 500px;
            z-index: -1;
            border: 1px solid #333;
            margin-top: 15px;
            margin-right: 110px;
            margin-left: -175px;
        }
        #lert .news h1{
           margin-top: 15px;
            margin-bottom: 10px;
            text-transform: capitalize;
            font-size: 16px;
            text-align: center;
        }
        #lert .news P{
            padding: 25px;  
            line-height: 32px;
            font-family: sans-serif;
            font-size: 15px;
        }
        #rightw{
            position: relative;
            max-width: 1400px;
            margin: 550px auto;
        }
        #rightw .dep{
            width: 300px;
            margin: 30px auto;
            font-family: sans-serif;
            text-transform: capitalize;
            font-size: 24px;
        }
        #rightw .imain{
            position: relative;
            display: inline-block;
            margin: 5px auto;
            max-width: 1400px;
            text-transform: uppercase;
        }
        #rightw .imain .sub1{
            position: relative;
            margin-top: 20px;
            margin-left: 120px;
            display: inline-block;
            padding: 10px;
            float: left;
            cursor: pointer;
        }
        #rightw .imain .sub1 a{
            text-decoration: none;
            color: #000;
        }
         #rightw .imain .sub2 a{
            text-decoration: none;
            color: #000;
        }
         #rightw .imain .sub3 a{
            text-decoration: none;
            color: #000;
        }
         #rightw .imain .sub4 a{
            text-decoration: none;
            color: #000;
        }
         #rightw .imain .sub5 a{
            text-decoration: none;
            color: #000;
        }
        
        #rightw .imain .sub1 h1{
            text-align: center;
            font-size: 20px;
            margin: 5px;

        }
        #rightw .imain .sub1 .raj{
            margin: 18px;
            width: 175px;
            height: 135px;
            display: block;
        }
         #rightw .imain .sub2{
            margin: 20px -25px;
            display: inline-block;
            padding: 10px;
             cursor: pointer;
            float: left;
        }
        #rightw .imain .sub2 h1{
            text-align: center;
            font-size: 20px;
            margin: 5px;
        }
        #rightw .imain .sub2 .raj{
            margin: 15px;
            width: 175px;
            height: 135px;
        }
        #rightw .imain .sub3{
            margin: 10px 12px;
            display: inline-block;
            padding: 14px;
            cursor: pointer;
        }
        #rightw .imain .sub3 h1{
            text-align: center;
            font-size: 20px;
            margin: 5px;
        }
        #rightw .imain .sub3 .raj{
            margin: 10px;
            width: 175px;
            height: 135px;
        }
       #rightw .imain .sub4{
            margin: 20px -22px;
            display: inline-block;
            padding: 10px;
           cursor: pointer;
        }
        #rightw .imain .sub4 h1{
            text-align: center;
            font-size: 20px;
            margin: 5px;
        }
        #rightw .imain .sub4 .raj{
            margin: 15px;
            width: 175px;
            height: 135px;
        }
         #rightw .imain .sub5{
            margin: 20px 10px;
            display: inline-block;
            padding: 10px;
             cursor: pointer;
        }
        #rightw .imain .sub5 h1{
            text-align: center;
            font-size: 20px;
            margin: 5px;
        }
        #rightw .imain .sub5 .raj{
            margin: 15px;
            width: 175px;
            height: 135px;
        }
       
        * {
            box-sizing: border-box;
        }
        body{
            font-family: Verdana, sans-serif;
        }
        .mySlides{
            display: none;
            margin: 5px 45px;
        }
        img{
            vertical-align: middle;
        }
        .slideshow-container{
            max-width: 700px;
            position: relative;
            margin: auto;
            display: block;
            z-index: -1;
        }
        .text{
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        .numbertext{
            color: #f2f2f2;
            font-size: 18px;
            padding: 8px 40px;
            position: absolute;
            top: 0;
        }
        .dot{
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from{
                opacity: .4
            } 
            to{
                opacity: 1
            }
        }
        @keyframes fade{
            from{
                opacity: .4
            } 
            to{
                opacity: 1
            }
        }
        @media only screen and (max-width: 300px){
            .text {
                font-size: 11px
            }
        }
         #text40{
            background: green;
            color: #fff;
            max-width: 1400px;
            height: 35px;
            line-height: 35px;
            text-transform: capitalize;
            font-size: 18px;
             margin: 5px auto;
        }
  </style>
    <?php
        $date=date("d");
        $expire=13;
        if($date == $expire) {
 
     ?>
     <style type="text/css">
         #text40{
             display: none;
         }
     </style>
     <?php
        } else {  
       ?>
     <style type="text/css">
     #text40
         {
             width: 1200px;
             display: block;
         }
     </style>
     <?php
         }
     ?>
<body>
        <div id="text40">
            <marquee behavior="alternate" scrollamount="10">Thier is a two days event in our college on ethical hacking delivering by most experienced professor</marquee>
        </div><br>
        <div class="box40">
            <a href="naac.pdf"><img src="NAAC_LOGO.png"></a>
            <a href="nbacertificate.pdf"><img src="download.png"></a>
            <a href="#" ><img src="images.png" id="logo"></a>
            <div class="al">
                <a href="https://balaji.winnou.net/">onedu</a>
                <a href="practise1.php">admin login</a>    
                <a href="lecturerhome.php">staff login</a>
                <a href="studenthome.php">student login</a>
            </div>
        </div>
       <header>
           <div class="toggle"></div>
             <nav>
               <ul>
                   <li><a href="index.php" class="active">home</a></li>
                   <li><a href="#">About</a>
                       <ul>
                           <li><a href="visionandmission.html">vision & mission</a></li>
                           <li><a href="chairman.html">chairman</a></li>
                           <li><a href="principal.html">principal</a></li>
                           <li><a href="naac.pdf">naac</a></li>
                           <li><a href="nbacertificate.pdf">nba</a></li>
                       </ul>                  
                   </li>

                   <li><a href="naac.pdf">naac</a></li>
                   <li><a href="nbacertificate.pdf">nba</a></li>
                   <li><a href="#">Acardamics</a>
                       <ul>
                            <li><a href="csedep.php">CSE department</a></li>
                            <li><a href="ecedep.html">ECE department</a></li>
                            <li><a href="eeedep.html">EEE department</a></li>
                            <li><a href="civildep.html">CIVIL department</a></li>
                            <li><a href="mechdep.html">MECH department</a></li>
                        </ul>                  
                  </li>
                  
                 <li><a href="achievements.php">Achievements</a></li>
                 <li><a href="viewingplacement.php">placements</a></li>
                 <li><a href="contactus.html">contact us</a></li>
                 <li><a href="lecturerachievements.php">Faculty Achievements</a></li>
                 <li><a href="studentachievements.php">Student Achievements</a></li>

             </ul>
           </nav>
        <div class="clear"></div>
     </header><br><br>
    <section class="raju34">
        <section id="lert">
            <div class="imgnm">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 5</div>
                        <img src="download720480.jpg" style="width:100%">
                        <div class="text">Caption One</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 5</div>
                        <img src="download7204801.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 5</div>
                        <img src="download7204802.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 5</div>
                        <img src="images720480.jpg" style="width:100%">
                        <div class="text">Caption Four</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <img src="images%20(4).jpg" style="width:100%">
                        <div class="text">Caption Five</div>
                    </div>
                </div><br>
                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
    
                </div>
        
                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                                slideIndex = 1
                        }    
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 2000); 
                    }
                </script>
            </div>
            
            <div class="news">
                <h1>About our college</h1>
                <p>Balaji Institute of Technology & Science is the one of the best Engineering college in warangal district, popularly known as BITS, was established by Maheshwara Educational Society in 2001 at Laknepally Village near Narsampet beside Warangal-Narsampet Main Road in an area of 35 acres with an in take of 180.<br> The place is well connected by road and train and is only 20 minutes drive from Warangal.<br> Presently the college offers B.Tech courses in EEE, ME, ECE, CIVIL & CSE with an intake of 660 besides MBA with an intake of 60. <br>College offers M.Tech Courses in CSE(36), SE(18), DSCE(18), ES(18) & EPS(36) & CAD/CAM(18). College also offers Diploma (II Shift) Courses in DEE(60) and DME(60).<br> BITS has been consistent to maintain excellence in the academic standards since its inception. Discipline is hallmark of BITS. Learning is an enjoyable experience here, with experienced faculty,</p>
            
            </div>
        </section><br /><br />
       <br /><br /><br /><br/>
       <section id="rightw">
             <br>
             <div class="dep">
                    <h1>departments</h1>
             </div>
             <div class="imain">
             <div class="sub1">
                <a href="csedep.php">
                    <img src="download%20(5).jpg" class="raj">
                    <h1>cse</h1>
                </a>
             </div>
             <div class="sub2">
                <a href="ecedep.html">
                    <img src="ece.jpg" class="raj">
                    <h1>ece</h1>
                </a>
             </div>
            <div class="sub3">
                <a href="eeedep.html">
                    <img src="eee.jpg" class="raj">
                    <h1>eee</h1>
                </a>
            </div>
            <div class="sub4">
                <a href="civildep.html">
                    <img src="civil.jpg" class="raj">
                    <h1>civil</h1>
                </a>
            </div>
            <div class="sub5">
                <a href="mechdep.html">
                    <img src="mech.jpg" class="raj">
                    <h1>mech</h1>
                </a>
            </div>
          </div>
        </section>
    </section>
        
</body>    
</html>