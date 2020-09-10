<?php
require 'vendor/autoload.php';
$gateway = new Braintree_Gateway([
    'environment' => 'production',
    'merchantId' => 'kqjtbmgcfkk748mv',
    'publicKey' => 'ghb563488sq6g85s',
    'privateKey' => '1f2135702ffd415569a3695b7ff9c0a6'
]);

$clientToken = $gateway->clientToken()->generate();
echo $clientToken;
?>