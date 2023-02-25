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


<?php
   include 'connection.php';

   error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin-packages</title>

  <style>
   
       
    body{
      background: aliceblue;
      width:100vw;
      margin:0px;
      padding:0px;
    }
    h2{
      margin: 1.2rem;
    }
    table{
      background: linear-gradient(335deg,#ffffff 40%,#fffc03 100%);
      border-spacing: 0.2rem;
      box-shadow: 5px 9px 20px -5px #392f2f;
      border:2px solid #c6ad01; 
      border-collapse:collapse;
      margin-bottom: 19px;
    }
    tr{
      width:30vw;
    }
    th{
      border: 2px solid #d18915;
      width: 10vw;
      padding: 3px;
    }
    td{
      border:1px solid;
      width:18vw;
      padding-left: 5px;
    }
    .pack-cont{
      display: flex;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }
    .package{
      width:32rem;
      }
    .package a{
      text-decoration: none;
    padding: 5px 21px 5px 21px;
    border: 2px solid #0aad0e;
    color: white;
    border-radius: 20px;
    background-color: #09b90d;
    font-size: 1.2rem;
    font-weight: bold;
}
    </style>

</head>
<body>
   <?php
   include "admin-header.php";
   ?>


<center>
<div class=pack-cont>
<div class=package>
<?php 

 $query = "SELECT * FROM basic_package";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);

 if($total != 0)
 {
  while( $result = mysqli_fetch_assoc($data))
  {
 ?>

<h2> <mark> Basic Package </mark> </h2>
   <table>

      <tr>
        <th> id </th>
     <?php echo"<td>".$result['id']."</td>";?>
     </tr>
     <tr>
        <th> Price </th>
     <?php echo"<td>".$result['price']."</td>";?>
     </tr>
     <tr>
        <th> Photographer </th>
     <?php echo"<td>".$result['photographer']."</td>";?>
     </tr>
     <tr>
        <th> Videographer </th>
     <?php echo"<td>".$result['videographer']."</td>";?>
     </tr>
     <tr>
        <th> Video Coverage </th>
     <?php echo"<td>".$result['video_coverage']."</td>";?>
     </tr>
     <tr>
        <th> Digital Files </th>
     <?php echo"<td>".$result['digital_files']."</td>";?>
     </tr>
     <tr>
        <th> Album </th>
     <?php echo"<td>".$result['album']."</td>";?>
     </tr>
     <tr>
        <th> DVD </th>
     <?php echo"<td>".$result['dvd']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 1 </th>
     <?php echo"<td>".$result['benefit1']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 2 </th>
     <?php echo"<td>".$result['benefit2']."</td>";?>
     </tr>
     <?php
     }
  }
  else
  {
    echo "No records found"; }
  ?>

 </table>
 <a href='update-basic.php?id=$result[id]'> Update </a>
</div>

<div class=package>
<?php 

 $query = "SELECT * FROM standard_package";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);

 if($total != 0)
 {
  while( $result = mysqli_fetch_assoc($data))
  {
 ?>

<h2> <mark> Standard Package </mark> </h2>
   <table>

      <tr>
        <th> id </th>
     <?php echo"<td>".$result['id']."</td>";?>
     </tr>
     <tr>
        <th> Price </th>
     <?php echo"<td>".$result['price']."</td>";?>
     </tr>
     <tr>
        <th> Photographer </th>
     <?php echo"<td>".$result['photographer']."</td>";?>
     </tr>
     <tr>
        <th> Videographer </th>
     <?php echo"<td>".$result['videographer']."</td>";?>
     </tr>
     <tr>
        <th> Video Coverage </th>
     <?php echo"<td>".$result['video_coverage']."</td>";?>
     </tr>
     <tr>
        <th> Digital Files </th>
     <?php echo"<td>".$result['digital_files']."</td>";?>
     </tr>
     <tr>
        <th> Album </th>
     <?php echo"<td>".$result['album']."</td>";?>
     </tr>
     <tr>
        <th> DVD </th>
     <?php echo"<td>".$result['dvd']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 1 </th>
     <?php echo"<td>".$result['benefit1']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 2 </th>
     <?php echo"<td>".$result['benefit2']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 3 </th>
     <?php echo"<td>".$result['benefit3']."</td>";?>
     </tr>
     <tr> 
     <?php
     }
  }
  else
  {
    echo "No records found"; }
  ?>
   </table>
   <a href='update-standard.php?id=$result[id]'> Update </a> 
   </div>
</div>

<div class=pack-cont>
<div class=package>
<?php 
 $query = "SELECT * FROM pro_package";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);

 if($total != 0)
 {
  while( $result = mysqli_fetch_assoc($data))
  {
 ?>

<h2> <mark> Pro Package </mark> </h2>
   <table>

      <tr>
        <th> id </th>
     <?php echo"<td>".$result['id']."</td>";?>
     </tr>
     <tr>
        <th> Price </th>
     <?php echo"<td>".$result['price']."</td>";?>
     </tr>
     <tr>
        <th> Photographer </th>
     <?php echo"<td>".$result['photographer']."</td>";?>
     </tr>
     <tr>
        <th> Videographer </th>
     <?php echo"<td>".$result['videographer']."</td>";?>
     </tr>
     <tr>
        <th> Video Coverage </th>
     <?php echo"<td>".$result['video_coverage']."</td>";?>
     </tr>
     <tr>
        <th> Digital Files </th>
     <?php echo"<td>".$result['digital_files']."</td>";?>
     </tr>
     <tr>
        <th> Album </th>
     <?php echo"<td>".$result['album']."</td>";?>
     </tr>
     <tr>
        <th> DVD </th>
     <?php echo"<td>".$result['dvd']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 1 </th>
     <?php echo"<td>".$result['benefit1']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 2 </th>
     <?php echo"<td>".$result['benefit2']."</td>";?>
     </tr>
     <tr>
        <th> Benefit 3 </th>
     <?php echo"<td>".$result['benefit3']."</td>";?>
     </tr>
     <?php
     }
  }
  else
  {
    echo "No records found"; }
  ?>
 </table>
 <a href='update-pro.php?id=$result[id]'> Update </a>
</div>
</div>
</center>
</body>
</html>