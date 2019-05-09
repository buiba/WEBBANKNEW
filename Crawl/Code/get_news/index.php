<?php
set_time_limit(0);

include 'libs/Curl/CaseInsensitiveArray.php'; 
include 'libs/Curl/Curl.php'; 
include 'libs/Curl/MultiCurl.php';

use Curl\Curl;
$curl = new Curl();
$curl->get('https://www.24h.com.vn/tin-tuc-trong-ngay-c46.html');

if ($curl->error) {
    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
} else {
    echo 'Response:' . "\n";
    var_dump($curl->response);
}
?>