<?php

require_once (__DIR__ . '/../../../../vendor/autoload.php');

$params = new \Jonas\DP\Partterns\Behavioral\Chain\Params();

$params->setParam('id', 1);

$concat = new \Jonas\DP\Partterns\Behavioral\Chain\Concat();

$result = $concat->handle($params);


var_dump($result);


