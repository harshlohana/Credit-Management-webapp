<!DOCTYPE html>
<html lang="en">
<head>
  <title>Credit Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="css/newcss.css" rel="stylesheet">

  <style>

  body{
    background-color: #8B008B;
  }

  center{
    color:white;
  }

  #transfer{
    margin: 20px;
  }
  </style>
</head>
<body>

  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="./logo.png" width="75" height="50" class="d-inline-block align-top" alt="" loading="lazy">
    CREDIT MANAGEMENT
  </a>
</nav>

<center>
    <h1>Welcome To Credit Management System</h1>
    <div id="view">
        <a  href="view_user.php" class="btn btn-primary btn-lg active" role="button">view users</a>
    </div>
    <div id="transfer">
        <a  href="transfer.php" class="btn btn-primary btn-lg active">view all transfer</a>
    </div>
	 <div id="transfer">
        <a  href="payment.php" class="btn btn-primary btn-lg active">Payment Integration</a>
    </div>
</center>
</body>
</html>
