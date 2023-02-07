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
function contarTempo(string $data)
{
    $agora = strtotime(date('y-m-d H:i:s'));
    $tempo = strtotime(date($data));
    // echo $diferenca = $agora - $tempo;
    $diferenca = $agora - $tempo;
    $segundos = $diferenca;
    $minutos  = round ($diferenca / 60);
    $horas    = round($diferenca / 3600);
    $dias     = round($diferenca / 86400);
    $semanas  = round($diferenca / 604800);
    echo '<hr>';
    var_dump($segundos);
    echo '<hr>';
    var_dump($minutos);
    echo '<hr>';
    var_dump($horas);
    echo '<hr>';
    var_dump($dias);
    if($segundos <= 60)
    {
        return 'agora';
    }
    elseif($minutos <= 60) 
    {
        return $minutos == 1 ? 'Há 1 minuto' : 'Há '.$minutos.'minutos';
    }
    elseif($horas <= 24) 
    {
        return $horas == 1 ? 'Há 1 hora' : 'Há '.$horas.'horas';
    }
    elseif($dias <= 7) 
    {
        return $dias == 1 ? 'Há 1 dia' : 'Há '.$dias.'dias';
    }
}

function validarEmail(string $email): bool
{
       return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function validarUrl(string $url): bool
{
       return filter_var($url, FILTER_VALIDATE_URL);
}
?>