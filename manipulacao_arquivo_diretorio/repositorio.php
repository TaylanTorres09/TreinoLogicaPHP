<?php

$repo = 'pasta';
if(!is_dir($repo)) {
    mkdir($repo);
} else {
    create_file();
    if($dh = opendir($repo)) {
        while (($file = readdir($dh)) !== false) {
            if($file == '.' or $file == '..') {
                continue;
            }
            echo "filename: $file". "\n";
        }
        closedir($dh);
    }
}

function create_file() {
    $content = "Olá meu nome é DR. x\r\nEstou tentando minhas habilidades com criação de arquivos e pastas";
    file_put_contents("pasta/file.txt", $content);
}