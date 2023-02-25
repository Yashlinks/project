<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update-packages</title>
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
    *{
    font-family: 'Poppins', sans-serif;
    }
    body{
        margin:0px;
        padding:0px;
        background: linear-gradient(182deg,#f5f9ff 40%,#f6f2f2 50%);
    }

   .package-cont{
    display: flex;
    height: 100vh;
    align-items: center;
    justify-content: center;
    }
    
    .package-cont h1{
      padding-bottom: 1rem;
    margin-bottom: 1rem;
    border-bottom: 2px solid #3e3737;
    font-size: 1.6rem;
    color: #5d5b5b;
    font-weight: 500;
    letter-spacing: 0.4rem;
}
.package-cont h2{
    font-size: 2rem;
    color: #4e4e4e;
    letter-spacing: 0.2rem;
    margin: 0;
}
.basic-pkg{
    width:24rem;
    text-align:center;
    display: inline-block;
    border: 1px solid #211e1e;
    height: fit-content;
    background: #f4f1eb5c;
    box-shadow: 9px 20px 25px -5px #6d6d6d29;
    line-height: 1.9rem;
}
.pkg_cont{
    padding: 1.2rem;
  /*  border: 1px solid #6d6d6d29; */
    color: white;
}
.pkg_cont ul{
    display: inline-block;
    padding-left: 1.5rem;
}
.pkg_cont li{
       text-align: left;
    font-size: 1.1rem;
    font-weight: 500;
    color: #3e3737;
}

.price-circle{
    display: inline-block;
    margin: 1.5rem 0 1.5rem 0;
}
.price-circle input{
    width: 18rem;
    height: 2.2rem;
    font-size: 2rem;
    text-align: center;
    color: #4e4e4e;
    background: none;
    border: none;
}
.pkg_itm input{
    width: 16rem;
    height: 1.5rem;
    background: none;
    font-size: 1.3rem;
    font-weight: bold;
    color: #3e3737;
    border: none;
}
.btn-container{
    width:100%;
    text-align: center;
    margin: 1rem 0 2rem 0;
}
#update-basic{
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 1.2rem;
    background: #ff4060;
    padding: 1rem;
    border: none;
    cursor: pointer;
}

#update-basic:hover{
    background:#fb1b40;
    transition: 0.5s;
}
        </style>
</head>
<body>
<center>
<section id="packages">
    <form action=" " method="post" id="update-form">
    <div class="package-cont">

    <div class="basic-pkg">
    <?php
        $id = (isset($_GET['id']));
        $query = "SELECT * FROM basic_package WHERE id = '$id'";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);
    ?>
        <div class="pkg_cont">
            <h1>BASIC</h1>
            <div class="price-circle">
            <h2><input type="text" id="price" name="price" value="<?php echo $result['price'];?>"></h2>
           </div>
           <div>
           <ul class="pkg_itm" type="disk">

                <li><input type="text" id="photographer" name="photographer" value="<?php echo $result['photographer']; ?>"> </li>
                <li><input type="text" id="videographer" name="videographer" value="<?php echo $result['videographer']; ?>"></li>
                <li><input type="text" id="video_coverage" name="video_coverage" value="<?php echo $result['video_coverage']; ?>"></li>
                <li><input type="text" id="digital_files" name="digital_files" value="<?php echo $result['digital_files']; ?>"></li>
                <li><input type="text" id="album" name="album" value="<?php echo $result['album']; ?>"></li>
                <li><input type="text" id="dvd" name="dvd" value="<?php echo $result['dvd']; ?>"></li>
                <li><input type="text" id="benefit1" name="benefit1" value="<?php echo $result['benefit1']; ?>"></li>
                <li><input type="text" id="benefit2" name="benefit2" value="<?php echo $result['benefit2']; ?>"></li>
       </div>  
       </div>
       <div class="btn-container">
           <h2> <input type="submit" id="update-basic" name="update-basic" value="Update"> </h2> 
        </div>
       </div>
    </form>
</section>
</center>
</body>
</html>


<?php
if(isset($_POST['update-basic']))
{
    $price = $_POST['price'];
    $photo = $_POST['photographer'];
    $video = $_POST['videographer'];
    $coverage = $_POST['video_coverage'];
    $files = $_POST['digital_files'];
    $album = $_POST['album'];
    $dvd = $_POST['dvd'];
    $befit1 = $_POST['benefit1'];
    $befit2 = $_POST['benefit2'];

    $query = "UPDATE basic_package SET price='$price',photographer='$photo',videographer='$video',video_coverage='$coverage',digital_files='$files',album='$album',dvd='$dvd',benefit1='$befit1',benefit2='$befit2' WHERE id ='$id'"; 

    $data = mysqli_query($conn, $query);

    if ($data)
    {
    echo "<script>alert('Data Updated Successfully')</script>";
?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/photowebsite/admin/admin-packages.php" />
<?php
    }
    else
    {
      echo "<script>alert('Failed to update')</script>";
    }
}
?>









     