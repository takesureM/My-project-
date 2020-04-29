<?php 

include_once "paymenttypes.abstract.php";
include_once "buyproduct.class.php";


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();

$buyProduct = new MakePayment();
echo $buyProduct->getPayment();

$buyProduct = new setPayment();
echo $buyProduct->getPayment();