<!--HERO-LANDING-->
<div class="hero__container hero__container_landing">
	<div class="hero__container_inner row">
		<div class="hero__content hero__content_image col-xs-12 row"  style="background-image: url('<?php if( get_field('hero_image') ) : the_field('hero_image');  endif; ?>')">
		<!--svg width="175" height="100%" class="curve_overlay__blue" viewBox="0 0 175 626" fill="none" xmlns="http://www.w3.org/2000/svg">
		<defs>
			<linearGradient id="dark_primary_gradient" x1="0" x2="0" y1="1" y2="0">
				<stop class="dark_primary_gradient__stop-1" offset="0%" />
				<stop class="dark_primary_gradient__stop-2" offset="100%" />
			</linearGradient>
		</defs>
		<style>
			svg {
					filter: drop-shadow(-10px 5px 10px rgb(0 0 0 / 0.4));
				}
		</style>
		<path class="curve_overlay__blue" d="M122.5 0L175 0V626H2C2 626 -18 605.5 69 465C156 324.5 122.5 0 122.5 0Z" fill="url(#dark_primary_gradient)" />
		</svg-->
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