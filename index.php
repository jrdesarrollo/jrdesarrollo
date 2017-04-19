<?php 
require 'functions.php';
?><!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?=t('JR Desarrollo')?></title>
	<meta name="description" content="<?=t('Un sitio sencillo para plasmar un poco de mi y mi amor por todo lo relacionado a la programaci&oacute;n en ambiente web.')?>" />
	<link href="images/ico.ico" rel="shortcut icon">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/functions.js"></script>
	<script>
	window.onload= function(){
	$(function(){
		$("#textoPantallaDemo").typed({
			stringsElement: $('#typed-strings'),
				typeSpeed: 10,
                loop: false,
                loopCount: false,
				callback: function() {
					$('#pantallaDemo').hide();
					$('#section1 .textoHeader').toggleClass("visibility-off visibility-on");
					writeNewText();
				},
      });
  });function writeNewText(){
		$("#fakeText").addClass("fakeText");
        $("#fakeText").typed({
        stringsElement: $('#realText'),
        typeSpeed: 20,
                loop: false,
                loopCount: false,
				callback: function(){
				$('#contwrapper2').show();
				}
      });
  } 
  var options = [
    {selector: '#sectionAboutMe', offset: 270, callback: '$("#sectionAboutMe").css("opacity",1)' },
	{selector: '#TitleMySkills',offset:180, callback: "Materialize.showStaggeredList('#showSkills')"}
  ];
  Materialize.scrollFire(options);
  
    $("#goToAboutMe").click(function(e) { 
            $('html,body').animate({
            scrollTop: $("#contwrapper2").offset().top},
            'slow');      
    });
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70721408-2', 'auto');
  ga('send', 'pageview');
  }
	</script>
</head>
<body>
<!-- Cuerpo Entero -->
<div id="wrapper" class="row">

<!-- Cabecera --> 
	<header id="section1" class="col s12 black">
		<div class="textoHeader visibility-off">
			<img src="images/logogrande.jpg" class="responsive-img" alt="logo">
		</div>
	
  
		<div class="pantallaDemo" id="pantallaDemo">
			<div class="contenedor" id="contenedor">
				<div class="botonesArriba">
					<span class="boton minimizar"></span>
					<span class="boton maximizar"></span>
					<span class="boton cerrar"></span>
					<span style="float:right;margin-right:5px;"><i class="material-icons">code</i></span>
				</div>
				<div id="textoPantallaDemo"></div>
				<div id="typed-strings">
					<div id="textoPantallaDemoContent">
