<?php
require_once 'sistemas/configuracao.php';
include_once 'helpers.php';
echo saudacao();
echo '<hr>';
$texto = 'texto para resumir na escola';
echo resumirTexto($texto, 50);

?>