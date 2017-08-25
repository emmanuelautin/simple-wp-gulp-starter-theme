<?php
/*
Template Name: resultat-brevet
*/

get_header(); ?>
	
	<div class="fond-classic">
<div class="contenu-page-sans-blocs">

<p>Deux brevets blancs sont organisés dans l’année afin de préparer les élèves à l’examen de fin d’année.</p>

<table class="tableau-gris">
<caption>Résultats de la session <?php the_field('annee_courante_brevet');?></caption>
<tbody>
  <tr>
    <td><?php the_field('brevet_inscrit');?> inscrits</td>
    <td><?php the_field('brevet_admis');?> admis</td>
    <td>
	<?php 
$eleveBrevet = get_field('brevet_inscrit');
$eleveBrevetadmis = get_field('brevet_admis');
$pourcentage_reussite = (($eleveBrevetadmis*100)/$eleveBrevet);
$pourcentagefinale = number_format($pourcentage_reussite, 2, ',', ' ');
echo $pourcentagefinale, '%';
?>
	</td>
    <td>Mentions :</td>
    <td><?php the_field('brevet_TB');?> Très Bien<br>
		<?php the_field('brevet_B');?> Bien<br>
      	<?php the_field('brevet_AB');?> Assez Bien</td>
  </tr>
</tbody> 
</table>



<hr/>




<?php 


// affichage des résultats des années précédentes :


if(get_field('resultats_brevet_repeat')): ?>

<table class="tableau-gris">

<caption>Les résultats du brevet des années précédentes</caption>
<tbody>
<tr>
<td><b>Année</b></td>
<td><b>Résultats</b></td>
</tr>
	<?php while(has_sub_field('resultats_brevet_repeat')): ?>
	
		<?php 
		
		$year = get_sub_field('annee');
		$resultats = get_sub_field('resultats_en_%');

		
		echo '<tr>';
		echo '<td>'.$year.'</td>';
		echo '<td>'.$resultats.'</td>';
		echo '</tr>';
			
	?>

	
	
	
	<?php endwhile; ?>
	</tbody>
</table 

<?php endif;?>


</div>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
