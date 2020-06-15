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
include_once '../../conexao.php';

$turma = $_SESSION['Usuturmafilho'];
$veri = $con->prepare("SELECT * FROM aulas WHERE turma = '$turma'");
$veri->execute();

$aluas = [];

while ($org = $veri->fetch(PDO::FETCH_ASSOC)) { 
    $id = $org['id'];
    $materia = $org['materia'];
    $cor = $org['cor'];
    $start = $org['start'];
    $turma = $org['turma'];
    $id_aula = $org['id_aula'];

    $aluas[] = [
        'id' => $id_aula, 
        'title' => $materia, 
        'color' => $cor, 
        'start' => $start, 
        'end' => $turma, 
        ];
}

echo json_encode($aluas);