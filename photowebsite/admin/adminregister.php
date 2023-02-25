<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
   header("Location: adminlogin.php");
}

if (isset($_POST['signup'])){
    $user_name = $_POST['username'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];

    if ($pwd == $cpwd ){
        $sql = "SELECT * FROM admin_login_info WHERE Username='$user_name'";
	      $data = mysqli_query($conn, $sql);

        if (!$data->num_rows > 0)
        {
           $sql = "INSERT INTO admin_login_info (Username, Password) 
          VALUES ('$user_name', '$pwd')";
           $data = mysqli_query($conn, $sql);

            if (!$data)
            {
            echo "<script>alert('Admin Registration Successfull.')</script>";
            $user_name = "";
            $pwd = "";
            $cpwd="";
            }
    header("Location: adminlogin.php");
   }
   else{
    echo "<script>alert('Username Already Exists.')</script>";
   }

  }
  else{
  echo "<script>alert('Password Not Matched.')</script>";
      }
  }
?>

   
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Register </title>
    <link rel="stylesheet" href="loginstyle.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

*{
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
}
#signup-modal{
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background:rgba(0,0,0,0.6);
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
}

.reg-page{
    border: 1px solid rgb(194 194 194);
    border-radius: 0.5rem;
    height: 30rem;
    width: 32rem;
    text-align: center;
    background: white;
    /* background-color: rgba(0,0,0,0.7); 
     background: linear-gradient(181deg,#f54126 0%,#eab9b9 50%,#f54126 90%); 
    box-shadow: 4px 6px 14px 0px rgb(168 168 168);*/
}

.pge-title{
    padding: 1.4rem;
    border-bottom: 1px solid #777;
}
.pge-title > h1{
    color: #616161;
    font-size: 1.35rem;
    text-align: center;
}
.reg-paragraph >
input {
     display: block;
    box-sizing: border-box;
    width: 100%;
    outline: none;
    height: 3.5rem;
    line-height: 1.5rem;
    border-radius: 4px; 
}

.reg-paragraph{
    position: relative;
    margin: 2rem 0;
}
.textbox {
   width: 100%;
   padding: 0 0 0 10px;
   margin: 0;
   color: #3c3b3b;
   border: 1px solid #7a7760;
   font-style: normal;
   font-size: 1.1rem;
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
   position: relative;
   display: inline-block;
   background: rgba(255,255,255,.1);
}

.textbox:focus {
   border-color: #3ca9e2;
}

.textbox:hover{
    background-color:rgba(255,255,255,.2); ;
} 
#Register-form{
padding: 0rem 1rem;
}
#regsubmit,
input[type="submit"] {
border: none;
display: block;
background-color: #3ca9e2;
color: #fff;
font-weight: bold;
text-transform: uppercase;
cursor: pointer;
-webkit-transition: all 0.2s ease;
transition: all 0.2s ease;
font-size: 18px;
position: relative;
display: inline-block;
cursor: pointer;
text-align: center;
}

#regsubmit,
input[type="submit"]:hover {
-webkit-transition: all 0.2s ease;
background-color: #329dd5;
transition: all 0.2s ease;
}
      </style>
</head>
<body>
    <div id="signup-modal">
    <div class="reg-page" id="reg-box">
        <div class="pge-title">
        <h1> Admin-Sign Up </h1>
      </div>
  <form action=" " method="post" id="Register-form">
     <p class="reg-paragraph"> 
    <input type="email" id="email" name="username" placeholder="Username" class="textbox" required>
    </p>
     <p class="reg-paragraph"> 
      <input type="Password" id="password" name="password" placeholder="Password" class="textbox" required="">
    </p>
     <p class="reg-paragraph"> 
      <input type="Password" id="password" name="cpassword" placeholder="Confirm Password" class="textbox" required="">
    </p>
     <p class="reg-paragraph"> 
    <input type="submit" id="regsubmit" value="SignUp Now" name="signup">
    </p>
  </form>
    </div>
  </div>
</body>
</html>

