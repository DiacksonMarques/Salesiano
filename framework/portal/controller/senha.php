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

//Pegando dados
error_reporting(E_WARNING);
ini_set("display_errors", 1 );
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$id = $_SESSION['Usuid'];


$veri = $con->prepare("SELECT * FROM responsavel WHERE id = '$id'");
$veri->execute();
while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
    $ativo = $org['ativo'];
}

if ($ativo > 0) {
    $add = $con->prepare("UPDATE responsavel SET senha=:senha WHERE id = '$id'");
    $add->bindParam(':senha', $senha);
    $add->execute();
    if ($add) {
?>
        <script>
            alert("Senha alterada com sucesso!")
            window.location.assign("../view/dashboard")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Não foi possivel fazer a atualização")
            window.location.assign("../view/perfil")
        </script>
        <?php
        exit;
    }
} else {

    if ($senha == $conf_senha) {


        $ativo = 1;

        $add = $con->prepare("UPDATE responsavel SET senha=:senha ,ativo=:ativo WHERE id = '$id'");
        $add->bindParam(':senha', $senha);
        $add->bindParam(':ativo', $ativo);
        $add->execute();

        if ($add) {
        ?>
            <script>
                alert("Senha alterada com sucesso!")
                window.location.assign("../view/dashboard")
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Não foi possivel fazer a atualização")
                window.location.assign("../view/senha")
            </script>
        <?php
            exit;
        }
    } else {
        ?>
        <script>
            alert("Senhas diferentes, tente novamente!")
            window.location.assign("../view/senha")
        </script>
<?php
        exit;
    }
}
?>