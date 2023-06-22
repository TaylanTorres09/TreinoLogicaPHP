<?php
$json = '{"nome": "Ostrogogildo","idade": 29,"profissao": "desenvolvedor"}';

$obj = json_decode($json);
echo "decode Json: ";
var_dump($obj);
echo '<br/>';

echo "decode Json to array: ";
$arr = json_decode($json, true);
var_dump($arr);
echo '<br/>';

$arr = ['nome'=>'Ostrogogildo','idade'=>29,'profissao'=>'desenvolvedor'];

echo "encode array to Json: ";
$json = json_encode($arr);
echo "$json <br/>";
