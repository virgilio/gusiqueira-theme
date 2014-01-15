<?php
/**
 * The sidebar containing the space for soundcloud widget
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage gusiqueira_theme
 * @since Gu Siqueira 0.0.11
 */

if ( is_active_sidebar( 'form-ep' ) ) : ?>
	<div class="sidebar-form-ep" role="complementary">
		<?php dynamic_sidebar( 'form-ep' ); ?>
	</div><!-- #secondary -->
<?php endif; ?>