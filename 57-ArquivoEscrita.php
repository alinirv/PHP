<?php
set_error_handler("gerenciadorErro");

function gerenciadorErro($nro, $msg, $arq, $linha)
{
    echo "<h2>Erro</h2>";
    echo "<p><b>Nro Erro:</b> $nro </p>";
    echo "<p><b>Mensagem:</b> $msg</p>";
    echo "<p><b>Arquivo:</b> $arq</p>";
    echo "<p><b>Linha:</b> $linha</p><br><br>";
    die();
}
//------------------------------------
/*Parte 01 - Escrita

$nomeArq = "C:\xtemp\Notaveis.txt";

$arq = fopen($nomeArq, "w");

$txt = "Maria \n";
fwrite($arq, $txt);

$txt = "Jose \n";
fwrite($arq, $txt);

$txt = "joão \n";
fwrite($arq, $txt);

fclose($arq);

echo"Arquivo salvo com sucessso!"*/

/*Parte 2 - Append

$nomeArq = "C:\xtemp\Notaveis.txt";

if(file_exists($nomeArq)){
    $arq = fopen($nomeArq, "a");
}
else{
    $arq = fopen($nomeArq, "w");
}

$txt = "04 Pedro \n";
fwrite($arq, $txt);

$txt = "05 Paulo \n";
fwrite($arq, $txt);

fclose($arq);

echo"Arquivo salvo com sucessso!"*/

//-----------------------------------
//Parte 3 
//------------------------------------


$nomeArq = "xtemp\Notaveis.txt";

$txt = "01 Maria \n";
file_put_contents($nomeArq, $txt);

$txt = "02 jose \n";
file_put_contents($nomeArq, $txt, FILE_APPEND);

$txt = "03 Pedro \n";
file_put_contents($nomeArq, $txt, FILE_APPEND);

?>