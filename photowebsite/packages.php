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


<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}
    body{
        margin:0px;
        padding:0px;
    }
    .row-1 {
    background: #dededeba;
    letter-spacing: 0.2vw;
    color: #4a1313;
    text-transform: uppercase;
    text-align: center;
}
    .row-1 h3{
    margin: 2% 25% 0%;
    padding-bottom: 0.7vw;
    padding-top: 0.7vw;
    background: #5a5a5a26;
    font-size: 2vw;
    border-bottom: 2px solid #854444;
    border-left: 7vw solid transparent;
    border-right: 7vw solid transparent;
    display: inline-block;
    }
.row-1 div{
    margin-top: 12px;
    font-size: 1.1vw;
}
   .sections{
    display:flex;
}
   .package-cont{
   /* background: linear-gradient(182deg,#ffffff 40%,#f9f9f9 50%);
    background: #f9f9f9;*/
    background: url(images/abstract1.jpg);
    background-size: cover;
    padding: 2% 1% 2% 3%;
    display: flex;
    justify-content: space-evenly;
    width:100%
}
.basic-pkg, .standard-pkg, .pro-pkg{
    width:26%;
    text-align:center;
    display: inline-block;
    margin: 0vw 2vw 0vw 2vw;
    border: 1px solid #211e1e;
    height: fit-content;
    background: #f4f1eb5c;
    box-shadow: 9px 20px 25px -5px #6d6d6d29;
    line-height: 1.6rem;
}
.pkg_cont{
    padding: 1.2vw;
  /*  border: 1px solid #6d6d6d29; */
    color: white;
    /* background: #f4f1eb5c; */
    /* border: 1px solid #211e1e; */
    /* box-shadow: 9px 20px 25px -5px #6d6d6d7d; */
}

.price-circle{
     /* background: #ca1f1f; */
    /* border-radius: 8vw; */
    display: inline-block;
    margin: 1.5rem 0 1.5rem 0;
}
.img-box{
    display: inline-block;
}
.pkg-up{
    width:3rem;
}
.package-cont h1{
    padding-bottom: 1vw;
    margin-bottom: 1vw;
    border-bottom: 2px solid #3e3737;
    font-size: 1.6vw;
    color: #5d5b5b;
    font-weight: 500;
    letter-spacing: 0.4rem;
}
.package-cont h2{
    font-size: 2vw;
    color: #4e4e4e;
    letter-spacing: 0.2rem;
}
.pkg_cont ul{
    display: inline-block;
    padding-left: 1.5vw;
}
.pkg_cont li{
    text-align: left;
    font-size: 1.1vw;
    font-weight: 500;
    color: #3e3737;
}
.btn-container{
    width:100%;
    text-align: center;
    margin: 1rem 0 2rem 0;
}
#book-btn{
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 1.2vw;
    background: #ff4060;
    padding: 1rem;
    cursor: pointer;
}

#book-btn:hover{
    background:#fb1b40;
}

.album-cont{
    width:43%;
    padding-top: 2%;
}
#album-img{
    width: 100%;
    height: 90%;
    position: sticky;
    top: 0;
    border: 1px solid #e0dddd;
}

.cost-cont{
    margin: 2% 2% 2% 2%;
    width: 50%;
    border: 1px solid #7e7b7b;
    padding: 1%;
    background: url(images/adcost-bg.png) no-repeat, linear-gradient(to bottom, #ffffff 40%,#7d7d7d 100%);
    background-size: 27vw;
    background-position-x: 25vw;
}
.add-cost{
    width: 100%;
    padding: 5% 0;
}
.row-title{
    text-align: center;
    font-size: 1.1vw;
    letter-spacing: 0.3vw;
}
.row-title h1{
    font-weight: 700;
    display: inline-block;
    padding: 0.7vw 0;
    color: #9b6262;
    border-bottom: 2px solid #9b6262;
    border-left: 4vw solid transparent;
    border-right: 4vw solid transparent;
    background: #5a5a5a12;
}
.itm-list{
    padding: 2vw 0vw 2vw 3vw;
    line-height: 3vw;
    font-size: 1.3vw;
    letter-spacing: 0.1vw;
}
.itm-list h2{
    display: inline-block;
    margin-left: 1.5rem;
    font-size: 1.6vw;
    color: #da0606;
}
.note-row{
    text-align: center;
    text-decoration: underline;
    font-size: 0.7vw;
    letter-spacing: 2px;
    color: #822323;
    background: #fcfcfc;
    padding: 1rem;
    border-bottom: 1px solid #cac3c3;
}
.note-row h2{
    font-weight: 500;
    font-style: italic;
}
.note-row h2 a{
    text-decoration: none;
    cursor: pointer;
    color: #9c3613;
}

        </style>
</head>
<body>

    <?php
    include 'header.php';
    ?>
    <div class="row-1">
            <h3> Packages </h3>
            <div>Our Top Three Photography Packages</div>
        </div>
<section id="packages">
    <div class="sections">
    <div class="package-cont">
     
        <div class="basic-pkg">
        <div class="pkg_cont">
       
            <h1>BASIC</h1>  
            <div class="price-circle">

<!-- php basic package price code-->
<?php 
 $query = "SELECT * FROM basic_package";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);
 if($total != 0)
 {
    while( $result = mysqli_fetch_assoc($data))
    {
      echo "  <h2>".$result['price']."</h2> ";
    }
  }
