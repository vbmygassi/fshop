<?php
require_once("de/mygassi/fuckshop/test/SessionTest.php");
require_once("de/mygassi/fuckshop/test/CartTest.php");
require_once("de/mygassi/fuckshop/test/OrderTest.php");
require_once("de/mygassi/fuckshop/test/CatTest.php");
require_once("de/mygassi/fuckshop/test/ProdTest.php");
require_once("de/mygassi/fuckshop/test/CatalogTest.php");
require_once("de/mygassi/fuckshop/test/TaxTest.php");
require_once("de/mygassi/fuckshop/test/DiscountTest.php");
require_once("de/mygassi/fuckshop/test/ChiffreTest.php");

$st = new SessionTest();
$st->testToJSON();
$st->testToString();

$ct = new CartTest();
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

$tt = new TaxTest();
$tt->testTaxFromGermanGrossAmount();
$tt->testTaxFromGermanNetAmount();
$tt->testTaxFromNoSUCHGrossAmount();

$dt = new DiscountTest();
$dt->testApply();

$ct = new ChiffreTest();
$ct->testEncrypt();
$ct->testDecrypt();

?>
