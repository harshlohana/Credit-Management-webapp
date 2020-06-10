<?php
$host="localhost:3306";
   $dbusername="id14035037_root";
   $dbpassword="}sstxrDvW/=6yBlD";
   $database="id14035037_view_user";
   $conn = new mysqli($host,$dbusername,$dbpassword,$database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Credit Management App</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/newcss.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>

<body>
<div class="container-fluid" style="overflow-x:auto">
    <table id="Allusers">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Current Credit</th>
        </tr>
        <?php
       $User_ID = $_GET['a'];
       $_SESSION["T_ID"] = $User_ID;
        $sql = "SELECT * FROM user where id=$User_ID";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION["T_User"] = $row["name"];
            ?>
            <tr>

                <td><?php echo $_SESSION["T_User"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["credit"]; ?></td>

            </tr>
            <?php
        } ?>
    </table>
</div>
<br>
<br>
<div class="text-center">
    <a class="btn btn-dark" href="selectusertransfer.php" role="button" target="_self">Select User to Transfer
        Credit</a>
</div>
</body>
