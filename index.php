<?php

$text = file_get_contents("files/doc01.txt");

if ($text === false){
    echo "Erro ao ler arquivo!";
}
else{
    echo nl2br($text);
}




?>