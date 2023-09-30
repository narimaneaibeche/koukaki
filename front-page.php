<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            
              <video  autoplay ="autoplay" muted=""  loop="infinite" src="<?php echo get_stylesheet_directory_uri() . '/assets/video.mp4'; ?> " type="video/mp4" class="video"></video>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " class="floating"  alt="logo Fleurs d'oranger & chats errants" > 
            
        </section>
        <section id="#story" class="story">
            <h2> <span class="title-h">L'histoire </span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">  
             <h3>Les personnages</h3>
            </article>
            <?php get_template_part( '/template-parts/personnages' ); ?>
            
            <article id="place">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/Studio_Koukaki-image_place.png'; ?> "  alt=" Fleurs d'oranger & nuage" >
                <div class="nuage">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/big_cloud.png'; ?> " class="nuage-big"  alt=" nuage" >
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/little_cloud.png'; ?> " class="nuage-little"  alt="nuage" >
               </div> 
                <div class="lieu">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2><span class="title-s">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

       


       
       
    </main><!-- #main -->

<?php
get_footer();
