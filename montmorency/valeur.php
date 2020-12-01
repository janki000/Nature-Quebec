<?php 

/**
 *  Template Name: Page valeurs
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
        $valeurs = new WP_Query('post_type=Valeurs');
        while ($valeurs->have_posts()) : $valeurs->the_post(); ?> 
        </div></br></br>
        
        
          
        <?php endwhile; wp_reset_postdata(); ?>


        <div class="ensemble-valeur">
            <div class="menu-valeur">
                <img src="logo.png" alt="">
            </div>
            <div class="valeur-valeur">
                <span class="bold-valeur"><?php the_field('valeur'); ?></span>
            </div>
        </div>
        <div class="entete-valeur">
            <img class="img forest-valeur" src="alberto-bobbera-KNhVlMjkNjs-unsplash.jpg" alt="">
            <div class="propos-valeur">
                <div class="h2"><?php the_field('propos'); ?></div>
                <?php the_field('proposdesc'); ?>
            </div>
        </div>

        <div class="bloc1-valeur">
            <div class="vert-valeur bubble-valeur">
                <div class="vision section-valeur">
                    <img src="vision.png" class="imgvision-valeur" alt="">
                    <div class="text2-valeur">
                        <div class="h2"><?php the_field('vision'); ?></div>
                        <?php the_field('visiondesc'); ?>
                    </div>
                </div>
            </div>
            
            <div class="vert-valeur bubble-valeur">
                <div class="mission section-valeur">
                    <img src="mission.png" class="imgmission-valeur" alt="">
                    <div class="text1-valeur">
                        <div class="h2"><?php the_field('mission'); ?></div>
                        <?php the_field('missiondesc'); ?>
                    </div>
                </div> 
            </div>      
        </div>

        <div class="info-valeur vert-valeur">
            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre">0</p>
                <div class="int-valeur">
                    <?php the_field('membres'); ?>
                </div>
            </div>

            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre2">0</p><div class="int-valeur">
                    <?php the_field('campagne'); ?>
                </div>
            </div>

            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre3">0</p>
                <div class="int-valeur">
                    <?php the_field('annee'); ?>
                </div>
            </div>

            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre4">0</p>
                <div class="int-valeur">
                    <?php the_field('organisme'); ?>
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