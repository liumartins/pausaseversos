<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Thinker Lite
 */
?>
	<article id="post-0" class="post no-results not-found">
		<?php if ( ! is_search() ) : ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'the-thinker-lite' ); ?></h1>
		</header>
		<?php endif ; ?>
		<div class="entry-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'the-thinker-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'the-thinker-lite' ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'the-thinker-lite' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 .post .no-results .not-found -->