<?php
/*
Template Name: ressources
*/
get_header(); ?>

<div class="fond-classic">
<section id="infospratiques">	

	
				<?php 
				
				// appel des ressources 
				
						$args = array(
						'post_type' => 'Ressources',
						'posts_per_page' => '-1',
					
					);
					
					
					$query = new WP_Query( $args );
					
					
						if ($query->have_posts()){ ?>
						
						
							<?php	while ($query->have_posts()) { ?>
							
								
								<article class="contenu-page-sans-blocs">
								
								<?php $query->the_post(); ?>
							
										<h2 class="aligner"><?php the_title(); ?></h2>
										
											<p><?php the_content()?></p>	
											
									
								<a class="pdf" target="_blank" href="<?php echo the_field('fichier_pdf'); ?>" >Cliquez ici pour ouvrir le fichier joint dans votre navigateur web</a>
								<a class="pdf" download="<?php echo the_field('fichier_pdf'); ?>" href="<?php echo the_field('fichier_pdf'); ?>" >Cliquez ici pour télécharger le fichier joint sur votre ordinateur</a>
								
								</article>
					
							<?php
									
						}
					
						
						}
						else
						{
							echo "<p>Pas de ressources pour le moment</p>";
						}
							
						/* Reset */ 
						wp_reset_postdata();
		
					?>
		
		
		
</section>

</div>
	<?php get_footer(); ?>

</body>



</html>