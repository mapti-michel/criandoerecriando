<!DOCTYPE html>

<?php
require_once "./classes/conteudo.class.php";


$conteudo = new conteudo();

?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<title>CRIANDO E RECRIANDO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://www.mapti.com.br" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<link rel="shortcut icon" href="img/logoCR.ico">
<link rel="icon" type="image/png" href="img/logoRosto.png">


<link href="skins/default.css" rel="stylesheet" />

</head>
<body>
<!-- <meta http-equiv="refresh" content="5;url=index.php"> -->
<div id="wrapper">
	<!-- start header -->
	<header>
            <?php
                $conteudo->telaTop();
            ?>
        
    </header>
	<!-- end header -->
	<section id="featured" style="background-color: #ffffff;">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
<!--             <li>
                <img src="img/works/logoFigura.png" alt="" />
                <div class="flex-caption">
                    <label>Centro Ambulatorial Jabour</label> 
					<p>Equipe médica com suas especialidades, com o objetivo em atendê-los sempre bem.</p> 
					<a href="#" class="btn btn-theme">Conheça-nos</a>
                </div>
              </li>-->
              <li>
                <img src="img/slides/slide1CR.jpg" alt="" style="border: 2px; border-color: #58ACFA;" />
                <div class="flex-caption" style="width: 70%; background-color: rgba(9, 133, 238, 0.7);">
                    <!--<h3>Criando e Recriando</h3> -->
                    <i>
						<p style="font-weight: bold;">
							"Crianças são como borboletas ao vento... algumas voam rápido... algumas voam pausadamente, mas todas voam do seu melhor jeito... cada uma é diferente, cada uma é linda e cada uma é especial."
						</p> 
						<div align="right"><p><b>Alexandre Lemos - APAE</b></p></div>
					</i>
                </div>
              </li>
              <li>
                <img src="img/slides/slide2CR.jpg" alt="" />
                <div class="flex-caption" style="width: 70%; background-color: rgba(9, 133, 238, 0.7);">
                    <i>
						<p style="font-weight: bold;">
							"Eu faço as minhas coisas, e você faz as suas. Eu não estou neste mundo para viver suas expectativas, e você não está neste mundo para viver as minhas, você é você, e eu sou eu, e se por acaso nos encontrarmos será ótimo. Se não, nada se pode fazer."
						</p> 
						<div align="right"><p><b>Fritz Perls</b></p></div>
					</i>
<!--                <div class="flex-caption">
                    <h3>Convênio e Particular</h3> 
					<p>Atendemos com preços populares</p> 
					<a href="#" class="btn btn-theme">Saiba com mais detalhes</a>
                </div> -->
                </div>
              </li>
              <li>
                <img src="img/slides/slide3CR.jpg" alt="" />
                <div class="flex-caption" style="width: 70%; background-color: rgba(9, 133, 238, 0.7);">
                    <i>
						<p style="font-weight: bold;">
							"Minha função como terapeuta é ajudar vocês a tomarem coinsciência do aqui e do agora, e frustrar vocês em qualquer tentativa de fugir disto."
						</p> 
						<div align="right"><p><b>Fritz Perls</b></p></div>
					</i>
<!--                <div class="flex-caption">
                    <h3>Horário e atendimentos</h3> 
					<p>Veja os dias que atendemos, dentro de sua especialidade.</p> 
					<a href="#" class="btn btn-theme">Saiba com mais detalhes</a>
                </div> -->
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
<!--
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2>Consultório de <span>Psicologia</span> e <span>Psicopedagogia</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
-->
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Insttitucional</h4>
								<div class="icon">
									<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
								 	Saiba quem são os profissionais do nosso consultório
								</p>
									
							</div>
							<div class="box-bottom" style="background-color: rgba(9, 133, 238, 0.7);">
								<a href="#">Clique aqui</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
					<!-- &nbsp; -->
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Serviços</h4>
								<div class="icon">
									<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
									Conheça os nossos serviços e especialidades.
								</p>
									
							</div>
							<div class="box-bottom" style="background-color: rgba(9, 133, 238, 0.7); div:hover: rgba(9, 133, 238, 0.7)">
								<a href="#">Clique aqui</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Especialidades</h4>
								<div class="icon">
									<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
									Conheça os nossos profissionais de saúde e suas especialidades.
								</p>
									
							</div>
							<div class="box-bottom" style="background-color: rgba(9, 133, 238, 0.7);">
								<a href="#">Clique aqui</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Dicas de saúde</h4>
								<div class="icon">
									<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
								 Conheça as nossas dicas para a sua saúde.
								</p>
									
							</div>
							<div class="box-bottom" style="background-color: rgba(9, 133, 238, 0.7);">
								<a href="#">Clique aqui</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div> 
		<!-- end divider -->
		<!-- Portfolio Projects -->
<!--		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio"> -->
						<!-- Item Project and Filter Name -->
<!--						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">-->
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
<!--						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1" href="img/works/1.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a> -->
						<!-- Thumb Image and Description -->
<!--						<img src="img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</div>
						</li>-->
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
<!--						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon"> -->
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
<!--						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 2" href="img/works/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a> -->
						<!-- Thumb Image and Description -->
						<!--<img src="img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>-->
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<!--<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">-->
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<!--<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 3" href="img/works/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>-->
						<!-- Thumb Image and Description -->
						<!--<img src="img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>--
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<!--<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">-->
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<!--<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 4" href="img/works/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>-->
						<!-- Thumb Image and Description -->
						<!--<img src="img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>-->
						<!-- End Item Project -->
<!--					</ul>
					</section>
				</div>
			</div>
		</div> -->

	</div>
	</section>
	<footer style="background-color: rgba(9, 133, 238, 0.9);">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Contatos</h5>
					<address>
					<strong>Criando e Recriando - Consultório de Psicologia e Psicopedagogia</strong><br>
					 Av. Boulevard 28 de setembro, 44, sala 609 - Vila Isabel<br>
					 Rio de Janeiro/RJ <br>
					 </address>
<!--					<p>
						<i class="icon-phone"></i> (21) 2404-3473 <br>
						<i class="icon-envelope-alt"></i> contato@caj.com.br
					</p>-->
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Páginas</h5>
					<ul class="link-list">
						<li><a href="/institucional/">Institucional</a></li>
						<li><a href="/servicos/">Serviços</a></li>
						<li><a href="/profissionais/">Profissionais</a></li>
						<li><a href="/contato/">Contato</a></li>
<!--						<li><a href="#">Contact us</a></li> -->
					</ul>
				</div>
			</div>
			<!--<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>-->
			<!--<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Flickr photostream</h5>
					<div class="flickr_badge">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>-->
		</div>
	</div>
	<div id="sub-footer" style="background-color: rgba(9, 133, 238, 0.9);">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Criando e Recriando 2019 All right reserved. By </span><a href="http://www.mapti.com.br" target="_blank">MAP TI</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<!--<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>-->
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
