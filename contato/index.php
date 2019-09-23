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
<div id="wrapper">
	<!-- start header -->
	<header>
            <?php
                $conteudo->telaTopClass("cont");
            ?>
	</header>
	<!-- end header 
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	-->
	<section id="content">
	<div class="map" style="padding-top: 55px;">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Selecione o(a) profissional e preencha os campos. <strong>Teremos o prazer em retornar em breve</strong></h4>
				<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Sua mensagem foi enviada! Retornaremos no mais breve possível !
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<select class="form-control">
							  <option value="">Quero falar com ...</option>
							  <option value="renata">Renata</option>
							  <option value="perfil2">Perfil 2</option>
							  <option value="perfil3">Perfil 3</option>
							  <option value="atend">Ninguém, só quero tirar uma dúvida :)</option>
							</select>
						</div>
						<div class="col-lg-8 field">
							&nbsp;
						</div>
						<div class="col-lg-4 field">
							&nbsp;
						</div>
						<div class="col-lg-4 field">
							&nbsp;
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="name" placeholder="* Preencha seu nome aqui" data-rule="maxlen:4" data-msg="Precisamos, pelo menos, de 4 caracteres" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="email" placeholder="* Seu e-mail" data-rule="email" data-msg="Digite seu e-mail válido" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="subject" placeholder="Estamos falando de..." data-rule="maxlen:4" data-msg="Digite o título" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Chegamos ! Digite sua mensagem..." data-rule="required" data-msg="Por favor, fale de´que precisa..."></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">ENVIAR</button>
								<span class="pull-right margintop20">* Campos obrigatório</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
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








<?php
/*
include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);


$error = '';



if(!$error)
{
$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'OK';
}

}


}*/
?>