<?php

$l = $_POST["login_php"];
$p = $_POST["password_php"];

echo "<table>
    <tr><td>Логин</td><td>$l</td></tr> 
    <tr><td>Пароль</td><td>$p</td></tr> 
</table>
";



if (filter_var($l, FILTER_VALIDATE_URL) === true) {
    die('Not a valid');
}

if (filter_var($p, FILTER_VALIDATE_URL) === true) {
    die('Not a valid');
}






