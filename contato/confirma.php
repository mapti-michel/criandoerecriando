<?php

date_default_timezone_set("America/Sao_Paulo");

ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", dirname(__FILE__).'/error_log_confirm_contact.txt');
ini_set("session.use_trans_sid", 0);
error_reporting(E_ALL);

ob_start();
session_start();

require_once "../classes/conteudo.class.php";
require_once "../classes/class.sendmessage.php";
//require_once "../classes/send.class.php";
require_once '../phpmailer/class.phpmailer.php';
require_once '../phpmailer/class.smtp.php';
require_once '../phpmailer/class.pop3.php';
require_once '../phpmailer/class.phpmaileroauth.php';
require_once '../phpmailer/PHPMailerAutoload.php';


$conteudo = new conteudo();
$send = new sendmessage();
//$s = new send();

$e 		= filter_input(INPUT_GET, "m");
$code 	= filter_input(INPUT_GET, "a");

$email 	= base64_decode($e);

	$cod_decode 		= base64_decode($code);
	$arquivo			= $cod_decode.".xml";
	$arq 				= simplexml_load_file($arquivo);

if($_POST){


	$send->envia_msg_prof($arq->data_envio, $arq->ip, $arq->navegador, $arq->nome, $arq->email, $arq->motivo, $arq->mensagem, $email, $code, $arq->falarcom, $arq->email_prof);
	$send->envia_sucesso($arq->nome, $arq->email);

} //Fecha o POST


if(!empty($e)){
	
	if(!empty($code)){
		$cod_decode 		= base64_decode($code);
		$arquivo			= $cod_decode.".xml";

		if(file_exists($arquivo)){
			$arq 		= simplexml_load_file($arquivo);

			$code 		= $arq->codigo;
			$data 		= $arq->data_envio;
			$dataHoje	= date('d/m/Y');

			if(strtotime($data) === strtotime($dataHoje)){
				
				$ip 		= $arq->ip;
				$nav 		= $arq->navegador;
				$nome 		= $arq->nome;
				$email 		= $arq->email;
				$motivo 	= $arq->motivo;
				$msg 		= $arq->mensagem;

				$msg_princ = "<label class='text-success'>Confirma as informações ?</label>";
				$block_button = " ";

			}else{

				$msg_princ = "<label class='text-danger'>Prazo de 24 horas expirado. Por favor, tente novamente através<a href='fale-conosco/'> deste link </a>ou nos ligue, pelos telefones ao lado</label>";// Mensagem de erro caso o código seja inválido
				$block_button = " disabled='disabled' ";
				
			}

		}else{
			$msg_princ = "<label class='text-danger'>Não foi localizado o seu formulário. Por fabvor, tente novamente, </a href=''>clicando aqui</a></label>";
			$block_button = " disabled='disabled' ";

		}

	}else{
		$msg_princ = "<label class='text-danger'>Houve um erro. Por favor, tente novamente através<a href='fale-conosco/'> deste link </a>ou nos ligue, pelos telefones ao lado</label>";// Mensagem de erro caso o código seja inválido
		$block_button = " disabled='disabled' ";

	}

}else{
	$msg_princ = "<label class='text-danger'>Link inválido. Por favor, tente novamente através<a href='../fale-conosco/'> deste link </a>ou nos ligue, pelos telefones ao lado.</label>";
	$block_button = " disabled='disabled' ";

}

function curl_info($url){
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_HEADER, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );

    $content = curl_exec( $ch );
    $info = curl_getinfo( $ch );

    return $info;
}




?>

