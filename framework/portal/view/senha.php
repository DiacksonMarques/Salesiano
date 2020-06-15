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
?>
<!DOCTYPE html>
<html lang="en">

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

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="../../../images/logo.png" width="100%" height="100%">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Alterar senha</h1>
                    <p class="mb-4">Para sua segurança solicitamos que troque a senha para uma maior segurança!</p>
                  </div>
                  <form class="user" action="../controller/senha" method="POST">
                    <div class="form-group">
                      <input type="password" name="senha" class="form-control form-control-user" aria-describedby="Senha" placeholder="Nova senha " maxlength="11" minlength="8">
                    </div>
                    <div class="form-group">
                      <input type="password" name="conf_senha" class="form-control form-control-user" aria-describedby="Senha" placeholder="Confirme a nova senha " maxlength="11" minlength="8">
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Trocar senha">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="dashboard">Não quero trocar a senha!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="../controller/logout">Voltar ao início!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>