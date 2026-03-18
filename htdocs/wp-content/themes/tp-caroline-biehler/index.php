<?php get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        ?>

        <article>
            <header>
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail('thumbnail'); ?>
                <aside>
                    écrit par <?php the_author(); ?>
                    le <?php the_date(); ?>
                    , dans la catégorie <?php the_category() ?>
                </aside>
            </header>
            <section>
                <?php the_excerpt(); ?>
            </section>

        </article>

        <?php
    endwhile;
endif;

get_footer();