<?php
include_once "topo.php"
?>
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner4.jpg)">
   <div class="slider-content text-left">
      <h2 class="slide-title-box animated2">#fiqueemcasa</h2>
   </div>
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Roteiro de Estudo</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li>Mais</li>
                     <li><a href="#">Roteiro de Estudo</a></li>
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
                  <h3 class="widget-title">Roteiros</h3>
                  <ul class="nav nav-tabs nav-stacked service-menu">
                     <li class="active"><a href="router-est">Roteiro de Estudo</a></li>
                     <li><a href="router-fer">Roteiro de Férias</a></li>
                     <li><a href="solici-senha">Solicite sua senha</a></li>
                     <li><a href="comunicado">Comunicados</a></li>
                  </ul>
               </div><!-- Widget end -->
            </div><!-- Sidebar end -->
         </div><!-- Sidebar Col end -->

         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="content-inner-page">

               <h2 class="column-title mrt-0">Roteiro de Estudo</h2>

               <div class="row">
                  <div class="col-md-12">
                     <p>Em virtude das medidas adotadas pelas autoridades governamentais em relação a prevenção do COVID-19 e com o objetivo de proteger a saúde dos alunos, professores e colaboradores disponibilizamos uma agenda pedagógica para estudos domiciliares neste período.</p>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="call-to-action-btn">
                              <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-ei-modal-lg">ACESSAR EDUCAÇÃO INFANTIL</a>
                           </div>
                        </div><!-- col end -->
                        <div class="col-md-6">
                           <div class="call-to-action-btn">
                              <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-f1-modal-lg">ACESSAR ENSINO FUNDAMENTAL I</a>
                           </div>
                        </div><!-- col end -->
                     </div>
                     <div class="gap-40"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="call-to-action-btn">
                              <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-f2-modal-lg">ACESSAR ENSINO FUNDAMENTAL II</a>
                           </div>
                        </div><!-- col end -->
                        <div class="col-md-3">
                           <div class="call-to-action-btn">
                              <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-em-modal-lg">ACESSAR ENSINO Médio</a>
                           </div>
                        </div><!-- col end -->
                     </div>
                     <div class="gap-40"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="call-to-action-btn">
                              <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-cartilha-modal-lg">ACESSAR CARTILHA</a>
                           </div>
                        </div><!-- col end -->
                        <div class="col-md-3">
                           <div class="call-to-action-btn">
                              <a class="btn btn-primary" href="../arquivos/cartilha/EBOOK.pdf" target="_blank">ACESSAR EBOOK</a>
                           </div>
                        </div><!-- col end -->
                     </div>
                  </div><!-- col end -->
               </div><!-- 1st row end-->
               <div class="gap-40"></div>
            </div><!-- Content inner end -->
         </div><!-- Content Col end -->


      </div><!-- Main row end -->
   </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php
include_once "rodape.php"
?>

<!-- INFANTIL-->
<div class="modal fade bd-ei-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Roteiro de estudo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card card-title">
               <h3>
                  <p>
                     <center>Educação Infantil</center>
                  </p>
               </h3>
            </div>
            <div class="card card-body">
               <div class="accordion" id="accordionExample">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              INFANTIL II
                           </button>
                        </h2>
                     </div>

                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_II_AGENDA.pdf" target="_blank">AGENDA</a></b>
                           </div>
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_II_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              INFANTIL III
                           </button>
                        </h2>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_III_AGENDA.pdf" target="_blank">AGENDA</a></b>
                           </div>
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_III_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              INFANTIL IV
                           </button>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_IV_AGENDA.pdf" target="_blank">AGENDA</a></b>
                           </div>
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_IV_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                           </div>
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_IV_ANEXO.pdf" target="_blank">ANEXO</a></b>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                              INFANTIL V
                           </button>
                        </h2>
                     </div>
                     <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_V_AGENDA.pdf" target="_blank">AGENDA</a></b>
                           </div>
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_V_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                           </div>
                           <div class="row">
                              <b><a href="../arquivos/tarefas/INF_V_BANCO_DE_PESQUISA.pdf" target="_blank">BANCO DE PESQUISA</a></b>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              ATIVIDADES ADAPTADAS
                           </button>
                        </h2>
                     </div>
                     <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                           <div class="row">
                              <b><a href="../arquivos/tarefas_adaptadas/INF_IV_ALVARO_DE_MOURA.pdf" target="_blank">ALVARO DE MOURA</a></b>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- F1-->
