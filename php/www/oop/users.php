<?php
function __autoload($name){
  include 'class/'.$name.".class.php";
}
$user1 = new User('Mike', 'Buriae', 'qwqweqw' );
$user1 -> showinfo();

$user2 = new User('Franc', 'yogan', 'franc231' );
$user2 -> showinfo();

$user3 = new User('Ither', 'Bonag', 'Trasliv' );
$user3 -> showinfo();

$user4 = clone $user3;
$user4 -> showinfo();

$user = new SuperUser('Vasia Pupkin', 'vasia', 'root', 'admin');
$user -> showinfo();

echo '<hr>';
echo 'Всего простых юзеров: '.User::$cntU.'<br>';
echo 'Всего Админов: '.SuperUser::$cntSU.'<br>';
echo '<hr>';
?>