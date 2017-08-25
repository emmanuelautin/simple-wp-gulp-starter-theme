<?php
/*
Template Name: tarifs
*/

get_header(); ?>
	
<div class="fond-classic">

<article class="contenu-page-sans-blocs">
	<h2 class="aligner"><?php echo get_the_title( 22 ); ?> </h2>

	
	
	<table class="tableau-gris tarifs">
	<caption>Tarifs 2015 / 2016</caption>
		<tr>
			<td></td>
			<td><strong>Maternelle</strong></td>
			<td><strong>Primaire</strong></td>
			<td><strong>Collège</strong></td>
			<td><strong>Lycée</strong></td>
		</tr>
		<tr>
			<td>Contribution des Familles MENSUELLE (sur 9 mois)</td>
			<td>90,00 €</td>
			<td>90,00 €</td>
			<td>98,00 €</td>
			<td>115,00 €</td>
		</tr>
		<tr>
			<td>FRAIS EXAMENS BLANCS 2° / 3° TRIMESTRE</td>
			<td></td>
			<td></td>
			<td></td>
			<td>Frais Réel <br /> pour les 1ères et Terminales.</td>
		</tr>
		<tr>
			<td>PISCINE - ANNUELLE</td>
			<td></td>
			<td>46,00 €<br />25,00 € pour les Orcéens</td>
			<td>40,00 € <br />pour les 6èmes</td>						
			<td></td>
		</tr>
		<tr>
			<td>ARTS PLASTIQUES <br />Option ANNUELLE</td>
			<td></td>
			<td></td>
			<td></td>
			<td>54,00 €</td>
		</tr>
		<tr>
			<td>UGSEL <br />cotisation ANNUELLE</td>
			<td></td>
			<td></td>
			<td>2,20 €</td>
			<td>2,20 €</td>
		</tr>
		<tr>
			<td>DIOCESE<br />cotisation ANNUELLE</td>
			<td>33.06 €</td>
			<td>33.06 €</td>
			<td>46.49 €</td>
			<td>46.49 €</td>
		</tr>
		<tr>
			<td>DEMI-PENSION<br />Le repas - abonnement</td>
			<td>6,15 €</td>
			<td>6,15 €</td>
			<td>6,75 €</td>
			<td>6,75 €</td>
		</tr>
		<tr>
			<td>DEMI-PENSION<br />Le repas - Exceptionnel</td>
			<td>7,15 €</td>
			<td>7,15 €</td>
			<td>7,75 €</td>
			<td>7,75 €</td>
		</tr>
		<tr>
			<td>Garderie par 1/2 h</td>
			<td>1, 85 € -Régulier <br/> 2,95 € Exceptionnel<br /> Goûter : 1, 20 € </td>
			<td>1, 85 € -Régulier <br/> 2,95 € Exceptionnel<br /> Goûter : 1, 20 € </td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Etude du Soir 1h</td>
			<td></td>
			<td>3, 45 €</td>
			<td>3, 45 €</td>
			<td></td>
		</tr>
	
	</table>
	
	
	<!--<table class="tableau-gris">
		<caption>Par mois</caption>
			<tr>
				<td width="302px"></td>
					<td><strong>Maternelle</strong></td>
					<td><strong>Primaire</strong></td>
					<td><strong>Collège</strong></td>
					<td><strong>Lycée</strong></td>
			</tr>
			<tr>
				<td>Contribution des familles sur 9 mois</td>
				<td><?php the_field('mois_maternelle');?></td>
				<td><?php the_field('mois_primaire');?></td>
				<td><?php the_field('mois_college');?></td>
				<td><?php the_field('mois_lycee');?></td>
			</tr>
	</table>
<p></p>

<table class="tableau-gris">
<caption>Par Trimestre</caption>
	<tr>
		<td width="302px"></td> 
		<td><strong>Maternelle</strong></td>
		<td><strong>Primaire</strong></td>
		<td><strong>Collège</strong></td>
		<td><strong>Lycée</strong></td>
	</tr>
	<tr>
		<td>Papeterie:<br/>de MS à CM2<br/>Petite section</td>
		<td><br/><?php the_field('papeterie_maternelle');?><br/><?php the_field('papeterie_petitesection');?></td>
		<td><?php the_field('papeterie_primaire');?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Technologie</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php the_field('technologie_college');?></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Frais examen blanc</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php the_field('examenblanc_lycee');?></td>
	</tr>
</table>

