<?php
require "../inc/lib.inc.php";

header('Content-type: text/html; charset=utf-8');
define('DB_HOST', 'db');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', 'php');
define('DB_NAME', 'eshop');
define('ORDERS_LOG', 'orders.log');

 /* Корзина покупателя*/
$basket = [];

/* Количество товара в корзине покупателя */
$count = 0;
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());

basketInit();

