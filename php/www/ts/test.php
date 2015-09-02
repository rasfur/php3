
<?php


$link = mysqli_connect('db', 'php', 'php', '5php');





// ini_set("SMTP", "localhost");
// ini_set("smtp_port", "25");
// ini_set("sendmail_from", "");

// $to = "vasia@mail.ru";
// $subject = "Проба пера";
// $body = "Отправляю письмо Васе";
// if (mail($to, $subject, $body))
//     echo "Письмо отправленно";
// else
//     echo "Письмо отправить не удалось";






//print_r(scandir('/'));






# работа с директориями
////
//$dir = opendir("/");
////
//while($name =readdir($dir) ){
//    if($name == "." or $name =="..")
//        continue;
//    if(is_dir($name))
//        echo '['.$name.']<br>';
//    else
//        echo $name . '<br>';
//}
//closedir($dir);




// счетчик посещений

//
//$visitCounter = 0;
//if(isset($_COOKIE["visitCounter"]))
//	$visitCounter = $_COOKIE["visitCounter"];
//$lastVisit++;
//
//$lastVisit = "";
//if(isset($_COOKIE["lastVisit"]))
//	$lastVisit = date("d-m-Y H-i-s" , $_COOKIE["lastVisit"]);
//
//setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
//setcookie("lastVisit", time(), 0x7FFFFFFF);
