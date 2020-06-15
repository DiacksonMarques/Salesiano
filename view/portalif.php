<?php
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (isset($_SESSION['Usuid'])) {
   // Redireciona o visitante de volta pro login
   header("Location: ../framework/portal/view/dashboard"); 
   exit;
}

include_once "topo.php";
?>

<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner3.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Portal Salesiano</h1>
                        <ol class="breadcrumb">
                            <li>Portal</li>
                            <li>Portal Salesiano</li>
                        </ol>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-2 col-sm-12">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        </ul>
                    </div><!-- Widget end -->
                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0">Portal Salesiano</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <p>Espaço onde o responsável e aluno poderão assistir as aulas que foram dadas e ter acesso ao link das aulas e atividades.</p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">

                                    <form action="../framework/portal/controller/login" method="POST" role="form">
                                        <div class="error-container"></div>
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Usuário: <small>(informe o CPF do responsável)</small></label>
                                                        <input name="usuario" class="form-control form-control-name" onkeyup="mascCPF(this.value)" id="cpf" type="text" required="Digite o login" placeholder="Usuário"  minlength="11" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Senha: <small>(informe o CPF do responsável somente números)</small></label>
                                                        <input name="senha" class="form-control form-control-subject" placeholder="Senha" type="password" minlength="8" maxlength="11" required="Digite a senha">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="text-right"><br>
                                                    <button class="btn btn-primary solid blank" type="submit">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div><!-- Content row -->
                        </div>
                    </div>
                    <!--2nd row end -->
                </div><!-- Content inner end -->
            </div><!-- Content Col end -->

            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        </ul>
                    </div><!-- Widget end -->
                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php
include_once "rodape.php";
?>