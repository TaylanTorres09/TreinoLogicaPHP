<?php

if(file_exists('file.txt')){
    $content = file_get_contents('file.txt');
    echo nl2br($content.'<br/><br/>');
    delete_arquivo();
} else {
    $content = "Olá meu nome é DR. x\r\nEstou tentando minhas habilidades com criação de arquivos";
    file_put_contents('file.txt', $content);
}

function delete_arquivo() {
    echo 'Arquivo será deletado em: 3, 2, 1.</br></br>';
    unlink('file.txt');
    echo 'Arquivo deletado';
}