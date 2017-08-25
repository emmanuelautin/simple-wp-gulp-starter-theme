<?php


get_header(); ?>
	
<?php the_content(); ?>

 <?php if ( is_category('actu_etablissement') ) : ?>


		<div class="fond-classic">
		<section id="liste-apercu-article" class="contenu-page-sans-blocs">
		<h2><?php the_category(); ?></h2>
	<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	global $args;
		$args = array(						
					'category_name' => 'actu_etablissement', // n'affiche que que les articles de la catégorie actu établissement
					'posts_per_page' => 6,
					'paged' => $paged,
					);
		query_posts($args);
			if(have_posts()) : ?>
			
				<?php while(have_posts()) : the_post(); ?>	
					<article class="apercu-article">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<date class="date">Posté le <?php the_time('j F Y'); ?> à <?php the_time('G:i'); ?>.</date>	
						<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>
						
										
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><div class="bouton">Lire l'article</div></a>								
					</article>

		<?php endwhile; endif; wp_reset_query(); ?>
		<?php wp_pagenavi(); ?>
		</section>
		</div>
	
 
  <?php elseif (is_category('actu_primaire')): ?>
  
  
		<div class="fond-classic">
			<section id="liste-apercu-article" class="contenu-page-sans-blocs">
				<h2><?php the_category(); ?></h2>
	<?php 	
		$args = array(						
					'showposts' => 999, //limite l'affichage des news à 4
					'category_name' => 'actu_primaire' // n'affichque que les articles de la catégorie actu établissement
					);
		query_posts($args);
			if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>	
					<article class="apercu-article">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<date class="date">Posté le <?php the_time('j F Y'); ?> à <?php the_time('G:i'); ?>.</date>
						<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>
							
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><div class="bouton">Lire l'article</div></a>								
					</article>

		<?php endwhile; endif; wp_reset_query(); ?>
		<?php wp_pagenavi(); ?>
</section>
</div>
  
  
  <?php elseif (is_category('actu_college')): ?>
    
  
	<div class="fond-classic">
<section id="liste-apercu-article" class="contenu-page-sans-blocs">
	<h2>Actualités du Collège</h2>
	<?php 	
		$args = array(						
					'showposts' => 999, //limite l'affichage des news à 4
					'category_name' => 'actu_college' // n'affichque que les articles de la catégorie actu établissement
					);
		query_posts($args);
			if(have_posts()) : ?>
			
				<?php while(have_posts()) : the_post(); ?>	
					<article class="apercu-article">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<date class="date">Posté le <?php the_time('j F Y'); ?> à <?php the_time('G:i'); ?>.</date>	
						<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>
								
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><div class="bouton">Lire l'article</div></a>								
					</article>

		<?php endwhile; endif; wp_reset_query(); ?>
		<?php wp_pagenavi(); ?>
</section>
</div>


<?php elseif (is_category('actu_lycee')): ?>

  <div class="fond-classic">
<section id="liste-apercu-article" class="contenu-page-sans-blocs">
	<h2><?php the_category(); ?></h2>
	<?php 	
		$args = array(						
					'showposts' => 999, //limite l'affichage des news à 4
					'category_name' => 'actu_lycee' // n'affichque que les articles de la catégorie actu établissement
					);
		query_posts($args);
			if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>	
					<article class="apercu-article">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<date class="date">Posté le <?php the_time('j F Y'); ?> à <?php the_time('G:i'); ?>.</date>	
						<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>
									
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><div class="bouton">Lire l'article</div></a>								
					</article>

		<?php endwhile; endif; wp_reset_query(); ?>
		<?php wp_pagenavi(); ?>
</section>
</div>


<?php elseif (is_category('vie_pastorale')): ?>

	  <div class="fond-classic">
<section id="liste-apercu-article" class="contenu-page-sans-blocs">
	<h2><?php the_category(); ?></h2>
	<?php 	
		$args = array(						
					'showposts' => 999, //limite l'affichage des news à 4
					'category_name' => 'vie_pastorale' // n'affichque que les articles de la catégorie actu établissement
					);
		query_posts($args);
			if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>	
					<article class="apercu-article">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<date class="date">Posté le <?php the_time('j F Y'); ?> à <?php the_time('G:i'); ?>.</date>	
						<?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?>
									
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>"><div class="bouton">Lire l'article</div></a>								
					</article>

		<?php endwhile; endif; wp_reset_query(); ?>
		<?php wp_pagenavi(); ?>
</section>
</div>

 <?php endif; ?>
 
<?php get_footer(); ?>
</body>
</html>