<?php
/*
Template Name: Chart
 */
?>

<?php get_header(); ?>
    <div class="page-bg-wrap">
        <div class="page-bg" style="background-image:url(<?php
        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
        echo $imgsrc2[0];
        ?>); ">
        </div>
    </div>
    <div class="wrapped">
        <div class="page-wrapper">
            <div class="page-content left">
                <div class="page-main left">
                    <h1><?php the_title(); ?>  </h1>
                    <!--start the loop-->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>     
                    <!--end the loop-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="page-sidebar right">
                    <h3><?php echo get_post_meta($post->ID, 'sidebar_promo', true); ?> </h3>
                    <p><?php echo get_post_meta($post->ID, 'sidebar_promo_sub', true); ?> </p>
                    <a class="cta" href="<?php echo get_post_meta($post->ID, 'call_to_a_link', true); ?>"><?php echo get_post_meta($post->ID, 'call_to_a_title', true); ?> </a>
                    <img src="<?php echo get_post_meta($post->ID, 'upload_image', true); ?>"/>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="below-table-info">
                <h1>Be a FasCat</h1>
                <h2>There are many ways for you to become a FasCat. </h2>
                <h2><span class="bolder">Give us a call today or <a href="#">email us</a></span><br/>
                555.555.1212</h2>
                 <?php wp_nav_menu( array( 'menu_class'  => 'services-list', 'theme_location' => 'chart_nav' ) );   ?>
            </div>
        </div>
    </div>
        
        
<?php get_footer(); ?>
        