<?php
include_once 'topo.php';
?>
<div class="container-fluid">
    <?php
    $id = $_POST['id'];
    $veri = $con->prepare("SELECT * FROM aluno WHERE id = '$id'");
    $veri->execute();
    while ($org = $veri->fetch(PDO::FETCH_ASSOC)) { ?>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h5 mb-0 text-gray-800"><?php echo $org['nome']; ?></h1>
        </div>
        <div class="text-center">
            <div class="row row-cols-1 row-cols-md-3">
                <?php
                $turma = $org['turma'];
                $verit = $con->prepare("SELECT * FROM jogos WHERE turma = '$turma'");
                $verit->execute();
                while ($orgt = $verit->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?php echo $orgt['imagem']; ?>" class="card-img-top" alt="<?php echo $orgt['titulo']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $orgt['titulo']; ?></h5>
                                <p class="card-text"><?php echo $orgt['descricao']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
include_once 'baixo.php';
?>