<!DOCTYPE html>

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
	<div align="right">
		<a class="btn btn-primary" data-toggle="collapse" href="#col_mapa" role="button" aria-expanded="false" aria-controls="collapseExample" id="muda">
			Ver Mapa
		</a>
	</div>

	<section id="content">
		
		<div class="collapse" id="col_mapa">
			<div class="card card-body">

				<div class="map" style="padding-top: 55px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.9923978387974!2d-43.23898488556009!3d-22.91365124387542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e666c271011%3A0xeda53d3282569fd3!2sBoulevard%2028%20de%20Setembro%2C%2044%20-%20609%20-%20Maracan%C3%A3%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020551-031!5e0!3m2!1spt-BR!2sbr!4v1613863466832!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

				</div>

		  	</div>
		</div>
			<hr size="2" color="#120a8f">


	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form id="contactform" action="#" method="post" class="validateform" name="send-contact">
							<?php echo "<input type='hidden' name='data_reg' id='data_reg' value='".$arq->data_envio."'>"; ?>
							<?php echo "<input type='hidden' name='ip_envio' id='ip_envio' value='".$arq->ip."'>"; ?>
							<?php echo "<input type='hidden' name='nav_envio' id='nav_envio' value='".$arq->navegador."'>"; ?>
					<div class="row">
						<div class="col-lg-7 field" style="font-size: 20px; color: #C71585;">
							<?php
							echo "<span>Vamos falar com </span><b>".$arq->falarcom." :)</b>"; 
							?>
						</div>
						<div class="col-lg-5 field">
							&nbsp;
						</div>
						<div class="col-lg-8 field">
							&nbsp;
						</div>
						<div class="col-lg-4 field">
							&nbsp;
						</div>
						<div class="col-lg-6 field" style="padding-top: 20px; font-size: 20px; color: blue;">
							<?php
								echo "Seu nome é: <b>".$arq->nome."</b>";
							?>
						</div>
						<div class="col-lg-6 field" style="padding-top: 20px; font-size: 20px;color: purple;">
							<?php
								echo "Seu e-mail  <b>".$arq->email."</b>";
							?>
							
						</div>
						<div class="col-lg-12 field" style="padding-top: 20px; font-size: 20px; color: green;">
							<?php
								echo "<span>Nosso assunto é </span><b>".$arq->motivo."</b>";
								echo "<div class='validation'></div>";
							?>
						</div>
						<div class="col-lg-12 margintop10 field" style="padding-top:20px; font-size: 20px; color: #DC143C;">
							<?php
								echo "Nosso papo é <b>".$arq->mensagem."</b>";
							?>
							<p style="padding-top: 30px;">
								<button class="btn btn-theme margintop10 pull-left" type="submit" style="width: 150px; height: 50px;font-size: 18px;">
									CONFIRMAR
								</button>
							</p>
						</div>
					</div>
				</form>
<?php


				$mens = filter_input(INPUT_GET, "send");
				$caract = filter_input(INPUT_GET, "c");

				if(base64_decode($mens) === "mok"){

					echo "<div class='alert alert-success' role='alert' style='font-weight: bold;'>";
					echo "	Enviado com sucesso :) ! Agradecemos o seu contato !";
					echo "</div>";
				}else if (base64_decode($mens) === "merr"){

					if(base64_decode($caract) === "rcp"){
						
						echo "<div class='alert alert-danger' role='alert' style='font-weight: bold;'>";
						echo "	Houve um erro ao enviar :(. Motivo: Depois de preenchido, marque <i>Não sou robô</i> e clique em <i>Enviar</i>.";
						echo "</div>";
					}else{
						echo "<div class='alert alert-danger' role='alert' style='font-weight: bold;'>";
						echo "	Houve um erro ao enviar :( Motivo: ".utf8_encode(base64_decode($caract));
						echo "</div>";
					}
				}else if(base64_decode($mens) === "errcaptcha"){
						echo "<div class='alert alert-danger' role='alert' style='font-weight: bold;'>";
						echo "	Captcha inválido :(. Preencha-os corretamente.";
						echo "</div>";

				}else if(base64_decode($mens) === "mcok"){

					echo "<div class='alert alert-success' role='alert' style='font-weight: bold;'>";
					echo "	Obrigado(a) pela confirmação :) ! Responderemos no mais breve possível !";
					echo "</div>";
//				}else{

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
<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>

<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/google-code-prettify/prettify.js"></script>
<script src="../js/portfolio/jquery.quicksand.js"></script>
<script src="../js/portfolio/setting.js"></script>
<script src="../js/jquery.flexslider.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>