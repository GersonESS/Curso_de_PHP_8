<?php
// echo  "arquivo de funcoes";

function saudacao()
{
    $hora = 5;
    if( $hora >= 0)
    {
       $saudacao = "boa noite";
    } 
       return $saudacao;
}

function resumirTexto($texto, $limite, $continue = '...')
{
    return $texto;
}
?>