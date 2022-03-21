<?php

function validarLogin($usuario, $senha){
    $formCripUser = md5($usuario);
    $formCripSenha = md5($senha);

    echo "Usuário: ".$formCripUser."<br>";
    echo "Senha: ".$formCripSenha."<br>";
}



//user
if(isset($_REQUEST["txtUsuLogin"])){
    $usuario = $_REQUEST["txtUsuLogin"];
    
    if(empty($usuario)){
        echo "<p>Usuario não informado!</p>";
        return;
    }

}
//senha
if(isset($_REQUEST["txtUsuSenha"])){
    $senha = $_REQUEST["txtUsuSenha"];
    
    if(empty($senha)){
        echo "<p>Senha não informada!</p>";
        return;
    }

}

validarLogin($usuario, $senha);

?>