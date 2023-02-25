<?php
   include 'config.php';

   error_reporting(0);

   session_start();

   if (isset($_POST['login_submit'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $sql = "SELECT * FROM admin_login_info WHERE Username='$email' AND Password='$password'";
	  $result = mysqli_query($conn, $sql);
	  if ($result->num_rows > 0) {
		    $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_email'] = $email;
        header("location: admin.php");
		 } 
  else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
   ?>

   
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login </title>
    <link rel="stylesheet" href="loginstyle.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

*{
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
}
 
#login-modal{
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

.login-pge{
    border: 1px solid rgb(194 194 194);
    width: 27rem;
    height:27rem;
    flex-shrink: 1;
    border-radius: 0.5rem;;
    background: white;
   /* background-color:rgba(0,0,0,0.7);
      box-shadow: 4px 6px 14px 0px rgb(168 168 168); */  
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
.close-icon {
    background: none;
    float: right;
    border: none;
    padding: 0px 8px;
    cursor: pointer;
}
.btn-danger {
    color: #777;
    font-size: 1.3rem;
}
.btn-danger:hover{
    color:rgb(87, 85, 85);
}

.input-row {
  position: relative;
  margin:2.8rem 0px;
}

#login-form {
  padding: 0rem 1rem;
}
                                                                                                    
.input-row > input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none;
  height: 2.8rem;
  line-height: 1rem;
  border-radius: 4px;
}

.input-row >
input::placeholder{
  font-size: 1.1rem;
  color: #626262;
}

.input-row >
input[type="email"],
input[type="Password"] {
  width: 100%;
  padding: 0 0 0 10px;
  margin: 0;
  height: 3.5rem;
  color: #3c3b3b;
  border: 1px solid #7a7760;
  font-style: normal;
  font-size: 1.2rem;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: relative;
  display: inline-block;
  background: rgba(255,255,255,.1);
}

.input-row >
input[type="email"]:focus,
input[type="Password"]:focus {
  border-color: #3ca9e2;
}
.input-row >
input[type="submit"] {
  border: none;
  display: block;
  height: 3.5rem;
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

.input-row >
input[type="submit"]:hover {
  background-color: #45bbfb;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
      </style>
</head>
<body>
<div id="login-modal">
  <div class="login-pge">
    <div class="pge-title">
        <h1> Admin-Login
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
    </div>
  </div> 
    
</body>
</html>