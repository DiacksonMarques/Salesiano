<?php
include_once "topo.php"
?>
<section id="main-container" class="main-container">
   <div class="container">
      <div class="row">

         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

            <div class="post-content post-single">
               <div class="post-media post-image image-angle">
                  <img src="../images/news/news1.jpg" class="img-responsive" alt="">
               </div>

               <div class="post-body">
                  <div class="entry-header">
                     <div class="post-meta">
                        <span class="post-author">
                           <i class="fa fa-user"></i><a href="#"> Mateus Melo</a>
                        </span>
                        <span class="post-cat">
                           <i class="fa fa-folder-open"></i><a href="news.php"> Notícias</a>
                        </span>
                        <span class="post-meta-date"><i class="fa fa-calendar"></i> 07/Abril/2020 </span>
                        <span class="post-comment"><i class="fa fa-comment-o"></i> 00<a href="#" class="comments-link">Comentários</a></span>
                     </div>
                     <h2 class="entry-title">
                        <a href="news-single1.php">CAMPANHA SOLIDÁRIA “TODOS PELA VIDA” MOVIMENTA OBRA SALESIANA DE JUAZEIRO DO NORTE</a>
                     </h2>
                  </div><!-- header end -->

                  <div class="entry-content">
                     <p>Diante do cenário mundial de Pandemia do novocoravírus, a Obra Salesiana de
                        Juazeiro do Norte realiza campanha solidária de arrecadação de alimentos não
                        perecíveis para famílias carentes do município de Juazeiro do Norte.</p>

                     <p>A campanha “Todos pela Vida” tem o objetivo de arrecadar alimentos para
                        famílias de baixa renda, principais afetados neste período de isolamento social. De 06
                        a 24 de abril a Obra Salesiana arrecadará alimentos não perecíveis. O ponto de
                        arrecadação é o Colégio Salesiano que fica localizado na rua Pe. Cícero nº 1492,
                        horário de entrega de 07h30 às 17h.</p>

                     <p>Sabemos que neste momento histórico em que vivemos todos os cidadãos
                        sofrerão as consequências, mas, existem pessoas que necessitam do nosso olhar e
                        cuidado. Essa campanha é uma parceria do Colégio Salesiano, Paróquia Sagrado
                        Coração de Jesus, Rádio Padre Cícero e Horto do Padre Cícero. Faça sua parte! Todos
                        pela vida!</p>
                  </div>

                  <div class="tags-area clearfix">
                     <div class="post-tags pull-left">
                        <a href="#">Obra Salesiana</a>
                        <a href="#">Cólegio Salesiano</a>
                        <a href="#">Campanhas</a>
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

            <!-- Post comment start -->
            <div id="comments" class="comments-area">
               <h3 class="comments-heading">00 Comments</h3>

               <ul class="comments-list">
                  <li>

                  </li><!-- Comments-list li end -->
               </ul><!-- Comments-list ul end -->
            </div><!-- Post comment end -->

            <div class="comments-form border-box">
               <h3 class="title-normal">ADICIONE UM COMENTÁRIO</h3>

               <form role="form">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea class="form-control required-field" id="message" placeholder="Seu comentário" rows="10" required></textarea>
                        </div>
                     </div><!-- Col 12 end -->

                     <div class="col-md-4">
                        <div class="form-group">
                           <input class="form-control" name="name" id="name" placeholder="Seu nome" type="text" required>
                        </div>
                     </div><!-- Col 4 end -->

                     <div class="col-md-4">
                        <div class="form-group">
                           <input class="form-control" name="email" id="email" placeholder="Seu email" type="email" required>
                        </div>
                     </div>

                  </div><!-- Form row end -->
                  <div class="clearfix">
                     <button class="btn btn-primary" type="submit">Postar comentário</button>
                  </div>
               </form><!-- Form end -->
            </div><!-- Comments form end -->



         </div><!-- Content Col end -->


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
                     <li><a href="#">Enino fundamental I</a></li>
                     <li><a href="#">Enino fundamental II</a></li>
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
include_once "rodape.php"
?>