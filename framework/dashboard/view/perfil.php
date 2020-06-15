<?php
include_once 'head.php';

$id = $_SESSION['Usuid'];

require_once '../controller/conexao.php';

$veri = $con->prepare("SELECT * FROM usuario WHERE id='$id'");
$veri->execute();
while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
    $usuario = $org['usuario'];
    $senha = $org['senha'];
    $_SESSION['Usunome'] = $org['nome'];
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Titulo -->
    <h1 class="h3 mb-4 text-gray-800">Perfil</h1>
    <span id="msg-error"></span>
    <span id="msg"></span>
    <form id="update" method="POST">
        <label><i class="fas fa-signature"></i> Nome:</label>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="nome" id="nome" value="<?php echo $_SESSION['Usunome']; ?>" maxlength="100">
        </div>
        <label><i class="fas fa-user-alt"></i> Usuário:</label>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="usuario" id="usuario" value="<?php echo $usuario; ?>" maxlength="16">
        </div>
        <label><i class="fas fa-lock"></i> Senha:</label>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" name="senha" id="senha" value="<?php echo $senha; ?>" maxlength="16" minlength="6">
        </div>
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-primary">Alterar</button>
        <a href="dashboard" class="btn btn-danger">Voltar</a>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include_once 'footer.php';
?>
<script>
    $('#update').on('submit', function(event) {
        event.preventDefault();
        if ($('#nome').val() == "") {
            //Alerta de campo nome vazio
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo nome!</div>');
        } else if ($('#usuario').val() == "") {
            //Alerta de campo email vazio
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo usuário!</div>');
        } else if ($('#senha').val() == "") {
            //Alerta de campo email vazio
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo senha!</div>');
        } else {
            //Receber os dados do formulário
            var dados = $("#update").serialize();
            $.post("../controller/perfil.php", dados, function(retorna) {
                if (retorna) {
                    //Alerta de cadastro realizado com sucesso
                    if (retorna == true) {
                        $("#msg").html('<div class="alert alert-success" role="alert">Perfil alterado com sucesso!</div>');
                        //$('#msgCadSucesso').modal('show');
                    } else {
                        $("#msg").html('<div class="alert alert-danger" role="alert">Erro ao alterar o perfil!</div>');
                    }
                    //Limpar mensagem de erro
                    $("#msg-error").html('');

                    listar_usuario(1, 50);
                } else {

                }

            });
        }
    });
</script>