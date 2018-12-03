<?php /* Template Name: Page Home */ ?>
<?php
/**
 * The default template for displaying pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package The Thinker Lite
 */
get_header(); ?>
<div class="page hfeed site center">
    <div class="main site-main">
        <div class="c-pass">
            <div class="f-center">
                <span class="pass-small red"></span>
                <span class="pass-small purple"></span>
                <span class="pass-small blue"></span>
                <span class="pass-small green"></span>
                <span class="pass-small yellow"></span>
            </div>
        </div>
        <h1 class="page-title">

        </h1>

    </div><!-- #main -->
</div><!-- .page -->
<div class="page hfeed site defaulttemplate">
    <div class="main site-main">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <?php if ( is_active_sidebar( 'home_main_poem' ) ) : ?>
                    <ul id="sidebar">
                        <?php dynamic_sidebar( 'home_main_poem' ); ?>
                    </ul>
                <?php endif; ?>
            </div><!-- #content -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- #main -->
</div><!-- .page -->
<?php get_footer(); ?>
