<?
$f = fopen(PATH_LOG, "r") or die("Не могу открыть файл!");
$lines = [];?>
<table border="1" align = 'center'>
    <th>Время</th><th>Куда</th><th>Откуда</th>
<? while ( $line = fgets($f) ){
echo $line;
}

fclose($f); ?>
</table>
