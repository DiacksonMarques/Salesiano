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

include_once '../../conexao.php';
?>
<style>
    body {
        background-color: #224abe;
    }

    .main iframe {
        border: none;
        position: fixed;
        top: 60px;
        left: 0%;
        width: 100%;
        height: 91%;
    }

    .box {
        margin: 1%;
    }
</style>

<head>

    <title>Portal SA</title>
    <link href="../../../images/favicon.png" rel="icon">
    
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datepicker.css" rel="stylesheet">
</head>
<?php
$id = $_POST['id'];
$veri = $con->prepare("SELECT * FROM aluno WHERE id = '$id'");
$veri->execute();
while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {

    $turma = $org['turma'];
    $verit = $con->prepare("SELECT * FROM turma WHERE turma = '$turma'");
    $verit->execute();
    while ($orgt = $verit->fetch(PDO::FETCH_ASSOC)) { ?>

        <body>
            <form action="padlet" method="POST">
                <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                <button class="btn btn-success btn-circle box">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <?php echo $org['nome']; ?>
            </form>
            <div class="main">
                <iframe src="<?php echo $orgt['link']; ?>"></iframe>
            </div>
        </body>
<?php }
} ?>