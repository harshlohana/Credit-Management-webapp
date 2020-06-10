<!DOCTYPE html>
<html>
<head>
<title>Instamojo Thank You</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="">
	
	<br><br><br><br>
	<article class="bg-secondary mb-3">  
	<div class="card-body text-center">
	<h4 class="text-white">Thank you for payment<br></h4>
	<?php

		require_once('vendor/autoload.php');

        $API_KEY = "test_6d13232a4c06e0916c4eb9330c3";
        $AUTH_TOKEN = "test_9ea94112c72434c0805ab329c94";
        $URL = "https://test.instamojo.com/api/1.1/";

		$api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN,$URL);

		$payid = $_GET["payment_request_id"];

		try {
		$response = $api->paymentRequestStatus($payid);
		echo "<h5>Payment ID: " . $response['payments'][0]['payment_id'] . "</h5>" ;
		echo "<h5>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h5>" ;
		echo "<h5>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h5>" ;
		echo "<h5>Payment Mobile: " . $response['payments'][0]['buyer_phone'] . "</h5>" ;
		echo "<h5>Payment status: " . $response['payments'][0]['status'] . "</h5>" ;
		echo "<pre>";

		}
		catch (Exception $e) {
		print('Error: ' . $e->getMessage());
		}
	?>
	<br>
	<p><a class="btn btn-warning" href="index.php"> HomePage 
	 <i class="fa fa-window-restore "></i></a></p>
	</div>
	<br><br><br>
	</article>

</body>
</html>
