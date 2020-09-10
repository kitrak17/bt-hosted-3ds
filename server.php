<?php
$loader = require 'vendor/autoload.php';
$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => '6dbmtzfrhrty9sd8',
    'publicKey' => '8qvhrwz6fm24dym2',
    'privateKey' => 'e2339cba40a7ff9f74a5e67c269014c7'
]);

try {
  $result = $gateway->transaction()->sale([
				"amount" => 0.01,
				"merchantAccountId"  => "test",
				"paymentMethodNonce" =>  $_POST['nonce'], //'445ae75a-fbb0-0141-288c-f7e2c078729c', //$_POST['nonce'],
				"orderId" => rand(99999,1),
				"descriptor" => [
				  "name" => "company name*myurl.com"
				],
				"options" => [
				  "paypal" => [
					"customField" => 'test',
					"description" => 'test',
				  ]
				],
				 'lineItems' => [
			        [
			            'name' => 'Product',
			            'kind' => Braintree_TransactionLineItem::DEBIT,
			            'quantity' => '1',
			            'unitAmount' => '1.00',
			            'unitOfMeasure' => 'unit',
			            'totalAmount' => '1.00',
			            'taxAmount' => '0.00',
			            'discountAmount' => '0.00',
			            'productCode' => '54321',
			            'commodityCode' => '98765'
			        ],
			        [
			            'name' => 'Product',
			            'kind' => Braintree_TransactionLineItem::DEBIT,
			            'quantity' => '1',
			            'totalAmount' => '-1.00',
			            'taxAmount' => '0.00',
			            'discountAmount' => '0.00',
			            'productCode' => '543221',
			            'commodityCode' => '98762'
			        ]
			    ]
			]);
			if ($result->success) {
			  //$json = explode('\u0000', json_encode((array)$result->transaction));
			  $my_array = (array)$result->transaction;
			  $json = reset($my_array);
			  echo json_encode($json);
			} else {
			  print_r("Error Message: " . $result->message);
			}
} catch (Braintree_Exception_NotFound $e) {
	echo $e->getMessage();
}
?>