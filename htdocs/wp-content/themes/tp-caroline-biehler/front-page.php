<?php
get_header();
?>
<main>

<section class="flex">

<?php 
    if(have_posts()): 
        while(have_posts()): 
            the_post(); 
    ?>
        <article class="montheme-article-full"> 
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            
            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_content();  ?> 
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




<?php 
get_footer();