<?php
require("de/mygassi/fuckshop/test/SessionTest.php");
require("de/mygassi/fuckshop/test/CartTest.php");
require("de/mygassi/fuckshop/test/OrderTest.php");
require("de/mygassi/fuckshop/test/CatTest.php");
require("de/mygassi/fuckshop/test/ProdTest.php");
require("de/mygassi/fuckshop/test/CatalogTest.php");

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

$ct = new CatTest();
$pt = new ProdTest();

$ct = new CatalogTest();

?>
