<?php

require_once (__DIR__ . '/../../Bootstrap/config.php');


var_dump(Jceee\DP\Partterns\Create\SimpleFactory\Factory::createProduct('A')->getName());
var_dump(Jceee\DP\Partterns\Create\SimpleFactory\Factory::createProduct('B')->getName());