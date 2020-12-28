<?php
require './config/DB.php';
$DB = new DB();

$data = json_decode(file_get_contents("php://input"));
$response = ["status" => "", "message" => "", "amount" => ""];
$amount = $DB->getAmount(1)['amount'];

if ($data->price < $amount) {
    // TODO: IF HAVE A MONEY GO TO PURCHASES AND ADD TO RECEIPTS
    $buy = $amount - $data->price;
    if ($DB->insertReceipt(1, 1, $data->price)) {
        $response['status'] = "Success";
        $response['message'] = "Now you have this product";
        $response['amount'] = $buy;
        $DB->decreseAmount($buy, '1');
    }
}
// TODO: RECUCE MONEY

echo json_encode($response);
