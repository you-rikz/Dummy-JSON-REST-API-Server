<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);


$data = array(
    'title'    => 'added product',
    'description' => 'sample description'
  );

$options = [
      'method'  => 'POST',
      'headers'=>  ['Content-Type' => 'application/json'],
      'body' => json_encode($data)]
;
$response = $client->post('products/add', $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
echo "<pre>";
var_dump($decoded_response);

?>