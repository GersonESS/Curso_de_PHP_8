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

function resumirTexto(string $texto,int $limite,string $continue = '...'): string
{
    $textoLimpo = trim($texto);
    if (mb_strlen($textoLimpo) <= $limite)
    {
        return $textoLimpo;
    }
}
?>