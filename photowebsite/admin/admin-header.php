<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
    *{
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
    }

    body{
        margin: 0;
        padding: 0;
    }
    .nav-first {
     border:2px solid  rgb(255,0, 0);
     height: 1.6rem;
     width:100vw;
     background-color: #e01313;
   }

   .ul-log{
    display:flex;
    flex-direction: row;
    justify-content: right;
    } 
   .login-btn{
        display:inline-block;
        padding: 0px 30px 0px;
    }
.login-btn a{
    color:rgb(204 6 6);
    background-color: white;
    text-decoration: none;
    border:1px solid #ff0606;
    border-radius: 4px;
    font-size: 15px;
    padding: 3px 15px 3px 17px;
    border-left: 3px solid #8d7676;
    border-right: 3px solid #8d7676;
}
.login-btn a:hover{
    background-color: #eae5e5;
    border:2px solid rgb(255, 56, 56);
}

/* ...... logo & menu bar design .......*/
.main_nav{
    height:8rem;
    width:100vw;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    flex-direction: row;
    background: white;
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
.itm-link a {
text-decoration: none;
color: #7a5353;
font-size: 18px;
font-weight: bold;
}
.itm-link a:hover{
color: rgb(218, 14, 14);
transition: 0.2s ease-out 0s;
text-decoration: wavy;
}
.itm-link a.selected{
    color: rgb(218, 14, 14);
    transition: 0.2s ease-out 0s;
    text-decoration: wavy;
}
@media only screen and ( min-width: 0px) and (max-width:1195px){
    #logo-img{
        margin-top: 3.25rem;
    }
    .main_nav {
        height: 12rem;
    }
    .itm-link {
        margin: 1rem 1rem;
    }

}
@media only screen and ( min-width: 0px) and (max-width:1017px){
    .main_nav {
        flex-wrap: nowrap;
        flex-direction: column;
        height: 12rem;
        margin-bottom: 1rem;
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
<title>admin-header</title>
</head>
<body>
<header>
    <div  class="nav-first">    
        <ul class="ul-log">
                <li class="login-btn"><a href="adminlogout.php"> LogOut</a> </li>
            </ul>              
        </div>
        
        <nav class="main_nav" style="border-bottom:2px solid #978989d6">
            <div class="logo-container">
           <img src="images/logo.png" id="logo-img">
            </div>
        
        <div id="menu-bar">
            <ul class="nav-items">
                <li class="itm-link"><a href="admin.php"> Bookings </a></li>
                <li class="itm-link"><a href="admin-packages.php"> Packages </a></li>
                <li class="itm-link"><a href="admin-photo.php"> Photo </a></li>
                <li class="itm-link"><a href="admin-feedback.php"> Feedback </a> </li>
                <li class="itm-link"><a href="admin-user.php"> Users </a></li>
           </ul>
        </div>
        </nav>
</header>
</body>
</html>
