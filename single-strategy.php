<?php get_header(); ?>
    <?php get_template_part('template-parts/content', 'header'); ?>
    <!-- start loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="post_type-single-section">
            <article class="post_type-single-article container">
                <h1> <?php the_title(); ?></h1>
                
                <h2 style="position: relative; top: 25px;">SWOT Analysis</h2>
                <!-- swot strategy metaboxes-->
                <?php
                   // realistic - relevant goal fields
                   $strengths = get_post_meta( get_the_ID(), 'strenghts', true );
                   $weaknesses  = get_post_meta( get_the_ID(), 'weaknesses', true );
                   $opportunities = get_post_meta( get_the_ID(), 'opportunities', true );
                   $threats = get_post_meta( get_the_ID(), 'threats', true );
                   $complete_strategy = get_post_meta( get_the_ID(), 'complete_strategy', true );
                ?>

                <?php 
                    $strengths_analysis = get_post_meta( get_the_ID(), 'strengths_analysis', true );
                    $weaknesses_analysis  = get_post_meta( get_the_ID(), 'weaknesses_analysis', true );
                    $opportunities_analysis = get_post_meta( get_the_ID(), 'opportunities_analysis', true );
                    $threats_analysis = get_post_meta( get_the_ID(), 'threats_analysis', true );
                    $finalized_strategy = get_post_meta( get_the_ID(), 'finalized_strategy', true );
                ?>



                <!-- swot boxes -->
                <div class="swot">
             
                    <div class="sw">
                        <div class="strengths">
                            <h3>Strenghts</h3>
                            <?php echo  $strengths ; ?>

                           
                        </div>

                        <div class="weaknesses">
                            <h3>Weaknesses</h3>
                            <?php echo   $weaknesses ; ?>
                        
                        </div>
                    
                    </div>

                    <div class="ot">
                        <div class="opportunities">
                            <h3>Opportunities</h3>
                            <?php echo  $opportunities ; ?>
                        
                        </div>

                        <div class="threats">
                            <h3>Threats</h3>
                            <?php echo  $threats ; ?>
                        </div>
                
                    
                    </div>
                
                </div>

                <!-- strategy details and analysis -->
                <div class="post_type-single-article-content">
                    <h2>Strategy Details & Analysis</h3>
                    <?php if ($strengths_analysis==""): ?>            
                    <?php else: ?>
                        <h3>Strenghts Analysis</h3>
                        <p><?php echo   $strengths_analysis ; ?></p>
                    <?php endif ?>

                    <?php if ($weaknesses_analysis==""): ?>            
                    <?php else: ?>
                        <h3>Weaknesses Analysis</h3>
                        <p><?php echo   $weaknesses_analysis ; ?></p>
                    <?php endif ?>

                    <?php if ($opportunities_analysis==""): ?>            
                    <?php else: ?>
                        <h3>Opportunities Analysis</h3>
                        <p><?php echo   $opportunities_analysis ; ?></p>
                    <?php endif ?>

                    <?php if ($threats_analysis ==""): ?>            
                    <?php else: ?>
                        <h3>Threats Analysis</h3>
                        <p><?php echo   $threats_analysis ; ?></p>
                    <?php endif ?>

                    <?php if ($finalized_strategy==""): ?>            
                    <?php else: ?>
                        <h3>Finalized Strategy</h3>
                        <p><?php echo  $finalized_strategy ; ?></p>
                    <?php endif ?>


                    
                    
                    
                   
                </div>
                
            </article>
        </section>

    <?php endwhile;  ?>
    <?php endif; ?>
    <!-- end loop -->


    <?php get_template_part('template-parts/content', 'footer'); ?>
<?php get_footer(); ?>