<p><span class="red-text">&#60;?php</span>
  <span class="var">$proyect =</span> <span class="new">new</span> JRdevelop<span class="var">();</span>
  <span class="var">$proyect->name =</span> <span class="string">"<?=t('JR Desarrollo')?>"</span><span class="var">;</span>
  <span class="var">$proyect-></span>init<span class="var">();</span> ^1500</p> 
					</div>
				</div>
			</div>
		</div>
  
		<div id="fakeText"></div>
		<div id="realText">
		<p>^1000<span class="green-text"><?=t('&iexcl;Hola!')?></span> ^1500
			<br><?=t('Soy')?> <span class="green-text">Jos&eacute;</span>. <?=t('Me dedico a la <u>programaci&oacute;n web</u> y a aprender cosas nuevas')?>.^1000</p>
		</div>
  </header>
  
	<div class="col s12" id="contwrapper2">
		<div id="botonFlotante">
			<a class="btn-floating btn-large waves-effect waves-light transparent z-depth-0" id="goToAboutMe"><i class="material-icons">expand_more</i></a>
		</div>
		<div class="row" id="wrapper2">
			<div id="sectionAboutMe" class="row grey lighten-4">
				<div class="col s12 m4">
					<h2 class="tituloSobreMi section-title"><span><i class="material-icons" style="font-size:40px;">face</i></span></h2>
					<p class="center-align">
						<img src="images/perfil.jpg" alt="foto" class="responsive-img circle z-depth-2">
					</p>
				</div>
				<div class="col s12 m8 center-align">
					<h2 class="tituloSobreMi section-title"><span><?=t('Sobre <span class="green-text">Mi</span>')?></span></h2>
					<p class="flow-text"> 
						<span class="green-text">{</span> <span class="textoEcho"><?=t('&iexcl;Hola! Me llamo')?> <span class="green-text">Jos&eacute; Rivas</span> <?=t('y soy Ingeniero en Sistemas')?>.<br><?=t('Me dedico a la programación web desde hace casi tres años. Me apasiona la programación y todo lo relacionado al ambiente web, habiendo llegado a desarrollar pequeños y grandes sistemas para la universidad y empresas particulares. Me encanta aprender nuevas cosas todo el tiempo relacionadas a')?> <span class="green-text">PHP</span>, <span class="green-text">CSS3</span>, <span class="green-text">HTML5</span>, <span class="green-text">Javascript</span> <?=t('y en especial me considero muy bueno en el manejo de')?> <span class="green-text"><?=t('bases de datos')?></span></span> <span class="green-text">}</span>
					</p>
				</div>
				<div class="col s12 m8 offset-m2 left-align hoverable" style="margin-top:90px;">
					<h2 id="TitleMySkills" class="tituloSobreMi section-title"><span><span class="green-text"><i class="material-icons" style="font-size:30px;">description</i> <?=t('Mis</span> Habilidades</span>')?></h2>
					<ul id="showSkills">
						<li><span>HTML/CSS</span>
							<div class="progress">
								<div class="determinate" style="width: 95%"></div>
							</div>   
						</li>
						<li><span>Bootstrap/Materialize CSS</span>
							<div class="progress">
								<div class="determinate" style="width: 100%"></div>
							</div>
						</li>
						<li><span>PHP</span>
							<div class="progress">
								<div class="determinate" style="width: 95%"></div>
							</div>
						</li>
						<li><span>Yii Framework PHP V 1.1</span>
							<div class="progress">
								<div class="determinate" style="width: 98%"></div>
							</div>
						</li>
						<li><span>Prestashop</span>
							<div class="progress">
								<div class="determinate" style="width: 65%"></div>
							</div>
						</li>
						<li><span>Javascript/jQuery</span>
							<div class="progress">
								<div class="determinate" style="width: 94%"></div>
							</div>
						</li> 
						<li><span>AngularJs</span>
							<div class="progress">
								<div class="determinate" style="width: 50%"></div>
							</div>
						</li>  
						<li><span>MySQL</span>
							<div class="progress">
								<div class="determinate" style="width: 98%"></div>
							</div>
						</li>
						<li><span>PostgreSQL</span>
							<div class="progress">
								<div class="determinate" style="width: 70%"></div>
							</div>
						</li>  
						<li><span>SQL Server</span>
							<div class="progress">
								<div class="determinate" style="width: 45%"></div>
							</div>
						</li> 
						
						<li><span>PhoneGap</span>
							<div class="progress">
								<div class="determinate" style="width: 72%"></div>
							</div>
						</li>   
					</ul>
				</div>
			</div>
			<footer class="page-footer black" style="margin-top:0;">
				<div class="container">
					<div class="row">
						<div class="col l6 s12 center-align">
							<img class="responsive-img" id="logoFooter" src="images/logogrande.jpg" alt="logo">
							<div id="botonesFooter">
								<div class="botonFoot"><a class="grey-text text-lighten-4" href="https://www.facebook.com/Hipnotizekang" target="_blank"><i class="fa fa-facebook"></i></a></div>
								<div class="botonFoot"><a class="grey-text text-lighten-4" href="https://plus.google.com/103136330677054961311" target="_blank"><i class="fa fa-google-plus"></i></a></div>
								<div class="botonFoot"><a class="grey-text text-lighten-4" href="https://twitter.com/Jose_malfoy_b" target="_blank"><i class="fa fa-twitter"></i></a></div>
								<div class="botonFoot"><a class="grey-text text-lighten-4" href="https://www.linkedin.com/in/jose-david-rivas-hernández-446b17100" target="_blank"><i class="fa fa-linkedin"></i></a></div>
								
							</div>
						</div>
						<div class="col l4 offset-l2 s12">
							<h5 class="white-text"><?=t('Contacto')?></h5>
							<ul>
								<li><a class="grey-text text-lighten-3" ><i class="fa fa-envelope"></i> <?=encode_email('jo2e_david@hotmail.com')?></li>
								<li><a class="grey-text text-lighten-3" ><i class="fa fa-whatsapp"></i> <?=encode_email('+58 424 6057366')?></a></li>
								<li><a class="grey-text text-lighten-3" ><i class="fa fa-skype"></i> <?=encode_email('jos3_david1')?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container center align">
						© <?=date('Y')?> <?=t('Todos los derechos reservados')?>
					</div>
				</div>
			</footer>
		</div>
	</div>
</div>
</body>
</html>