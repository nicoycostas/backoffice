<?php get_header(); ?>

<div class="container-fluid">
<h2 class="post_type-posts-title"><?php echo post_type_archive_title( '', false );?></h2>
    <div class="row">
        <div class="left-sidebar col-2">
            <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'taxonomy' => 'journal_category',
                    'show_count' => false,
                
            ) ); ?> 
        </div>

        <div class="right-content-box col-10">
            <section class="post_type-posts">

                <!-- if category/taxonomy is personal development -->
                <?php  if(is_tax( $taxonomy = 'journal_category',$term = 'personal-development' )): ?>
                    <!-- paged var to create pagination -->
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    <?php 
                    
                        $loop = new WP_Query( array
                            (   'post_type' => 'journal',
                                'posts_per_page' => 6, 
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'journal_category',
                                        'field'    => 'slug',
                                        'terms'    => 'personal-development',
                                    ),
                                'paged' => $paged
                            ) 
                        ));
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                        <article class="post_type-posts-article">
                            <div class="flexing">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" class="svg-inline--fa fa-book fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg>
                                <!-- content -->
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

                <!--END if category/taxonomy is personal development -->
                <?php endif; ?>

 
                <?php  if(is_tax( $taxonomy = 'journal_category',$term = 'career' )): ?>
                    <!-- paged var to create pagination -->
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    <?php 
                    
                        $loop = new WP_Query( array
                            (   'post_type' => 'journal',
                                'posts_per_page' => 6, 
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'journal_category',
                                        'field'    => 'slug',
                                        'terms'    => 'career',
                                    ),
                                'paged' => $paged
                            ) 
                        ));
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                        <article class="post_type-posts-article">
                            <div class="flexing">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" class="svg-inline--fa fa-book fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg>
                                <!-- content -->
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

                <?php endif; ?>

                <?php  if(is_tax( $taxonomy = 'journal_category',$term = 'business' )): ?>
                    <!-- paged var to create pagination -->
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    <?php 
                    
                        $loop = new WP_Query( array
                            (   'post_type' => 'journal',
                                'posts_per_page' => 6, 
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'journal_category',
                                        'field'    => 'slug',
                                        'terms'    => 'business',
                                    ),
                                'paged' => $paged
                            ) 
                        ));
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                        <article class="post_type-posts-article">
                            <div class="flexing">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" class="svg-inline--fa fa-book fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg>
                                <!-- content -->
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

                <?php endif; ?>

                <?php  if(is_tax( $taxonomy = 'journal_category',$term = 'finances' )): ?>
                    <!-- paged var to create pagination -->
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    <?php 
                    
                        $loop = new WP_Query( array
                            (   'post_type' => 'journal',
                                'posts_per_page' => 6, 
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'journal_category',
                                        'field'    => 'slug',
                                        'terms'    => 'finances',
                                    ),
                                'paged' => $paged
                            ) 
                        ));
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                        <article class="post_type-posts-article">
                            <div class="flexing">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" class="svg-inline--fa fa-book fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg>
                                <!-- content -->
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

                <?php endif; ?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>