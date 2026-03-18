<?php
get_header();
?>
<main>

<section class="flex">

<?php 
    if(have_posts()): // si l'url appelé correspond à du contenu  (article, page, auteur, catégorie...)
        while(have_posts()): // pour chaque élément trouvé... 
            the_post(); // on charge les données du contenu
    ?>
        <article class="montheme-article-full"> 
            <header>
                <h1><?php the_title(); // affichage du titre ?></h1>
            </header>
            
            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_content(); // contenu du post ?> 
            </div>
            
        </article>
    <?php
        endwhile;
    else: 
        echo 'Aucun contenu';
    endif;
?>

</section>

<aside>
    <?php 
        dynamic_sidebar('main-sidebar');
    ?>
</aside>


</main>

<?php 
get_footer();