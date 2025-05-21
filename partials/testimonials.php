<!--testimonials-->
<?php $count = get_field('testimonial_count');?>
	<?php $query = new WP_Query( [
    'post_type'      => 'testimonials',
    'nopaging'       => false,
    'posts_per_page' => $count
] ); ?>

<div class="testimonials testimonials__background_<?php if(get_field('testimonial_count') == 1) : the_field('testimonial_background'); else : ?>gold<?php endif; ?> testimonial__count_<?php echo $count; ?>">
	<div class="testimonials__content row wrap">
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php if ($count != 1) : ?>
                <div class="xs-col-12 <?php if ($count == 3) : ?>col-md-4 <?php else : ?>col-md-6<?php endif; ?> testimonials__multi">
            <?php endif; ?>
                <h3><?php the_content(); ?></h3>
                <div class="attribution"><?php the_title(); ?></div>
                <?php if ($count != 1) : ?>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>