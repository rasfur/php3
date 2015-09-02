<?php
	// подключение библиотек
	require_once "secure/session.inc.php";
	require_once "../inc/lib.inc.php";
	require_once "../inc/config.inc.php";

$author = clearStr($_POST['author']);
$title = clearStr($_POST['title']);
$pubyear = clearStr($_POST['pubyear']);
$price = clearStr($_POST['price']);


if(!addItemToCatalog($title, $author, $pubyear, $price)){
  echo 'Произошла ошибка при добавлении товара!';
}else{
  header('Location: add2cat.php');
  exit;
}