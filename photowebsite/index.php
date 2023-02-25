<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="footer.css"/>
    <link rel="stylesheet" type="text/css" href="homestyle.css"/>
    <link rel="stylesheet" type="text/css" href="signup-login.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
         
         </style>
</head>
<body> 
        <!-- ..........................Navigation Start.................................. -->
        <div class="parallx-background"> 

<?php
    include 'header.php';
?>
<!-- ..........................Navigation End.................................. -->

     <!-- ........................ Login Popup Start.....................-->
     <?php
      include 'login.php';
    ?>

     <div id="login-modal">
  <div class="login-pge">
    <div class="pge-title">
        <h1>Login
        <span> <button type="submit" title="close" class="close-icon btn-danger" id="login-close"><i class="fas fa-times"></i></button> </span>
        </h1>
        </div>
  <form action=" " method="post" id="login-form">
    <p class="input-row">
    <input type="email" id="login_email" name="login_email" placeholder="Email" required><i class="validation"><span></span><span></span></i>
    </p>
    <p class="input-row">
      <input type="Password" id="login_password" name="login_password" placeholder="Password" required=""><i class="validation"><span></span><span></span></i>
    </p>
    <p class="input-row">
    <input type="submit" id="login" value="Login" name="login_submit">
    </p>
  </form>
  <div id="create-account-wrap">
    <p id="reg-msg">Not a member? <a href="#" id="login-link">Create Account</a><p>
   </div>
    </div>
  </div>   

  <!--........ Script for login popup .........-->
<script type="text/javascript">
  document.getElementById("login-show").addEventListener("click",function(){
    document.querySelector("#login-modal").style.display = "flex";
  })

  document.getElementById("login-link").addEventListener("click",function(){
    document.querySelector("#signup-modal").style.display = "flex";
    document.querySelector("#login-modal").style.display = "none";
  })

  document.getElementById("login-close").addEventListener("click",function(){
    document.querySelector("#login-modal").style.display = "none";
  })
    </script>
    <!-- ................ Login Popup End .....................-->
    

    <!-- .......... Register Popup Start................-->
    <?php
      include 'Register.php';
    ?>
      
    <div id="signup-modal">
    <div class="reg-page" id="reg-box">
        <div class="pge-title">
        <h1>Sign Up
        <span> <button type="submit" title="close" class="close-icon btn-danger" id="signup-close"><i class="fas fa-times"></i></button> </span>
        </h1>
        </div>
  <form action=" " method="post" id="Register-form">
    <div class="name-info">
    
    <p class="reg-paragraph"> 
    <input type="text" id="fstname-txtbox" name="first-name" placeholder=" " class="textbox" required>
    <label class="form-label"> First Name</label></p>
   
    <p class="reg-paragraph">
        <input type="text" id="lstname-txtbox" name="last-name" placeholder=" " class="textbox"  required>
        <label class="form-label"> Last Name</label>
    </p>
    </div>

    <p id="contact-txtbox" class="reg-paragraph">
        <input type="text" id="text" name="contact" placeholder=" " class="textbox" pattern="[0-9]{10}" required>
        <label class="form-label"> Contact No </label> 
    </p>
    <p class="reg-paragraph">
        <input type="email" id="text" name="email" placeholder=" " class="textbox" required>
        <label class="form-label"> Email </label> 
    </p>
    <p class="reg-paragraph">
        <input type="Password" id="password" name="password" placeholder=" " class="textbox" required> 
        <label class="form-label"> Password </label> 
        
    </p>
    <p class="reg-paragraph">
        <input type="Password" id="cpassword" name="cpassword" placeholder=" " class="textbox" required>
        <label class="form-label">  Confirm Password </label> <i class="fas fa-eye" id="toggle-eye" onclick="toggle()"></i>
    </p>
    <p class="reg-paragraph">
    <input type="submit" id="regsubmit" value="SignUp Now" name="submit">
    </p> 
  </form>
  <div id="create-account-wrap">
    <p id="reg-msg" class="reg-paragraph">Already a User? <a href="#" id="signup-link" class="msg-anchor">Login Here</a><p>
</div>
    </div>
</div>


  <!--........ Script for signup popup .........-->
  <script type="text/javascript">
  document.getElementById("signup-show").addEventListener("click",function(){
    document.querySelector("#signup-modal").style.display = "flex";
  })

  document.getElementById("signup-link").addEventListener("click",function(){
    document.querySelector("#login-modal").style.display = "flex";
    document.querySelector("#signup-modal").style.display = "none";
  })

  document.getElementById("signup-close").addEventListener("click",function(){
    document.querySelector("#signup-modal").style.display = "none";
  })
    </script>
