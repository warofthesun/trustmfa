<!--forms-sidebar-->
<?php $query = new WP_Query( [
    'post_type'      => 'form',
    'nopaging'       => true,
] ); ?>

<?php if ( $query->have_posts() ) : ?>
    
<div class="sidebar forms forms__sidebar col-xs-12 col-sm-4" role="complementary">
    
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="form__item">
                        <a href="<?php the_permalink(); ?>" class="form__link"><h4><?php the_title(); ?></h4></a>
                        <?php //if(get_field('form_description')) : ?><!--div class="form__description"><?php //the_field('form_description');?></div--><?php //endif; ?>
                        </div>

                <?php endwhile; ?>

</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>