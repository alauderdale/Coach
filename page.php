
        <!--start the loop-->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>     
        <!--end the loop-->
        <?php endwhile; ?>
        <?php endif; ?>
        