<?php
require './config/DB.php';
$DB = new DB();
$data = json_decode(file_get_contents("php://input"));
$response = [
    "status" => "",
    "message" => "",
];
if ($data->charged < 5) {
    $response['status'] = "Faild";
    $response['message'] = "Money is low ! Add a little to your money";
} else {
    if ($DB->updateAmount($data->charged, $data->charge_id)) {
        $amount = $DB->getAmount($data->charge_id)['amount'];
        $response['status'] = "Success";
        $response['message'] = "Wallet is Updated";
        $response['amount'] = $amount;
    } else {
        $response['status'] = "Faild";
        $response['message'] = "Wallet cant Update";
    }
}

echo json_encode($response);
