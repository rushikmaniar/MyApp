<?php
/**
 * Created by PhpStorm.
 * User: aakashwin81
 * Date: 027 27-01-2019
 * Time: 11:14 PM
 */
require_once 'vendor/autoload.php';

define('API_KEY','test_b90ebb519779feccd9751fc14da');
define('AUTH_TOKEN','test_9d1ffac0ee8f8daf79f014cd5dd');


$api = new Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "FIFA 16",
        "amount" => "15",
        //"send_email" => true,
        //"email" => "foma@utooemail.com",
        "redirect_url" => "http://localhost:90/MyApp/response.php"
    ));
    echo '<pre>';
        print_r($response);
    echo '</pre>';
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>
<a href="https://test.instamojo.com/@rushikmaniar107/lec79b0d0be8848118845548d37652e7b/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Pay Now"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>