<div class="modal fade bd-f1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Roteiro de estudo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card card-title">
               <h3>
                  <p>
                     <center>Ensino Fundamental I</center>
                  </p>
               </h3>
            </div>
            <div class="card card-body">
               <div class="accordion" id="fundamental1">
                  <div class="card">
                     <div class="card-header" id="hfundamental1One">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#cfundamental1One" aria-expanded="true" aria-controls="cfundamental1One">
                              1º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental1One" class="collapse" aria-labelledby="hfundamental1One" data-parent="#fundamental1">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_PRODUCAO_TEXTUAL.pdf" target="_blank">PRODUÇÃO TEXTUAL</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_ANEXO_CIENCIAS.pdf" target="_blank">ANEXO CIÊNCIAS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_ANEXO_GEOGRAFIA.pdf" target="_blank">ANEXO GEOGRAFIA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_ANEXO_HISTORIA.pdf" target="_blank">ANEXO HISTÓRIA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_ANEXO_MATEMATICA.pdf" target="_blank">ANEXO MATEMÁTICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1ANO_ANEXO_PORTUGUES.pdf" target="_blank">ANEXO PORTUGUÊS</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental1Two">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental1Two" aria-expanded="false" aria-controls="cfundamental1Two">
                              2º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental1Two" class="collapse" aria-labelledby="hfundamental1Two" data-parent="#fundamental1">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2ANO_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2ANO_BANCO_DE_PESQUISA.pdf" target="_blank">BANCO DE PESQUISA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental1Three">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental1Three" aria-expanded="false" aria-controls="cfundamental1Three">
                              3º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental1Three" class="collapse" aria-labelledby="hfundamental1Three" data-parent="#fundamental1">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3ANO_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental1Four">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental1Four" aria-expanded="false" aria-controls="cfundamental1Four">
                              4º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental1Four" class="collapse" aria-labelledby="hfundamental1Four" data-parent="#fundamental1">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/4ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/4ANO_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/4ANO_PRODUCAO_TEXTUAL.pdf" target="_blank">PRODUÇÃO TEXTUAL</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental1Five">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental1Five" aria-expanded="false" aria-controls="cfundamental1Five">
                              5º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental1Five" class="collapse" aria-labelledby="hfundamental1Five" data-parent="#fundamental1">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/5ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/5ANO_TAREFAS.pdf" target="_blank">TAREFAS</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="hfundamental1Six">
                           <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental1Six" aria-expanded="false" aria-controls="cfundamental1Six">
                                 ATIVIDADES ADAPTADAS
                              </button>
                           </h2>
                        </div>
                        <div id="cfundamental1Six" class="collapse" aria-labelledby="hfundamental1Six" data-parent="#fundamental1">
                           <div class="card-body">
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/4ANO_CICERO_THOMAS_ARRAES_FELIX.pdf" target="_blank">CICERO THOMAS ARRAES FELIX</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/3ANO_ESTHER_CANDIDO_DA_SILVA_SOUSA.pdf" target="_blank">ESTHER CANDIDO DA SILVA</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/2ANO_FELIPE_ROCHA_BRITO.pdf" target="_blank">FELIPE ROCHA BRITO</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/2ANO_JUAN_ENRIQUE_DINIZ.pdf" target="_blank">JUAN ENRIQUE DINIZ</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/2ANO_MARIA_MARIANA_DIAS_DE_ALENCAR.pdf" target="_blank">MARIA MARIANA DIAS</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/4ANO_ODELOR_CAUE_MARIANO_ROLEDO.pdf" target="_blank">ODELOR CAUE MARIANO ROLEDO</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/ATIVIDADE_EXTRA_PORTUGUÊS.pdf" target="_blank">ATIVIDADES PORTUGUÊS</a></b>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="">
                                    <b><a href="../arquivos/tarefas_adaptadas/ATIVIDADE_EXTRA_MATEMATICA.pdf" target="_blank">ATIVIDADES MATEMÁTICA</a></b>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- F2-->
