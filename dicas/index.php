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
                $conteudo->telaTopClass("");
            ?>
        
    </header>
	<!-- end header -->
	<section id="featured" style="background-color: #ffffff; padding-top: 70px;">
	
	<?php
		echo $conteudo->content_dicas();

	?>
	

	</section>

	<!-- divider -->
	<div class="row">
		<div class="col-lg-12">
			<div class="solidline">
			</div>
		</div>
	</div> 
	<!-- end divider -->
<?php

	$conteudo->pageDownSlides("");

?>

	<?php
		$conteudo->pageFooter("");
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
