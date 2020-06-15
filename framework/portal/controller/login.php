<?php

//Verificar se veio alguma informação imcompleta
if (!empty($_POST) and (empty($_POST['usuario']) or empty($_POST['senha']))) {
    header("Location: ../../../view/index");
    exit;
}

//Conexão com o banco
include_once '../../conexao.php';

//Pegando dados
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Validando Usuario
$veri = $con->prepare("SELECT * FROM responsavel WHERE usuario = '$usuario' AND senha ='$senha'");
$veri->execute();
$numero_de_cadastro = $veri->rowCount();

if ($numero_de_cadastro > 0 && $numero_de_cadastro == 1) {
    while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();

        $_SESSION['Usuid'] = $org['id'];
        $_SESSION['Usunome'] = $org['nome'];
        $_SESSION['Usufilho'] = $org['id_aluno'];

        if ($org['ativo'] == 0) {
            header("Location: ../view/senha");
            exit;
        } else {
            // Redireciona para dashboard
            header("Location: ../view/dashboard");
            exit;
        }
    }
} else {
?>
    <script>
        alert("Usuário ou senha incorretos!")
        window.location.assign("../../../view/portal")
    </script>
<?php
    exit;
}
