<?php

include("connection.php");

$No = $_GET['No'];

$query = "DELETE FROM user_feedback WHERE No = '$No'";
$data = mysqli_query($conn,$query);

if($data)
{
 
  echo "<script>alert('Record Deleted')</script>"
  ?>
 <meta http-equiv = "refresh" content = "0; url = http://localhost/photowebsite/admin/admin-feedback.php" />
<?php  
}
else{
  echo "Failed To Delete";
}
?>