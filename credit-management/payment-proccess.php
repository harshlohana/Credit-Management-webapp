<?php
    
    require_once('vendor/autoload.php');

    $API_KEY = "test_6d13232a4c06e0916c4eb9330c3";
    $AUTH_TOKEN = "test_9ea94112c72434c0805ab329c94";
    $URL = "https://test.instamojo.com/api/1.1/";

    $api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN, $URL);

    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "Web Development",
            "amount" => $_POST["amount"],
            "buyer_name" => $_POST["name"],
            "send_email" => true,
            "email" => $_POST["email"],
            "phone" => $_POST["phone"],
            "redirect_url" => "http://localhost/instamojo/payment-success.php"
            ));
            
            header('Location: ' . $response['longurl']);
            exit();
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }

?>