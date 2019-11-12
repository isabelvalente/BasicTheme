<?php
/*
 * Template name: Normal Post
 * Template Post Type: Post
 */

get_header();
?>

<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			 <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
			 <?php echo get_the_post_video( $post_id, $size ); ?>
				<div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;">
					<header>
						<div class="overlay">
							<div class="showcase-text">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</div>
						</div>
					</header>
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
						}
					endwhile; // End of the loop.
				?>

			<?php get_footer(); ?>
		</article>
	</main><!-- #main -->
</section><!-- #primary -->
