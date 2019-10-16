<!DOCTYPE html>

<?php
require_once "../classes/conteudo.class.php";
require_once "../classes/send.class.php";
require_once '../phpmailer/class.phpmailer.php';
require_once '../phpmailer/class.smtp.php';
require_once '../phpmailer/class.pop3.php';
require_once '../phpmailer/class.phpmaileroauth.php';
require_once '../phpmailer/PHPMailerAutoload.php';

$conteudo = new conteudo();
$s = new send();




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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.99239783872!2d-43.23898488431186!3d-22.913651243878274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e666c271011%3A0x4272cc0d5e73b818!2sBoulevard%2028%20de%20Setembro%2C%2044%20-%20Maracan%C3%A3%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020551-031!5e0!3m2!1spt-BR!2sbr!4v1569900848420!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
		</iframe>
<!--		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>-->
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Selecione o(a) profissional e preencha os campos. <strong>Teremos o prazer em retornar em breve</strong></h4>
				<form id="contactform" action="#" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Sua mensagem foi enviada! Retornaremos no mais breve possível !
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<select class="form-control">
							  <option value="">Quero falar com ...</option>
							  <option value="renata">Renata Neumann, psicóloga e psicopedagoga</option>
							  <option value="perfil2">Bruna Tavares, psicóloga</option>
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
							<input type="text" name="nome" placeholder="* Preencha seu nome aqui" data-rule="maxlen:4" data-msg="Precisamos, pelo menos, de 4 caracteres" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="email" placeholder="* Seu e-mail" data-rule="email" data-msg="Digite seu e-mail válido" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="titulo" placeholder="Estamos falando de..." data-rule="maxlen:4" data-msg="Digite o título" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="conteudo" class="input-block-level" placeholder="* Chegamos ! Digite sua mensagem..." data-rule="required" data-msg="Por favor, fale de´que precisa..."></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">ENVIAR</button>
								<span class="pull-right margintop20">* Campos obrigatório</span>
							</p>
						</div>
					</div>
				</form>
<?php

if($_POST){

	$nome 		= addslashes(filter_input(INPUT_POST, "nome"));
	$email 		= addslashes(filter_input(INPUT_POST, "email"));
	$titulo 	= addslashes(filter_input(INPUT_POST, "titulo"));
	$msg 		= addslashes(filter_input(INPUT_POST, "conteudo"));

	$s->setNome($nome);
	$s->setEmail($email);
	$s->setTitulo($titulo);
	$s->setMsg($msg);

	//echo "Nome: ".$nome."<br>";
	//echo "E-mail: ".$email."<br>";
	//echo "Título: ".$titulo."<br>";
	//echo "Mensagem: ".$msg."<br>";

	if($s->enviaMensagem()){
		
		if($s->enviandoRespostaAutomatica("naoresponder@mapti.com.br", $email, $nome)){

			echo "		<div class='alert alert-success' role='alert'>";
			echo "  		<p class='mb-0'>Enviado com sucesso!</p>";
			echo "		</div>";
			echo "		<meta http-equiv='refresh' content='5;URL=../contato/'>";

		}
	}
//					echo "<meta http-equiv='refresh' content='0;URL=inicial.php?m=reg&tp=fogum'>";


}
?>				
			</div>
		</div>
	</div>
	</section>

	<div class="row">
		<div class="col-lg-12">
			<div class="solidline">
			</div>
		</div>
	</div> 	

	<?php

	$conteudo->pagefooter("");

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