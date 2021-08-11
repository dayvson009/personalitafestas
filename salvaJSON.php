<?php 

$data = $_GET['data'];

$arquivo = 'bd.json';
$json = json_encode($data);
$file = fopen($arquivo,'w');

fwrite($file, $json);

fclose($file);