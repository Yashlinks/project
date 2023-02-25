<?php

include 'config.php';

error_reporting(0);

if (isset($_SESSION['username'])) {
    header('Location: index.php#contact_footer');
}

if (isset($_POST['submit'])){
    $first_name = $_POST['first-name'];  
    $last_name = $_POST['last-name']; 
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword ) {
        $sql = "SELECT * FROM users_info WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0)  {
        $sql = "INSERT INTO users_info (first_name, last_name, contact, email, password)
                VALUES ('$first_name', '$last_name',' $contact', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_email'] = $email;
            if (!$result){
            $first_name = "";
            $last_name = "";
            $contact = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
           }
        echo "<script>alert('Wow! Registration Successfull.')</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/photowebsite/index.php" />
        <?php
        } 
        else {
              echo "<script>alert('Email Already Exists.')</script>";
        }
    
    }       else {
          echo "<script>alert('Password Not Matched.')</script>";
        }
}
?>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#cpassword');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    if (togglePassword.src.match('fa-eye-slash')) {
        togglePassword.src ('fas fa-eye');
    } else{
        togglePassword.src =('fa-eye-slash');
    }
});
</script>