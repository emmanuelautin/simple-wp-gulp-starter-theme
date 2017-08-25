<?php


get_header(); ?>

<div class="row">

<div class="col-md-12">

<div id="accueil">

	<?php // boucle pour appeler les customs fields 
		$args = array( 'post_type' => 'introduction', 'posts_per_page' => 1 );
		$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<article class="cadre cadre-bord-bas introduction">
					
							<h2></h2><!-- class="aligner"-->
							<?php the_content()?>								             	
				
				</article>		
			<?php endwhile; ?>

</div>


</div><!--col md12-->

<div class="col-md-12">

<div id="accueil2">


<section id="liste-sections" class="cadre cadre-ombre">
	<h2>Découvrir...</h2>
	<div id="wrap-sections">

		<div class="sections" id="lien-ecole">
			<a  class="liens" href="<?php bloginfo('url');?>/elementaire" ><h3 class="white">L'école</h3><img src="<?php bloginfo('template_url');?>/img/lien-ecole.jpg"/></a>
		</div>
		<div class="sections"  id="lien-college">	
			<a class="liens" href="<?php bloginfo('url');?>/college"><h3 class="white">Le collège</h3><img src="<?php bloginfo('template_url');?>/img/lien-college.jpg"/></a>
		</div>
		<div class="sections" id="lien-lycee">
			<a class="liens" href="<?php bloginfo('url');?>/le-lycee"><h3 class="white">Le Lycée</h3><img src="<?php bloginfo('template_url');?>/img/lien-lycee.jpg"/></a>
		</div>
	</div>
</section>
</div><!--accueil3-->


</div><!--col-md12-->

</div><!--row-->

<?php get_footer(); ?>

</body>
</html>