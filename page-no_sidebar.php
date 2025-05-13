<?php
/*
 Template Name: No Sidebar
*/
?>
<!--page-no_sidebar-->
<?php get_header(); ?>
<div class="hero__container">
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
		</div>
		<div class="hero__content hero__content_text-angle col-xs-12 col-md-6">
			<?php echo file_get_contents( get_template_directory() . '/library/images/hero_home_gold_angle.svg' ); ?>
		</div>
		</div>
	</div>
</div>
			<div id="content">

				<div id="inner-content" class="wrap  row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

									<p class="byline vcard">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'trustmfa_theme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>


								</header>

								<section class="entry-content " itemprop="articleBody">

									<?php	the_content(); ?>

								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'trustmfa_theme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry ">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'trustmfa_theme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'trustmfa_theme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'Error message', 'trustmfa_theme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
