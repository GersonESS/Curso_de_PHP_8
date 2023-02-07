<?php
require_once 'sistemas/configuracao.php';
include_once 'helpers.php';
echo  "arquivo de funcoes";
echo "<h1>arquivo de funcoes</h1>";
echo '<hr>';
echo saudacao();
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
echo '<hr>';
$data = date('d/m/y H:i:s');
echo $data;

date_default_timezone_set('America/Sao_Paulo');
echo '<hr>';
$data = date('d/m/y H:i:s');
echo $data;

echo '<hr>';

contarTempo('2022-08-02 23:30:15');





?>