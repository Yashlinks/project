<?php 

include 'config.php';

error_reporting(0);

if (isset($_POST['login_submit'])) {
	$email_log = $_POST['login_email'];
	$password_log = md5($_POST['login_password']);

	$login_sql = "SELECT * FROM users_info WHERE email='$email_log' AND password='$password_log'";
	$login_result = mysqli_query($conn, $login_sql);
	if ($login_result->num_rows > 0) {
		$row = mysqli_fetch_assoc($login_result);
		$_SESSION['username'] = $row['username'];
        $_SESSION['user_email'] = $email_log;
		echo "<script>alert('Login Successfull.')</script>";
		?>
		<meta http-equiv = "refresh" content = "0; url = http://localhost/photowebsite/index.php" />
	<?php } 
  else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>
