<?php

$operacao = "";
$codDisciplina = "";
$disciplina = "";
$indice = 0;

//------------------------------------
// Recupera dados
//------------------------------------
if (isset($_REQUEST["btnOperacao"])) {
    $operacao =  $_REQUEST["btnOperacao"];
}

if (isset($_REQUEST["txtCodDisciplina"])) {
    if (!empty($_REQUEST["txtCodDisciplina"])) {
        $codDisciplina =  $_REQUEST["txtCodDisciplina"];
    }
}

if (isset($_REQUEST["txtDisciplina"])) {
    if (!empty($_REQUEST["txtCodDisciplina"])) {
        $disciplina =  $_REQUEST["txtCodDisciplina"];
    }
}
//------------------------------------
// Processamento dados
//------------------------------------


if ($operacao == "Inserir") {
    if (empty($codDisciplina)) {
        echo "<h2>Informe codigo da diciplina! </h2>";
        echo "<p><a href='68-JSON-Enviar.php'>Clique aqui para voltar</a><p>";
        die();
    }
    if (empty($disciplina)) {
        echo "<h2>Informe o nome da diciplina! </h2>";
        echo "<p><a href='68-JSON-Enviar.php'>Clique aqui para voltar</a><p>";
        die();
    }

    $nomeArq = "xtemp\Diciplinas.json";
    //Verifica se existe o arquivo
    if (file_exists($nomeArq)) {

        //Leitura do arquivo
        $diciplinasJSON = file_get_contents($nomeArq); 
        // converte matriz php
        $diciplina = json_decode($diciplinasJSON, true);
    }

    //Append
    $diciplina[] = ['codigo' => $codDisciplina, 'Diciplina' =>$disciplina];

    
    //Converte Json
    $diciplinasJSON = json_encode($diciplina,JSON_UNESCAPED_UNICODE);

    //Salva no arquivo
    file_put_contents($nomeArq, $diciplinasJSON);

    echo"Arquivo salvo com sucessso!";

} elseif ($operacao == "Alterar") {
} elseif ($operacao == "Excluir") {
} elseif ($operacao == "Cancelar") {
} else {
    echo "<h2>Operação não cadastrada!</h2>";
    echo "<p><a href='68-JSON-Enviar.php'>Clique aqui para voltar</a><p>";
    die();
}
