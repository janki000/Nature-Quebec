<?php 
/**
 * 	Template Name: Page employés
 * 	Identique à page, mais avec une barre latérale
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
			<h2>
				<?php the_title(); 
				/* Titre de la page */ ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); 
		/* Affiche le contenu principal de la page */ ?>
        <div class="bloc-equipe">
            <?php
            $employes = new WP_Query('post_type=Employes');
            while ($employes->have_posts()) : $employes->the_post(); ?>
            <div class="bloc-employe">      
                <h3><?php the_title(); ?></h3>
                <?php the_field('nom'); ?><br/>
                <?php the_field('role'); ?><br/>
                <?php the_field('adresse_mail'); ?><br/>
                <?php the_field('numero_telephone'); ?><br/>
                <img src="<?php the_field('photo'); ?>" class="equipe-photo"><br/>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>


	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; ?>

<?php
// Appel le fichier footer.php
get_footer(); ?>