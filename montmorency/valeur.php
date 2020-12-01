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
            <img src="https://i.imgur.com/F7PKBwE.png" alt="">
        </div>
        <div class="valeur-valeur">
            <p><span class="bold-valeur">Valeurs |</span>   Sensibiliser, Mobiliser, Agir</p>
        </div>
        </div>
        <div class="entete-valeur">
            <img class="img forest-valeur" src="https://i.imgur.com/vAcWJen.jpg" alt="">
            <div class="propos-valeur">
                <h2>À PROPOS DE NATURE QUÉBEC</h2>
                <p>Nature Québec  oeuvre activement à la conservation des milieux naturels et à l’utilisation durable des ressources sur le territoire québécois.

                    Depuis 1981, Nature Québec privilégie une approche globale connectée aux grands enjeux planétaires liés au climat et à la biodiversité. Localement, Nature Québec mène des campagnes et des projets sur la biodiversité, la forêt, l’énergie et le climat, et ce, d’Anticosti jusqu’au coeur de nos villes.
                    
                    Nature Québec bénéficie d’une équipe de professionnels, appuyée par un réseau d’organismes affiliés et de chercheurs-collaborateurs qui lui confèrent une crédibilité reconnue dans ses domaines d’intervention.
                    
                    Nature Québec souscrit aux objectifs de la Stratégie mondiale de conservation de l’Union internationale pour la conservation de la nature (UICN), dont il est membre.</p>
                <img src="" alt="">
            </div>
        </div>

        <div class="bloc1-valeur">
            <div class="vert-valeur bubble-valeur">
                <div class="vision section-valeur">
                    <img src="https://i.imgur.com/kSU8769.png" class="imgvision-valeur" alt="">
                    <div class="text2-valeur">
                        <h2>Notre vision</h2>
                        <p>Nature Québec agit en vue d’une société plus juste, à faible empreinte écologique et climatique, solidaire du reste de la planète. L’organisme oriente ses actions pour que le Québec aime ses milieux naturels, en ville comme en région, les protège et les reconnaisse comme essentiels à son épanouissement.</p>
                    </div>
                </div>
            </div>
            
            <div class="vert-valeur bubble-valeur">
                <div class="mission section-valeur">
                    <img src="https://i.imgur.com/0FBTo2W.png" class="imgmission-valeur" alt="">
                    <div class="text1-valeur">
                        <h2>Notre mission</h2>
                        <p>Nature Québec encourage la mobilisation citoyenne, intervient dans le débat public, informe, sensibilise et réalise des projets afin que notre société:
                        <li>Valorise la biodiversité</li>
                        <li>Protège les milieux naturels et les espèces</li> 
                        <li>Favorise le contact avec la nature</li>
                        <li>Utilise de façon durable les ressources</li></p>
                    </div>
                </div> 
            </div>      
        </div>

        <div class="info-valeur vert-valeur">
            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre">0</p>
                <p class='int-valeur'>Membres et sympathisants</p>
            </div>

            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre2">0</p>
                <p class='int-valeur'>Campagnes sur le terrain et plus!</p>
            </div>

            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre3">0</p>
                <p class='int-valeur'>Années d’expérience</p>
            </div>

            <div class="cadre-valeur">
                <img src="" alt="">
                <p id="nombre4">0</p>
                <p class='int-valeur'>Organismes affiliés</p>
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