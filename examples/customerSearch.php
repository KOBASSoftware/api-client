<?php

require __DIR__ . '/../vendor/autoload.php';

$companyId  = 2716; // Company ID
$identifier = 'sid:1'; // Identifier
$secret     = '...'; // API Key

$signer = (new \Kobas\Auth\Signer($companyId, $identifier, $secret));
$client = (new \Kobas\Client($signer));

$request = $client->get('customer/search', ['email' => 'example@example.com']);