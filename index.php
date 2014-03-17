<?php 
require_once(__DIR__."/vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->get("/", function(){
	print "It works!";
});

$app->run();

?>

