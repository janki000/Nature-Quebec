<?php 

/**
 *  Template Name: Page nouvelles
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
        <div class="menu-evenement">
            <img src="https://i.imgur.com/F7PKBwE.png" alt="">
        </div>
        <div class="evenement-evenement">
            <p><span class="bold-evenement">Nouvelle |</span> À la une</p>
        </div>
        <div class="entete-evenement">
            <img class="chemin-evenement" src="https://i.imgur.com/qtbi7Mt.jpg" alt="">
            <div class="foncer-evenement">
                <div class="propos-evenement">
                    <h2>BULLETIN D’AUTOMNE SAMEDI 3 OCTOBRE 2020</h2>

                </div>
            </div>
        </div>

        <div class="evenement1 vert-evenement">
            <img src="https://i.imgur.com/YnFbqW3.jpg" class="image-evenement1" alt="">
            <div class="text-evenement1">
                <h3>Mai 3</h3>
                <h2>La biomasse pour chauffer des serres : un choix logique vers l’autonomie alimentaire et énergétique</h2>
                <p>Le 3 avril dernier, le Premier ministre François Legault affirmait la volonté de son gouvernement d’augmenter l’autonomie alimentaire du Québec. Il visait notamment l’augmentation de la superficie des serres afin d’importer moins de fruits et légumes.</p>
                <button class="btn-evenement">Plus d'informations</button>
            </div>
        </div>

        <div class="evenement2 vert-evenement">
            <img src="https://i.imgur.com/BuaylXw.jpg" class="image-evenement2" alt="">
            <div class="text-evenement1">
                <h3>Avril 2</h3>
                <h2>Vers une ville du vivant Nature et Culture</h2>
                <p>Les milieux bâtis matérialisent notre rapport au monde. Ils révèlent nos relations au territoire, nos interactions à la matière, nos formes d’organisation sociales. Comme le disait Winston Churchill : « We shape our buildings; thereafter they shape us ».</p>
                <button class="btn-evenement">Plus d'informations</button>
            </div>
        </div>

        <div class="evenement3 vert-evenement">
            <img src="https://i.imgur.com/WyYQTik.png" class="image-evenement3" alt="">
            <div class="text-evenement1">
                <h3>Mars 1</h3>
                <h2>Rapport sur la forêt et les changements climatiques : des devoirs à compléter</h2>
                <p>Le groupe de travail a retenu des scénarios de production accrue visant essentiellement l’augmentation des produits de bois à plus longue durée de vie que ceux des pâtes et papier, le développement de la bioénergie et la substitution par le bois de produits de forte intensité de GES (par ex. acier et béton).</p>
                <button class="btn-evenement">Plus d'informations</button>
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