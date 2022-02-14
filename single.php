<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
global $wp_query;

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<div class="py-16 w-full px-5 lg:px-0 lg:w-10/12 lg:mx-auto ">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="py-3 -mt-2 text-5xl leading-none tracking-wide text-left font-PTSerif text-themeAccent pb-5">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

			</header><!-- .entry-header -->
			<h2 class="text-2xl pb-5 font-bold">
				<?php echo get_the_date('F j, Y'); ?>
			</h2>
			<div class="prose-lg lg:prose-xl">
				<?php
				the_content();

				?>
			</div><!-- .entry-content -->

		</article><!-- #post-<?php the_ID(); ?> -->
	</div>
<?php
endwhile; // End of the loop.
?>
<div class="post-navigation py-8 w-full px-5 lg:px-0 lg:w-10/12 lg:mx-auto flex flex-col lg:flex-row justify-between">
	<div><?php previous_post_link('%link', '<< Previous post', false, ''); ?></div>
	<div><?php next_post_link('%link', 'Next post >>', false, ''); ?></div>
</div>
<?php

get_footer();
