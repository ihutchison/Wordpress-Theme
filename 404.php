<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Woah, how you doing? I dont think you should be here.', 'underscores' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Doesnt Seem like anything is here, hmmm maybe you should make like hockey and get the puck out of here by searching what you need.', 'underscores' ); ?></p>
					

					<?php
					get_search_form();
					?>
					<img src="wp-content\themes\wordpress-theme\images\HTML-Yeti-404-Page.png" alt="A Yeti 404 Comic" height="300" width="300" align="center">
					<?php
					/* translators: %1$s: smiley */
					$underscores_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'underscores' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$underscores_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