<div class="modal fade bd-f2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Roteiro de estudo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card card-title">
               <h3>
                  <p>
                     <center>Ensino Fundamental II</center>
                  </p>
               </h3>
            </div>
            <div class="card card-body">
               <div class="accordion" id="fundamental2">
                  <div class="card">
                     <div class="card-header" id="hfundamental2One">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#cfundamental2One" aria-expanded="true" aria-controls="cfundamental2One">
                              6º Ano 'A' e 'B'
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental2One" class="collapse" aria-labelledby="hfundamental2One" data-parent="#fundamental2">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/6ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental2Two">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental2Two" aria-expanded="false" aria-controls="cfundamental2Two">
                              7º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental2Two" class="collapse" aria-labelledby="hfundamental2Two" data-parent="#fundamental2">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/7ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/7ANO_ANEXO_EDFISICA.pdf" target="_blank">ANEXO EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental2Three">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental2Three" aria-expanded="false" aria-controls="cfundamental2Three">
                              8º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental2Three" class="collapse" aria-labelledby="hfundamental2Three" data-parent="#fundamental2">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/8ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/8ANO_ANEXO_EDFISICA.pdf" target="_blank">ANEXO EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental2Four">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cfundamental2Four" aria-expanded="false" aria-controls="cfundamental2Four">
                              9º Ano
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental2Four" class="collapse" aria-labelledby="hfundamental2Four" data-parent="#fundamental2">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/9ANO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hfundamental2Five">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#cfundamental2Five" aria-expanded="true" aria-controls="cfundamental2Five">
                              ATIVIDADES ADAPTADAS
                           </button>
                        </h2>
                     </div>
                     <div id="cfundamental2Five" class="collapse" aria-labelledby="hfundamental2Five" data-parent="#fundamental2">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas_adaptadas/ATIVIDADE_EXTRA_PORTUGUÊS.pdf" target="_blank">ATIVIDADES PORTUGUÊS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas_adaptadas/ATIVIDADE_EXTRA_MATEMATICA.pdf" target="_blank">ATIVIDADES MATEMÁTICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
         </div>
      </div>
   </div>
</div>

