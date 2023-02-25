<?php
  session_start();
  error_reporting(0);
  $homepage = $_SESSION['user_email'];
  if($homepage == true){
   
    }
else{
    header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Admin Image Gallery </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <style type="text/css">
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            font-family: 'Poppins', sans-serif;
        }
       
        body{
            font-size: 16px;
            background-color: aliceblue;
        }

        .close-icon {
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }

        .container{
            width:75%;
            margin: 4rem auto 0;
            line-height: 1.42857143;
            box-sizing: border-box;
        }
        .form-image-upload {
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }

      /* alert messages */
        .alert{
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            text-align: left;
        }
        .alert-danger{
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;      
        }
        .alert > ul{
            margin:0 auto 0;
        }
        .alert-success{
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6; 
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-md-5, .col-md-3, .col-md-2, .col-sm-3{
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        input[type=file] {
            display: block;
        }
        .form-control {
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;                
            color: #555;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
            box-sizing: border-box;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;
        }

        /* image gallery */
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
            width: 300px !important;
            height: 160px !important;
        }
        .text-center {
    text-align: center;
}
.text-muted {
    color: #777;
    font-size: 85%;
}
a {
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
/*code for delete button */
.close-icon {
    border-radius: 50%;
    position: absolute;
    right: 5px;
    top: -10px;
    padding: 5px 8px;
}
.btn-danger {
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    background-color: #d9534f;
    border-color: #d43f3a;
}
.fas{
    position: relative;
    top: 1px;
    display: inline-block;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
}
.btn-danger:hover{
    background-color:#e2403a;
    border-color: #aa2f2a;
    transition: .2s ease-in-out;
}

    </style>
</head>

<body>
    
<?php
    include 'admin-header.php';
?>

    <div class="container">

        <form action="./imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">

            <!-- code to show error message -->
            <?php if (!empty($_SESSION['error'])) { ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <li><?php echo $_SESSION['error']; ?></li>
                    </ul>
                    
                </div>
            <?php unset($_SESSION['error']);
            } ?>

            <!-- code to show success message  -->
            <?php if (!empty($_SESSION['success'])) { ?>
                <div class=" alert alert-success">
                    <strong><?php echo $_SESSION['success']; ?></strong>
                </div>
            <?php unset($_SESSION['success']);
            } ?>

            <div class="row">
                <div class="col-md-5">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-5">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-2">
                    <br />
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>


        <div class="row">
            <div class='list-group gallery' style="width:100%;">
                <?php
                require('connection.php');

                $sql = "SELECT * FROM image_gallery";
                $images = $conn->query($sql);

                while ($image = $images->fetch_assoc()) {

                ?>
                    <div class='col-sm-3' style="float: left;">

                        <a class="thumbnail fancybox" rel="ligthbox" href="./uploads/<?php echo $image['image'] ?>">
                        
                            <img alt="" src="./uploads/<?php echo $image['image'] ?>" />
                            <div class='text-center'>
                                <small class='text-muted'><?php echo $image['title'] ?></small>
                            </div> <!-- text-center / end -->
                        </a>

                        <!-- form to delete image -->
                        <form action="./imageDelete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                            <button type="submit" title="delete" class="close-icon btn btn-danger"><i class="fas fa-times"></i></button>
                        </form>

                    </div> <!-- col-6 / end -->
                <?php } ?>

            </div> <!-- list-group / end -->
        </div> <!-- row / end -->
    </div> <!-- container / end -->
</body>
</html>



<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none",
        });
    });
</script>