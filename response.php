<?php
/**
 * Created by PhpStorm.
 * User: aakashwin81
 * Date: 027 27-01-2019
 * Time: 11:19 PM
 */
require_once 'vendor/autoload.php';

define('API_KEY','test_b90ebb519779feccd9751fc14da');
define('AUTH_TOKEN','test_9d1ffac0ee8f8daf79f014cd5dd');



$api = new Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestPaymentStatus(['PAYMENT REQUEST ID'], ['PAYMENT ID']);
    print_r($response['purpose']);  // print purpose of payment request
    print_r($response['payment']['status']);  // print status of payment
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}