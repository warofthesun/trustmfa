<!--HERO-LARGE-->
<div class="hero__container hero__container_large">
	<div class="hero__container_inner row">
		<div class="hero__content hero__content_image col-xs-12 row"  style="background-image: url('<?php if( get_field('hero_image') ) : the_field('hero_image');  endif; ?>')">
		<div class="hero__content hero__content_text col-xs-12 col-md-2">
			<h1><?php if( get_field('page_title') ) : the_field('page_title');  endif; ?></h1>
		</div>
		<div class="hero__content hero__content_text-angle col-xs-12 col-md-10">
			<?php echo file_get_contents( get_template_directory() . '/library/images/hero_large_gold_angle.svg' ); ?>
		</div>
		</div>
	</div>
	<div class="content_curve__up">
		<?php echo file_get_contents( get_template_directory() . '/library/images/content_curve__up.svg' ); ?>
	</div>
</div>