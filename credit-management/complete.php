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
if (isset($_GET["mess"]))
{
    $m = $_GET["mess"];
    unset($_GET["mess"]);
    ?>
    <?php
}
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
<div class="alert" align="center">
    <span id="comclosebtn" class="closebtn">&times;</span>
    <strong>Success!</strong>
    <div id="top">
        <h2><?php echo $m; ?></h2>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("comclosebtn").onclick = function () {
        location.href = "./index.php";
    };
</script>
</body>
</html>
