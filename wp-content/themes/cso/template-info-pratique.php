<?php
/*
Template Name: info-pratique
*/

get_header(); ?>
<div class="fond-classic">
<section id="infospratiques">	
	
	<?php // boucle pour appeler les customs fields 

							$args = array( 'post_type' => 'infospratiques', 'posts_per_page' => 10 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
							 
									<article class="contenu-page-sans-blocs">
						    
												<h2 class="aligner"><?php the_title(); ?></h2>
									          
									             	<?php the_content()?>								             	
									          
								  
								       </a>	 
								</article>  
							<?php endwhile; ?>
</section>

</div>
	<?php get_footer(); ?>

</body>



</html>