<?php
/*
Template Name: page-historique
*/
get_header(); ?>


<section id = "historique">

    <div class = "badge">1949-1954</div>
    <article class = "cadre cadre-bord-bas">
        <h2><?php the_field('titre_historique1'); ?></h2>
        <p><?php the_field('contenu_historique1'); ?></p></article>
    <div class = "badge">1955-1959</div>
    <article class = "cadre cadre-bord-bas">
        
            ￼<p><?php the_field('contenu_historique2'); ?></p>
			<h2><?php the_field('titre_historique2'); ?></h2>
    </article>
    
    <div class="badge">1977-2006</div>
    <article class="cadre cadre-bord-bas">
        
        <p>
            <?php the_field('contenu_historique4'); ?>
			<h2><?php the_field('titre_historique4'); ?></h2>
        </p>
    </article>
    <div class="badge">2007-2014</div>
    <article class="cadre cadre-bord-bas">
        <h2><?php the_field('titre_historique5'); ?></h2>
        <p>
			<?php the_field('contenu_historique5'); ?>
        </p>
		</article>
</section>

<?php get_footer();
?>

</body>
</html>