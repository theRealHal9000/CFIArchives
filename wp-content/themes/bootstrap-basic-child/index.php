<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>

<?php //get_sidebar('left'); ?>
	<div class="col-md-12 content-area" id="main-column">
		<main id="main" class="site-main headroom" role="main">
				<img class="main-image" src="<?php echo esc_url(home_url()); ?>/wp-content/uploads/2016/02/cfi-archives-logo.jpg" />
				<h2 class="tagline">Insert grand tagline about 25 years of reason, science, secularism, etc.</h3>

				<?php if (have_posts()) { ?> 
				<?php 
				// start the loop
				while (have_posts()) {
					the_post();
					
					/* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part('content-excerpts', get_post_format());
				}// end while
				?>
		<div class="row">
			<div class="col-xs-12">
				<?php
				bootstrapBasicPagination();
				?> 
				<?php } else { ?> 
				<?php get_template_part('no-results', 'index'); ?>
				<?php } // endif; ?> 
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?> 