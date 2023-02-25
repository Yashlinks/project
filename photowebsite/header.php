<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <style>
      
        /* header.php css start*/
        *{
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
}
#home{
    box-sizing: border-box;
}
.nav-first {
    border: 2px solid rgb(255,0, 0);
    height: 1.74rem;
    width: 100vw;
    background-color: #e01313;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.nav-btn {
    color: red;
background-color: whitesmoke;
text-decoration: none;
border: 1px solid rgb(92 75 75);
letter-spacing: 0.8px;
border-radius: 5px;
padding: 3px 15px 3px 17px;
border-left: 3px solid #8d7676;
border-right: 3px solid #8d7676;
margin: 0 1.5rem;
font-size: 14px;
cursor: pointer;
}

.nav-btn:hover{
background-color: #ebe8e8;
}


/* ...... logo & menu bar design .......*/
.main_nav{
    height:8rem;
    width:100vw;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    flex-direction: row;
    background:#faf9f9;
    border-bottom: 2px solid #908888;
}

#logo-img{
margin-left: 3rem;
margin-top: 0.25rem;
max-height: 6rem;
max-width: 19rem;
width: 100vw;
flex-shrink: 1;
}
#menu-bar{
width: 60vw;
}
.nav-items{
display:flex;
justify-content: space-between;
flex-direction: row;
flex-wrap: wrap;
padding-left: 0px;
}
.itm-link{
display:inline-block;
padding: 1em 1em 1em 1em; 
margin: 2.12rem 1rem;  
}

.itm-link > .pge-itm {
text-decoration: none;
color: #7a5353;
font-size: 18px;
font-weight: bold;
}

.itm-link >
.pge-itm:focus, 
.pge-itm:hover,
.pge-itm:link:focus,
.pge-itm:link:hover,
.pge-itm:visited:focus,
.pge-itm:visited:hover,
.pge-itm:active:focus,
.pge-itm:active:hover{
color: rgb(218, 14, 14);
transition: 0.2s ease-out 0s;
text-decoration: wavy;
}

.itm-link a.selected{
    color: rgb(218, 14, 14);
    transition: 0.2s ease-out 0s;
    text-decoration: wavy;
}
.selected-page{
            background:red;
            height:2rem;
        }
/* header.php css End*/
        

@media only screen and ( min-width: 0px) and (max-width:1121px){
    #logo-img{
        margin-top: 3.25rem;
    }
    .main_nav {
        height: 12rem;
    }
    .itm-link{
        margin: 1rem 1rem;
    }

}
@media only screen and ( min-width: 0px) and (max-width:1017px){
    .main_nav {
        flex-wrap: nowrap;
        flex-direction: column;
        height: 12rem;
        padding-bottom: 1rem;
}
    .logo-container{
    display: flex;
    justify-content: center;
}

    #menu-bar {
    width: 100vw;
}

   .itm-link {
    display: inline-block;
    padding: 1em 0.5em 0em 0.5em;
    margin: 0rem 0rem;
}
#logo-img{
        margin-top: 2.25rem;
        margin-left: 0rem;
}
}
@media only screen and ( min-width: 0px) and (max-width:500px){
    .main_nav {
        height: 22rem;
    }
    
    .nav-items {
        flex-direction: column;
        align-items: center;
    }
    .msg-ribbion h4{
        font-size:10px;
}
}
        </style>
</head>
<body>
<header id="home">
    <div  class="nav-first">    
    
    <?php
         if(isset($_SESSION['user_email'])  && $_SESSION['user_email'] == true){
           ?> <button id="logout-show" class="nav-btn" onClick="location.href='logout.php'"> Logout </button>
           <?php }
        
            else
            {
                ?> <button id="login-show" class="nav-btn"> Login </button> 
                <button id="signup-show" class="nav-btn"> Sign Up </button>
       <?php }
    ?>    
        </div>
        
        <nav class="main_nav">
            <div class="logo-container">
           <img src="images/logo.png" id="logo-img">
            </div>
        
        <div id="menu-bar">
            <ul class="nav-items">
                <li class="itm-link"><a class="pge-itm" href="index.php"> Home </a></li>
                <li class="itm-link"><a class="pge-itm" href="about.php"> About</a></li>
                <li class="itm-link"><a class="pge-itm" href="photo.php"> Photo</a></li>
                <li class="itm-link"><a class="pge-itm" href="packages.php"> Packages</a> </li>
                <li class="itm-link"><a class="pge-itm" href="contact-us.php"> Contact Us</a></li>
             <!--   <li class="itm-link"><a href="#" id="Book-btn"> Book Now</a></li> -->
           </ul>
        </div>
        </nav>
</header>
</body>
</html>
