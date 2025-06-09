<?php get_header(); ?>
<!-- // select the post type -->

    <div class="container-fluid">
        <div class="row">
        
            <div class="left-sidebar">
                <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'taxonomy' => 'strategy_category',
                    'show_count' => false,
                    
                ) ); ?> 
            
            </div>

            <div class="right-content-box">
                <section class="post_type-posts">

                    <!-- Archive Custom Post type name -->
                    <?php get_template_part('template-parts/content', 'header'); ?>
                    <h2 class="post_type-posts-title"><?php echo post_type_archive_title( '', false );?></h2>
                    <!-- paged var to create pagination -->
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    <?php $loop = new WP_Query( array
                        ( 'post_type' => 'strategy',
                        'posts_per_page' => 6, 
                        'paged' => $paged
                        ) );
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                        <article class="post_type-posts-article">
                            <div class="flexing">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chess-king" class="svg-inline--fa fa-chess-king fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 448H48a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h352a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm16-288H256v-48h40a8 8 0 0 0 8-8V56a8 8 0 0 0-8-8h-40V8a8 8 0 0 0-8-8h-48a8 8 0 0 0-8 8v40h-40a8 8 0 0 0-8 8v48a8 8 0 0 0 8 8h40v48H32a32 32 0 0 0-30.52 41.54L74.56 416h298.88l73.08-214.46A32 32 0 0 0 416 160z"></path></svg>                        <div class="article-content">
                                <div class="article-content">
                                    <h3 class="post_type-posts-post-title"><?php the_title();?></h3>     
                                    
                                    <!-- replace with the excerpt -->
                                    <?php the_excerpt(); ?>
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>

                                </div>

                            </div>
                        </article>

                        

                    <?php endwhile; wp_reset_query(); ?>
                    <?php wp_reset_postdata(); ?>

                

                    <div class="post_type-pagination">
                            <?php $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $loop->max_num_pages
                            ) );?>
                                
                    </div>

                </section>
                 <?php get_template_part('template-parts/content', 'footer'); ?>   
            </div>
            
        </div>
    </div>



<?php get_footer(); ?>