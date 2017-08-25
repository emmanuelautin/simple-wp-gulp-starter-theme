<?php
/*
Template Name: section-college
*/
get_header(); ?>

<section id="section-college page-<?php echo $id; ?>">
		
<?php // boucle pour appeler les customs fields 

	$args = array( 'post_type' => 'sections_college', 'posts_per_page' => 4 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); 

	$id = get_the_ID();?>

	<div class="section-college-lycee" style="background-image:url(<?php the_field('fond_section');?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
		<article class="cadre cadre-bord-bas" id="bloc-<?php echo $id; ?>">
			<div class="badge-classe">
				
					<div><?php the_field('nom_en_chiffre'); ?><sup>e</sup></div>

			</div>
			<h1>
					<?php the_title(); ?>
				</h1>
			<?php the_content();?>
		</article>
	</div>	
	<?php endwhile; ?>

</section>

<?php get_footer(); ?>

</body>
</html>

