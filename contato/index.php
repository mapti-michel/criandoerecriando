<?php

date_default_timezone_set("America/Sao_Paulo");

//print_r(DateTimeZone::listIdentifiers());

ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", dirname(__FILE__).'/error_log_contact.txt');
ini_set("session.use_trans_sid", 0);
error_reporting(E_ALL);

ob_start();
session_start();

require_once "../classes/conteudo.class.php";
require_once "../classes/send.class.php";
require_once "../classes/class.sendmessage.php";
require_once '../phpmailer/class.phpmailer.php';
require_once '../phpmailer/class.smtp.php';
require_once '../phpmailer/class.pop3.php';
require_once '../phpmailer/class.phpmaileroauth.php';
require_once '../phpmailer/PHPMailerAutoload.php';


$conteudo = new conteudo();
//$s = new send();

$send_message = new sendmessage();


if($_POST){


$number_captcha		= filter_input(INPUT_POST, "capt");
$num_captcha_code	= filter_input(INPUT_POST, "captcha_code");

	if($number_captcha === $_SESSION['secure']){

		$prof ="";
		$email_prof ="";

		$ip 		= getenv("REMOTE_ADDR");
		$navegador 	= $_SERVER['HTTP_USER_AGENT'];

        date_default_timezone_set("America/Sao_Paulo");

        $hora_cor	= date('H') - 1;
        $min_cor	= date('i');

		$falarcom 	= filter_input(INPUT_POST,'falarcom');

		switch ($falarcom) {
			case 'renata':
				$prof = "Renata Neumann, psicóloga e psicopedagoga";
				//$email_prof ="renataneumann@criandoerecriando.com.br";
				$email_prof ="renataneumannpsico@gmail.com";
				break;

			case 'bruna':
				$prof = "Bruna Tavares, psicóloga";
				//$email_prof ="brunalauria@criandoerecriando.com.br";
				$email_prof = "psibrunalauria@gmail.com";
				break;
			
			default:
				$prof = "Ninguém, só quero tirar uma dúvida";
				//$email_prof ="contato@criandoerecriando.com.br";
				$email_prof = "renataneumannpsico@gmail.com";
				break;
		}


		$dataEnvio	= date('d/m/Y');
		$horaEnvio	= $hora_cor.":".$min_cor;
		$nome 		= filter_input(INPUT_POST, "nome");
		$email 		= filter_input(INPUT_POST, "email");
		$titulo 	= filter_input(INPUT_POST, "titulo");
		$mensagem 	= filter_input(INPUT_POST, "conteudo");

		$send_message->criaXML($number_captcha, $dataEnvio, $horaEnvio, $prof, $email_prof, $nome, $email, $titulo, $mensagem, $ip, $navegador);

		$link = $send_message->geraLink($number_captcha, base64_encode($email));

		$send_message->setNome($nome);

		$send_message->envia_confirm($number_captcha, $link, $dataEnvio, $email, $titulo, $mensagem, $prof);

	}else{
		$erro = "errcaptcha";
		header("Location: ?send=".base64_encode($erro));
	}


} //Fecha o POST



?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>CRIANDO E RECRIANDO: CONTATO</title>
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

<style rel="stylesheet">

#muda{
	background-color: #120a8f;
	font-weight: normal;
	color: #fff;
}


#muda:hover{
	background-color: #006400;
	font-weight: bold;
	color: #fff;
}

