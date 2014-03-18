<?php 
require_once(__DIR__."/vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

//
//index.php
//index.php/
$app->get("/", function(){
	print '<meta charset="utf-8">';
	print "Nicknack.";
});


//index.php/test
//index.php/test/
//test
//test/
$app->get("/test/", function(){
	require_once("de/mygassi/fuckshop/test/SessionTest.php");
	require_once("de/mygassi/fuckshop/test/CartTest.php");
	require_once("de/mygassi/fuckshop/test/OrderTest.php");
	require_once("de/mygassi/fuckshop/test/ChiffreTest.php");
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
	$ct = new ChiffreTest();
	$ct->testEncrypt();
	$ct->testDecrypt();
});

$app->run();

?>