<!--Médio-->
<div class="modal fade bd-em-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Roteiro de estudo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card card-title">
               <h3>
                  <p>
                     <center>Ensino Médio</center>
                  </p>
               </h3>
            </div>
            <div class="card card-body">
               <div class="accordion" id="medio">
                  <div class="card">
                     <div class="card-header" id="hmedioOne">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#cmedioOne" aria-expanded="true" aria-controls="cmedioOne">
                              1ª Série
                           </button>
                        </h2>
                     </div>
                     <div id="cmedioOne" class="collapse" aria-labelledby="hmedioOne" data-parent="#medio">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1MEDIO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1MEDIO_ANEXO1_EDFISICA.pdf" target="_blank">ANEXO 1 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1MEDIO_ANEXO2_EDFISICA.pdf" target="_blank">ANEXO 2 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1MEDIO_ANEXO_FISICA.pdf" target="_blank">ANEXO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1MEDIO_ANEXO_PORTUGUES.pdf" target="_blank">ANEXO PORTUGUÊS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/1MEDIO_ANEXO_QUIMICA.pdf" target="_blank">ANEXO QUÍMICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hmedioTwo">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cmedioTwo" aria-expanded="false" aria-controls="cmedioTwo">
                              2ª Série
                           </button>
                        </h2>
                     </div>
                     <div id="cmedioTwo" class="collapse" aria-labelledby="hmedioTwo" data-parent="#medio">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2MEDIO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2MEDIO_ANEXO1_EDFISICA.pdf" target="_blank">ANEXO 1 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2MEDIO_ANEXO2_EDFISICA.pdf" target="_blank">ANEXO 2 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2MEDIO_ANEXO_FISICA.pdf" target="_blank">ANEXO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2MEDIO_ANEXO_PORTUGUES.pdf" target="_blank">ANEXO PORTUGUÊS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/2MEDIO_ANEXO_QUIMICA.pdf" target="_blank">ANEXO QUÍMICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hmedioThree">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cmedioThree" aria-expanded="false" aria-controls="cmedioThree">
                              3ª Série
                           </button>
                        </h2>
                     </div>
                     <div id="cmedioThree" class="collapse" aria-labelledby="hmedioThree" data-parent="#medio">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3MEDIO_ROTEIRO_DE_ESTUDO.pdf" target="_blank">ROTEIRO DE ESTUDO</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3MEDIO_ANEXO1_EDFISICA.pdf" target="_blank">ANEXO 1 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3MEDIO_ANEXO2_EDFISICA.pdf" target="_blank">ANEXO 2 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3MEDIO_ANEXO3_EDFISICA.pdf" target="_blank">ANEXO 3 EDUCAÇÃO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3MEDIO_ANEXO_FISICA.pdf" target="_blank">ANEXO FÍSICA</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas/3MEDIO_ANEXO_QUIMICA.pdf" target="_blank">ANEXO QUÍMICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hmedioFour">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cmedioFour" aria-expanded="false" aria-controls="cmedioFour">
                              ATIVIDADES ADAPTADAS
                           </button>
                        </h2>
                     </div>
                     <div id="cmedioFour" class="collapse" aria-labelledby="hmedioFour" data-parent="#medio">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas_adaptadas/ATIVIDADE_EXTRA_PORTUGUÊS.pdf" target="_blank">ATIVIDADES PORTUGUÊS</a></b>
                              </div>
                           </div>
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/tarefas_adaptadas/ATIVIDADE_EXTRA_MATEMATICA.pdf" target="_blank">ATIVIDADES MATEMÁTICA</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
         </div>
      </div>
   </div>
</div>

<!-- Cartilha-->
<div class="modal fade bd-cartilha-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Roteiro de estudo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card card-title">
               <h3>
                  <p>
                     <center>Cartilha</center>
                  </p>
               </h3>
            </div>
            <div class="card card-body">
               <div class="accordion" id="cartilha">
                  <div class="card">
                     <div class="card-header" id="hcartilhaOne">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ccartilhaOne" aria-expanded="true" aria-controls="ccartilhaOne">
                              INFANTIL
                           </button>
                        </h2>
                     </div>
                     <div id="ccartilhaOne" class="collapse" aria-labelledby="hcartilhaOne" data-parent="#cartilha">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/cartilha/CARTILHA_ATIVIDADES_PARA_TODA_FAMILIA_INFANTIL.pdf" target="_blank">CARTILHA INFANTIL</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="hcartilhaTwo">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ccartilhaTwo" aria-expanded="false" aria-controls="ccartilhaTwo">
                              FUNDAMENTAL I
                           </button>
                        </h2>
                     </div>
                     <div id="ccartilhaTwo" class="collapse" aria-labelledby="hcartilhaTwo" data-parent="#cartilha">
                        <div class="card-body">
                           <div class="row">
                              <div class="">
                                 <b><a href="../arquivos/cartilha/CARTILHA_ATIVIDADES_PARA_TODA_FAMILIA_F_I.pdf" target="_blank">CARTILHA FUNDAMENTAL I</a></b>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
         </div>
      </div>
   </div>
</div>