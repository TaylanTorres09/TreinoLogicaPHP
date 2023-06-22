<?php
$arr = ['ostrogogildo'=>'nome', '29'=>'idade'];
array_to_xml($arr, 'arquivo2.xml');

if (file_exists('arquivo2.xml')) {
    $xml = simplexml_load_file('arquivo2.xml');
 
    print_r($xml);
    echo '<br/>';
    echo "Nome: $xml->nome <br/>";
    echo "Idade: $xml->idade <br/>";

} else {
    exit('Failed to open arquivo.xml.');
}

function array_to_xml($arr, $name_arquivo) {
    $xml = new SimpleXMLElement('<root/>');
    array_walk_recursive($arr, array($xml, 'addChild'));
    file_put_contents($name_arquivo, $xml->asXML());
}