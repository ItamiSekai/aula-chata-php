<?php

include '../libraries/file_upload.php';

$target_dir = "../files/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = getFileExtention($target_file);


// Check if image file is a actual image or fake image

if(!isImage("fileToUpload")){
    return die("O arquivo não contém uma imagem");
}

if(verify_limit("fileToUpload")){
    return die("O arquivo é muito grande");
}

if(! verify_type($imageFileType)){
    return die("Este tipo de extensão não é permitido");
}

// Caso tudo tenha ocorrido bem ate aqui, então deu tudo certo
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);



?>