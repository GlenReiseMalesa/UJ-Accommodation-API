<?php

require_once 'init.php';
require_once 'router.php';

$router = new Router();

$router->get('/','api/accommodation/accommodation.php');
$router->get('/contacts','api/accommodation/contacts.php');
$router->get('/addresses','api/accommodation/addresses.php');
$router->get('/accommodationbykey','api/accommodation/accommodationbykey.php');
$router->get('/accommodationbyaddress','api/accommodation/accommodationbylocation.php');
$router->get('/accommodationbypropertyname','api/accommodation/accommodationbypropertyname.php');
$router->get('/contribution','api/accommodation/contribute.php');
$router->get('/contribute','contribution.php');

?>