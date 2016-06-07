<?php get_header(); ?>
<section class="row">
    <div class="twelve columns">
        <?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail');
				}
				the_excerpt(); 
				?>
			<?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>