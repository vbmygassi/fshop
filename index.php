<?php 
require_once(__DIR__."/vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

//
//index.php
//index.php/
$app->get("/", function(){
	print '<meta charset="utf-8">';
	print "Such den Witz nicht an der Wand, du hältst den Witz in deiner Hand.";
});


//index.php/test
//index.php/test/
//test
//test/
$app->get("/test/", function(){
	require_once("de/mygassi/fuckshop/test/SessionTest.php");
	require_once("de/mygassi/fuckshop/test/CartTest.php");
	require_once("de/mygassi/fuckshop/test/OrderTest.php");
	require_once("de/mygassi/fuckshop/test/CatTest.php");
	require_once("de/mygassi/fuckshop/test/ProdTest.php");
	require_once("de/mygassi/fuckshop/test/CatalogTest.php");
	require_once("de/mygassi/fuckshop/test/TaxTest.php");
	require_once("de/mygassi/fuckshop/test/DiscountTest.php");
	print '<meta charset="utf-8">';
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

