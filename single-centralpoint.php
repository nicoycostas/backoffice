<?php get_header(); ?>
    <?php get_template_part('template-parts/content', 'header'); ?>
    <!-- start loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="post_type-single-section">
            <article class=" post_type-single-article container">
                <h1> <?php the_title(); ?></h1>
                <div class="post_type-single-article-content">
                    <?php the_content(); ?>
                </div>
                
            </article>
        </section>
       
        


    <?php endwhile;  ?>
    <?php endif; ?>
    <!-- end loop -->


    <?php get_template_part('template-parts/content', 'footer'); ?>
<?php get_footer(); ?>