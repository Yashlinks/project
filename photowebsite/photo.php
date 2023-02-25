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
    <title>Photo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <style>
        
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            margin:0px;
            padding:0px;
            background: linear-gradient(45deg, black, transparent);
        }
    .title h1{
        font-size: 2.5rem;
        margin: 3% 25% 2.5%;
        padding-bottom: 1rem;
        letter-spacing: 0.2rem;
        font-weight: 900;
        text-align: center;
        border-bottom: 2px solid;
        width: 40%;
        color: #777;
        border-left: 5rem solid transparent;
        border-right: 5rem solid transparent;
        box-sizing: unset;
        }
    .img-box{
        margin: 2rem 3.4rem;
        }
        .wraper{
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            display: none;
        }
    .gallery {
        display: inline-block;
        margin-top: 20px;
        }
    .list-group {
        padding-left: 0;
        margin-bottom: 20px;
    }
    .carousel-inner>.item>a>img,
        .carousel-inner>.item>img,
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            width: 27.8vw!important;
            height: 27rem  !important;
        }
.text-center {
    text-align: center;
}
.text-muted {
    color: #777;
    font-size: 85%;
}
 .wraper a {
    color: #337ab7;
    text-decoration: none;
}
.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
}
.thumbnail:hover{
    border:1px solid #337ab7;
    transition: border .2s ease-in-out;
    text-decoration: underline;
    color: #777;
}
.btncontainer{
    display:flex;
    justify-content: center;
    align-items: center;
}

.btncontainer button{
    border: none;
    border-radius: 5px;
    width: fit-content;
    padding: 5px;
    font-size: 20px;
    background-color: whitesmoke;
    color: #363131;
    font-weight: 500;
    cursor: pointer;
}
.btncontainer button:hover{
    background-color: #ddd;
    border: #777;
}
.wraper:nth-child(-n+6){
    display: block;
}
        </style>
</head>
<body>

<?php
 include'header.php';
?>

<div class="gallery-cont">
    <div class="title">
       <h1> Photo Gallery </h1>
    </div>

    <div class="img-box">
    <div class='list-group gallery' style="width:100%;">
                <?php
                require('connection.php');

                $sql = "SELECT * FROM image_gallery";
                $images = $conn->query($sql);

                while ($image = $images->fetch_assoc()) {

                ?>
                    <div class='wraper' style="float: left;">

                        <a class="thumbnail fancybox" rel="ligthbox" href="./admin/uploads/<?php echo $image['image'] ?>">
                        
                            <img alt="" src="./admin/uploads/<?php echo $image['image'] ?>" />
                            <div class='text-center'>
                                <small class='text-muted'><?php echo $image['title'] ?></small>
                            </div> <!-- text-center / end -->
                        </a>
                    </div>
                        <?php } ?>
             </div>

            <div class="btncontainer">
                            <button class="btn"> Load More </button>
                        </div>
    </div>
</div>

 <?php 
    include 'footer-bar.php';
    ?>
    
<script>
    var wraper = document.querySelectorAll('.wraper');
    var btn = document.querySelector('.btn');
    var currentimg = 6
    btn.addEventListener('click',function(){
        for(var i =currentimg; i<currentimg+3; i++){
            if(wraper[i]){
                wraper[i].style.display = 'block';
            }
        }
        currentimg += 3;
        if(currentimg>=wraper.length){
            event.target.style.display="none";
        }
    })
    </script>
</body>
</html>

<!-- FancyBox Script to popup Box  -->
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none",
        });
    });
</script>