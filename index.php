<?php 
require_once(__DIR__."/vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

//
//index.php
//index.php/
$app->get("/", function(){
	print "It works!";
});


//index.php/test/
//index.php/test
require_once("de/mygassi/fuckshop/test/SessionTest.php");
require_once("de/mygassi/fuckshop/test/CartTest.php");
require_once("de/mygassi/fuckshop/test/OrderTest.php");
require_once("de/mygassi/fuckshop/test/CatTest.php");
require_once("de/mygassi/fuckshop/test/ProdTest.php");
require_once("de/mygassi/fuckshop/test/CatalogTest.php");
require_once("de/mygassi/fuckshop/test/TaxTest.php");
require_once("de/mygassi/fuckshop/test/DiscountTest.php");

$app->get("/test/", function(){
	$st = new SessionTest();
	$st->testToJSON();
	$ct = new CartTest();
	$ct->testAdd();
	$ct->testRemove();
	$ct->testRemoveBySKU();
	$ct->testToJSON();
	$ot = new OrderTest();
	$ot->testNewOrder();
	$ot->testInitInvoice();
});

$app->run();

?>

