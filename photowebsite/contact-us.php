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
    <title>contact-us</title>
</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }

    .page-cont{
        width:100%;
        display:flex;
    }
    .page-cont h2{
        margin: 0.5rem 0.5rem 1vw 0.5rem;
        color: #634747;
        font-size: 1.8vw;
    }
    .contact-cont{
        width:40%;
        padding:1rem;
        background: url(images/abstract2.jpg);
        background-size: cover;

    }
    .map-box{
        height:25rem;
        border: 1px solid #cac4c4;
    }

    .address{
        margin: 1rem 0rem;
        background: #fee9e9;
    }
    .address p{
    margin: 1.2vw 0.5vw 1.2vw 0.5vw;
    padding-top: 0.4vw;
    padding-bottom: 0.4vw;
    border-bottom: 1.5px solid #994646;
    border-right: 1vw solid transparent;
    border-left: 1vw solid transparent;
    display: flex;
    align-items: center;

   }
   .address p text{
    display: inline-block;
    color: #0a0a0a;
    font-size: 1.1vw;
   }
   .address p .fas{
    font-size: 1.5vw;
    color: #ffffff;
    background: black;
    margin-right: 1vw;
    border: 1px solid #994646;
    border-radius: 3vw;
    padding: 0.5vw;
   }



    .form-cont{
        width:60%;
        padding:1.5rem;
        /* background: #ebebeb; */
        background: url(images/abstract3.jpg);
        background-size: cover;
    }

    .form-cont input,textarea{
margin:0.3vw;
width:95%;
border: 2px solid #7a6e6e;;
background: transparent;
border-radius:0.3rem;
padding:0.2rem 0rem 0.2rem 1rem;
font-size:1.4vw;
color:black;
background: #fbfbfb;
}
.form-cont input{
height:2.8vw;
color: #484851;
}
.form-cont input.placeholder{
    color:#040405;
}
.form-cont textarea{
height:20vw;
}

.form-cont input::placeholder,
.form-cont textarea::placeholder{
font-size: 1.2vw;
color: black;
}

#reset{
width: 9vw;
height: 3.5vw;
background: #2d2121;
border-radius: 0rem;
font-size: 1.2vw;
color: white;
border: none;
padding: 0.5rem;
font-weight: bold;
cursor: pointer;

}
#feed-submit{
width: 7vw;
height: 3.5vw;
background: #b20a0a;
border-radius: 0rem;
font-size: 1.2vw;
color: white;
border: none;
padding: 0.5rem;
font-weight: bold;
cursor: pointer;
}
    </style>
<body>

    <?php
    include'header.php';
    ?>
    
<div class="page-cont">
<div class="contact-cont">
    <h2> CONTACT INFO </h2>
    <div class="map-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8065.2967156050745!2d73.86810687302774!3d15.819406742093342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf8d46d1837773%3A0x6952ca7f7056abd7!2sBanda%20Bus%20Depot!5e0!3m2!1sen!2sin!4v1671038390518!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    <div class="address">
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

</div>
<div class="form-cont">
    <h2>GET IN TOUCH</h2>
        <form action=" " method="post" id="login-form">
        <input type="text" id="name" name="form-name" placeholder="Name" required>
        <input type="email" id="email" name="form-email" placeholder="Email" required>
        <input type="text" id="phone" name="form-phone" placeholder="Phone No" pattern="[0-9]{10}" required>
        <textarea rows="8" placeholder="Write a Message.." class="msg-textarea" name="form-message" required></textarea>
        <p>
        <input type="reset" id="reset" value="Clear Form" name="reset">
        <input type="submit" id="feed-submit" value="Send" name="feed-submit">
        </p> 
      </form>

</div>
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
        echo "<script> document location = 'contact-us.php'; </script>";
       }
       else{
        echo "<script> alert('Something went wrong please try again'); </script>";
       }
}
?>



<?php
    include'footer-bar.php';
    ?>
</body>
</html>