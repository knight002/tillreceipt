<?php

error_reporting(E_ALL);
date_default_timezone_set('Europe/London');

include_once 'autoload.php';

$receipt = new MyReceipt();
$receipt->setItemsFromArray(Data::$data1);
$receipt->setDiscount(0.50);
Debug::dump($receipt->getSubTotal(), 'Total');
Debug::dump($receipt->getDiscount(), 'Discount');
Debug::dump($receipt->getTotal(), 'Discouneted price');