<!--.... Toggle Password Script ....-->
<script>
            var state = false;
            function toggle(){
              if(state){
                document.getElementById("cpassword").
                setAttribute("type","password");
                document.getElementById("toggle-eye").style.color='#7C7B7B';
                state = false;
              }
              else{
                document.getElementById("cpassword").
                setAttribute("type","text");
                document.getElementById("toggle-eye").style.color='#2E2D2D';
                state = true;
              }
            }
  </script>
    <!-- .............. Register Popup End ....................... -->
    

         
        <!-- .............Text on image start........................... -->
        <div>
        <center>
        <div class="slider">
            <div class="imgs_slides">
                    <div class="slide-inner">
                        <p class="text1"> We offers wide variety of photography services </p>
                        <p class="text2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, natus libero assumenda incidunt eaque sit omnis tempora facere? Tempora sunt, animi deserunt optio itaque cupiditate laudantium illo magnam ratione quo.</p>
                    <a href="book.php" id="Book-btn"> Book Now</a>
                    </div>
                </div>
                <!-- Text on image end -->
            </div>
  

 <!-- .............Image animation End........................... -->

 <div class="msg-container">
    <div class="msg-ribbion">
          <h4> PHOTOGRAPHY IS A WAY OF FEELING, OF TOUCHING, OF LOVING </h4>
    </div>

 </div>
 </center>

 

 <!-- .............Service Section Start........................... -->
 <section class="service-cont">
    <div class="upp-text">
        <h1> Services </h1>

    <div class="animate-cont">
    <div class="text-animate">
        <span class="text first-text"> Book </span>
        <span class="text sec-text"> Wedding </span>
        <span class="text last-text"> PhotoShoot Today </span>
    </div>

    <script>
        const text = document.querySelector(".sec-text");

        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Wedding";
            }, 0);
            setTimeout(() => {
                text.textContent = "Anniversary";
            }, 4000);
            setTimeout(() => {
                text.textContent = "Events";
            }, 8000);
            setTimeout(() => {
                text.textContent = "Birthday";
            }, 12000); 
            setTimeout(() => {
                text.textContent = "Outdoor";
            }, 16000);
            setTimeout(() => {
                text.textContent = "Kids Portraits";
            }, 20000);
            setTimeout(() => {
                text.textContent = "Candid";
            }, 24000);//1s = 1000 milliseconds
        }

        textLoad();
        setInterval(textLoad, 12000);
    </script>
    </div>
    </div>

    <div class="services">
        <div class="service-info">
           <div class="text-cont"> <img src="images\service-images\wedding-rings.svg" alt="Wedding"> <h3> Wedding Photography</h3> </div>
           <div class="text-cont"> <img src="images\service-images\anniversary.svg" alt="Anniversary"> <h3> Anniversary Photography </h3>  </div>
           <div class="text-cont"> <img src="images\service-images\event.svg" alt="Events"> <h3> Events Photography </h3> </div>
           <div class="text-cont"> <img src="images\service-images\cake.svg" alt="Birthday"> <h3> Birthday Photography </h3> </div>
           <div class="text-cont"> <img src="images\service-images\outdoor.svg" alt="Outdoor"> <h3> Outdoor Photography </h3> </div>
           <div class="text-cont"> <img src="images\service-images\baby-boy.svg" alt="Kids Portraits"> <h3> Kids-Portraits Photography </h3>   </div>
           <div class="text-cont"> <img src="images\service-images\candid.svg" alt="Candid"> <h3> Candid Photography </h3>   </div>
        </div>
    </div>
</section>
<!-- .............Service Section End........................... -->

 <!-- .............Photo Section Start........................... -->
 <section class="photo-slider">
    <div class="hi-slide">
             <div class="img-cont" id="img_1"> <div> <h4 class="animate-character"> Candid </h4> </div> </div> 
             <div class="img-cont" id="img_2"> <div> <h4 class="animate-character"> Outdoor </h4> </div> </div> 
             <div class="img-cont" id="img_3"> <div> <h4 class="animate-character"> Kids Portraits </h4> </div> </div> 
              <div class="img-cont" id="img_3"> <div> <h4 class="animate-character"> Weddings </h4> </div> </div> 
              <div class="img-cont" id="img_2"> <div> <h4 class="animate-character"> Outdoor </h4> </div> </div> 
              <div class="img-cont" id="img_1"> <div> <h4 class="animate-character"> Candid </h4> </div> </div> 
        </ul>
    </div>
 </section>
 <!-- .............Photo Section End........................... -->
 
