<?php
include_once "topo.php";

if (isset($_POST['verificacao'])) {
   $verificacao = $_POST['verificacao'];
   if ($verificacao == "s") {
      $mostra = '<div class="alert alert-success" alert-dismissible fade show role="alert">
      <strong>Yess!</strong> Sua solicitação foi feita com sucesso.<small>Você receberá a senha no e-mail informado!</small>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
   } else {
      $mostra = '<div class="alert alert-danger" alert-dismissible fade show role="alert">
      <strong>Opss!</strong> Sua solicitação não foi completada verifique se a algo errado e tente novamente.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
   }
} else {
   $mostra = "";
}
?>
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner3.jpg)">
   <div class="slider-content text-left">
      <h2 class="slide-title-box animated2">#fiqueemcasa</h2>
   </div>
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Solicite sua senha</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li>Mais</li>
                     <li><a href="">Solicite sua senha</a></li>
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
                     <li><a href="router-est">Roteiro de Estudo</a></li>
                     <li><a href="router-fer">Roteiro de Férias</a></li>
                     <li class="active"><a href="solici-senha">Solicite sua senha</a></li>
                     <li><a href="comunicado">Comunicados</a></li>
                  </ul>
               </div><!-- Widget end -->
            </div><!-- Sidebar end -->
         </div><!-- Sidebar Col end -->

         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="content-inner-page">

               <h2 class="column-title mrt-0">Solicite sua senha</h2>

               <div class="row">
                  <div class="col-md-12">
                     <p>Espaço reservado para solicitar usuário e senha de acesso ao portal onde é você receberá a senha no e-mail informado!</p>
                     <p><small><b>Em caso de dúvida, entre em contato com o setor DTI: (88) 2101-3770</b></small></p>
                  </div><!-- col end -->
               </div><!-- 1st row end-->
               <?php
               echo $mostra
               ?>
               <div class="gap-40"></div>

               <div class="row">
                  <div class="col-md-6">
                     <div class="row">

                        <div class="col-md-12">

                           <h3 class="column-title">Preencha os campos</h3>

                           <form action="../framework/cadastro/Solise" method="POST" role="form">
                              <div class="error-container"></div>
                              <div class="row">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label>Nome do aluno</label>
                                          <input class="form-control form-control-name caixa-alta" name="nomealuno" id="name" placeholder="Nome do aluno completo" type="text" required="Digite o nome do aluno completo">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label>Nome do responsavel</label>
                                          <input class="form-control form-control-subject caixa-alta" name="nomeresp" id="subject" placeholder="Nome do responsvel completo" required="Digite o nome do responsavel completo">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Celular</label>
                                          <input class="form-control form-control-email" onkeyup="mascTel(this.value)" maxlength="15" name="telefone" id="telefone" placeholder="(88) 98809-5780" type="text" required="Digite o celular com DDD">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Série</label>
                                          <select name="turma" class="form-control" required="Digite o nome do aluno completo">
                                             <option selected value="">Selecione turma</option>
                                             <option value="Infantil II">Infantil II</option>
                                             <option value="Infantil III">Infantil III</option>
                                             <option value="Infantil IV">Infantil IV</option>
                                             <option value="Infantil V">Infantil V</option>
                                             <option value="1º Ano">1º Ano</option>
                                             <option value="2º Ano">2º Ano</option>
                                             <option value="3º Ano">3º Ano</option>
                                             <option value="4º Ano">4º Ano</option>
                                             <option value="5º Ano">5º Ano</option>
                                             <option value="6º Ano">6º Ano</option>
                                             <option value="7º Ano">7º Ano</option>
                                             <option value="8º Ano">8º Ano</option>
                                             <option value="9º Ano">9º Ano</option>
                                             <option value="1º Série">1º Série</option>
                                             <option value="2º Série">2º Série</option>
                                             <option value="3º Série">3º Série</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label>Tipo de login</label>
                                          <select name="login" class="form-control" required="Digite o nome do aluno completo">
                                             <option selected value="">Selecione para qual login você deseja solicitar</option>
                                             <option value="responsavel">Responsável: impressão de boletos</option>
                                             <option value="aluno">Aluno: acesso ao portal Edebê</option>
                                             <option value="responsavel_aluno">Acesso Responsável e Aluno</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label>Email</label>
                                          <input class="form-control form-control-email caixa-alta" name="email" id="email" placeholder="salesiano@gmail.com" type="email" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="text-right"><br>
                                       <button class="btn btn-primary solid blank" type="submit">Enviar solicitação</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>

                     </div><!-- Content row -->
                  </div>

                  <div class="col-md-6">
                     <h3 class="column-title-small">VOCÊ DEVERIA SABER</h3>

                     <div class="panel-group panel-classic" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Anos finais ensino fundamental </a>
                              </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <p>Os anos finais do ensino fundamental compreende do 6º ao 9º ano. Nesse período, o aluno já solidificou o seu processo de alfabetização e passa a ser apresentado a conteúdos mais complexos, relacionados à interpretação e produção textual, matemática, ciências, etc. Esse momento constitui uma base fundamental para o desenvolvimento do estudante no ensino médio.</p>
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
                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">Sobre a série 9° Ano </a>
                              </h4>
                           </div>
                           <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>O 9º e último ano do Ensino Fundamental mais uma vez indica transição na vida do estudante. Com um passo para o Ensino Médio, começam a se questionar quanto ao futuro: qual caminho focar, qual curso superior fazer, qual profissão escolher.</p>
                              </div>
                           </div>
                        </div>
                        <!--/ Panel 3 end-->

                     </div>
                     <!--/ Accordion end -->
                  </div>
               </div>
               <!--2nd row end -->
            </div><!-- Content inner end -->
         </div><!-- Content Col end -->


      </div><!-- Main row end -->
   </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php
include_once "rodape.php"
?>