<?php
include_once "head.php";
include_once "../controller/conexao.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Post de noticias</h1>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-turma-modal-lg"><i class="fab fa-medrt"></i> Adicionar Turma</a>
        </div>
        <div class="col-sm-3">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-agendacad-modal-lg"><i class="fab fa-medrt"></i> Adicionar Agenda</a>
        </div>
        <div class="col-sm-6"></div>
    </div>
    <p class="mb-4"></p>
    <div class="row">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Noticias postadas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Titulo</th>
                                <th>Corpo</th>
                                <th>Data</th>
                                <th><i class="far fa-edit"></i> Alterar</th>
                                <th><i class="fas fa-trash"></i> Excluir</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Codigo</th>
                                <th>Titulo</th>
                                <th>Corpo</th>
                                <th>Data</th>
                                <th><i class="far fa-edit"></i> Alterar</th>
                                <th><i class="fas fa-trash"></i> Excluir</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $veri = $con->prepare("SELECT * FROM noticia ORDER BY id DESC");
                            $veri->execute();
                            while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <tr>
                                    <td><?php echo $org['id']; ?></td>
                                    <td><?php echo $org['titulo']; ?></td>
                                    <td><?php echo $org['corpo']; ?></td>
                                    <td><?php echo $org['data']; ?></td>
                                    <td><button class="btn btn-success" data-toggle="modal" data-target=".bd-alteagend-modal-lg"><i class="far fa-edit"></i>Alterar</button></td>
                                    <td><a href="deletaragenda.php?id=<?php echo $org['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i>Excluir</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Container-fluid -->
</div>
<!-- End of Main Content -->
<?php
include_once "footer.php"
?>