?>
</div>
<div>
           <ul class="pkg_itm" type="disk">

<!-- php basic package details code -->
<?php
    $query = "SELECT * FROM basic_package";
    $data = mysqli_query($conn, $query);
           
    $total = mysqli_num_rows($data);
           
    if($total != 0) {
        while( $result = mysqli_fetch_assoc($data))
     {
      echo "    <li>".$result['photographer']."</li>
                <li>".$result['videographer']."</li>
                <li>".$result['video_coverage']."</li>
                <li>".$result['digital_files']."</li>
                <li>".$result['album']."</li>
                <li>".$result['dvd']."</li>
                <li>".$result['benefit1']."</li>
                <li>".$result['benefit2']."</li>";
     }
  }
  ?>
        </div>      
        </div>
        <div class="btn-container">
           <h2> <a href="book.php" id="book-btn"> Book Now </a> </h2> 
        </div>
       </div>
      
       
    <div class="standard-pkg">
      <div class="pkg_cont">
      
      <h1>STANDARD</h1> 
         <div class="price-circle">

 <!-- php standard package price code-->
<?php 
 $query = "SELECT * FROM standard_package";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);
 if($total != 0)
 {
    while( $result = mysqli_fetch_assoc($data))
    {
      echo "  <h2>".$result['price']."</h2> ";
    }
  }
?>
</div>
<div>
           <ul class="pkg_itm" type="disk">

<!-- php standard package details code -->
<?php
    $query = "SELECT * FROM standard_package";
    $data = mysqli_query($conn, $query);
           
    $total = mysqli_num_rows($data);
           
    if($total != 0) {
        while( $result = mysqli_fetch_assoc($data))
     {
      echo "    <li>".$result['photographer']."</li>
                <li>".$result['videographer']."</li>
                <li>".$result['video_coverage']."</li>
                <li>".$result['digital_files']."</li>
                <li>".$result['album']."</li>
                <li>".$result['dvd']."</li>
                <li>".$result['benefit1']."</li>
                <li>".$result['benefit2']."</li>
                <li>".$result['benefit3']."</li>";
     }
  }
  ?>
  </div>
 </div>
        <div class="btn-container">
           <h2> <a href="book.php" id="book-btn"> Book Now </a> </h2> 
        </div>
      </div>

      <div class="pro-pkg">
    <div class="pkg_cont">

            <h1> PRO </h1>
            <div class="price-circle">

<!-- php pro package price code-->
<?php 
 $query = "SELECT * FROM pro_package";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);
 if($total != 0)
 {
    while( $result = mysqli_fetch_assoc($data))
    {
      echo "  <h2>".$result['price']."</h2> ";
    }
  }
?>
</div>
<div>
           <ul class="pkg_itm" type="disk">

<!-- php pro package details code -->
<?php
    $query = "SELECT * FROM pro_package";
    $data = mysqli_query($conn, $query);
           
    $total = mysqli_num_rows($data);
           
    if($total != 0) {
        while( $result = mysqli_fetch_assoc($data))
     {
      echo "    <li>".$result['photographer']."</li>
                <li>".$result['videographer']."</li>
                <li>".$result['video_coverage']."</li>
                <li>".$result['digital_files']."</li>
                <li>".$result['album']."</li>
                <li>".$result['dvd']."</li>
                <li>".$result['benefit1']."</li>
                <li>".$result['benefit2']."</li>
                <li>".$result['benefit3']."</li>";
     }
  }
  ?>
        </div>      
        </div>
        <div class="btn-container">
           <h2> <a href="book.php" id="book-btn"> Book Now </a> </h2> 
        </div>
       </div>
</div>
</div>
<div class="note-row">
     <h2>  PLEASE <span> <a href = "contact-us.php"> CONTACT US </a> </span> ABOUT CUSTOM PACKAGES </h2>
  </div>

<div class="sections">
    <div class="bottom-col" style="display:flex">

<div class="cost-cont">
    <div class="add-cost">
        <div class="row-title"> <h1> ADD-CHARGE </h1> </div>
        <div class="itm-list">
            <ul>
                <li> 1 Hour Additional -Video            =<h2> 4500/-Rs </h2> </li>
                <li> Extra Album Pages                   =<h2> 650/-Rs </h2> </li>
                <li> Candid Photographer Full Day        =<h2> 10000/-Rs </h2> </li>
                <li> Short Movie Cinematography Full Day =<h2> 12000/-Rs </h2> </li>
            </ul>
        </div>
    </div>
    
</div>
<div class = album-cont>
      <img src="images\album-img.jpg" id="album-img">
      </div>
</div>
</section>

   <?php
     include'footer-bar.php';
   ?>

</body>
</html>





     