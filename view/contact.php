<?php
include_once "topo.php"
?>
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner3.jpg)">
	<div class="banner-text">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="banner-heading">
						<h1 class="banner-title">CONTATO</h1>
						<ol class="breadcrumb">
							<li>Home</li>
							<li><a href="#">Contato</a></li>
						</ol>
					</div>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Banner text end -->
</div><!-- Banner area end -->


<section id="main-container" class="main-container">
	<div class="container">

		<div class="row text-center">
			<h2 class="section-title">ALCANÇAR O NOSSO CÓLEGIO</h2>
			<h3 class="section-sub-title">Encontre a nossa localização</h3>
		</div>
		<!--/ Title row end -->

		<div class="row">
			<div class="col-md-4">
				<div class="ts-service-box-bg text-center">
					<span class="ts-service-icon icon-round">
						<i class="fa fa-map-marker"></i>
					</span>
					<div class="ts-service-box-content">
						<h4>VISITE O NOSSO CÓLEGIO</h4>
						<p>R. Padre Cícero, Nº.1492</p>
					</div>
				</div>
			</div><!-- Col 1 end -->

			<div class="col-md-4">
				<div class="ts-service-box-bg text-center">
					<span class="ts-service-icon icon-round">
						<i class="fa fa-envelope"></i>
					</span>
					<div class="ts-service-box-content">
						<h4>Envia-nos um email</h4>
						<p>ouvidoria@salesianojuazeiro.com.br</p>
					</div>
				</div>
			</div><!-- Col 2 end -->

			<div class="col-md-4">
				<div class="ts-service-box-bg text-center">
					<span class="ts-service-icon icon-round">
						<i class="fa fa-phone-square"></i>
					</span>
					<div class="ts-service-box-content">
						<h4>Ligue-nos</h4>
						<p>(88) 2101-3770</p>
					</div>
				</div>
			</div><!-- Col 3 end -->

		</div><!-- 1st row end -->

		<div class="gap-60"></div>

		<div id="map" class="map"></div>

		<div class="gap-40"></div>

		<div class="row">

			<div class="col-md-12">

				<h3 class="column-title">NÓS AMAMOS OUVIR</h3>

				<form id="contact-form" action="404" method="post" role="form">
					<div class="error-container"></div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Nome</label>
								<input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Telefone</label>
								<input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mensagem</label>
						<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Enviar Mensagem</button>
					</div>
				</form>
			</div>

		</div><!-- Content row -->
	</div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
include_once "rodape.php"
?>