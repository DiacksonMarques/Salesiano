<?php

//Verificar se veio alguma informação imcompleta
if (!empty($_POST) and (empty($_POST['usuario']) or empty($_POST['senha']))) {
    header("Location: ../../../view/index");
    exit;
}

//Conexão com o banco
include_once 'conexao.php';

//Pegando dados
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Validando Usuario
$veri = $con->prepare("SELECT * FROM usuario WHERE usuario = '$usuario' AND senha ='$senha'");
$veri->execute();
$numero_de_cadastro = $veri->rowCount();

if ($numero_de_cadastro > 0 && $numero_de_cadastro == 1) {
    while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
        echo 1;
        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();

        $_SESSION['Usuid'] = $org['id'];
        $_SESSION['Usunome'] = $org['nome'];
        $_SESSION['Usunivel'] = $org['nivel'];
        // Redireciona para dashboard
        exit;
    }
} else {
    echo 0;
    exit;
}
