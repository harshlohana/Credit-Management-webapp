<?php
$host="localhost:3306";
    $dbusername="id14035037_root";
   $dbpassword="}sstxrDvW/=6yBlD";
   $database="id14035037_view_user ";
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

    <style>
    body{
      background-color: #8B008B;
    }
    </style>
</head>

<body>
<form method="GET" action="tcomplete.php" id="trans_amount">
    <div class="container-fluid" style="overflow-x:auto">
        <table id="Allusers">
            <tr>
                <!--                <th style="width:60px;">Info</th>-->
                <th align="center">Transfer</th>
                <th align="center">Receiver</th>
                <th align="center">Amount</th>
                <th align="center">Transfer</th>
            </tr>
            <?php
            $Receiver = $_SESSION["Transfer_User"];
            $Sender = $_SESSION["T_User"];
            $TransferUserID = $_GET['b'];
            $_SESSION["R_ID"] = $TransferUserID;
            $sql = "SELECT * FROM user where id=$TransferUserID";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
             $_SESSION["Transfer_User"] = $row["name"];

             ?>
            <tr>
                <td><?php echo $_SESSION["T_User"];?></td>
                <td><?php echo $_SESSION["Transfer_User"]; ?></td>
                <td align="center">
                    <input name='amount' type='text' placeholder="Enter amount here" required/>
                </td>
                <td align="center">
                    <input type="submit" class="btn btn-success" name="button"/>
                </td>
            </tr>
            <?php
            } ?>
</form>
</body>
