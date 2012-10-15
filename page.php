<?php
/*
Template Name: Chart
 */
?>

<?php get_header(); ?>

        <div class="wrapped">
        <!--start the loop-->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>     
        <!--end the loop-->
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        
        
<?php get_footer(); ?>
        