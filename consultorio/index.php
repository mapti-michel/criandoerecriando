<!DOCTYPE html>

<?php
require_once "../classes/conteudo.class.php";


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
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../css/jcarousel.css" rel="stylesheet" />
<link href="../css/flexslider.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />

<link rel="shortcut icon" href="../img/logoCR.ico">
<link rel="icon" type="image/png" href="../img/logoRosto.png">


<link href="../skins/default.css" rel="stylesheet" />

</head>
<body>
<!-- <meta http-equiv="refresh" content="5;url=index.php"> -->
<div id="wrapper">
	<!-- start header -->
	<header>
            <?php
                $conteudo->telaTopClass("consult");
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
                <img src="../img/slides/slide1CR.jpg" alt="" style="border: 2px; border-color: #58ACFA;" />
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
                <img src="../img/slides/slide2CR.jpg" alt="" />
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
                <img src="../img/slides/slide3CR.jpg" alt="" />
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

<?php

	$conteudo->pageDownSlides("");

?>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div> 
		<!-- end divider -->
	<?php
		$conteudo->pageFooter();
	?>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/google-code-prettify/prettify.js"></script>
<script src="../js/portfolio/jquery.quicksand.js"></script>
<script src="../js/portfolio/setting.js"></script>
<script src="../js/jquery.flexslider.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
