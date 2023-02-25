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
  <title>admin-user</title>

  <style>
    body {
      background: aliceblue;
      width: 100vw;
      height: 100vh;
    }

    mark {
      background-color: #cbcbf2;
      color: #000086;
    }

    h2 {
      margin: 1.5rem;
    }

    table {
      width: 81%;
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
      padding: 2px;
    }
  </style>

</head>

<body>
  <?php
    include 'admin-header.php';
  ?>

  <?php

  include 'config.php';

  error_reporting(0);

  $query = "SELECT * FROM users_info";
  $data = mysqli_query($conn, $query);

  $total = mysqli_num_rows($data);

  if ($total != 0) {
    ?>

    <center>
      <h2> <mark> Registered Users </mark> </h2>

      <table>
        <tr>
          <th width="8%"> Id </th>
          <th width="15%"> First Name </th>
          <th width="15%"> Last Name </th>
          <th width="15%"> Contact </th>
          <th width="25%"> Email </th>
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
          echo " <tr>
                <td>" . $result['id'] . "</td>
                <td>" . $result['first_name'] . "</td>
                <td>" . $result['last_name'] . "</td>
                <td>" . $result['contact'] . "</td>
                <td>" . $result['email'] . "</td>
              </tr>
              ";
        }
  } else {
    echo "No records found";
  }

  ?>

    </table>
  </center>
</body>

</html>