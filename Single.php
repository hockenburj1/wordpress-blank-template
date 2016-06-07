<?php get_header(); ?>
    <div class="row">
        <div class="twelve columns">
            <?php if (have_posts()) : ?>          
                <?php while (have_posts()) : the_post(); ?>
                	<?php if ( has_post_thumbnail() ) : ?>
                    	<div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                	<?php endif ?>
                    
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>