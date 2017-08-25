<?php

get_header(); ?>

<div class="fond-classic">
<div class="contenu-page-sans-blocs">

<h2 class="aligner"><?php the_title(); ?></h2>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	
<p><?php the_content(); ?></p>


<?php if(is_page('presentation')){ ?>

<h3>L'établissement en images :</h3>

<?php echo do_shortcode("[slider id='678' name='Présentation' size='full']"); ?>



<?php } ?>



</div>
 <?php endwhile; ?>
  <?php endif; ?>
  
</div>
  
<?php get_footer(); ?>
</body>
</html>  