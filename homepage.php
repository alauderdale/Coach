<?php
/*
Template Name: Homepage
 */
?>

<?php get_header(); ?>

        <style>
            .fancybox-opened .fancybox-skin{
                box-shadow: none!important;
            }
        </style>


        <div class="home-slider">
            <div id="gallery-1" class="royalSlider rsDefault fwImage col span_4">
<!--            begin slide-->
            <?php
            $fastcatloop = new WP_Query( array( 'post_type' => 'fastcat', 'orderby' => 'date', 'posts_per_page' => -1,
'order' => 'DESC') );
             ?>
             <?php while ( $fastcatloop->have_posts() ) : $fastcatloop->the_post(); ?>
             
                <div class="rsContent">
                    <a class="rsLink fancybox" data-fancybox-group="rider" href="#inline-<?php the_ID(); ?>"></a>
                    <a class="rsImg"  data-rsBigImg="<?php
                    $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                    echo $imgsrc2[0];
                    ?>" href="<?php
                    echo $imgsrc2[0];
                    ?>">
                      <img width="261" height="147" class="rsTmb" src="<?php echo get_post_meta($post->ID, 'upload_image', true); ?>" />
                      <div class="rsABlock">
                          <h1>
                              <?php echo get_post_meta($post->ID, 'title_text', true); ?>
                          </h1>
                          <h2>
                             <?php echo get_post_meta($post->ID, 'sub_text', true); ?>                
                         </h2>
                         <div class="rs-action">
                             <h3>See what <?php the_title(); ?>  says</h3>
                             <div class="bub"></div>
                             <div class="clearfix"></div>
                         </div><!--end rs action-->
                     </div><!--end rs block-->
                    </a><!--end image-->
                    <div class="wrapped">
                        <a href="index.php?pagename=coaching" class="learn-more-link">Learn more about our coaching programs</a>
                    </div>
                    
               </div><!--end rs content-->
               
            <?php endwhile; ?>
<!--              end slide-->
             </div><!--end rs slider-->
        </div> <!--end home slider-->
        <div class="orange-bar"></div>
        <?php while ( $fastcatloop->have_posts() ) : $fastcatloop->the_post(); ?>
            <div  style="width: 960px; display: none;" id="inline-<?php the_ID(); ?>">
                <div class="fc-overlay">
                    <h1><?php the_title(); ?></h1>
                    <h1>
                         I&apos;m a <span class="orange">fascat.</span>
                     </h1>
                     <h2>
                        And you can be too.                  
                    </h2>
                    <p><?php the_content(); ?></p>
                    <a onclick="return false" class="next-slide" href="#">Next Athlete</a>
                    <span class="orange overlay-link-divider">|</span>
                    <a href="index.php?pagename=coaching">Coaching Programs</a>
                </div>
            </div>
        <?php endwhile; ?>
<?php get_footer(); ?>