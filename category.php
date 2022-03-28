<?php get_header() ?>
<main class="principal">
    <h1>category-cours.php</h1>
    <section class="formation">
        <?php wp_nav_menu(array(
            "menu" => 'categorie_cours',
            "container" => "nav"
            )); ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <?php
        if (is_category('web')){
            // $ma_categorie = get_the_category_by_slug('web');

        }

            if(is_category('web')){echo "<h3>Cours web</h3>";}
            if(is_category('jeu')){echo "<h3>Cours design</h3>";}
            if(is_category('design')){echo "<h3>Cours itilitaire</h3>";}
            if(is_category('utilitaire')){echo "<h3>Cours web</h3>";}
            if(is_category('creation-3d')){echo "<h3>Cours web</h3>";}
            if(is_category('video')){echo "<h3>Cours web</h3>";}
            $url_categorie = trouve_la_categorie(array('web','jeu','design', 'utilistaire','creation-3d', 'video'));
            $ma_categorie
        ?>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php get_template_part("gabarits/content","cours"); ?>
            
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>