<?php 

/**
 *  Template Name: Page nouvelle detaille
 *  Identique à page, mais avec une barre latérale
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while ( have_posts() ) : the_post(); 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>

    <article>
        
        <?php if (!is_front_page()) : 
            /* Affiche le code suivant uniquement si nous ne sommes PAS sur la page d'accueil */ ?>
            
        <?php endif; ?>
        
        
        <?php the_content(); 
        /* Affiche le contenu principal de la page */ ?>
        
        <?php
        $nouvelles = new WP_Query('post_type=Nouvelles');
        while ($nouvelles->have_posts()) : $nouvelles->the_post(); ?> 
        </div></br></br>
        
        
          
        <?php endwhile; wp_reset_postdata(); ?>
        
    <div class="ensemble-evenement">

        <div class="entete-evenement1">
            <img class="biomasse-evenement1" src="<?php the_field('img')?>" alt="">
            <div class="foncer-evenement1 bubble-evenement1">
                <div class="propos-evenement1">
                    <h2><?php the_title() ?></h2>
                    <p>Mai 1, 2020 Publié par Mathieu Béland</p>
                </div>
            </div>
        </div>

        <div class="evenement1">
            <div class="vert-evenement1">
                <h2><?php the_field('titre')?></h2>
                <p><?php the_field('paragraphe1')?></p>
            </div>
            <div class="vert-evenement1 cadre-evenement1">
                <div class="content-evenement1">
                    <img src="<?php the_field('img2')?>" class="imgjardin-evenement1" alt="">
                    <div class="text-evenement1">
                        <h2><?php the_field('titre2')?></h2>

                        <p><?php the_field('paragraphe2')?></p>
                    </div>
                </div>
                <p><?php the_field('paragraphe3')?></p>
            </div>

            <div class="vert-evenement1 cadre-evenement1">
                <div class="content2-evenement1">
                    <img src="<?php the_field('img3')?>" class="imgbagage-evenement1" alt="">
                    <div class="text-evenement1">
                        <h2><?php the_field('titre3')?></h2>

                        <p><?php the_field('paragraphe4')?></p>
                    </div>
                </div>
                <p><?php the_field('paragraphe5')?></p>
                <img src="<?php the_field('img4')?>" class="imgbois-evenement1" alt="">
                <p><?php the_field('paragraphe6')?></p>
            </div>
            <div class="vert-evenement1">
                <div class="personne-evenement1">
                    <img src="<?php the_field('img5')?>" class="imgmath-evenement1" alt="">
                    <div class="identite-evenement1">
                        <h2><?php the_field('auteur')?></h2>
                        <p>
                            <?php the_field('auteur_info')?>
                        </p>
                    </div>
                    <b class="contactez-evenement1">
                        <?php the_field('questions')?>
                    </b>
                </div>
            </div>
        </div>
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