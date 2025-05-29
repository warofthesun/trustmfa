<?php if(get_field('include_footer_testimonials')): include 'partials/testimonials/testimonials-footer.php'; endif; ?>
<div class="footer__tagline"><?php the_field('footer_tagline', 'option'); ?> </div>
<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	
<div class="footer__curve">
	<div class="footer__logo wrap"><?php echo file_get_contents( get_template_directory() . '/library/images/mfa_logo_dark.svg' ); ?></div>
</div>
				<div id="inner-footer" class="wrap row">
					
					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links ',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'trustmfa_theme' ),   // nav name
    					'menu_class' => 'nav footer-nav ',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'starter_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<!--p class="source-org copyright">&copy; <?php //echo date('Y'); ?> <?php //bloginfo( 'name' ); ?>.</p-->

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/starter.php ?>
		<?php wp_footer(); ?>

		

	</body>

</html> <!-- end of site. what a ride! -->
