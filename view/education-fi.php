<?php
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (isset($_SESSION['Usuid'])) {
   // Redireciona o visitante de volta pro login
   header("Location: ../framework/portal/view/dashboard");
   exit;
}

include_once "topo.php"
?>
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner4.jpg)">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Ensino Fundamental I</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li>Educação</li>
                     <li><a href="#">Ensino Fundamental I</a></li>
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
         <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="sidebar sidebar-left">
               <div class="widget"><!-- IN Widget-->
                  <h3 class="widget-title">Salas Virtuais</h3>
                  <ul class="nav nav-tabs nav-stacked service-menu"><!-- UL Widget-->
                     <li class="dropdown"><!-- DROP Widget-->
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne">1º Ano <i class="fa fa-angle-down"></i></a>
                        <ul id="collapseOne" class="panel-collapse collapse">
                           <div class="panel-body">
                              <ul class="nav nav-tabs nav-stacked service-menu">
                                 <li><a href="https://pt-br.padlet.com/1ano_a/salavirtual" target="_blank">1º Ano 'A'</a></li>
                                 <li><a href="https://pt-br.padlet.com/1ano_b/salavirtual" target="_blank">1º Ano 'B'</a></li>
                                 <li><a href="https://pt-br.padlet.com/1ano_c/salavirtual" target="_blank">1º Ano 'C'</a></li>
                                 <li><a href="https://pt-br.padlet.com/1ano_d/salavirtual" target="_blank">1º Ano 'D'</a></li>
                              </ul>
                           </div>
                        </ul>
                     </li><!-- DROP END 1 Widget-->
                     <li class="dropdown">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">2º Ano <i class="fa fa-angle-down"></i></a>
                        <ul id="collapseTwo" class="panel-collapse collapse">
                           <div class="panel-body">
                              <ul class="nav nav-tabs nav-stacked service-menu">
                                 <li><a href="https://pt-br.padlet.com/2ano_a/salvirtual" target="_blank">2º Ano 'A'</a></li>
                                 <li><a href="https://pt-br.padlet.com/2ano_b/salavirtual" target="_blank">2º Ano 'B'</a></li>
                                 <li><a href="https://pt-br.padlet.com/2ano_c/salavirtual" target="_blank">2º Ano 'C'</a></li>
                              </ul>
                           </div>
                        </ul>
                     </li><!-- DROP END 2 Widget-->
                     <li class="dropdown">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">3º Ano <i class="fa fa-angle-down"></i></a>
                        <ul id="collapseThree" class="panel-collapse collapse">
                           <div class="panel-body">
                              <ul class="nav nav-tabs nav-stacked service-menu">
                                 <li><a href="https://pt-br.padlet.com/3ano_a/salavirtual" target="_blank">3º Ano 'A'</a></li>
                                 <li><a href="https://pt-br.padlet.com/3ano_b/salavirtual" target="_blank">3º Ano 'B'</a></li>
                              </ul>
                           </div>
                        </ul>
                     </li><!-- DROP END 3 Widget-->
                     <li class="dropdown">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">4º Ano <i class="fa fa-angle-down"></i></a>
                        <ul id="collapseFour" class="panel-collapse collapse">
                           <div class="panel-body">
                              <ul class="nav nav-tabs nav-stacked service-menu">
                                 <li><a href="https://pt-br.padlet.com/4ano_a/salavirtual" target="_blank">4º Ano 'A'</a></li>
                                 <li><a href="https://pt-br.padlet.com/4ano_b/salavirtual" target="_blank">4º Ano 'B'</a></li>
                              </ul>
                           </div>
                        </ul>
                     </li><!-- DROP END 4 Widget-->
                     <li class="dropdown">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">5º Ano <i class="fa fa-angle-down"></i></a>
                        <ul id="collapseFive" class="panel-collapse collapse">
                           <div class="panel-body">
                              <ul class="nav nav-tabs nav-stacked service-menu">
                                 <li><a href="https://pt-br.padlet.com/5ano_a/salavirtual" target="_blank">5º Ano 'A'</a></li>
                                 <li><a href="https://pt-br.padlet.com/5ano_b/salavirtual" target="_blank">5º Ano 'B'</a></li>
                                 <li><a href="https://pt-br.padlet.com/5ano_c/salavirtual" target="_blank">5º Ano 'c'</a></li>
                              </ul>
                           </div>
                        </ul>
                     </li><!-- DROP END 5 Widget-->
                  </ul>
               </div><!-- Widget end -->

               <div class="widget">
                  <h3 class="widget-title">Segmentos</h3>
                  <ul class="nav nav-tabs nav-stacked service-menu">
                     <li><a href="education-inf">Educação Infantil</a></li>
                     <li class="active"><a href="education-fi">Ensino Fundamental I</a></li>
                     <li><a href="education-fii">Ensino Fundamental II</a></li>
                     <li><a href="education-med">Ensino Médio</a></li>
                  </ul>
               </div><!-- Widget end -->


               <div class="widget">
                  <!--<div class="quote-item quote-border">
                     <div class="quote-text-border">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                     </div>

                     <div class="quote-item-footer">
                        <img class="testimonial-thumb" src="../images/clients/testimonial1.jfif" alt="testimonial">
                        <div class="quote-item-info">
                           <h3 class="quote-author">Weldon Cash</h3>
                           <span class="quote-subtext">CEO, First Choice Group</span>
                        </div>
                     </div>
                  </div>Quote item end -->

               </div><!-- Widget end -->

            </div><!-- Sidebar end -->
         </div><!-- Sidebar Col end -->

         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="content-inner-page">

               <h2 class="column-title mrt-0">Ensino Fundamental I</h2>

               <div class="row">
                  <div class="col-md-12">
                     <p>O Colégio Salesiano São João Bosco fundamenta sua proposta pedagógica na formação integral do estudante por meio de um ensino de qualidade e de uma proposta evangelizadora. Nossa Pedagogia é alicerçada no Sistema Preventivo de Dom Bosco, nosso Patrono, método educativo baseado inteiramente na razão, na religião e na "amorevolezza", palavra sem tradução direta na língua portuguesa, mas que identificamos como bondade.</p>
                     <p>Como formação integral a educação salesiana proporciona o desenvolvimento das habilidades necessárias à formação do educando, visando motivá-lo a uma disponibilidade permanente para aprender a fazer, aprender a conhecer, aprender a ser e aprender a crer.</p>
                  </div><!-- col end -->
               </div><!-- 1st row end-->

               <div class="gap-40"></div>

               <div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">
                  <div class="item">
                     <img src="../images/projects/project7.jpg" alt="" />
                  </div>

                  <div class="item">
                     <img src="../images/projects/project6.jpg" alt="" />
                  </div>
               </div><!-- Page slider end -->

               <div class="gap-40"></div>

               <div class="row">
                  <div class="col-md-6">
                     <p>O material didático é exclusivo da RSE – Rede Salesiana de Escolas. As atividades pedagógicas são contextualizadas, sugeridas e inspiradas no material RSE, como também por recursos digitais e livros de apoio complementar, tais como gramática e paradidático</p>
                     <p>Assim, os educadores provocam o desenvolvimento do raciocínio e da reflexão facilitando a construção do conhecimento pelo educando.</p>
                  </div>

                  <div class="col-md-6">
                     <h3 class="column-title-small">VOCÊ DEVERIA SABER</h3>

                     <div class="panel-group panel-classic" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Sobre a série 1° Ano</a>
                              </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <p>O 1º ano do Ensino Fundamental I é uma etapa que possibilita a compreensão da cultura escrita e da matemática, fazendo com que o aluno se desenvolva em múltiplas formas de comunicação, facilitando a sua expressão, criação e compreensão do ambiente natural e social, estudando através da formulação de hipóteses e do desenvolvimento das diferentes formas de comunicação, ainda com o auxílio da ludicidade de expressão e criação.</p>
                              </div>
                           </div>
                        </div>
                        <!--/ Panel 1 end-->

                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">Ensino Fundamental no Brasil</a>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>O ensino fundamental é a etapa mais longa da educação básica. Com nove anos de duração, esta fase escolar atende alunos dos 6 aos 14 anos e é dividida em duas fases: Anos Iniciais, também conhecido como Ensino Fundamental I, e Anos Finais, que pode ser chamado de Ensino Fundamental II.</p>
                              </div>
                           </div>
                        </div>
                        <!--/ Panel 2 end-->


                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">Anos iniciais ensino fundamental </a>
                              </h4>
                           </div>
                           <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>Esse período é constituído do 1º ao 5° ano. É a fase que marca a saída da educação infantil. Nessa fase, a criança participa de atividades lúdicas que favorecem o seu desenvolvimento motor, cognitivo, social, entre outros aspectos. É durante os anos iniciais do ensino fundamental que o processo de alfabetização do estudante é iniciado. </p>
                              </div>
                           </div>
                        </div>
                        <!--/ Panel 3 end-->

                     </div>
                     <!--/ Accordion end -->
                  </div>
               </div>
               <!--2nd row end -->

               <div class="gap-40"></div>

               <!--<div class="call-to-action classic">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="call-to-action-text">
                           <h3 class="action-title">INTERESSADO COM ESTE SERVIÇO.</h3>
                        </div>
                     </div> Col end 
                     <div class="col-md-3">
                        <div class="call-to-action-btn">
                           <a class="btn btn-primary" href="#">Marca visita</a>
                        </div>
                     </div> col end 
                  </div> row end 
               </div> Action end -->

            </div><!-- Content inner end -->
         </div><!-- Content Col end -->


      </div><!-- Main row end -->
   </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php
include_once "rodape.php"
?>