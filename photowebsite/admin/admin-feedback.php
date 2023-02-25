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
    <title>admin-feedback</title>
    <style>
        body {
      background: aliceblue;
      width: 100vw;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    mark {
      background-color: #cbcbf2;
      color: #000086;
    }

    h2 {
      margin: 1.5rem;
    }
    table {
      width: 94%;
      border-spacing: 0.2rem;
      background-color: white;
      border: 2px solid black;
      border-collapse: collapse;
      background: #e1e1f4;
    }

    th {
      border: 2.2px solid #1e1ed6;
      padding: 3px;
      background: linear-gradient(180deg, #efe4e4 40%, #9f95ce 100%);
    }
    
    td {
      border: 1px solid;
      padding: 4px;
    }
    #row-delete{
        border: 2px solid #f11414c7;
        color: white;
        padding: 0.2rem 0.4rem;
        background-color: #f11414c7;
        cursor: pointer;
        font-size: 1rem;
        margin: 0 1rem;
        border-radius: 4px;
        font-weight: 500;
    }
    #row-delete:hover{
      background-color: #ce0404c7;
    }
    #feed-reply{
        border: 2px solid #0aad0e;
        color: white;
        padding: 0.2rem 0.4rem;
        background-color: #0aad0e;
        cursor: pointer;
        font-size: 1rem;
        margin: 0 1rem;
        border-radius: 4px;
        font-weight: 500;
    }
    #feed-reply:hover{
    background-color: #07930b;
    }
    </style>
</head>
<body>

<?php
    include 'admin-header.php';
  ?>

<?php

include 'connection.php';

error_reporting(0);

$query = "SELECT * FROM user_feedback";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
  ?>

<center>
      <h2> <mark> Users Feedback </mark> </h2>

      <table>
        <tr>
          <th width="4%"> No </th>
          <th width="20%"> Name </th>
          <th width="19%"> Email </th>
          <th width="12%"> Phone No </th>
          <th width="28%"> Message </th>
          <th width="15%">  </th>
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
          echo " <tr>
                <td>" . $result['No'] . "</td>
                <td>" . $result['name'] . "</td>
                <td>" . $result['email'] . "</td>
                <td>" . $result['phone'] . "</td>
                <td>" . $result['message'] . "</td>
                <td> <a href='delete.php?No=$result[No]' style='display:inline-block'><input type='submit' id='row-delete' value='Delete' name='row-delete' onclick='return checkdelete()'> </a>
                     <input type='submit' id='feed-reply' value='Reply' name='feed-reply' onclick='checkreply()'> </td>
              </tr>
              ";
        }
  } else {
    ?> <div style="text-align:center; margin:4rem 0" >
        <h2>No records found</h2>
    </div>

    <?php
  }
  ?>
        </table>
</center>
</body>

<script>
    function checkdelete()
    {
      return confirm('Are you sure want to delete this message ?');
    }
</script>

</html>

