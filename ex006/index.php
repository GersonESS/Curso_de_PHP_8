<?php
require_once 'sistemas/configuracao.php';
include_once 'helpers.php';
echo saudacao();
echo '<hr>';
$texto = 'texto para resumir na escola';
echo resumirTexto($texto, 50);
echo '<hr>';
$texto = 'gerson';
var_dump($texto);
echo '<hr>';
$today = date("m.d.y");
echo $today;

?>