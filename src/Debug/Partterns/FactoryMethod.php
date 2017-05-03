<?php

require_once (__DIR__ . '/../../Bootstrap/config.php');

var_dump((new Jceee\DP\Partterns\Create\FactoryMethod\FactoryProductA())->create()->getName());
var_dump((new Jceee\DP\Partterns\Create\FactoryMethod\FactoryProductB())->create()->getName());