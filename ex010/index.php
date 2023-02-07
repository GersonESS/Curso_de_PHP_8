<?php
require_once 'sistemas/configuracao.php';
include_once 'helpers.php';
var_dump(validarEmail('teste'));

echo '<hr>';
var_dump(validarEmail('teste@gmail.com'));
echo '<hr>';
if(validarEmail('teste@gmail.com'))
{
    echo 'Endereco de email valido';
}
echo '<hr>';
if(validarUrl('http:trste'))
{
    echo 'Endereco de URL valido';
}else{

    echo 'Endereco de URL invalido';
}
?>


?>

