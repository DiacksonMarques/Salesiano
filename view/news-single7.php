<?php
include_once "topo.php";
include_once "../framework/dashboard/controller/conexao.php";

$id = 1;
$veri = $con->prepare("SELECT * FROM noticia WHERE id='$id'");
$veri->execute();
while ($org = $veri->fetch(PDO::FETCH_ASSOC)) {
?>
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="post-content post-single">
                        <div class="post-media post-image image-angle">
                            <?php echo $org['img']; ?>
                        </div>


                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="post-author">
                                        <?php
                                        $idusu = $org['id_usuario'];
                                        $veri2 = $con->prepare("SELECT * FROM usuario WHERE id='$idusu'");
                                        $veri2->execute();
                                        while ($org2 = $veri2->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <i class="fa fa-user"></i><a href="#"> <?php echo $org2['nome']; ?></a>
                                        <?php } ?>
                                    </span>
                                    <span class="post-cat">
                                        <i class="fa fa-folder-open"></i><a href="news"> Notícias</a>
                                    </span>
                                    <span class="post-meta-date"><i class="fa fa-calendar"></i> <?php echo $org['data']; ?> </span>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-single6"><?php echo $org['titulo']; ?></a>
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <?php echo $org['corpo']; ?>
                            </div>

                            <div class="tags-area clearfix">
                                <div class="post-tags pull-left">
                                    <a href="#">Cólegio Salesiano</a>
                                    <a href="#">Obra Salesiana</a>
                                    <a href="#">Projetos</a>
                                </div>
                                <div class="share-items pull-right">
                                    <ul class="post-social-icons unstyled">
                                        <li class="social-icons-head">Share:</li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div><!-- post-body end -->
                    </div><!-- post content end -->

                </div><!-- Content Col end -->
            <?php
        }
            ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <div class="sidebar sidebar-right">


                    <div class="widget recent-posts">
                        <h3 class="widget-title">Notícias recentes</h3>
                        <ul class="unstyled clearfix">
                            <li>
                                <div class="posts-thumb pull-left">
                                    <a href="news-single1"><img alt="img" src="../images/news/news7.jpeg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="news-single1">Festa De Nossa Senhora Auxiliadora 2020</a>
                                    </h4>
                                </div>
                                <div class="clearfix"></div>
                            </li><!-- 1st post end-->

                            <li>
                                <div class="posts-thumb pull-left">
                                    <a href="news-single1"><img alt="img" src="../images/news/news1.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="news-single1">CAMPANHA SOLIDÁRIA “TODOS PELA VIDA” MOVIMENTA OBRA SALESIANA DE JUAZEIRO DO NORTE</a>
                                    </h4>
                                </div>
                                <div class="clearfix"></div>
                            </li><!-- 2nd post end-->

                            <li>
                                <div class="posts-thumb pull-left">
                                    <a href="news-single2"><img alt="img" src="../images/news/news2.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="news-single2">Clube do Leitor reúne estudantes do Ensino Médio e amantes de Clarice Lispector</a>
                                    </h4>
                                </div>
                                <div class="clearfix"></div>
                            </li><!-- 3rd post end-->

                        </ul>

                    </div><!-- Recent post end -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="arrow nav nav-tabs nav-stacked">
                            <li><a href="#">Geral</a></li>
                            <li><a href="#">Educação Infantil</a></li>
                            <li><a href="#">Enino Fundamental I</a></li>
                            <li><a href="#">Enino Fundamental II</a></li>
                            <li><a href="#">Enino Médio</a></li>
                        </ul>
                    </div><!-- Categories end -->

                    <div class="widget">
                        <h3 class="widget-title">Arquivos </h3>
                        <ul class="arrow nav nav-tabs nav-stacked">
                            <li><a href="#">Abril 2020</a></li>
                            <li><a href="#">Março 2020</a></li>
                            <li><a href="#">Fevereiro 2020</a></li>
                            <li><a href="#">Janeiro 2020</a></li>
                            <li><a href="#">Dezembro 2019</a></li>
                        </ul>
                    </div><!-- Archives end -->

                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags </h3>

                        <ul class="unstyled clearfix">
                            <li><a href="#">Obra Salesiana</a></li>
                            <li><a href="#">Cólegio Salesiano</a></li>
                            <li><a href="#">Campanhas</a></li>
                            <li><a href="#">Educação Infantil</a></li>
                            <li><a href="#">Ensino Fundamental I</a></li>
                            <li><a href="#">Ensino Fundamental II</a></li>
                            <li><a href="#">Ensino Médio</a></li>
                            <li><a href="#">Projetos</a></li>
                        </ul>
                    </div><!-- Tags end -->


                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
    <?php
    include_once "rodape.php";
    ?>