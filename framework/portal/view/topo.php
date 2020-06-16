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

function multiexplode($delimiters, $string){
  $ready = str_replace($delimiters, $delimiters[0], $string);
  $launch = explode($delimiters[0], $ready);
  return  $launch;
}

include_once '../../conexao.php';
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portal SA</title>
  <link href="../../../images/favicon.png" rel="icon">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/bootstrap-datepicker.css" rel="stylesheet">

  <!-- Full Calendar -->
  <link href='../css/core/main.min.css' rel='stylesheet' />
  <link href='../css/daygrid/main.min.css' rel='stylesheet' />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Portal SA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php
      $filhos = $_SESSION['Usufilho'];
      $num_filhos =  1 + substr_count($filhos, '|');
      $filho = explode("|", $filhos);
      for ($i = 0; $i < $num_filhos; $i++) {
        $veri = $con->prepare("SELECT * FROM aluno WHERE id = '$filho[$i]'");
        $veri->execute();
        while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
          $turma = $org['turma'];
          if ($org['turma'] == "IIA" || $org['turma'] == "IIB" || $org['turma'] == "IID" || $org['turma'] == "IIIA" || $org['turma'] == "IIIB" || $org['turma'] == "IIIC" || $org['turma'] == "IIID" || $org['turma'] == "IVA" || $org['turma'] == "IVB" || $org['turma'] == "IVC" || $org['turma'] == "IVD" || $org['turma'] == "IVE" || $org['turma'] == "VA" || $org['turma'] == "VB" || $org['turma'] == "VC") {
            $botoes = 1;
          } elseif ($org['turma'] == "6A" || $org['turma'] == "6B" || $org['turma'] == "7A" || $org['turma'] == "8A" || $org['turma'] == "9A" || $org['turma'] == "1MA" || $org['turma'] == "2MA" || $org['turma'] == "3MA") {
            $botoes = 2;
          } else {
            $botoes = 0;
          }
      ?>
          <!-- Heading -->
          <div class="sidebar-heading">
            <?php echo $org['turma']; ?>
          </div>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-user-graduate"></i>
              <span><?php echo $org['nome']; ?></span>
            </a>
            <?php
            if ($botoes == 1) {
            ?>
              <div class="row">
                &nbsp;&nbsp;
                <div class="col-3 col-sm-3">
                  <form action="aulas" method="POST">
                    <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                    <button class="btn btn-success btn-sm btn-circle" id="aulasreloada"> <i class="fab fa-youtube"></i></button>
                  </form>
                </div>

                <div class="col-3 col-sm-3">
                  <form action="padlet" method="POST">
                    <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                    <button class="btn btn-success btn-sm btn-circle"> <i class="fas fa-address-card"></i></button>
                  </form>
                </div>
                <?php
                $turmainf = $org['turma'];
                $turmainf = multiexplode(array("A", "B", "C", "D", "E"), $turmainf);
                $verij = $con->prepare("SELECT * FROM jogos WHERE turma = '$turmainf[0]'");
                $verij->execute();
                $numero_de_cadastroj = $verij->rowCount();
                if ($numero_de_cadastroj > 0) {
                ?>
                  <div class="col-3 col-sm-3">
                    <form action="jogos" method="POST">
                      <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                      <button class="btn btn-success btn-sm btn-circle"> <i class="fas fa-gamepad"></i></button>
                    </form>
                  </div>
              </div>
            <?php }
              } elseif ($botoes == 2) {
                $verisala = $con->prepare("SELECT * FROM turma WHERE turma = '$turma'");
                $verisala->execute();
                while ($orgsala = $verisala->fetch(PDO::FETCH_ASSOC)) {
            ?>
              <div class="row">
                &nbsp;&nbsp;
                <div class="col-3 col-sm-3">
                  <form action="aulas" method="POST">
                    <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                    <button class="btn btn-success btn-sm btn-circle" id="aulasreloada"> <i class="fab fa-youtube"></i></button>
                  </form>
                </div>

                <div class="col-3 col-sm-3">
                  <a class="btn btn-success btn-sm btn-circle" style="color:#fff" href="<?php echo $orgsala['link'] ?>" target="_blank"><i class="fab fa-slideshare"></i></a>
                </div>
              </div>
            <?php
                }
              } else {
            ?>
            <div class="row">
              &nbsp;&nbsp;
              <div class="col-3 col-sm-3">
                <form action="aulas" method="POST">
                  <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                  <button class="btn btn-success btn-sm btn-circle" id="aulasreloada"> <i class="fab fa-youtube"></i></button>
                </form>
              </div>

              <div class="col-3 col-sm-3">
                <form action="padlet" method="POST">
                  <input type="hidden" value="<?php echo $org['id']; ?>" name="id">
                  <button class="btn btn-success btn-sm btn-circle"> <i class="fas fa-address-card"></i></button>
                </form>
              </div>
            </div>
          <?php
              } ?>
          </li>
          <!--Divider -->
          <hr class="sidebar-divider d-none d-md-block">
      <?php }
      } ?>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!--Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['Usunome']; ?></span>
                <img class="img-profile rounded-circle" src="../img/Logo.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="perfil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->