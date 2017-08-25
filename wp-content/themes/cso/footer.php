
<!--</div><!-- fermeture de la div de contenu -->

<div id="footer">
<div class="totop"><a href="#top"><i class="fa fa-caret-up" aria-hidden="true"></i>
<br />Haut de page</a></div>
	<ul id="wrap-menu-footer">
		<li class="col">
			<ul>
				<li><h4>Présentation</h4></li>
				<li><a href="<?php bloginfo('url')?>/historique">Historique</a></li>
				<li><a href="<?php bloginfo('url')?>/projet-educatif">Projet éducatif</a></li>
				<li><a href="<?php bloginfo('url')?>/reflexion">Réflexion</a></li>
				<li><a href="<?php bloginfo('url')?>/CSO/vie_pastorale">Vie pastorale</a></li>
			</ul>
		</li>
			
		<li class="col">	
			<ul>
					<li><h4>Ecole</h4></li>
					<li><a href="<?php bloginfo('url')?>/elementaire">L'école</a></li>
					<li><a href="<?php bloginfo('url')?>/charte-ecole-primaire">Charte de l'école</a></li>
					<li><a href="<?php bloginfo('url')?>/pedagogie-primaire">Pédagogie</a></li>
					<li><a href="<?php bloginfo('url')?>/CSO/actu_primaire">Vie de l'école</a></li>
			</ul>
		</li>
			
		<li class="col">	
			<ul>
					<li><h4>Collège</h4></li>
					<li><a href="<?php bloginfo('url')?>/college">Le collège</a></li>
					<li><a href="<?php bloginfo('url')?>/section-college">Les classes</a></li>
					<li><a href="<?php bloginfo('url')?>/le-reglement-interieur-du-college">Réglement intérieur</a></li>
					<li><a href="<?php bloginfo('url')?>/resultat-brevet">Résultats du brevet</a></li>
					<li><a href="<?php bloginfo('url')?>/CSO/actu_college">Vie du Collège</a></li>
			</ul>
		</li>
			
		<li class="col">	
			<ul>
					<li><h4>Lycée</h4></li>
					<li><a href="<?php bloginfo('url')?>/seconde">le lycée</a></li>
					<li><a href="<?php bloginfo('url')?>/seconde">Seconde</a></li>
					<li><a href="<?php bloginfo('url')?>/premiere-et-terminale">Première &amp terminale</a></li>
					<li><a href="<?php bloginfo('url')?>/reglement-interieur-du-lycee">Règlement intérieur</a></li>
					<li><a href="<?php bloginfo('url')?>/resultat-bac">Résultats du bac</a></li>
					<li><a href="<?php bloginfo('url')?>/CSO/actu_lycee">Vie du Lycée</a></li>
			</ul>
		</li>
			
		<li class="col">	
	
			<ul>
					<li><h4>Infos pratiques</h4></li>
					<li><a href="<?php bloginfo('url')?>/informations-pratiques/#infos-pratiques">Nous contacter</a></li>
					<li><a href="<?php bloginfo('url')?>/informations-pratiques/#inscriptions">Inscriptions</a></li>
					<li><a href="<?php bloginfo('url')?>/ressources">Ressources</a></li>
					<li><a href="<?php bloginfo('url')?>/informations-pratiques/#infos-pratiques">Coordonnées</a></li>
					<li><a href="<?php bloginfo('url')?>/informations-pratiques/#acces">Accès</a></li>
					<li><a href="<?php bloginfo('url')?>/tarifs">Tarifs</a></li>
					<li><a href="<?php bloginfo('url')?>/apel">APEL</a></li>
					<li><a href="<?php bloginfo('url')?>/mentions-legales">Mentions légales</a></li>
			</ul>
		</li>	
	</ul>
	<p id="mentions-legales" >Cours Secondaire d'Orsay • Ecole - Collège - Lycée • Établissement privé catholique sous contrat d'association<br/>
		11 rue de Courtaboeuf - 91400 ORSAY • Tel: 01 69 28 43 72 • Fax: 01 69 28 24 25 • <a href="mailto:administration@csorsay.fr">administration@csorsay.fr</a>

</div><!--footer-->

</div><!--container-->

		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/frontend-min.js"></script>
	<script type="text/javascript">
	$(function(){
		
		$('#menu-menu-principal li').hover(function(){
			
			
			$(this).find('ul.sub-menu').css('display', 'block');
			
		}, function(){
			
				$(this).find('ul.sub-menu').css('display', 'none');
		});
		
	});
	
	</script>


