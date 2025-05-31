<!--HERO-LANDING-->
<div class="hero__container hero__container_landing">
	<div class="hero__container_inner">
		<div class="hero__content hero__content_image col-xs-12"  style="background-image: url('<?php if( get_field('hero_image') ) : the_field('hero_image');  endif; ?>')">
		<div class="hero__content hero__content_text col-xs-12 col-md-6">
			<div><?php if( get_field('hero_headline') ) : the_field('hero_headline');  endif; ?></div>
			<p><?php if( get_field('hero_paragraph') ) : the_field('hero_paragraph');  endif; ?></p>
			<?php
				// Check rows exists.
					if( have_rows('hero_cta') ): ?>
					<div class="button_pair">
						<?php
						// Loop through rows.
						while( have_rows('hero_cta') ) : the_row();

						$link = get_sub_field('hero_cta_button');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; 

						// End loop.
						endwhile; ?>
					</div>
					<?php // No value.
					else :
						// Do something...
					endif; ?>
		</div>
		<div class="hero__content hero__content_text-angle col-xs-12 col-md-6">
			<?php echo file_get_contents( get_template_directory() . '/library/images/hero_landing_gold_angle.svg' ); ?>
		</div>
		</div>
	</div>
	<div class="content_curve__up">
		<?php echo file_get_contents( get_template_directory() . '/library/images/content_curve__up.svg' ); ?>
	</div>
</div>