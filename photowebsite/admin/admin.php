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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index-nav-slider.css"/>
    <title> Admin Page </title>

    <style>
        .title_1{
            text-align: center;
            margin: 1.5rem;
            letter-spacing: 2px;
            font-weight: 600;
            color: #343333;
        }
        table {
            width: 98%;
    border-spacing: 0.2rem;
    border: 1.5px solid black;
    border-collapse: collapse;
    background: #f3f3f3;
    margin: 1%;
    }

    th {
        border: 1.5px solid #000000;
    padding: 16px;
    background: linear-gradient(181deg, #ededed 40%, #69686c 100%);
    }
    
    td {
      border: 1px solid;
      padding: 4px;
    }
    .sub-btn{
        padding: 0.25rem;
        margin: 0.3rem;
        font-size: 0.85rem;
        font-weight: 600;
        border-radius: 2px;
        color: white;
        width: 5rem;
        text-align: center;
        cursor: pointer;
    }
    #accept-btn{
         border: 2px solid #0aad0e;
        background-color: #09b90d;
    }
    #accept-btn:hover{
        background-color: #058d08;
    }
    #reject-btn{
         border: 2px solid #e93a3a;
         background-color: #e43636;
    }
    #reject-btn:hover{
         background-color: #bf2222;
    }
    </style>

</head>
<body>

<?php
    include "admin-header.php";
?>

<div class="pending_cont">
<h1 Class="title_1"> Pending List </h1>
    <table>
            <tr> 
                <th width="1%"> No </th>
                <th width="12%"> Name </th>
                <th width="12%"> Email </th>
                <th width="8%"> Contact </th>
                <th width="10%"> Session Type </th>
                <th width="8%"> Date </th>
                <th width="18%"> Address </th>
                <th width="8%"> Package Details </th>
                <th width="18%"> Other Info </th>
                <th width="10%"> Action </th>
            </tr>
    
        <?php
        include 'connection.php';
            
            $query = "SELECT * FROM booking_request WHERE status = 'pending' ORDER BY no ASC";
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)){
            ?>

            <tr>
                <td> <?php echo $row['no']; ?> </td>
                <td> <?php echo $row['name']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['contact']; ?> </td>
                <td> <?php echo $row['type_of_session']; ?> </td>
                <td> <?php echo $row['date']; ?> </td>
                <td> <?php echo $row['address']; ?> </td>
                <td> <?php echo $row['package_details']; ?> </td>
                <td> <?php echo $row['other_info']; ?> </td>

                <td>
                    <form action="approved.php" method="POST">
                        <input type="hidden" name="no" value="<?php echo $row['no']; ?>"/>
                        <input type="submit" name="Accept" value="Accept" class="sub-btn" id="accept-btn"> <br>
                        <input type="submit" name="Reject" value="Reject" class="sub-btn" id="reject-btn">
                    </form>
                </td>
            </tr>
            <?php }
            ?>
    </table>

<?php
    if(isset($_POST['Accept'])){
        $no = $_POST['no'];
        $select = "UPDATE booking_request SET status = 'Accept' WHERE no = '$no'";
        $result = mysqli_query($conn,$select);
        header("location:approved.php");
    }
?>

<?php
    if(isset($_POST['Reject'])){
        $no = $_POST['no'];
        $select = "UPDATE booking_request SET status = 'Reject' WHERE no = '$no'";
        $result = mysqli_query($conn,$select);
        header("location:approved.php");
    }
?>

<?php
    if(isset($_POST['delete'])){
        $no = $_POST['no'];
        $select = "DELETE FROM booking_request WHERE no = '$no'";
        $result = mysqli_query($conn,$select);
        header("location:approved.php");
    }
?> 
</div>
</body>
</html>