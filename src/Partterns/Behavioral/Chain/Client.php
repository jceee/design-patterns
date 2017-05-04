<?php

require_once (__DIR__ . '/../../../../vendor/autoload.php');

$params = new \Jceee\DP\Partterns\Behavioral\Chain\Params();

$params->setParam('id', 1111);

$concat = new \Jceee\DP\Partterns\Behavioral\Chain\Concat();

$result = $concat->handle($params);


var_dump($result);


