<?php

/*
* A função retorna o tipo de extensão do arquivo
*
* @param string file: o arquivo
* @return string extention: extansão do arquivo
*/

function getFileExtention($file){
    return strtolower(pathinfo($file,PATHINFO_EXTENSION)); 
}


/*
* Ao enviar um arquivo para a função ele verifica se é imagem ou não,
* assim, retornando false or true.
*
* @param filename: nome do arquivo
* @return bool: verdadeiro ou falso
*
*/

function isimage($filename){
    $check = getimagesize($_FILES[$filename]["tmp_name"]);
    return $check !== false;
}

/* 


*/
function verify_limit($filename, $size = 500000){
    if ($_FILES[$filename]["size"] > $size) {
        return true;    
    }
    return false;
}

/* 
* Verifica o tipo da imagem, a extensão dela, deixano apenas passar os que são permitidos
*
* @param imageType: Tipo da imagem
* @return allowedTypes: Os tipos de extensões permitidos
*/

function verify_type($imageType, $allowedTypes = ['png', 'jpg', 'jpeg', 'gif']){
    return in_array($imageType, $allowedTypes);
}


?>