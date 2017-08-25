<!doctype html>
	<head>
	<HTML lang="fr">
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" media="screen" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" >
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href="http://fonts.googleapis.com/css?family=Lora:400italic,700italic" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62965873-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body class="<?php if(is_home()){echo 'home';}?>">
	
	
	<div class="container">
	
	<div class="row">
		<div class="col-md-12">
		
		<header id="header">		
			<div class="info-top">
				<p>Cours Secondaire d'Orsay   <i class="fa fa-map-marker" aria-hidden="true"></i>
11 rue de Courtaboeuf, 91400 Orsay  <i class="fa fa-phone" aria-hidden="true"></i> 01 69 28 43 72 <i class="fa fa-fax" aria-hidden="true"></i>  01 69 28 24 25 <i class="fa fa-envelope-o" aria-hidden="true"></i>
 administration@csorsay.fr
</p>
			</div>
 			<div id="image-header">
 				<a href="<?php bloginfo('url')?>"><h1 id="titre-site">
 					<strong>Cours Secondaire d'Orsay</strong> 
 					<span class="dix">Etablissement privé catholique <br/>sous contrat d'association</span>
 					<br/><span class="dix">École - Collège - Lycée</span></h1>
 				</a>
 			</div>
		</header>
			<div class="col-md-12  col-xs-12 navigation">
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'cso', 'menu_class' => 'menu',  'menu'  => 'menu principal' ) ); ?>  	
				
			</nav>
			</div>
			
		</div><!--col md12 -->
	</div><!--row-->
	