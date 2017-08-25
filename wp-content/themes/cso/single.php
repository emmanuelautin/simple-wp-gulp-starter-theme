
<?php get_header(); ?>

<div class="fond-classic">

<div class="contenu-page-sans-blocs clearfix">



	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<span class="auteur"><?php the_category();?></span>
	
			<h2 class="singlepage"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="date">publié le <?php the_time('j F Y'); ?> à <?php the_time('G:i'); ?>.</div>
			<div class="resume singlearticle">
			<div class="singletop"><div class="imagetopfiche"><?php if( has_post_thumbnail()) { the_post_thumbnail(); } ?></div></div>
			<div class=" resume contentsingle"><?php the_content(); ?>
			
			
			<div class="fichier">
			
			</div>
			
			
						</div>
			</div>
			
				
	<?php endwhile; ?>
	<?php endif; ?>



</div><!--contenu-->
</div>

<?php get_footer(); ?>

</body>
</html>