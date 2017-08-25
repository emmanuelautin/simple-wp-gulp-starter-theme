<?php
/*
Template Name: page-sans-blocs
*/
get_header(); ?>
<?php
$id = get_the_ID();
?>
<div class="fond-classic">
<article class="contenu-page-sans-blocs" id="page-<?php echo $id; ?>">
<section class="page-sans-blocs">
	
		<h2 class="aligner"><?php the_title(); ?></h2>
		
		<?php the_post_thumbnail(); ?>

		<?php the_content(); ?>

	
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	


		<?php the_content();	?>
		


	<?php endwhile; ?>
	<?php endif; ?>						

	
		
<?php if(is_page('college')){ ?>

<h3>Le collège en images:</h3>

<?php echo do_shortcode("[slider id='637' name='Slider collège' size='full']"); ?>

<?php }elseif(is_page('le-lycee')){ ?>

<h3>Le lycée en images:</h3>
<?php echo do_shortcode("[slider id='642' name='Slider lycée' size='full']"); ?>


<?php }elseif(is_page("elementaire")){ ?>


<?php /*echo do_shortcode("[slider id='645' name='Slider école' size='full']"); */?>
<?php /*echo do_shortcode("[slider id='656' name='Slider élémentaire' size='full']");*/ ?>


<?php } ?>


</section>

</article>
</div>
<?php get_footer(); ?>

</body>
</html>