<!-- .............Package Section Start
<section id="packages">
    <div class="package-cont">
        <div class="starter-pkg">
        <div class="pkg_cont">
            <h1>STARTER</h1>
            <div class="price-circle">
                <h2> 1500 </h2>
           </div>
           <ul class="pkg_itm" type="disk">
               <li> yygh </li>
               <li>jjhbjb </li>
               <li> hjkhjkn</li>
               <li> hjjkjh</li>
        </div>
        <div class="traingle">
           <h2> <a href="#"> Book Now </a> </h2> 
        </div>
       </div>
        
    <div class="pro-pkg">
      <div class="pkg_cont">
         <h1>PRO</h1>
         <div class="price-circle">
               <h2> 3000 </h2>
        </div>
        <ul class="pkg_itm" type="disk">
               <li> yyghgggggggggggggggggggggggggggggggg </li>
               <li>jjhbjb </li>
               <li> hjkhjkn</li>
               <li> hjjkjh</li>
        </div>
        <div class="traingle">
        <h2> <a href="#"> Book Now </a> </h2> 
        </div>
      </div>
    <div class="advanced-pkg">
    <div class="pkg_cont">
            <h1>ADVANCED</h1>
            <div class="price-circle">
                <h2> 4000 </h2>
            </div>
            <ul class="pkg_itm" type="disk">
               <li> yygh</li>
               <li>jjhbjb </li>
               <li> hjkhjkn</li>
               <li> hjjkjh</li>
            </div>
            <div class="traingle">
              <h2> <a href="#"> Book Now </a> </h2> 
            </div>
    </div>
</div>
</section>
</div>
.............Package Section End........................... -->
<!-- .............Footer Section Start........................... -->

<footer id="contact_footer">
    <div class="cont-container">
        <div class="feedback-pge">
           
            <h2>GET IN TOUCH</h2>
        <form action=" " method="post" id="login-form">
        <input type="text" id="name" name="form-name" placeholder="Name" required>
        <input type="email" id="email" name="form-email" placeholder="Email" required>
        <input type="text" id="phone" name="form-phone" placeholder="Phone No"  pattern="[0-9]{10}" required>
        <textarea rows="8" placeholder="Write a Message.." class="msg-textarea" name="form-message" required></textarea>
        <p>
        <input type="reset" id="reset" value="Clear Form" name="reset">
        <input type="submit" id="feed-submit" value="Send" name="feed-submit">
        </p> 
      </form>
</div>

<?php

include 'connection.php';

if (isset($_POST['feed-submit'])) {
	$feedback_name = $_POST['form-name'];
	$feedback_email = $_POST['form-email'];
    $feedback_phone = $_POST['form-phone'];
    $feedback_message = $_POST['form-message'];

	$query = "INSERT INTO user_feedback (name, email, phone, message)
    VALUES ('$feedback_name', '$feedback_email',' $feedback_phone', '$feedback_message')";
    $data = mysqli_query($conn, $query);
        if ($data){
        echo "<script> alert('Your Message Send Successfully'); </script>";
      }
       else{
        echo "<script> alert('Something went wrong please try again'); </script>";
       }
}
?>


<div class="contact-cont">
<h2>CONTACT INFO</h2>
    <p><span class="fas fa-map-marker-alt"> </span>
    <text>Laxmi Complex .Gandhi Chowk .Banda </text>
    </p>
    <p>
       <span class=" fas fa-phone-alt"> </span>
       <text>  +91-9579821932 </text>
    </p>
    <p>	
       <span class=" fas fa fa-envelope"> </span>
       <text> ganeshphoto.service @gmail .com</text>
    </p>
</div>
<div class="reviews-cont">
<h2>LOCATION</h2>
<p class="review-tab">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8065.2967156050745!2d73.86810687302774!3d15.819406742093342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf8d46d1837773%3A0x6952ca7f7056abd7!2sBanda%20Bus%20Depot!5e0!3m2!1sen!2sin!4v1671038390518!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>

</div>
</div>
<?php
 include 'footer-bar.php';
?>
    
</footer>
<!-- .............Footer Section End........................... -->
</body>
</html>


