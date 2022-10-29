<?php get_header(); ?>
<!-- // select the post type -->

    <div class="container-fluid">
        <h2 class="post_type-posts-title"><?php echo post_type_archive_title( '', false );?>s</h2>
        <div class="row">
            <div class="left-sidebar col-2">
                <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'taxonomy' => 'decision_category',
                    'show_count' => false,
                    
                ) ); ?> 
            </div>
            <div class="right-content-box col-10">
                <section class="post_type-posts">

                    <!-- paged var to create pagination -->
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    <?php $loop = new WP_Query( array
                        ( 'post_type' => 'decision',
                        'posts_per_page' => 6, 
                        'paged' => $paged
                        ) );
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                        <article class="post_type-posts-article">
                            <div class="flexing">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gavel" class="svg-inline--fa fa-gavel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504.971 199.362l-22.627-22.627c-9.373-9.373-24.569-9.373-33.941 0l-5.657 5.657L329.608 69.255l5.657-5.657c9.373-9.373 9.373-24.569 0-33.941L312.638 7.029c-9.373-9.373-24.569-9.373-33.941 0L154.246 131.48c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l5.657-5.657 39.598 39.598-81.04 81.04-5.657-5.657c-12.497-12.497-32.758-12.497-45.255 0L9.373 412.118c-12.497 12.497-12.497 32.758 0 45.255l45.255 45.255c12.497 12.497 32.758 12.497 45.255 0l114.745-114.745c12.497-12.497 12.497-32.758 0-45.255l-5.657-5.657 81.04-81.04 39.598 39.598-5.657 5.657c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l124.451-124.451c9.372-9.372 9.372-24.568 0-33.941z"></path></svg>                        <!-- content -->
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
            
            </div>
        </div>
    </div>


<?php get_footer(); ?>