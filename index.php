<?php

require_once 'init.php';
require_once 'router.php';

$router = new Router();

$router->get('/','api/accommodation/accommodation.php');
$router->get('/contacts','api/accommodation/contacts.php');
$router->get('/addresses','api/accommodation/addresses.php');
//$router->get('/accommodationbykey/$key','api/accommodation/accommodationbykey.php');
//$router->get('/accommodationbyaddress/$address','api/accommodation/accommodationbylocation.php');
//$router->get('/accommodationbypropertyname/$PropertyName','api/accommodation/accommodationbypropertyname.php');


?>