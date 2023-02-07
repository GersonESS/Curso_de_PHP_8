<?php
require_once 'sistemas/configuracao.php';
include_once 'helpers.php';

echo '<hr>';
$data = date('d/m/y H:i:s');
echo $data;

date_default_timezone_set('America/Sao_Paulo');
echo '<hr>';
$data = date('d/m/y H:i:s');
echo $data;


?>