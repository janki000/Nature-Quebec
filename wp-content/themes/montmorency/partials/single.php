<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

// Appel le fichier header.php
get_header(); 

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2>
			<?php the_title(); 
			/* Titre de l'article */ ?>
		</h2>
		<div class="contenu"></div>
		<div class="colonneGauche">
			<?php the_content(); 
			/* Affiche le contenu principal de l'article */ ?>
		</div>
		
		<div class="colonneDroite">
		<strong>Autre nom</strong>
		<?php the_field('autre_nom');?><br>
		<strong>Pays d'origine</strong>
		<?php the_field('pays_dorigine');?><br>
		</div>
		
		<?php get_template_part( 'partials/metas' ); 
		// Appel le fichier metas.php dans le dossier partials ?>
	</article>
<?php endwhile; // Fermeture de la boucle ?>


<?php else : // Si aucun article correspondant n'a été trouvé ?>
	<h2>Oh oh, aucun article n'a été trouvé</h2>
	<img src="https://media.giphy.com/media/ZYX2ZNBPHmlmfc7Fcj/giphy.gif" alt="Aucun billet trouvé">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>
