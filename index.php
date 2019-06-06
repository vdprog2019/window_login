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
if(!empty($_GET["login_php"]) && !empty($_GET["password_php"])){
    $l = $_GET["login_php"];
    $p = $_GET["password_php"];
   //$tmp = $ciphertext = openssl_encrypt("VLAD", 'AES-256-CTR', "777", true); // OpenSSL

    //echo $tmp;
    if (filter_var($l, FILTER_VALIDATE_URL, FILTER_VALIDATE_FLOAT) === true) {
        die('Not a valid');
    } else {
        echo "<table>
    <tr><td>Логин</td><td>$l</td></tr> 
</table>
";
    }


    echo "<table>
    <tr><td>Пароль</td><td>".generateEncrypt($p)."</td></tr> 
</table>
";
}
else die("NOT FOUND!");

function generateEncrypt($data){
    $plaintext = $data;
    $cipher = "aes-128-gcm";
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    return $ciphertext = openssl_encrypt($plaintext, $cipher, "23", $options=0, $iv);
}






