<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

//Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['Usuid'])) {
    //Destrói a sessão por segurança
    session_destroy();
    //Redireciona o visitante de volta pro login
    header("Location: ../../../view/portal");
    exit;
}

//Conexão com o banco
include_once '../controller/conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);


$add = $con->prepare("UPDATE usuario SET nome=:nome, usuario=:usuario, senha=:senha WHERE id = '$id'");
$add->bindParam(':nome', $nome);
$add->bindParam(':usuario', $usuario);
$add->bindParam(':senha', $senha);
$add->execute();
if ($add) {
    echo true;
} else {
    echo false;
}
