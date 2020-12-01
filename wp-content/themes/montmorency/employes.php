<?php 
/**
 * 	Template Name: Page employés
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
	<article>
		<?php if (!is_front_page()) : 
			/* Affiche le code suivant uniquement si nous ne sommes PAS sur la page d'accueil */ ?>
			<h2 class="titre-page-equipe">
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); 
		/* Affiche le contenu principal de la page */ ?>
		   <div class="bloc-equipe">
				<?php
				$args = array(
					"post_type" => "Employes", 
					"posts_per_page" => -1
				);
				$employes = new WP_Query($args);
				while ($employes->have_posts()) : $employes->the_post(); ?>
				<div data-description="<?php the_field('description');?>" class="bloc-employe">      
					<div class="texte-employe">
						<div class="nom-employe"><?php the_title(); ?></div>
						<?php the_field('role'); ?><br/>
						<a href="mailto:<?php the_field("adresse_mail"); ?>"><?php the_field("adresse_mail"); ?></a><br/>
						<?php the_field('numero_telephone'); ?><br/>
					</div>
					<img src="<?php the_field('photo'); ?>" class="employe-photo"><br/>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<div class="popup">
					<button class="fermer-popup">X</button>
					<div class="popup-description"></div>
				</div>
			</div>	
	</article>
	
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://media.giphy.com/media/xwy9AbBlXlIFW/source.gif" alt="Page invisible">
<?php endif; ?>

<?php
// Appel le fichier footer.php
get_footer(); ?>