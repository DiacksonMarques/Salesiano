<?php
include_once 'topo.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Alunos</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php
        $filhos = $_SESSION['Usufilho'];
        $num_filhos =  1 + substr_count($filhos, '|');
        $filho = explode("|", $filhos);
        for ($i = 0; $i < $num_filhos; $i++) {
            $veri = $con->prepare("SELECT * FROM aluno WHERE id = '$filho[$i]'");
            $veri->execute();
            while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
                $turma = $org['turma']; ?>
                <div class="col-12 py-3">
                    <?php
                    if ($org['turma'] == "IIA" || $org['turma'] == "IIB" || $org['turma'] == "IID" || $org['turma'] == "IIIA" || $org['turma'] == "IIIB" || $org['turma'] == "IIIC" || $org['turma'] == "IIID" || $org['turma'] == "IVA" || $org['turma'] == "IVB" || $org['turma'] == "IVC" || $org['turma'] == "IVD" || $org['turma'] == "IVE" || $org['turma'] == "VA" || $org['turma'] == "VB" || $org['turma'] == "VC") {
                        $cor = "primary";
                        $botoes = 1;
                    } elseif ($org['turma'] == "6A" || $org['turma'] == "6B" || $org['turma'] == "7A" || $org['turma'] == "8A" || $org['turma'] == "9A") {
                        $botoes = 2;
                        $cor = "warning";
                    } elseif ($org['turma'] == "1MA" || $org['turma'] == "2MA" || $org['turma'] == "3MA") {
                        $botoes = 3;
                        $cor = "danger";
                    } else {
                        $botoes = 0;
                        $cor = "info";
                    }
                    ?>
                    <div class="card mb-12 py-3 border-bottom-<?php echo $cor; ?>">
                        <div class="card-body">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <small>
                                        <b>
                                            <i class="fas fa-bookmark"></i> TURMA: <?php echo $org['turma']; ?>
                                        </b>
                                    </small>
                                    <br>
                                    <i class="fas fa-user-graduate"></i> <?php echo $org['nome']; ?>
                                </font>
                            </font>
                            <div class="row">
                                <?php
                                if ($botoes == 1) {
                                ?>
                                    <div class="col-3 col-sm-4">
                                        <form action="aulas" method="POST">
                                            <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                            <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fab fa-youtube"></i></button>
                                        </form>
                                    </div>
                                    <div class="col-3 col-sm-4">
                                        <form action="jogos" method="POST">
                                            <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                            <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fas fa-gamepad"></i></button>
                                        </form>
                                    </div>
                                    <div class="col-3 col-sm-4">
                                        <form action="padlet" method="POST">
                                            <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                            <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fas fa-address-card"></i></button>
                                        </form>
                                    </div>
                                    <?php
                                } elseif ($botoes == 2) {
                                    $verisala = $con->prepare("SELECT * FROM turma WHERE turma = '$turma'");
                                    $verisala->execute();
                                    while ($orgsala = $verisala->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <div class="col-3 col-sm-4">
                                            <form action="aulas" method="POST">
                                                <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                                <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fab fa-youtube"></i></button>
                                            </form>
                                        </div>
                                        <div class="col-3 col-sm-4">
                                            <a class="btn btn-<?php echo $cor; ?>  btn-circle" style="color:#fff" href="<?php echo $orgsala['link'] ?>" target="_blank"><i class="fab fa-slideshare"></i></a>
                                        </div>
                                    <?php
                                    }
                                } elseif ($botoes == 3) {
                                    $verisala = $con->prepare("SELECT * FROM turma WHERE turma = '$turma'");
                                    $verisala->execute();
                                    while ($orgsala = $verisala->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <div class="col-3 col-sm-4">
                                            <form action="aulas" method="POST">
                                                <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                                <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fab fa-youtube"></i></button>
                                            </form>
                                        </div>
                                        <div class="col-3 col-sm-4">
                                            <a class="btn btn-<?php echo $cor; ?>  btn-circle" style="color:#fff" href="<?php echo $orgsala['link'] ?>" target="_blank"><i class="fab fa-slideshare"></i></a>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="col-3 col-sm-4">
                                        <form action="aulas" method="POST">
                                            <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                            <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fab fa-youtube"></i></button>
                                        </form>
                                    </div>
                                    <div class="col-3 col-sm-4">
                                        <form action="padlet" method="POST">
                                            <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                                            <button class="btn btn-<?php echo $cor; ?>  btn-circle"> <i class="fas fa-address-card"></i></button>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include_once 'baixo.php';
?>