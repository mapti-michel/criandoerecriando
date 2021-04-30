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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../css/jcarousel.css" rel="stylesheet" />
<link href="../css/flexslider.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />


<link rel="shortcut icon" href="../img/logoCR.ico">
<link rel="icon" type="image/png" href="../img/logoRosto.png">


<link href="../skins/default.css" rel="stylesheet" />



<!-- ZOOM-->
<style>
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
/*    font-family: 'Quicksand', sans-serif; */
}
.gal-container{
    padding: 12px;
}
.galitem {
    overflow: hidden;
    padding: 3px;
}
.galitem .boxitem div{
    /*height: 65%;
    width: 65%; novo*/
    /*height: 350px;*/
    overflow: hidden;
}
.boxitem img{
    height: 65%;
    width: 65%;
    object-fit:cover;
    -o-object-fit:cover;
}
.galitem a:focus{
    outline: none;
}
.galitem a:after{
    content:"\e003";
    font-family: 'Glyphicons Halflings';
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.75);
    position: absolute;
    right: 3px;
    left: 3px;
    top: 3px;
    bottom: 3px;
    text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
/*    height: 80%; /*novo*/
    width: 65%; /*novo*/
}
.galitem a:hover:after{
    opacity: 1;
/*    height: 100%; novo*/
/*    width: 65%; /*novo*/
}
.modal-open .gal-container .modal{
    background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
    padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
    box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
    outline: none;
}
.modal-open .gal-item button.close span{
    position: relative;
    top: -3px;
    font-weight: lighter;
    text-shadow:none;
}
.gal-container .modal-dialogue{
    width: 80%;
}
.gal-container .description{
    position: relative;
    height: 40px;
    top: -40px;
    padding: 10px 25px;
    background-color: rgba(0,0,0,0.5);
    color: #fff;
    text-align: left;
}
.gal-container .description h4{
    margin:0px;
    font-size: 15px;
    font-weight: 300;
    line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}
/* Footer Style */
i.red{
    color:#BC0213;
}
.gal-container{
    padding-top :75px;
    padding-bottom:75px;
}
footer{
    font-family: 'Quicksand', sans-serif;
}
footer a,footer a:hover{
    color: #88C425;
}

#foto{
    border: 1px;

}

#foto:hover{
/*    content:"\e003";
    font-family: 'Glyphicons Halflings';*/
    opacity: 0.7;
/*
    background-color: rgba(0, 0, 0, 0.75);
    position: absolute;
    right: 3px;
    left: 3px;
    top: 3px;
    bottom: 3px;
    text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;*/
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
    /*width: 65%; novo*/
}

</style>



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
                        </div>
                      </li>
                    </ul>
                </div>
	<!-- end slider -->
	       </div> <!-- fecha o col-lg-12 -->
        </div> <!-- fecha o div row -->

<?php
        conteudo::gallery();
?>
<!--
        <a href="../img/consult/img1.jpg" class="jqzoom" title="Imagem">
            <img src="../img/consult/cons1.jpg" title="Ferrari" width="150" height="150"/>
        </a>
-->
	</div> <!--  fecha o container -->

	</section>
<!--
	<div class="row">
		<div class="col-lg-12">
			<div class="solidline">
			</div>
		</div>
	</div> 	
-->
<?php

	$conteudo->pageDownSlides("");

?>
		<!-- divider
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div> 
		 end divider -->
	<?php
		$conteudo->pageFooter("");
	?>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->



<script src="js/jquery-1.6.js" type="text/javascript"></script>

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

<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>

<script type="text/javascript" src='js/light_gallery'></script>

<script>
    $(document).ready(function(){
        $('#lightgallery').lightGallery(); 
    });
</script>



</body>
</html>
