<!--testimonials-->

<div class="testimonials testimonials__background_<?php the_field('testimonial_background'); ?>">
	<div class="testimonials__content row wrap">
	<?php $count = get_field('testimonial_count');?>
	<?php $query = new WP_Query( [
    'post_type'      => 'testimonials',
    'nopaging'       => false,
    'posts_per_page' => $count
] ); ?>
<?php if ( $query->have_posts() ) : ?>
    
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <h3><?php the_content(); ?></h3>
                    <div class="attribution"><?php the_title(); ?></div>
                <?php endwhile; ?>

           
<?php endif; ?>
		</div>
</div>