<?php

if (file_exists('arquivo.xml')) {
    $xml = simplexml_load_file('arquivo.xml');
 
    print_r($xml);
} else {
    exit('Failed to open arquivo.xml.');
}

// echo $xml->channel->item->title;