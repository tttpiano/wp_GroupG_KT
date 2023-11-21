<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>

	<div id="primary" class="content-area">

        <?php
        /**
         * Before Posts hook
        */
        do_action( 'jobscout_before_posts_content' );
        ?>

        <main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
            ?>
            <div class="mt-4" style="position: relative; display: inline-block; margin-top:31px !important">
                <img src="https://thetokyolife.jp/wp-content/uploads/2020/08/Header-Image-Featured-Category.png" alt="PDS Image">
                <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 24px; color: white; font-weight: bold;">PDS NEWS</span>
            </div>

            <h2 class="text-center mt-4">NEWEST BLOG ENTRIES</h2>
            <div class="container">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 8, // Số lượng bài viết muốn hiển thị
                    );
                    $query = new WP_Query($args);
                    /* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

                    // Reset post data
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

        <?php
        /**
         * After Posts hook
         * @hooked jobscout_navigation - 15
        */
        do_action( 'jobscout_after_posts_content' );
        ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
