<?php
include_once 'topo.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $id = $_POST['id'];
    $veri = $con->prepare("SELECT * FROM aluno WHERE id = '$id'");
    $veri->execute();
    while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {

        $turma = $org['turma'];
        $verit = $con->prepare("SELECT * FROM turma WHERE turma = '$turma'");
        $verit->execute();
        while ($orgt = $verit->fetch(PDO::FETCH_ASSOC)) { ?>
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h5 mb-0 text-gray-800"><?php echo $org['nome']; ?></h1>
                <form action="padletm" method="POST">
                    <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                    <button class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </span>
                        <span class="text">Visualizar tela inteira</span>
                    </button>
                </form>
            </div>
            <div class="embed-responsive embed-responsive-50by20">
                <iframe class="embed-responsive-item" src="<?php echo $orgt['link']; ?>"></iframe>
            </div>
    <?php }
    } ?>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
include_once 'baixo.php';
?>