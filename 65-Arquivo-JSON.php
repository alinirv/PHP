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

$nomeArq = "xtemp\Alunos.json";

//Verifica se existe o arquivo

if(!file_exists($nomeArq)){
    die("O arquivo não existe: $nomeArq");
}

//------------------------------------
//      Parte 01 - Insert - criar
//------------------------------------

// $alunos[0] = ['Maria', 'dos Santos', '9,5'];
// $alunos[1] = ['José', 'Silva', '9,0'];
// $alunos[2] = ['Jonas', 'Oliveiras', '10'];

// // probelmas com acentuação JSON_UNESCAPED_UNICODE
// $alunosJSON = json_encode($alunos,JSON_UNESCAPED_UNICODE);


// file_put_contents($nomeArq, $alunosJSON);


//------------------------------------
//      Parte 02 - Select - ler
//------------------------------------

// $alunosJSON = file_get_contents($nomeArq); 

// $alunos = json_decode($alunosJSON, true);

// foreach($alunos as $aluno){
//     echo "Nome: ". $aluno[0] ."<br>";
//     echo "Sobrenome: ". $aluno[1] ."<br>";
//     echo "Media: ". $aluno[2] ."<br>";

// }

//------------------------------------
//      Parte 03 - Escrta
//------------------------------------

// $alunos[0] = ['Nome' => 'Maria', 'Sobrenome' =>'dos Santos', 'Media' =>'9,5'];
// $alunos[1] = ['Nome' =>'José', 'Sobrenome' => 'Silva',  'Media' =>'9,0'];
// $alunos[2] = ['Nome' =>'Jonas', 'Sobrenome' =>'Oliveiras',  'Media' => '10'];

// // probelmas com acentuação JSON_UNESCAPED_UNICODE
// $alunosJSON = json_encode($alunos,JSON_UNESCAPED_UNICODE);

// file_put_contents($nomeArq, $alunosJSON);

// echo"Arquivo salvo com sucessso!"


//------------------------------------
//      Parte 04 - Leitura
//------------------------------------

// $alunosJSON = file_get_contents($nomeArq); 

// $alunos = json_decode($alunosJSON, true);

// foreach($alunos as $aluno){
//     echo "Nome: ". $aluno['Nome'] ."<br>";
//     echo "Sobrenome: ". $aluno['Sobrenome'] ."<br>";
//     echo "Media: ". $aluno['Media'] ."<br>";

// }

//------------------------------------
//      Parte 05 -Append
//------------------------------------

// //Leitura do arquivo
// $alunosJSON = file_get_contents($nomeArq); 

// // converte matriz php
// $alunos = json_decode($alunosJSON, true);

// //Append
// $alunos[] = ['Nome' => 'Jessica', 'Sobrenome' =>'Vieira', 'Media' =>'7,5'];
// $alunos[] = ['Nome' => 'Carlos', 'Sobrenome' =>'Felix', 'Media' =>'8,5'];

// //Escrita arquivo

// //Converte Json
// $alunosJSON = json_encode($alunos,JSON_UNESCAPED_UNICODE);

// //Salva no arquivo
// file_put_contents($nomeArq, $alunosJSON);

// echo"Arquivo salvo com sucessso!"

//------------------------------------
//      Parte 05 - Excluir
//------------------------------------

$nomeArq = "xtemp\Alunos.json";

//Verifica se existe o arquivo
if(!file_exists($nomeArq)){
    die("O arquivo não existe: $nomeArq");
}

//Leitura do arquivo
$alunosJSON = file_get_contents($nomeArq); 

// converte matriz php
$alunos = json_decode($alunosJSON, true);

//Remove

$indice = 2;
unset($alunos[$indice]);

//Escrita arquivo

//Converte Json
$alunosJSON = json_encode($alunos,JSON_UNESCAPED_UNICODE);

//Salva no arquivo
file_put_contents($nomeArq, $alunosJSON);

echo"Removido com sucessso!"

?>