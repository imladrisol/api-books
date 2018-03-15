<?php
require "vendor/autoload.php";

use Guzzle\Http\Client;

$client = new Client('http://94.254.0.188:4000');

    $response = $client->get('/books?limit=2')->send();

    if ($response->getStatusCode() == 200) {
        var_dump(json_decode($response->getBody()));
    } else {
        $response->getBody();
    }

