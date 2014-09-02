<?php
//require_once('/vue/Document.class.php');

require_once ('C:/wamp/www/Application INTRAESP 2.0/vue/Document.class.php');


$doc = new Document(null,null,null,"Page");

$doc->userLevel = 1;

$doc->begin();
$doc->header();

$doc->menu();

$doc->end();


?>