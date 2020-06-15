<?php
include_once 'topo.php';

$id = $_SESSION['Usuid'];

require_once '../../conexao.php';

$veri = $con->prepare("SELECT * FROM responsavel WHERE id='$id'");
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
    <form action="../controller/senha" method="POST">
        <label><i class="fas fa-signature"></i> Nome:</label>
        <div class="form-group">
            <input type="text" readonly class="form-control form-control-user" name="nome" id="idNome" value="<?php echo $_SESSION['Usunome']; ?>" maxlength="100">
        </div>
        <label><i class="fas fa-user-alt"></i> Usuário:</label>
        <div class="form-group">
            <input type="text" readonly class="form-control form-control-user" name="usuario" id="idUsu" value="<?php echo $usuario; ?>" maxlength="20">
        </div>
        <label><i class="fas fa-lock"></i> Senha:</label>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" name="senha" id="idSeha" value="<?php echo $senha; ?>" maxlength="11" minlength="8">
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-primary">Alterar</button>
        <a href="dashboard" class="btn btn-danger">Voltar</a>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include_once 'baixo.php';
?>