<?php

/*
echo "<table>
    <tr><td>Логин</td><td>$l</td></tr> 
    <tr><td>Пароль</td><td>$p</td></tr> 
</table>
";
*/

//!empty( имя_переменной)   -   проверяет что поле не пустое
//if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
if(!empty($_POST["login_php"]) && !empty($_POST["password_php"])){
    $l = $_POST["login_php"];
    $p = $_POST["password_php"];

    if (filter_var($l, FILTER_VALIDATE_URL, FILTER_VALIDATE_FLOAT) === true) {
        die('Not a valid');
    } else {
        echo "<table>
    <tr><td>Логин</td><td>$l</td></tr> 
</table>
";
    }


    echo "<table>
    <tr><td>Пароль</td><td>$p</td></tr> 
</table>
";
}
else die("NOT FOUND!");







