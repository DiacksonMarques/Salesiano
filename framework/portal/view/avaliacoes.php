<?php
include_once 'topo.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    (isset($_POST['id'])) ? $id = $_POST['id'] : $id = null;
    $veri = $con->prepare("SELECT * FROM aluno WHERE id = '$id'");
    $veri->execute();
    while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['Usuturmafilho'] = $org['turma'];;
    ?>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h5 mb-0 text-gray-800"><?php echo $org['nome']; ?></h1>
            <a href="JavaScript: window.location.reload(true);">Caso não carrege direito clik aqui!</a>
        </div>
        <div id="myId" >
            <div id='calendar'></div>
        </div>
    <?php } ?>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
include_once 'baixo.php';
?>
<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <dd class="col-sm-9" id="title"></dd>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="embed-responsive embed-responsive-21by9">
                <iframe id="frame" class="embed-responsive-item"></iframe>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        function setTime() {
            var date = new Date().getTime();
            var string = "Timestamp: " + date;
            setTimeout(setTime, 1);
            $('#setTime').html(string);
        }
    });
</script>