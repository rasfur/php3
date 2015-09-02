<?
$dt = date("Y-m-d H:i:s", time());
$page =$_SERVER["REQUEST_URI"];
$ref = $_SERVER["HTTP_REFERER"];

$path = "<tr>
            <td style='color:red'><u>$dt</u></td>
            <td style='color:green'><strong>$page</strong></td>
            <td style='color:blue'>$ref</td>
        </tr>";

file_put_contents('path.log', $path, FILE_APPEND);
