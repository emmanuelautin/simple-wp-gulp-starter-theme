<?php
/*
Template Name: resultat-bac
*/

get_header(); ?>

	
<div class="fond-classic">
<div class="contenu-page-sans-blocs">
<h2 class="aligner">Résultats du bac</h2>


<!--résultats bac année courante -->

<table class="tableau-gris">

<caption><b style="color:#FFFFFF;">Les résultats du bac <?php the_field('annee_courante');?></b></caption>
<tbody>

<tr>
<td><b>TL</b></td>
<td><?php the_field('eleve_TL');?> élèves</td>
<td><?php the_field('eleve_TL_admis');?> admis</td>
<td><?php 
$eleveTL = get_field('eleve_TL');
$eleveTLadmis = get_field('eleve_TL_admis');
$pourcentage_reussite = (($eleveTLadmis*100)/$eleveTL);
$pourcentagefinaleTL = number_format($pourcentage_reussite, 2, ',', ' ');
echo $pourcentagefinaleTL, '%';
?>
</td>
<td>Mentions : <br/><br/>Très bien : <?php the_field('mentioNTB_TL');?></br>Bien : <?php the_field('mentioNB_TL');?></br>Assez bien : <?php the_field('mentioNAB_TL');?></td>
</tr>

<tr>
<td><b>TES</b></td>
<td><?php the_field('eleve_TES');?> élèves</td>
<td><?php the_field('eleve_TES_admis');?> admis</td>
<td><?php 
$eleveTES = get_field('eleve_TES');
$eleveTESadmis = get_field('eleve_TES_admis');
$pourcentage_reussite = (($eleveTESadmis*100)/$eleveTES);
$pourcentagefinaleTES = number_format($pourcentage_reussite, 2, ',', ' ');
echo $pourcentagefinaleTES, '%';
?></td>
<td><br/><br/>Très bien : <?php the_field('mentioNTB_TES');?></br>Bien : <?php the_field('mentioNB_TES');?></br>Assez bien : <?php the_field('mentioNAB_TES');?></td>
</tr>

<tr>
<td><b>TS</b></td>
<td><?php the_field('eleve_TS');?> élèves</td>
<td><?php the_field('eleve_TS_admis');?> admis</td>
<td><?php 
$eleveTS = get_field('eleve_TS');
$eleveTSadmis = get_field('eleve_TS_admis');
$pourcentage_reussite = (($eleveTSadmis*100)/$eleveTS);
$pourcentagefinaleTS = number_format($pourcentage_reussite, 0 , ',', ' ');
echo $pourcentagefinaleTS, '%';
?></td>
<td> <br/><br/>Très bien : <?php the_field('mentioNTB_TS');?></br>Bien : <?php the_field('mentioNB_TS');?></br>Assez bien : <?php the_field('mentioNAB_TS');?></td>
</tr>

</tbody>
</table>

<!--fin résultats bac année courante -->


<hr>
<?php 


// affichage des résultats des années précédentes :


if(get_field('resultats_bac')): ?>

<table class="tableau-gris">
<caption>Les résultats du bac des années précédentes</caption>
<tbody>
<tr>
<td><b>Année</b></td>
<td><b>TL</b></td>
<td><b>TES</b></td>
<td><b>TS</b></td>
</tr>
	<?php while(has_sub_field('resultats_bac')): ?>
	
		<?php 
		
		$year = get_sub_field('annee');
		$TL = get_sub_field('resultats_tl_en_%');
		$TES = get_sub_field('resultats_tes_en_%');
		$TS = get_sub_field('resultats_ts_en_%');
		
		echo '<tr>';
		echo '<td>'.$year.'</td>';
		echo '<td>'.$TL.'</td>';
		echo '<td>'.$TES.'</td>';
		echo '<td>'.$TS.'</td>';
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
