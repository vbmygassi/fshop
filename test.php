<?php
require_once("de/mygassi/fuckshop/test/SessionTest.php");
require_once("de/mygassi/fuckshop/test/CartTest.php");
require_once("de/mygassi/fuckshop/test/OrderTest.php");
require_once("de/mygassi/fuckshop/test/CatTest.php");
require_once("de/mygassi/fuckshop/test/ProdTest.php");
require_once("de/mygassi/fuckshop/test/CatalogTest.php");

$st = new SessionTest();
$st->testTruncate();
$st->testToJSON();
$st->testToString();

$ct = new CartTest();
$ct->setup();
$ct->testAdd();
$ct->testRemove();
$ct->testRemoveBySKU();
$ct->testToJSON();

$ot = new OrderTest();
$ot->testNewOrder();
$ot->testInitInvoice();
$ot->testAddRevision();
$ot->testCancelOrder();
$ot->testSetOrderPayed();

$ct = new CatTest();
$pt = new ProdTest();

$ct = new CatalogTest();
$ct->testLoadCatalogByCategoryID("100");

?>
