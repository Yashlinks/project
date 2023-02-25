<?php
  session_start();
  error_reporting(0);
  $homepage = $_SESSION['user_email'];
  if($homepage == true){
   
    }
else{
    echo "<script> alert('You Need to login First..'); </script>";
    echo "<script> document.location = 'index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>About</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}
    body{
        margin:0px;
        padding:0px;
       /* background: linear-gradient(146deg, #beb8b8, transparent);*/
       background: linear-gradient(146deg, #ccc9c9, #b4b4b4);
    }
        .about-cont{
            display: flex;
            flex-wrap: wrap;
            height: fit-content;
            padding: 5vw 7vw;
        }
        .col-info{
            width: 41rem;
            margin-right: 3vw;
            text-align: left;
            height:fit-content;
        }
        .title-row{
            display: inline-block;
            font-size: 1.7rem;
            font-weight: bolder;
            color: #1a1a1a;
            margin: 0.7rem 0;
            letter-spacing: 0.15rem;
        }
        .row-info{
            color: #4d4848;
            display: inline-block;
        }
        .row-info > h2{
            font-size: 1.4rem;
            font-weight: 500;
            margin: 0.4rem 0;
            line-height: 2.2rem;
            letter-spacing: 0.5px;
        }
        .row-info > h3{
            font-weight: 400;
            margin: 0.4rem 0;
            line-height: 1.9rem;
            letter-spacing: 0.5px;
        }
        .social-links{
            margin: 1.5vw 25%;
            display: inline-block;
        }
        .social-links > ul{
            display: table;
            list-style-type: none;
        }
        .social-links > ul >li{
            padding: 1rem;
            float: left;
        }
        .social-links > ul >li > a {
            color: #ce2828;
            border: 1px solid #9d3d3d;
            padding: 0.8rem;
            border-radius: 46rem;
        }
        .col-img{
            width: 34rem;
            height: fit-content;
            margin-left:1.5rem;
        }
        .col-img img{
            width: 100%;
        }

       
        .cont-2{
            display:flex;
            flex-wrap: wrap;
            height: fit-content;
            padding: 3vw 7vw;
            margin-bottom: 5rem;
        }
        .img1,.img2,.img3{
            width: 17.6rem;
            margin: 1rem;
            height: 23rem;
            border-inline: 0.6rem solid gray;
            box-shadow: 8px 10px 12px 0px #928787;
            border-bottom: 0.6rem solid #bc0d0d94;
            border-top: 0.6rem solid #bc0d0d94;
        }
         .team-img{
            width: 100%;
            height:100%;
        }
        .col1-title{
            width:18rem;
        }
        .lst-col{
            margin-left: 1rem;
            line-height: 1.9rem;
            color: #201c1c;
            font-size: 1rem;
        }
        
        </style>
</head>     
<body>

        <?php
            include 'header.php';
        ?>
       
    <div class="about-cont">
        <div class="col-info">
            <div class="title-row">
                <h1> ABOUT US </h1>
            </div>
            <div class="row-info">
                <h2> Lorem ipsum dolor sit amet consectetur adipisicing </h2>

                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur nemo perferendis expedita quos dolorem quia sapiente cum ipsam qui? Illum accusamus odio mollitia, ducimus aliquam neque ea rerum consectetur praesentium.</h3>
            </div>
            <div class="social-links">
            <ul class="social_footer_ul">
                <li><a href="http://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="http://youtube.com"><i class="fab fa-youtube"></i></a></li>
                <li><a href="http://instagram.com"><i class="fab fa-instagram"></i></a></li>
            </ul>
            </div>
        </div>
        <div class="col-img">
            <img src="images/about-images/owner.jpg">
        </div>
    </div>

    <div class="cont-2">
        <div class="img1">
            <img class="team-img" src="images/about-images/team1.jpg">
        </div>
        <div class="img2">
            <img class="team-img" src="images/about-images/team2.jpg">
        </div>
        <div class="img3">
            <img class="team-img" src="images/about-images/team3.jpg">
        </div>

        <div class="col1-title">
            <h1 style="font-size: 4.5rem; display: inline-block; height: 90px; color: #333030;"> MEET </h1>
            <h2 style="font-size: 2.4rem; color: #de4a4a; line-height: 2.9rem;"> OUR <br> TEAM </h2>
            <h1 style="font-size: 1.4rem; font-weight: bolder; margin-top: 0.5rem; color: #333030;"> WE ARE SPECIALISED AT </h1>
            <ul class = "lst-col">
                <li> Candid Wedding Photography </li>
                <li> Birthday Photography </li>
                <li> Cinematic Wedding Films </li>
                <li> Portrait Lifestyle Photography </li>
                <li> Event Photography </li>
            </ul>
        </div>

    </div>

    <?php
        include 'footer-bar.php';
    ?>
</body>
</html>