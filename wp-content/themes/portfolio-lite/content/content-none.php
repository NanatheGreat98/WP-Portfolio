<?php
/**
 * This template is used when no content is present.
 *
 * @package Portfolio
 * @since Portfolio Lite 1.0
 */

?>

<!-- BEGIN .no-results -->
<div class="no-results">

	<h1 class="headline"><?php esc_html_e( 'No Results Found', 'portfolio-lite' ); ?></h1>
	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching will help.', 'portfolio-lite' ); ?></p>
	<div class="no-result-search"><?php get_search_form(); ?></div>

<!-- END .no-results -->
</div>
