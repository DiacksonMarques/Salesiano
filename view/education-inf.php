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
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner2.jpg)">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Educação Infantil</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li>Educação</li>
                     <li><a href="#">Educação Infantil</a></li>
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
               <div class="widget">
                  <h3 class="widget-title">Salas Virtuais</h3>
                  <ul class="nav nav-tabs nav-stacked service-menu">
                     <li><a href="portal" target="_blank">Infantil II</a></li>
                     <li><a href="portal" target="_blank">Infantil III</a></li>
                     <li><a href="portal" target="_blank">Infantil IV</a></li>
                     <li><a href="portal" target="_blank">Infantil V</a></li>
                  </ul>
               </div><!-- Widget end -->

               <div class="widget">
                  <h3 class="widget-title">Segmentos</h3>
                  <ul class="nav nav-tabs nav-stacked service-menu">
                     <li class="active"><a href="education-inf">Educação Infantil</a></li>
                     <li><a href="education-fi">Ensino Fundamental I</a></li>
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
                  </div> Quote item end -->

               </div><!-- Widget end -->

            </div><!-- Sidebar end -->
         </div><!-- Sidebar Col end -->

         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="content-inner-page">

               <h2 class="column-title mrt-0">Educação Infantil</h2>

               <div class="row">
                  <div class="col-md-12">
                     <p>Com base no Referencial Curricular Nacional para a Educação Infantil e na Pedagogia Salesiana, a Educação Infantil do Colégio Salesiano oferece um espaço estimulante, lúdico e afetivo favorável ao desenvolvimento integral do educando em seus aspectos físico, psicológico, social e intelectual, oportunizando uma educação eficiente e saudável. </p>
                     <p>Trabalhando com material didático exclusivo – O Caleidoscópio, buscamos desenvolver a identidade social, cultural e religiosa, os valores salesianos, a criatividade, o afeto e a convivência com as diferenças. Assim, nosso material é fundamentado a partir dos seguintes princípios:</p>
                  </div><!-- col end -->
               </div><!-- 1st row end-->

               <div class="gap-40"></div>

               <div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">
                  <div class="item">
                     <img src="../images/projects/project1.jpg" alt="" />
                  </div>

                  <div class="item">
                     <img src="../images/projects/project2.jpg" alt="" />
                  </div>
               </div><!-- Page slider end -->

               <div class="gap-40"></div>

               <div class="row">
                  <div class="col-md-6">
                     <ul class="list-arrow">
                        <li>Orespeito à dignidade e aos direitos das crianças, consideradas nas suas diferenças individuais, sociais, econômicas, culturais, étnicas, religiosas, etc;</li>
                        <li>O acesso das crianças aos bens socioculturais disponíveis, ampliando o desenvolvimento das capacidades relativas à expressão, à comunicação, à interação social, ao pensamento, à ética, à estética e ao conhecimento;</li>
                        <li>A socialização das crianças por meio de sua participação e inserção nas mais diversificadas práticas sociais, sem qualquer discriminação;</li>
                        <li>O atendimento aos cuidados essenciais associados à sobrevivência e ao desenvolvimento de sua identidade.</li>
                     </ul>
                     <p>A proposta do Caleidoscópio favorece situações sequenciadas e planejadas para que se atue conjuntamente com as crianças na construção dos saberes e na correlação entre eles. Por essa razão, investe-se nas competências individuais e coletivas, já que as crianças nunca aprendem da mesma forma.</p>
                  </div>

                  <div class="col-md-6">
                     <h3 class="column-title-small">VOCÊ DEVERIA SABER</h3>

                     <div class="panel-group panel-classic" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">A importância da Educação Infantil</a>
                              </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <p>Nessa fase, todos os conceitos são trabalhados a partir das brincadeiras e estímulos sensoriais. É por meio da interação com os colegas, dos projetos em grupo e de atividades lúdicas que a criança aprende sobre coletividade, sobre compartilhar, construir em conjunto e sobre seus sentimentos.</p>
                              </div>
                           </div>
                        </div>
                        <!--/ Panel 1 end-->

                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">A educação e o desenvolvimento infantil</a>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>Como você pôde ver, matricular seu filho na educação infantil pode contribuir para seu desenvolvimento emocional, social e motor. Então, se essa escolha chegou para você, não hesite! Pense que ele vai descobrir o mundo por meio de um ambiente preparado para a aprendizagem, seguro e acolhedor.</p>
                              </div>
                           </div>
                        </div>
                        <!--/ Panel 2 end-->


                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">As fases do desenvolvimento infantil</a>
                              </h4>
                           </div>
                           <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>Observar as crianças e os sinais que elas dão de que precisam e querem ser estimuladas além da rotina caseira é o primeiro passo. Também é válido notar que o período dos dois aos cinco anos é a fase da experimentação sensorial, ou seja, é quando a criança começa a interagir com o ambiente que a cerca e a reconhecer conscientemente os elementos. Ela basicamente vai descobrindo o mundo e a si mesma por meio do que é apresentado a ela.</p>
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