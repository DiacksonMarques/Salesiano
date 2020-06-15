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

            <div class="col-lg-2 col-md-1 col-sm-1">
            </div><!-- Sidebar Col end -->

            <div class="col-lg-9 col-md-11 col-sm-11">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0">Bem Vindo!</h2>
                    <h2 class="column-title mrt-0">Escolha seu segmento</h2>
                    <div class="row">
                        <div class="col-md-12">
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <a class="btn btn-primary" href="portalif">Educação Infantl</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary" href="portalif">Fundamental I</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary" href="portalfm">Fundamental II</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary" href="portalfm">Ensino Médio</a>
                            </div>
                        </div>
                    </div>
                    <!--2nd row end -->
                </div><!-- Content inner end -->
            </div><!-- Content Col end -->

            <div class="col-lg-1 col-md-0 col-sm-0">
            </div><!-- Sidebar Col end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php
include_once "rodape.php";
?>