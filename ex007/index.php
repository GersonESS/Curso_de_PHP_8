<?php
require_once 'sistemas/configuracao.php';
include_once 'helpers.php';
echo '<hr>';
$valor = 85;

if ($valor)
{
    echo $valor;    
}else{
    echo0;
}


echo '<hr>';

echo ($valor ? $valor : 0);
 
echo '<hr>';

echo ($valor ?: 0);

?>