</style>


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
	<div align="right">
		<a class="btn btn-primary" data-toggle="collapse" href="#col_mapa" role="button" aria-expanded="false" aria-controls="collapseExample" id="muda">
			Ver Mapa
		</a>
	</div>


	<section id="content">


						<!-- ERROS E ACERTO DE ENVIO -->
						<div class="col-lg-12 margintop10 field">
							<p>
							<?php

							$msg = filter_input(INPUT_GET, "send");

							//echo base64_decode($msg);

							switch(base64_decode($msg)){

								case "merr":

								$mg = filter_input(INPUT_GET, 'c');

								echo "<div class='alert alert-danger'>";
								echo 	base64_decode($mg);
								echo "</div>";

								break;

								case "errcaptcha":

								echo "<div class='alert alert-danger' style='font-weight: bold;'>";
								echo "	Código inválido! Por favor, preencha corretamente.";
								echo "</div>";

								break;

								case "mok":
								echo "<div class='alert alert-success' style='font-weight: bold;'>";
								echo "	Sucesso ! Enviamos a instrução para o e-mail, para confirmar. Esperamos você :)";
								echo "</div>";

								break;

								case "mcok":
								echo "<div class='alert alert-success' style='font-weight: bold;'>";
								echo "	Sucesso ! Obrigado por confirmar. Breve entraremos em contato com você :)";
								echo "</div>";
								echo "<meta http-equiv='refresh' content='8;url=../contato/'>";

								break;


							}

							?>
							</p>
						</div>
						<!-- FIM ERROS E ACERTO D EENVIO -->

		<hr size="2" color="#120a8f">

		<div class="collapse" id="col_mapa">
			<div class="card card-body">

				<div class="map" style="padding-top: 55px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.9923978387974!2d-43.23898488556009!3d-22.91365124387542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e666c271011%3A0xeda53d3282569fd3!2sBoulevard%2028%20de%20Setembro%2C%2044%20-%20609%20-%20Maracan%C3%A3%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020551-031!5e0!3m2!1spt-BR!2sbr!4v1613863466832!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>

		  	</div>
		</div>



	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Selecione o(a) profissional e preencha os campos. <strong>Teremos o prazer em retornar em breve :)</strong></h4>
				<form id="contactform" action="#" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Sua mensagem foi enviada! Retornaremos no mais breve possível !
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<select class="form-control" name='falarcom' id='falarcom' required>
							  <option value="">Quero falar com ...</option>
							  <option value="renata">Renata Neumann, psicóloga e psicopedagoga</option>
							  <option value="bruna">Bruna Tavares, psicóloga</option>
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
							<input type="text" name="nome" placeholder="* Preencha seu nome aqui" data-rule="maxlen:4" data-msg="Precisamos, pelo menos, de 4 caracteres" style=" border: 1px solid #c0c0c0;" required/>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="email" placeholder="* Seu e-mail"data-rule="email" data-msg="Digite seu e-mail válido" style=" border: 1px solid #c0c0c0;" required/>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field" style="padding-top: 20px;">
							<input type="text" name="titulo" placeholder="Estamos falando de..." data-rule="maxlen:4" data-msg="Digite o título" style="border: 1px solid #c0c0c0;" required />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="conteudo" class="input-block-level" placeholder="* Chegamos ! Digite sua mensagem..." data-rule="required" data-msg="Por favor, fale o motivo do contato..." style=" border: 1px solid #c0c0c0;" required></textarea>
							<div class="validation">
							</div>
						</div>

						<div class="col-lg-12 margintop10 field">
		                    <div class="col-lg-3 margintop10 field"> <!-- CAPTCHA -->
	                        	<div class="form-group">
			                    	<div style="width: 97%; border: 1px solid #c0c0c0; text-align: center; padding: 3px; margin-bottom: 13px;  background:#ffffff center center no-repeat">
			                    		<img src="../lib/generate.php" id="captcha_code" name ="captcha_code">
	    		                	</div>
	                    	 	</div>
		                    </div><!-- CAPTCHA -->

		                    <div class="col-lg-4 margintop10 field">
		                    	<div style="width: 97%;">
	                    	 		<input type="text" name="capt" required id="capt" class="form-control" placeholder="Insira o código" autocomplete="off" style=" border: 1px solid #c0c0c0; height: 50px;" data-msg="Por favor, preencha o código captcha...">
	                    	 	</div>
		                    </div>

		                    <div class="col-lg-5 margintop10">
		                    	&nbsp;
		                    </div>
		                </div>

						<div class="col-lg-12 margintop10 field">
							<p>
<!--								<button class="btn btn-theme margintop10 pull-left" type="submit">ENVIAR</button> -->
								<button class="btn btn-theme margintop10 pull-left" type="submit" style="width: 100px; height: 50px;font-size: 18px;">ENVIAR</button>
								<span class="pull-right margintop20" style="color: red; font-weight: bold;">* Campos obrigatório</span>
							</p>
						</div>
						

					</div>
				</form>
				
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
