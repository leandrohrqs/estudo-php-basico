<?php
//$senha = "123456";
//
//// Base64
//
//$novaSenha = base64_encode($senha);
//echo "base64: ".$novaSenha."<br>";
//echo "Sua senha é: ". base64_decode($novaSenha);
//
//echo "<hr>";
//// Criptografias de mão única, só é possível criptografar
//// MD5
//echo "MD5: ". md5($senha);
//
//echo "<hr>";
//// SHA1
//
//echo "SHA1: ". sha1($senha);

$senha = "123456";
$senha_db = '$2y$10$KEL7P33y0wE9ETBdm5jZtOtBohjGOuaOE86eYdke6zEEBE6WGtDFa';

if (password_verify($senha, $senha_db))
    echo "Senha válida"."<br>";
else
    echo "Senha inválida"."<br>";

$options = [
    'cost' => 10
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

echo $senhaSegura;