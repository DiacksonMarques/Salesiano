<!DOCTYPE html>
<html lang="pt-br">

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
                            <div class="col-lg-6 d-none d-lg-block ">
                                <center>
                                    <img src="../../../images/logo.png" width="100%" height="100%">
                                </center>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <span id="msg"></span>
                                        <span id="msg-error"></span>
                                        <h1 class="h4 text-gray-900 mb-4">Bem vindo! <br> Ao administrador do site</h1>
                                    </div>
                                    <form class="user" id="login" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" aria-describedby="usuarioHelp" maxlength="16" placeholder="Insira o seu usuário..." id="usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" minlength="6" maxlength="16" placeholder="Senha" id="senha">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Entrar
                                        </button>
                                        <hr>
                                    </form>
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

<script>
    $(document).ready(function() {
        $('#errolog').hide(); //Esconde o elemento com id errolog
        var teste = 0;
        $('#login').submit(function() {
            event.preventDefault();
            if ($('#usuario').val() == "") {
                //Alerta de campo email vazio
                $("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo usuário!</div>');
            } else if ($('#senha').val() == "") {
                //Alerta de campo email vazio
                $("#msg-error").html('<div class="alert alert-danger" role="alert">Necessário prencher o campo senha!</div>');
            } else {
                //Ao submeter formulário
                var usuario = $('#usuario').val(); //Pega valor do campo email
                var senha = $('#senha').val(); //Pega valor do campo senha
                $.ajax({ //Função AJAX
                    url: "../controller/login.php", //Arquivo php
                    type: "post", //Método de envio
                    data: "usuario=" + usuario + "&senha=" + senha, //Dados
                    success: function(result) { //Sucesso no AJAX
                        if (result == 1) {
                            window.location.assign('../view/home')
                        } else {
                            $("#msg").html('<div class="alert alert-danger" role="alert">Usuário ou senha incorretos.</div>'); //Informa o erro
                        }
                    }
                })
                return false; //Evita que a página seja atualizada
            }
        })
    })
</script>