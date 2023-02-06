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
$texto = 'texto para resumir na nossa escola';
echo '<hr>';
echo $total = mb_strlen($texto);
echo '<hr>';
echo $tot = mb_substr($texto, 2, 15);
echo '<hr>';
echo $oco = mb_strrpos($texto, 'e', );
echo '<hr>';
echo $oco = mb_strrpos($texto, 't', );
// aula 21 e 22 limpa tag
?>