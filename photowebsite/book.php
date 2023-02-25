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
    <title>Book</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
    *{
        margin: 0px;
        padding: 0px;
        font-family: 'Poppins', sans-serif;
    }
    .form-section{
        box-sizing: border-box;
    }
    .row-h1 > h1{
        font-weight: 500;
        letter-spacing: 0.1rem;
        font-size: 2.16rem;
        color: #181717;
    }
    .row-h2 > h2{
    font-weight: 300;
    color: #5e5656;
    font-size: 1.35rem;
    letter-spacing: 0.1rem;
    }
    .book-cont{
        background-color: #f7e8e9;
        display: flex;
        justify-content: center;
    }
    .title-cont1 > h1{
        color: #363232;
        font-size: 1.9rem;
        text-align: center;
    }
    .client-cont2 > h2,
    .session-cont3 >h2{
        font-size: 1.25rem;
        font-weight: 500;
        text-decoration: underline;
        letter-spacing: 0.8px;
    }

    .input-col label{
            display: inline-block;
            width: 19rem;
            letter-spacing: 0.8px;
    }
    .input-col input,select{
           width: 25rem;
           height: 2rem;
           margin: 0.6rem;
           border: 1.5px solid #bab5b5;
           box-shadow: 1px 1px 4px 0px #c5c0c0;
           padding-left:1rem;
           color: #373535;
           font-weight: 500;
           font-size: 0.95rem;
    }
    .input-col option{
           width: 25rem;
           height: 2rem;
           margin: 0.6rem;
           border: 1.5px solid #bab5b5;
           box-shadow: 1px 1px 4px 0px #c5c0c0;
           padding-left:1rem;
           color:#5a5858;
           font-weight:400;
           font-size: 0.85rem;
    }

    select:required:invalid{
        color:#5a5858;
        font-weight:400;
        font-size: 0.85rem;
    }
    option[value=""][disabled]{
        display: none;
    }

    .input-col textarea{
         margin: 0.6rem;
         width: 25rem;
         border: 1.5px solid #bab5b5;
         box-shadow: 1px 1px 4px 0px #c5c0c0;
         padding-left:1rem;
         color: #373535;
         font-weight: 500;
         font-size: 0.95rem;
    }
    .input-col input::placeholder{
        font-weight:400;
        color:#5a5858;
        font-size: 0.85rem;
    }
    input[type="date"]{
        color:#5a5858;
        font-weight:400;
        font-size: 0.85rem;
    }
    .sup-required{
            color: #da0808;
            font-size: 0.9rem;
    }
   
    input[type="date"]:valid {
        color: #373535;
        font-weight: 500;
        font-size: 0.95rem;
    }
    input[type="submit"]{
        width: 7.5rem;
        height: fit-content;
        padding-left: 0rem;
        box-shadow: none;
        padding: 11px 7px;
        background-color: #eb979d;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
    }
    input[type="submit"]:hover{
        background-color: #eb7e85;
        box-shadow: 1px 1px 4px 0px #c5c0c0;
    }
    </style>
</head>
<body>

<?php
    include "header.php";
?>
    
    <div class="form-section">
    <div class="title-cont1" style="padding: 1.4rem;text-align: center;">
            <div class="row-h1"> <h1> Request a Photo Shoot </h1> </div>   
            <div class="row-h2"> <h2> 100% Satisfaction Guarantee </h2> </div>              
            </div>
        <div class="book-cont">

        <div class="book-pge"  style="padding: 1rem; width: fit-content;">
        <form action=" " method="post" id="book-form">
            <div class="client-cont2" style="padding: 1rem;">
                <h2> CLIENT INFO </h2>
                <div class="input-col">
                    <div class="form-inputrow">
                    <label for="#name"> Your Name <sup class="sup-required"> * </sup> </label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
</div>

<div class="form-inputrow">
                    <label for="#email"> Your Email <sup class="sup-required"> * </sup> </label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
</div>

                    <div class="form-inputrow">
                    <label for="#contact"> Contact No <sup class="sup-required"> * </sup> </label>
                    <input type="text" id="contact" name="contact" placeholder="Contact No" pattern="[0-9]{10}" required>
                    </div>
                </div>

            </div>

            <div class="session-cont3" style="padding: 1rem;">
                <h2> SESSION INFO </h2> 
                <div class="input-col">

                <div class="form-inputrow">
                    <label for="#session-type"> Type of Session <sup class="sup-required"> * </sup> </label>
                    <select name="session-type" id="session-type" style="width:26rem" required>
                    <option value="" disabled selected> Please Select </option>
                        <option value="Wedding"> Wedding </option>
                        <option value="Birthday"> Birthday </option>
                        <option value="Anniversary"> Anniversary </option>
                        <option value="Candid"> Candid </option>
                        <option value="5"> </option>
                    </select>
                </div>

                <div class="form-inputrow">
                    <label for="#date"> Date <sup class="sup-required"> * </sup> </label>
                    <input type="date" id="date" name="date" placeholder="date" required>
                </div>

<div class="form-inputrow">
                    <label for="#address"> Location/Address <sup class="sup-required"> * </sup> </label>
                    <input type="text" id="address" name="address" placeholder="Enter Location/Address" required>
</div>

<div class="form-inputrow">
                    <label for="#session-pkg"> Select Package <sup class="sup-required"> * </sup> </label>
                    <select name="session-pkg" id="session-pkg" style="width:26rem" required>
                    <option value="" disabled selected>Please Select</option>
                        <option value="Basic"> Basic </option>
                        <option value="Advanced"> Advanced </option>
                        <option value="Pro"> Pro </option>
                        <option value="Customizable"> Customizable </option>
                    </select>
</div>

<div class="form-inputrow">
                    <label for="#textarea" style="vertical-align: top;margin-top: 5px; letter-spacing: 0;"> Tell us more about your photoshoot <h5 style="text-align: center; font-weight: 300; font-size: 0.76rem; margin-right: 1.6rem; margin-left: 0.5rem;">(Knowing some details of your event will help us to provide th best experience for you.) </h5> </label> 
                    <textarea rows="6" placeholder=" " class="textarea" name="other-info" id="other-info" required></textarea>
</div>
<div class="form-inputrow" style="text-align:center;">
                    <input type="submit" id="book-submit" name="book-submit" value="Continue">
</div>

                </div>               
            </div>
        </form>
            </div>
        </div>
    </div>

    <?php
    include "footer-bar.php";
    ?>

    <?php

include 'connection.php';

if (isset($_POST['book-submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Contact = $_POST['contact'];
    $Session = $_POST['session-type'];
    $Date = $_POST['date'];
    $Address = $_POST['address'];
    $Package = $_POST['session-pkg'];
    $Other = $_POST['other-info'];


           $sql = "INSERT INTO booking_request (name, email,contact,type_of_session,date,address,package_details,other_info,status) 
          VALUES ('$Name', '$Email','$Contact', '$Session','$Date', '$Address','$Package', '$Other','Pending')";
           $data = mysqli_query($conn, $sql);
            if ($data) {
            echo "<script>alert('Your Request Send Successfully.')</script>";
            echo "<script> document location = 'book.php'; </script>";
            }
             else{
            echo "<script> alert('Something went wrong please try again'); </script>";
             }
}
?>

</body>
</html>


