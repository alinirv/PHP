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

//---------------Parte 1------------------

/* $nomeArq = "C:\xtemp\Notaveis.txt";

if(file_exists($nomeArq)){
    $arq = fopen($nomeArq, "r");
}
else{
    die("O arquivo não existe: $nomeArq");
}
// Le quantidade indicada
//$conteudo = fread($arq, 5); 

//Le arquivo todo
//$conteudo = fread($arq, filesize($nomeArq)); 

//Le apenas uma linha 
//$conteudo = fgets($arq, filesize($nomeArq)); 

//Le todas as linhas do qrquivo
/*while(!feof($arq)){
    $conteudo = fgets($arq, filesize($nomeArq)); 
    ;
}
fclose($arq);
*/

//---------------Parte 2------------------

$nomeArq = "xtemp\Notaveis.txt";

if(!file_exists($nomeArq)){
    die("O arquivo não existe: $nomeArq");
}

$conteudo = file_get_contents($nomeArq); 
echo"<p>$conteudo</p>"

?>