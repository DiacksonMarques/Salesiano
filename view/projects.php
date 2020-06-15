<?php
include_once "topo.php"
?>
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner7.jpg)">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">PROJETOS</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li>Projetos</li>
                  </ol>
               </div>
            </div><!-- Col end -->
         </div><!-- Row end -->
      </div><!-- Container end -->
   </div><!-- Banner text end -->
</div><!-- Banner area end -->


<section id="project-area" class="project-area solid-bg">
	<div class="container">
		<div class="row text-center">
			<h2 class="section-title"></h2>
			<h3 class="section-sub-title"></h3>
		</div>
		<!--/ Title row end -->

		<div class="row">
			<div class="isotope-nav" data-isotope-nav="isotope">
				<ul>
					<li><a href="#" class="active" data-filter="*">Mostrar tudo</a></li>
					<li><a href="#" data-filter=".infantil">Infantil</a></li>
					<li><a href="#" data-filter=".fund1">Fundamental I</a></li>
					<li><a href="#" data-filter=".fund2">Fundamental II</a></li>
					<li><a href="#" data-filter=".med">Ensino Médio</a></li>
					<li><a href="#" data-filter=".parqa">Parque Aquático</a></li>
					<li><a href="#" data-filter=".sabal">Sala de Ballet</a></li>
				</ul>
			</div><!-- Isotope filter end -->


			<div id="isotope" class="isotope">
				<div class="col-md-4 col-sm-6 col-xs-12 infantil isotope-item">
					<div class="isotope-img-container">
						<a class="gallery-popup" href="../images/projects/project1.jpg">
							<img class="img-responsive" src="../images/projects/project1.jpg" alt="">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="#">Aulas interativas</a>
								</h3>
								<p class="project-cat">Infantil</p>
							</div>
						</div>
					</div>
				</div><!-- Isotope item 1 end -->

				<div class="col-md-4 col-sm-6 col-xs-12 infantil isotope-item">
					<div class="isotope-img-container">
						<a class="gallery-popup" href="../images/projects/project2.jpg">
							<img class="img-responsive" src="../images/projects/project2.jpg" alt="">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="#">Dormitorios</a>
								</h3>
								<p class="project-cat">Infantil</p>
							</div>
						</div>
					</div>
				</div><!-- Isotope item 2 end -->

				<div class="col-md-4 col-sm-6 col-xs-12 fund2 isotope-item">
					<div class="isotope-img-container">
						<a class="gallery-popup" href="../images/projects/project3.jpg">
							<img class="img-responsive" src="../images/projects/project3.jpg" alt="">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="#">Aulas de robótica</a>
								</h3>
								<p class="project-cat">Fundamental II</p>
							</div>
						</div>
					</div>
				</div><!-- Isotope item 3 end -->

				<div class="col-md-4 col-sm-6 col-xs-12 parqa isotope-item">
					<div class="isotope-img-container">
						<a class="gallery-popup" href="../images/projects/project4.jpg">
							<img class="img-responsive" src="../images/projects/project4.jpg" alt="">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="#">Aulas de natação inclusa</a>
								</h3>
								<p class="project-cat">Parque aquático, Fundamental I</p>
							</div>
						</div>
					</div>
				</div><!-- Isotope item 4 end -->

				<div class="col-md-4 col-sm-6 col-xs-12 sabal isotope-item">
					<div class="isotope-img-container">
						<a class="gallery-popup" href="../images/projects/project5.jpg">
							<img class="img-responsive" src="../images/projects/project5.jpg" alt="">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="#">Aulas de ballet inclusa</a>
								</h3>
								<p class="project-cat">Sala de Ballet, Fundamental I</p>
							</div>
						</div>
					</div>
				</div><!-- Isotope item 5 end -->

				<div class="col-md-4 col-sm-6 col-xs-12 fund1 isotope-item">
					<div class="isotope-img-container">
						<a class="gallery-popup" href="../images/projects/project6.jpg">
							<img class="img-responsive" src="../images/projects/project6.jpg" alt="">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="#">Salas Fundamental I</a>
								</h3>
								<p class="project-cat">Fundamental I</p>
							</div>
						</div>
					</div>
				</div><!-- Isotope item 6 end -->
			</div><!-- Isotop end -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section><!-- Project area end -->
<?php
include_once "rodape.php"
?>