<p></p>

<table class="tableau-gris">
<caption>Par An</caption>
	<tr>
		<td width="302px"></td>
		<td><strong>Maternelle</strong></td>
		<td><strong>Primaire</strong></td>
		<td><strong>Collège</strong></td>
		<td><strong>Lycée</strong></td>
	</tr>

	<tr>
		<td>Cahiers de TP ou TD</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2" style="background-color:#DBDBDB;text-align:center;"><?php the_field('cahierTP_collegelycee'); ?></td>
	</tr>
	<tr>
		<td>Forfait postal par famille</td>
		<td colspan="4" style="background-color:#DBDBDB;text-align:center;" ><?php the_field('postal_all');?>
		</td>
	</tr>
	<tr>
		<td>Piscine</td>
		<td>&nbsp;</td>
		<td><?php the_field('piscine_primaire');?></td>
		<td>Pour les 6ème <br/><?php the_field('piscine_college');?></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Option Arts Plastiques</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php the_field('artpla_lycee');?></td>
	</tr>
	<tr>
		<td>Option assurance</td>
		<td><?php the_field('assurance_mater');?></td>
		<td><?php the_field('assurance_primaire');?></td>
		<td><?php the_field('assurance_college');?></td>
		<td><?php the_field('assurance_lycee');?></td>
	</tr>
	<tr>
		<td>Cotisation UGSEL Par enfant</td>
		<td>&nbsp;</td>
		<td colspan="3" style="background-color:#DBDBDB;text-align:center;"><?php the_field('UGSEL'); ?></td>
	</tr>
	<tr>
		<td>Cotisation Diocèse Par enfant</td>
		<td><?php the_field('diocese_mater'); ?></td>
		<td><?php the_field('diocese_primaire'); ?></td>
		<td><?php the_field('diocese_college'); ?></td>
		<td><?php the_field('diocese_lycee'); ?></td>
	</tr>
</table>
** En fonction du nombre d’enfants dans l’établissement: 
* pour les élèves du primaire domiciliés à Orsay, le tarif de la piscine est de 23.50 €
	
</p></p>

<table class="tableau-gris">
<caption>Demi Pension</caption>
	<tr>
		<td width="302px"></td>
		<td><strong>Maternelle</strong></td>
		<td><strong>Primaire</strong></td>
		<td><strong>Collège</strong></td>
		<td><strong>Lycée</strong></td>
	</tr>
	<tr>
		<td width="302px">Le repas</td>
		<td><?php the_field('demipension_mater'); ?></td>
		<td><?php the_field('demipension_primaire'); ?></td>
		<td><?php the_field('demipension_college'); ?></td>
		<td><?php the_field('demipension_lycee'); ?></td>
	</tr>
</table>
<p></p>
<table  class="tableau-gris">
<caption>Garderie</caption>
	<tr>
		<td width="302px"></td>
		<td><strong>Maternelle</strong></td>
		<td><strong>Primaire</strong></td>
		<td><strong>Collège</strong></td>
		<td><strong>Lycée</strong></td>
	</tr>
	<tr>
		<td width="302px">Régulièrement</td>
		<td><?php the_field('garderie_reg_mater');?></td>
		<td><?php the_field('garderie_reg_primaire');?></td>
		<td></td>
		<td></td>
		
	</tr>
	<tr>
		<td width="302px">Exceptionnellement</td>
		<td><?php the_field('garderie_exc_mater');?></td>
		<td><?php the_field('garderie_exc_primaire');?></td>
		<td></td>
		<td></td>
		
	</tr>
	<tr>
		<td width="302px">Goûter</td>
		<td><?php the_field('garderie_gouter_mater');?></td>
		<td><?php the_field('garderie_gouter_prim');?></td>
		<td></td>
		<td></td>
		
	</tr>
</table>
* Tarif de la garderie à la demi-heure
<p></p>

<table class="tableau-gris">
<caption>Etude du Soir</caption>
	<tr>
		<td width="302px"></td>
		<td><strong>Maternelle</strong></td>
		<td><strong>Primaire</strong></td>
		<td><strong>Collège</strong></td>
		<td><strong>Lycée</strong></td>
	</tr>
	<tr>
		<td width="302px">La séance</td>
		<td></td>
		<td><?php the_field('etudesoir');?></td>
		<td></td>
		<td></td>
	</tr>
</table>-->
</article>
</div><!--fond gris-->
<?php get_footer(); ?>
</body>
</html>