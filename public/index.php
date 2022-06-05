<?php

use Framework\Http\ResponseSender;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequestFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals();

$response = (new HtmlResponse('Hello'))->withHeader('My-psr-7', 'step3003');

$emitter = new ResponseSender();
$emitter->send($response);

echo $response->getBody();